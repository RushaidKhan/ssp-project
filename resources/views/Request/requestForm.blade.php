@extends('layout')
@section('content')
    @include('components.navbar')
    <br>
    <div class="requestFormWrapper">
        <form action="{{ route('venues.submit-request', $venue) }}" method="post">
            @csrf
            <label for="requested_date">Choose a Date:</label><br>
            <input type="date" id="requested_date" name="requested_date" required><br>
            <button type="submit">Make a Request</button>
        </form>
    </div>
@endsection

