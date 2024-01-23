<div>
    <nav>
        <div>
            <a href="#">Home</a>
            <a href="#">Store</a>
            <a href="#">Blog</a>
        </div>
        <a href="{{route('home')}}" class="mainNav">
            <h1>Sovereign|<span>Settings</span></h1>
        </a>
        <div>
            @guest
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Register</a>
            @else
            <a href="#">User</a>    
            @endguest
        </div>
    </nav>
</div>