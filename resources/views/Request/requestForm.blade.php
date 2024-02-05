@extends('layout')
@section('content')
    @include('components.navbar')
    <form action="{{ route('venues.submit-request', $venue) }}" method="post">
        @csrf
        <label for="requested_date">Choose a Date:</label>
        <input type="date" id="requested_date" name="requested_date" required>
        <button type="submit">Submit Request</button>
    </form>
@endsection

