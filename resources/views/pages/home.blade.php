@extends('layouts.app')

@section('title', 'Home | Mellovia Creamery')

@section('content')

    
    <section class="hero">
    <div class="hero-content">
        <h1>Delicious Ice Cream Made With Love</h1>
        <p>
            Discover our creamy and delicious ice cream flavors,
            made to bring sweetness to every moment.
        </p>

        <a href="/services">Explore Our Flavors</a>
    </div>

        <div class="hero-image">
            <img src="{{ asset('images/matcha1.png') }}" alt="Matcha Ice Cream">
        </div>
    </section>

    
<section class="intro-section">
    <span class="section-tagline">Our Story</span>
    <h2 class="section-heading">Made for Sweet Moments</h2>

    <div class="intro-text-container">
        <p>
            Mellovia Creamery is a modern ice cream shop offering
            handcrafted flavors made for families, friends, and
            anyone looking for a delicious treat.
        </p>

        <p>
            From classic favorites to exciting new creations,
            we believe every scoop should be a moment worth enjoying.
        </p>
    </div>
</section>

<!-- Featured Flavors Section -->
<section class="featured-section">
    <span class="section-tagline">Popular Picks</span>
    <h2 class="section-heading">Our Favorites</h2>

    <div class="flavor-cards-grid">
    <div class="flavor-card">
        <div class="card-img-holder">
            <img src="{{ asset('images/strawberry3.png') }}" alt="Strawberry Dream">
        </div>
        <h3>🍓 Strawberry Dream</h3>
        <p>Creamy strawberry ice cream with a sweet and refreshing fruity flavor.</p>
    </div>

    <div class="flavor-card">
        <div class="card-img-holder">
            <img src="{{ asset('images/vanilla2.png') }}" alt="Midnight Chocolate">
        </div>
        <h3>🍦 Vanilla Bean</h3>
        <p>Classic, smooth, and rich vanilla ice cream made with real vanilla bean..</p>
    </div>

    <div class="flavor-card">
        <div class="card-img-holder">
            <img src="{{ asset('images/matchas.png') }}" alt="Matcha Bliss">
        </div>
        <h3>🍵 Matcha Bliss</h3>
        <p>Smooth matcha ice cream with a refreshing and slightly earthy flavor.</p>
        </div>
</section>

<!-- Call to Action Section -->
<section class="cta-banner">
    <h2>What's Your Next Favorite Flavor?</h2>

    <p>
        Discover our delicious selection and find the scoop
        that makes your day a little sweeter.
    </p>

    <a href="{{ url('/services') }}" class="cta-button">View Our Flavors</a>
</section>

@endsection