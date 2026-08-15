@extends('layouts.app')

@section('title', 'Flavors & Services | Mellovia Creamery')

@section('content')


<section class="services-hero-banner">
    <span class="section-tagline">Our Menu</span>
    <h1>Our Flavors & Offerings</h1>
    <p class="services-subtext">
        From familiar favorites to exciting creations,
        Mellovia Creamery has a flavor for every kind of craving.
    </p>
</section>


<section class="services-grid-section">
    <div class="services-grid">
        
        <!-- Flavor 1 -->
        <div class="service-card">
            <div class="service-img-holder">
                <img src="{{ asset('images/strawberry3.png') }}" alt="Strawberry Dream">
            </div>
            <h3>🍓 Strawberry Dream</h3>
            <p>
                Creamy strawberry ice cream with a sweet and refreshing
                fruity flavor.
            </p>
        </div>

        <!-- Flavor 2 -->
        <div class="service-card">
            <div class="service-img-holder">
                <img src="{{ asset('images/chocolate1.png') }}" alt="Midnight Chocolate">
            </div>
            <h3>🍫 Midnight Chocolate</h3>
            <p>
                Rich chocolate ice cream with a smooth and indulgent taste.
            </p>
        </div>

        <!-- Flavor 3 -->
        <div class="service-card">
            <div class="service-img-holder">
                <img src="{{ asset('images/matchas.png') }}" alt="Matcha Bliss">
            </div>
            <h3>🍵 Matcha Bliss</h3>
            <p>
                Smooth matcha ice cream with a refreshing and lightly
                earthy flavor.
            </p>
        </div>

        <!-- Flavor 4 -->
        <div class="service-card">
            <div class="service-img-holder">
                <img src="{{ asset('images/cookiesandcream.png') }}" alt="Cookies & Cream">
            </div>
            <h3>🍪 Cookies & Cream</h3>
            <p>
                Creamy vanilla ice cream loaded with crunchy chocolate
                cookie pieces.
            </p>
        </div>

        <!-- Flavor 5 -->
        <div class="service-card">
            <div class="service-img-holder">
                <img src="{{ asset('images/mango.png') }}" alt="Mango Sunshine">
            </div>
            <h3>🥭 Mango Sunshine</h3>
            <p>
                Sweet and refreshing mango ice cream inspired by the
                tropical flavors of the Philippines.
            </p>
        </div>

        <!-- Flavor 6 -->
        <div class="service-card">
            <div class="service-img-holder">
                <img src="{{ asset('images/vanilla2.png') }}" alt="Vanilla Cloud">
            </div>
            <h3>🍦 Vanilla Cloud</h3>
            <p>
                A smooth and creamy classic vanilla flavor that never
                goes out of style.
            </p>
        </div>

    </div>
</section>

<!-- CTA / Visit Section -->
<section class="cta-banner">
    <h2>Make Your Moment Sweeter</h2>
    <p>
        Whether you're treating yourself or sharing with friends,
        there's always room for another scoop.
    </p>
    <a href="{{ url('/contact') }}" class="cta-button">Visit Us</a>
</section>

@endsection