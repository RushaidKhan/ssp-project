@extends('layout')

@section('content')
@include('components.navbar')
    <h1>venue dash</h1>

    <a href="{{route('venue.posting')}}">post a venue listing</a>
@endsection