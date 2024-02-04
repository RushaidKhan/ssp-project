@extends('layout')
@section('content')
    @include('components.navbar')
    <div class="venueViewContainer">
        <div class="VenueViewImageHolder">
            <div class="ImageLayer1">
                    @if (!empty($venue->image1))
                        <img src="{{ asset($venue->image1) }}" alt="Venue Image 1">
                      @endif
                    @if (!empty($venue->image2))
                        <img src="{{ asset($venue->image2) }}" alt="Venue Image 1">
                    @endif
                    @if (!empty($venue->image3))
                        <img src="{{ asset($venue->image3) }}" alt="Venue Image 1">
                    @endif
            </div>
            <div class="ImageLayer2">
                @if (!empty($venue->image4))
                    <img src="{{ asset($venue->image4) }}" alt="Venue Image 1">
                @endif
                    @if (!empty($venue->image5))
                        <img src="{{ asset($venue->image5) }}" alt="Venue Image 1">
                    @endif
            </div>
        </div>
        <div class="VenueVenueDetailHolder">
            <h1>{{ $venue->name }}</h1>
            <p>{{ $venue->description }}</p>
            <h2>Location: <span>{{ $venue->location }}</span></h2>
            <h2>Max Guest: <span>{{ number_format($venue->max_guest) }} People</span></h2>
            <h2>Price: <span>$ {{ number_format($venue->price) }} per night</span></h2>
        </div>
    </div>
@endsection
