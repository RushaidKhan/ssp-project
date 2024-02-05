<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use Illuminate\Http\Request as HttpRequest;

class requestController extends Controller
{
    public function showRequestForm(Venue $venue)
    {
        return view('request.requestForm', compact('venue'));
    }
    public function submitRequest(HttpRequest $request, Venue $venue)
    {
        // Validate the request data
        $request->validate([
            'requested_date' => 'required|date',
        ]);

        // Create a new request record
        $venue->requests()->create([
            'customer_id' => auth()->id(),
            'requested_date' => $request->input('requested_date'),
        ]);

        return redirect()->route('venue.show', $venue);
    }
}
