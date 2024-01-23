@extends('layout')

@section('content')
    <div class="registerWrapper">
        <div class="registerAbstract">
            <div>
                <h1>Welcome Back</h1>
                <img src="{{asset('media/login.gif')}}">
            </div>
        </div>
        <div class="registerFormHolder">
            <a href="{{route('home')}}">
                <h1>Sovereign|<span>Settings</span></h1>
            </a>
            <form action="">
                <h1>login</h1>
                <input type="text" placeholder="email"><br>
                <input type="password" placeholder="password"><br>
                <div style="display: flex; justify-content:space-between">
                    <input type="submit" value="Register">
                    <a href="{{route('register')}}">New here?</a>
                </div>
            </form>
        </div>
    </div>
@endsection