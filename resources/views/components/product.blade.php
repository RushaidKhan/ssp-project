<div class="product">
    @if (!empty($venue->image1))
        <img src="{{ asset($venue->image1) }}" alt="Venue Image 1">
    @else
        <img src="{{ asset('media/store.jpg') }}" alt="Default Image">
    @endif
    <div class="productDetails">
        <h1>{{ $venue->name }}</h1>
        <div class="productSubDetails">
            <h2>{{ $venue->location }}</h2>
            <h2>Max guest: <span>{{ number_format($venue->max_guest) }}</span></h2>
        </div>
    </div>
    <div class="productPrice">
        <h2>Price: <span>{{ number_format($venue->price) }} LKR per night</span></h2>
        <div class="productA">
                <a href="{{ route('venue.show', ['venue' => $venue]) }}" class="detailsA">Details</a>
            <a href="#" class="wishlistA">Wishlist</a>
        </div>
    </div>
</div>
