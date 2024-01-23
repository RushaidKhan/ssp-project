@extends('layout')

@section('content')
    <div class="registerWrapper">
        <div class="registerFormHolder">
            <a href="{{ route('home') }}">
                <h1>Sovereign|<span>Settings</span></h1>
            </a>
            <form action="{{ route('store') }}" method="post">
                @method('POST')
                @csrf
                <h1>Register</h1>
                <input type="text" placeholder="name" id="name" name="name"><br>
                <input type="text" placeholder="email" id="email" name="email"><br>
                <input type="password" placeholder="password" id="password" name="password"><br>
                <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password"
                    name="password_confirmation"><br>
                <select aria-label="Choose profession" id="user_type" name="user_type">
                    <option selected>Select</option>
                    <option value="customer">Customer</option>
                    <option value="venue">Venue</option>
                    <option value="catering">Catering</option>
                </select>
                <div style="display: flex; justify-content:space-between">
                    <input type="submit" value="Register">
                    <a href="{{ route('login') }}">already a member?</a>
                </div>
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
        <div class="registerAbstract">
            <div>
                <h1>Join the Sovereign family</h1>
                <img src="{{ asset('media/register.gif') }}">
            </div>
        </div>
    </div>
@endsection
