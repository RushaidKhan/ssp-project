@extends('layout')

@section('content')
@include('components.navbar')
<br>
<div class="CustomerDashboardWrapper">
    @include('components.AnalyticsCard')
    <br>
    <div class="CustomerDashboardListWrapper">
        <h2>Requests:</h2>
        @foreach($userRequests as $request)
            @include('components.ReqCard')
        @endforeach
        <h2>Bookings:</h2>
{{--        @include('components.ReqCard')--}}
        <h2>History:</h2>
{{--        @include('components.ReqCard')--}}
    </div>
</div>
@endsection
