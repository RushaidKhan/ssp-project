<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\VenueController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route for welcome page
Route::get('/', function () {return view('welcome');})->name('landing');

//route for showing individual products...
Route::get('/venue/view', function () {return view('venue.venueView');})->name('venue.view');

//route for store page
Route::get('/stored-details', [VenueController::class, 'showStoredDetails'])->name('stored-details');
//single product page (not finalised )
Route::get('/venuelisting', function () { return view('venue.venuePostig');})->name('venue.listing');


// all routes related to authentication

Route::controller(authController::class)->group(function () {
    //register page route
    Route::get('/register', 'register')->name('register');
    //storing a new user
    Route::post('/store', 'store')->name('store');
    //login page route
    Route::get('/login', 'login')->name('login');
    //route for authenticating a user trying to log in
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    //redirect to correct dashboard
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    //route for logout function
    Route::post('/logout', 'logout')->name('logout');
});

// all routes related to customer (only accessible by the customer)
Route::middleware(['auth', 'user-access:customer'])->group(function () {
    //route for customer dashboard
    Route::get('/home', [homeController::class, 'index'])->name('home');
});

// all routes related to venue (only accessible by the venue)

Route::middleware(['auth', 'user-access:venue'])->group(function () {
    //route for venue dashboard
    Route::get('/venue/home', [homeController::class, 'venueHome'])->name('venue.home');
    //route for venue posting page
    route::get('/venue/posting', [VenueController::class, 'index'])->name('venue.posting');
    //route for store newly added venue
    Route::post('/venues', [VenueController::class, 'store'])->name('venues.store');
});

// all routes related to catering (only accessible by the catering)

Route::middleware(['auth', 'user-access:catering'])->group(function () {
    //route for catering dashboard
    Route::get('/catering/home', [homeController::class, 'cateringHome'])->name('catering.home');
});

// all routes related to admin (only accessible by the admin)

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    //route for admin dashboard
    Route::get('/admin/home', [homeController::class, 'adminHome'])->name('admin.home');
});

