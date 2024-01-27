@extends('layout')

@section('content')
    @include('components.navbar')
    <div>
        <form action="{{ route('venues.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="name" placeholder="name"><br>
            <input type="text" name="description" id="description" placeholder="description"><br>
            <input type="text" name="location" id="location" placeholder="location"><br>
            <input type="text" name="max_guest" id="max_guest" placeholder="max guest"><br>
            <input type="text" name="price" id="price" placeholder="price"><br>
            <input type="file" name="images[]" id="images" multiple><br>
            <input type="submit" value="post">
        </form>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
