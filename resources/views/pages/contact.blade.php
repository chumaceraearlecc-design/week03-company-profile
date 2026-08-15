@extends('layouts.app')

@section('title', 'Contact Us | Mellovia Creamery')

@section('content')


<section class="contact-hero-banner">
    <span class="section-tagline">Get In Touch</span>
    <h1>Visit Mellovia Creamery</h1>
    <p class="contact-subtext">
        Craving something sweet? We'd love to serve you.
        Send us a message or visit our shop for your next scoop.
    </p>
</section>


<section class="contact-main-section">
    <div class="contact-container">
        
        <!-- Left Column: Contact Information Cards -->
        <div class="contact-info-wrapper">
            <h2 class="contact-heading">Contact Details</h2>
            
            <div class="info-card">
                <div class="info-icon">📍</div>
                <div>
                    <h3>Address</h3>
                    <p>25 Sweet Avenue, Quezon City, Philippines</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">✉️</div>
                <div>
                    <h3>Email</h3>
                    <p>hello@mellovia.test</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">📞</div>
                <div>
                    <h3>Phone</h3>
                    <p>+63 917 555 0188</p>
                </div>
            </div>

            <!-- Social Media Section -->
            <div class="socials-box">
                <h3>Follow Our Sweet Journey</h3>
                <div class="social-links">
                    <a href="#" class="social-btn">Facebook</a>
                    <a href="#" class="social-btn">Instagram</a>
                    <a href="#" class="social-btn">TikTok</a>
                </div>
            </div>
        </div>

        <!-- Right Column: Contact Form -->
        <div class="contact-form-wrapper">
            <h2 class="contact-heading">Send Us a Message</h2>

            <form class="contact-form" action="#" method="POST" onsubmit="event.preventDefault();">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="What is your message about?" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>

    </div>
</section>

<!-- Optional Google Map Section -->
<section class="map-section">
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123531.06015525042!2d120.9796016!3d14.6506319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b70956191987%3A0x6b97b0a70244e837!2sQuezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1700000000000!5m2!1sen!2sph" 
            width="100%" 
            height="350" 
            style="border:0; border-radius: 20px;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</section>

@endsection