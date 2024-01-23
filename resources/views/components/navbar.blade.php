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
            <a class="dropdown-item" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            <a href="{{route('logout')}}">{{Auth::user()->name}}</a>    
            @endguest
        </div>
    </nav>
</div>