@extends('layout')
@section('content')
@include('components.navbar')
    <div class="vvcontainer">
        <br>
        <div class="vvimageholder">
            <div class="carousel">
                <div class="carousel-container">
                    <div class="carousel-slide">
                        <img src="{{ asset('sample/one.jpg') }}" alt="Slide 1">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('sample/two.jpg') }}" alt="Slide 2">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('sample/three.jpg') }}" alt="Slide 3">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('sample/four.jpeg') }}" alt="Slide 3">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('sample/five.jpeg') }}" alt="Slide 3">
                    </div>
                </div>
            </div>
        </div>
        <div class="vvdetails">
            <h1>{{ $venue->name }}</h1>
            <p>description</p>
            <div class="vvsubdetails">
                <h2>location</h2>
                <h2>max guest</h2>
                <h2>price</h2>
            </div>
        </div>
    </div>
@endsection