@extends('layout.app')

@section('title', $seo['title'])

@section('meta')

    <meta property="og:title" content="{{ $seo['title'] }}">
    <meta property="og:description" content="{{ $seo['description'] }}">
    <meta property="og:image" content="{{ $seo['image'] }}">
    {{-- <meta property="og:url" content="{{ $seo['url'] }}"> --}}
    <meta property="og:type" content="{{ $seo['type'] }}">
    {{-- <link rel="canonical" href="{{ $seo['canonical'] }}"> --}}

@endsection

@section('content')
    <header class="contact-header">

        @include('helper.nav')

        <div class="hero-content container">
            <h1 class="hero-title">Let’s Connect</h1>
            <p class="hero-subtitle">We're just a message away — reach out for bookings, partnerships, or travel advice.
            </p>
        </div>
    </header>

    <main>
        <div class="container" id="contact">
            <!-- Three-column contact info cards (like the reference image) -->
            <div class="contact-info-cards fade-up">
                <!-- Our Office -->
                <div class="info-card">
                    <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Our Office</h3>
                    <p>Bofa Road, Kilifi, Kenya</p>
                    <p>Mon–Fri, 9am – 5pm (EAT)</p>
                </div>
                <!-- Email Us -->
                <div class="info-card">
                    <div class="info-icon"><i class="fas fa-envelope"></i></div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:info@saviranest.co.ke">info@saviranest.co.ke</a></p>
                    <p><a href="mailto:bookings@saviranest.co.ke">bookings@saviranest.co.ke</a></p>
                </div>
                <!-- Call Us -->
                <div class="info-card">
                    <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+254712345678">+254 712 345 678</a></p>
                    <p><a href="tel:+254102593346">+254 102 593 346</a> (WhatsApp)</p>
                </div>
            </div>

            <!-- Form & Map Row (side by side) -->
            <div class="contact-row fade-up">
                <!-- Contact Form -->
                <div class="contact-form-card">
                    <h3><i class="fas fa-paper-plane" style="color: var(--sunrise-gold);"></i> Send us a message</h3>
                    <form id="contactForm" action="#" method="post">
                        <input type="text" placeholder="Full name" required>
                        <input type="email" placeholder="Email address" required>
                        <input type="text" placeholder="Phone number (optional)">
                        <textarea rows="4" placeholder="Tell us about your inquiry or booking request..."></textarea>
                        <button type="submit">Send Message <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
                <div class="map-card h-80">
                    <iframe class="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63710.85262231254!2d39.80856872167966!3d-3.6038941999999783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x183fddc9848a410f%3A0x97fc3eb7782a34e0!2sTulia%20Bofa!5e0!3m2!1sen!2ske!4v1755024736620!5m2!1sen!2ske"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>
@endsection
