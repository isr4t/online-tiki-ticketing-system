<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function create()
    {
        
        return view('trips.create');
    }

    public function store(Request $request)
    {
    
        $trip = Trip::create([
            'date' => $request->input('date'),
            
        ]);

        
    }
}
