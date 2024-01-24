<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class homeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //for customer
    public function index(): View
    {
        return view('dashboard.customer');
    }
    //for admin
    public function adminHome(): View
    {
        return view('dashboard.admin');
    }
    //for venue
    public function venueHome(): View
    {
        return view('dashboard.venue');
    }
    //for catering
    public function cateringHome(): View
    {
        return view('dashboard.catering');
    }
}
