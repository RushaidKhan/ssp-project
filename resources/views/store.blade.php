@extends('layout')

@section('content')
    @include('components.navbar')
    <div class="storeWrapper">
        <section class="storeHeader">
            <div>
            </div>
            <img src="{{ asset('media/store.jpg') }}">
            <h1 class="centered">Explore our distinguished selection of opulent wedding venues and gourmet catering services.</h1>
        </section>
        <br>
        <section class="productsHolder">

        </section>
    </div>
@endsection
