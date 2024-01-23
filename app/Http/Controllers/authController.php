<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class authController extends Controller
{
    //function to show return the registration page

    public function register()
    {
        return view('auth.register');
    }

    //function to store the data in the db and make $credentials for login

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'user_type' => 'required|string|max:250|in:customer,venue,catering',
        ]);
    
        // Creating a user in the database using the obtained data
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_type' => $request->user_type,
        ]);
    
        // Making the credentials with the only required fields for login
        $credentials = $request->only('email', 'password');
        
        // Adding auth for login session
        Auth::attempt($credentials);
    
        // Making a login session
        $request->session()->regenerate();
    
        // Redirecting to the dashboard as the logged-in user
        return redirect()->route('dashboard');
    }
    
    //function to return the login page for the user to login in
    public function login()
    {
        return view('auth.login');
    }

    //function for authenticating the user when they try to login

    public function authenticate(Request $request)
    {
        //compare the give data with the db to see if they are valid
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if statement to handle situation
        if (Auth::attempt($credentials)) {
            //if yes then redirect to dashboard with success message
            $request->session()->regenerate();
            //            return redirect()->route('dashboard')->withSuccess('logged in successfully');
            $redirectTo = RouteServiceProvider::HOME;
        }
        //if not success then return back with errors saying login failed
        return back()
            ->withErrors([
                'email' => 'whoops check your email and password please',
            ])
            ->onlyInput('email');
    }

    //function to handle dashboard access
    public function dashboard()
    {
        if (Auth::check()) {
            //if user is authenticated the user is give the dashboard view
            if (auth()->user()->user_type == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->user_type == 'customer') {
                return redirect()->route('dashboard.customer');
            } elseif (auth()->user()->user_type == 'catering') {
                return redirect()->route('dashboard.catering');
            } elseif (auth()->user()->user_type == 'venue') {
                return redirect()->route('dashboard.venue');
            } else {
                return redirect()
                    ->route('login')
                    ->withErrors('error', 'provided credentials are wrong');
            }
        }
        //if the user is not authenticated the the user is redirected to the login page with errors
        return redirect()
            ->route('login')
            ->withErrors([
                'email' => 'please login for dashboard access',
            ]);
    }

    //function to handle the user logging out
    public function logout(Request $request)
    {
        //predefined laravel function for logging out
        Auth::logout();
        //removing the validation of the user when they logout
        $request->session()->invalidate();
        //remove the session and regenerating new token
        $request->session()->regenerateToken();
        //redirecting then to the login page with success mesaage
        return redirect()
            ->route('login')
            ->withSuccess('Logged out !');
    }
}
