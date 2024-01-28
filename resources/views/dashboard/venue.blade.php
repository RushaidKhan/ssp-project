@extends('layout')

@section('content')
@include('components.navbar')
    <h1>Welcome, {{ auth()->user()->name}} !</h1>
    <div class="dashboardListHeader">
        <a href="{{route('venue.posting')}}">post a venue listing</a>
    </div>
    <br><br>
    <div class="dashboardList">
        @forelse($venues as $venue)
            @include('components.product')
        @empty
            <p>No listings....</p>
        @endforelse
    </div>
@endsection