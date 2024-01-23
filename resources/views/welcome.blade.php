@extends('layout')

@section('content')
@include('components.navbar')
<div class="welcomeOne">
    <div>
        <h1>Welcome to <span>Sovereign Settings</span> - Your Premier Event Management Platform!</h1>
        <p>Sovereign Settings is your one-stop destination for seamless event planning, venue booking, and exquisite food catering. Our platform is designed to simplify the entire event management process, ensuring your special occasions are unforgettable and stress-free.</p>
    </div>
    <img src="{{asset('media/home.gif')}}" alt="">
</div>
<div class="welcomeTwo">
    <h1>what we offer</h1>
    <div style="display: flex">
        <div>
            <div class="offerContent">
                <h2>Venue Variety</h2>
                <p>Explore a diverse range of venues, from elegant ballrooms to picturesque outdoor spaces. Whether you're hosting a corporate event, wedding, or social gathering, Sovereign Settings has the perfect venue for every occasion.</p>
            </div>
            <div class="offerContent">
                <h2>Culinary Excellence</h2>
                <p>Elevate your event with our exceptional catering services. Our curated list of catering partners offers a wide array of culinary delights to suit every taste and dietary preference. From gourmet dishes to delightful desserts, we ensure a feast that delights the senses.</p>
            </div>
        </div>
        <div>
            <div class="offerContent">
                <h2>Seemless Booking</h2>
                <p>Booking your dream venue and catering has never been easier. Our secure and efficient booking system allows you to reserve your chosen space and catering services with just a few clicks. Say goodbye to the hassle of coordinating multiple vendors – Sovereign Settings streamlines the process for you.</p>
            </div>
            <div class="offerContent">
                <h2>Personalized Planning</h2>
                <p>Tailor your event to perfection with our intuitive planning tools. Easily customize your venue setup, select catering menus, and manage RSVPs, all within our user-friendly interface. Our goal is to empower you to create an event that reflects your unique style and vision.</p>
            </div>
        </div>
    </div>
</div>
@endsection