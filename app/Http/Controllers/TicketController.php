<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeatAllocation;

class TicketController extends Controller
{
    public function showAvailableSeats()
    {
        
        return view('tickets.available_seats');
    }

    public function purchase(Request $request)
    {
        
        $seatAllocation = SeatAllocation::create([
            'trip_id' => $request->input('trip_id'),
            'user_id' => auth()->user()->id, 
            'seat_number' => $request->input('seat_number'),
            
        ]);

        // Redirect or do something else
    }
}

