

@extends('layouts.app')

@section('content')
    <h2>Available Seats</h2>

    <p>Select your desired seat:</p>

    <form method="POST" action="{{ url('/purchase-ticket') }}">
        @csrf

        <label for="trip_id">Select Trip:</label>
        <select name="trip_id" required>
            
            @foreach($trips as $trip)
                <option value="{{ $trip->id }}">{{ $trip->date }}</option>
            @endforeach
        </select>

        <label for="seat_number">Select Seat Number:</label>
        <input type="number" name="seat_number" min="1" max="36" required>

        

        <button type="submit">Purchase Ticket</button>
    </form>
@endsection
