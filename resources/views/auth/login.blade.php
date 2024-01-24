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
            <a href="{{route('landing')}}">
                <h1>Sovereign|<span>Settings</span></h1>
            </a>
            <form action="{{route('authenticate')}}" method="post">
                @csrf
                <h1>login</h1>
                <input type="text" placeholder="email" name="email"><br>
                <input type="password" placeholder="password" name="password"><br>
                <div style="display: flex; justify-content:space-between">
                    <input type="submit" value="Register">
                    <a href="{{route('register')}}">New here?</a>
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
    </div>
@endsection