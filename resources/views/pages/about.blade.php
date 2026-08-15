@extends('layouts.app')

@section('title', 'About Us | Mellovia Creamery')

@section('content')


<section class="about-hero-banner">
    <span class="section-tagline">About Us</span>
    <h1>Mellovia Creamery</h1>
    <p class="about-subtext">
        A modern ice cream shop created to make everyday moments a little sweeter.
    </p>
</section>


<section class="about-story-section">
    <div class="story-card">
        <h2 class="about-heading">Our Story</h2>
        <p>
            Mellovia Creamery started with a simple idea: create
            delicious ice cream that brings people together.
            What began as a small passion for creating unique
            flavors grew into a creamery dedicated to serving
            memorable sweet treats.
        </p>
        <p>
            Today, Mellovia continues to create flavors that are
            perfect for families, friends, celebrations, and
            simple moments of happiness.
        </p>
    </div>
</section>

<!-- Mission & Vision 2-Column Grid -->
<section class="mission-vision-container">
    <div class="mv-card">
        <div class="mv-icon">🎯</div>
        <h2>Our Mission</h2>
        <p>
            Our mission is to create delicious and enjoyable ice cream
            experiences using carefully crafted flavors and friendly service.
        </p>
    </div>

    <div class="mv-card">
        <div class="mv-icon">🌟</div>
        <h2>Our Vision</h2>
        <p>
            Our vision is to become a favorite local destination for
            people looking for quality ice cream and memorable sweet moments.
        </p>
    </div>
</section>

<!-- Our Values Grid -->
<section class="values-section">
    <span class="section-tagline">Guiding Principles</span>
    <h2 class="about-heading">Our Values</h2>

    <div class="values-grid">
        <div class="value-item">✨ Quality</div>
        <div class="value-item">🎨 Creativity</div>
        <div class="value-item">😊 Happiness</div>
        <div class="value-item">🤝 Friendship</div>
        <div class="value-item">❤️ Customer Care</div>
    </div>
</section>

<!-- Meet Our Team Section -->
<section class="team-section">
    <span class="section-tagline">The People Behind The Scoops</span>
    <h2 class="about-heading">Meet Our Team</h2>

    <div class="team-grid">
        <!-- Team Member 1 -->
        <div class="team-card">
            <div class="team-img-holder">
                <img src="{{ asset('images/taylor1.png') }}" alt="Mia Santos - Founder">
            </div>
            <h3>Taylor Swift</h3>
            <span class="team-role">Founder</span>
            <p>
                Founded Mellovia Creamery with a passion for creating
                delicious and memorable ice cream experiences.
            </p>
        </div>

        <!-- Team Member 2 -->
        <div class="team-card">
            <div class="team-img-holder">
                <img src="{{ asset('images/conan.png') }}" alt="Leo Cruz - Head of Flavor Development">
            </div>
            <h3>Conan Gray</h3>
            <span class="team-role">Head of Flavor Development</span>
            <p>
                Creates and experiments with new flavors for our customers.
            </p>
        </div>

        <!-- Team Member 3 -->
        <div class="team-card">
            <div class="team-img-holder">
                <img src="{{ asset('images/olivia.png') }}" alt="Sofia Reyes - Customer Experience Manager">
            </div>
            <h3>Olivia Rodgrigo</h3>
            <span class="team-role">Customer Experience Manager</span>
            <p>
                Makes sure every customer receives a warm and enjoyable
                Mellovia experience.
            </p>
        </div>
    </div>
</section>

@endsection