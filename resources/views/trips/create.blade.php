

@extends('layouts.app')

@section('content')
    <h2>Create a New Trip</h2>

    <form method="POST" action="{{ url('/store-trip') }}">
        @csrf

        <label for="date">Date:</label>
        <input type="date" name="date" required>

        

        <button type="submit">Create Trip</button>
    </form>
@endsection
