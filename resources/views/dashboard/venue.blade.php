@extends('layout')

@section('content')
    @include('components.navbar')
    <div class="VenueWrapper">
        @include('components.AnalyticsCard')
        <br>
        <div class="dashboardListHeader">
            <a href="{{ route('venue.posting') }}">post a venue listing</a>
        </div>
        <br><br>
        <div class="dashboardList">
            <h2>Venues | Total Venues: {{ Auth()->user()->venues()->count() }}</h2>
            @forelse ($venues as $venue)
                @include('components.product')
            @empty
                <p>No listings....</p>
            @endforelse
        </div>
    </div>
@endsection
