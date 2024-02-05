<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Venue;

class homeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //for customer
    public function index(): View
    {
        $userRequests = auth()->user()->requests;

        return view('dashboard.customer', compact('userRequests'));
    }
    //for admin
    public function adminHome(): View
    {
        return view('dashboard.admin');
    }
    //for venue
    public function venueHome(): View
    {
        $venues = Venue::where('user_id', auth()->id())->get();
        $userRequests = auth()->user()->requests;

        return view('dashboard.venue',compact('venues'), compact('userRequests'));
    }
    //for catering
    public function cateringHome(): View
    {
        return view('dashboard.catering');
    }
}
