@extends('layout')

@section('content')
    <div class="registerWrapper">
        <div class="registerFormHolder">
            <a href="{{route('home')}}">
                <h1>Sovereign|<span>Settings</span></h1>
            </a>
            <form action="{{route('storeRegister')}}">
                @method('POST')
                @csrf
                <h1>Register</h1>
                <input type="text" placeholder="name" id="name"><br>
                <input type="text" placeholder="email" id="email"><br>
                <input type="password" placeholder="password" id="password"><br>
                <input type="password" placeholder="confirm password"><br>
                <select aria-label="Choose profession" id="user_type" name="user_type">
                    <option selected>Select</option>
                    <option value="customer">Customer</option>
                    <option value="venue">Venue</option>
                    <option value="catering">Catering</option>
                </select>
                <div style="display: flex; justify-content:space-between">
                    <input type="submit" value="Register">
                    <a href="{{route('login')}}">already a member?</a>
                </div>
            </form>
        </div>
        <div class="registerAbstract">
            <div>
                <h1>Join the Sovereign family</h1>
                <img src="{{asset('media/register.gif')}}">
            </div>
        </div>
    </div>
@endsection