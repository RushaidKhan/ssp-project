@extends('layout')

@section('content')
    @include('components.navbar')
    <div>
        <form action="#">
            <input type="text" name="name" id="name" placeholder="name"><br>
            <input type="text" name="description" id="description" placeholder="description"><br>
            <input type="text" name="location" id="location" placeholder="location"><br>
            <input type="text" name="max_guest" id="max_guest" placeholder="max guest"><br>
            <input type="text" name="price" id="price" placeholder="price"><br>
            <input type="file" name="images" id="images"><br>
            <input type="submit" value="post">
        </form>
    </div>
@endsection
