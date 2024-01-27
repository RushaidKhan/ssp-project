<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class VenueController extends Controller
{
    public function index()
    {
        return view('venue.venuePosting');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'max_guest' => 'required|integer',
            'price' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);
    
        $venueData = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'max_guest' => $request->input('max_guest'),
            'price' => $request->input('price'),
            'user_id' => auth()->id(), // Assuming the user is logged in
        ];
    
        $venue = Venue::create($venueData);
    
        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imageName = 'image_' . ($key + 1) . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('venue_images'), $imageName);
                $venue->setAttribute('image' . ($key + 1), 'venue_images/' . $imageName);
            }
    
            $venue->save();
        }
    
        return redirect()->back()->with('success', 'Venue posted successfully.');
    }
    
    public function showStoredDetails()
    {
        $venues = Venue::where('user_id', auth()->id())->get();

        return view('store', compact('venues'));
    }
    
}
