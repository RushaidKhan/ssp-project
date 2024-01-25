@extends('layout')

@section('content')
@include('components.navbar')
<br>
<div class="customerDashboardWrapper">
    <div class="customerTopSection">
        <div class="customerProfileHolder">
            <img src="{{asset('svg/profile.svg')}}">
            <div>
                <h1>Name: {{Auth()->user()->name}}</h1>
                <h2>Age: died</h2>
                <h2>member since: 25th Febraury 2013</h2>
            </div>
        </div>
        <div class="customerprofileButton">
            <div><a href="#">Orders</a></div>
            <div><a href="#">Favourties</a></div>
            <div><a href="#">Notification</a></div>
        </div>
    </div>
</div>
@endsection