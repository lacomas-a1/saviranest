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
    <!-- Hero Section with background shifted 200px right -->
    <div class="hero-section">

        @include('helper.hero')

        <!-- Text content at bottom -->
        <div class="container hero-content-left">
            <h1>Your Nest Away From Home</h1>
            <p>Discover handpicked stays — from serene beach villas to wild safari lodges.
                Curated comfort, local charm, and unforgettable experiences across the Kenyan coast.
                Book with ease, stay with confidence, and find your perfect escape.</p>
            <div class="hero-buttons">
                <a href="#featured" class="btn-hero-primary">Explore Stays →</a>
                <a href="#contact" class="btn-hero-outline">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Search Bar Section (between header and first content) -->
    <div class="container search-section">
        <div class="search-card">
            <div class="search-item">
                <!-- <label><i class="fas fa-map-marker-alt"></i> Location</label> -->
                <input type="text" placeholder="Where are you going? e.g., Diani, Watamu, Mara">
            </div>
            <div class="search-item">
                <!-- <label><i class="fas fa-calendar-alt"></i> Check In</label> -->
                <input type="date">
            </div>
            <div class="search-item">
                <!-- <label><i class="fas fa-calendar-alt"></i> Check Out</label> -->
                <input type="date">
            </div>
            <div class="search-item">
                <!-- <label><i class="fas fa-user-friends"></i> Guests</label> -->
                <select>
                    <option>1 Guest</option>
                    <option>2 Guests</option>
                    <option>3 Guests</option>
                    <option>4 Guests</option>
                    <option>5+ Guests</option>
                </select>
            </div>
            <button class="search-btn"
                onclick="alert('Search functionality coming soon! Explore our recommended stays below.')"><i
                    class="fas fa-search"></i> Search</button>
        </div>
    </div>

    <main>
        <!-- Recommended Properties Section -->
        <div class="container">
            <div class="section-title">Recommended for You</div>
            <div class="cards-grid fade-up">
                <!-- Card 1 -->
                <div class="stay-card">
                    <img src="https://images.unsplash.com/photo-1610641818989-c2051b5e2cfd?w=600&h=400&fit=crop"
                        class="stay-img" alt="Watamu Beach Resort">
                    <div class="stay-body">
                        <h3 class="stay-title">Watamu Beach Resort</h3>
                        <div class="stay-location"><i class="fas fa-map-marker-alt" style="color:var(--sunrise-gold);"></i>
                            Watamu, Kenya</div>
                        <div class="stay-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            4.7</div>
                        <p class="stay-desc">Oceanfront paradise with infinity pool and Swahili spa.</p>
                        <div class="stay-price">KES 8,500 / night</div>
                        <div class="card-buttons"><a href="#" class="btn-details">Details</a><a href="#"
                                class="btn-inquire">Inquire</a></div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="stay-card">
                    <img src="https://images.unsplash.com/photo-1549366021-9f761d450615?w=600&h=400&fit=crop"
                        class="stay-img" alt="Mara Serena Safari Lodge">
                    <div class="stay-body">
                        <h3 class="stay-title">Mara Serena Safari Lodge</h3>
                        <div class="stay-location"><i class="fas fa-map-marker-alt" style="color:var(--sunrise-gold);"></i>
                            Masai Mara</div>
                        <div class="stay-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.9</div>
                        <p class="stay-desc">Overlooking savannah, all-inclusive with game drives.</p>
                        <div class="stay-price">KES 22,000 / night</div>
                        <div class="card-buttons"><a href="#" class="btn-details">Details</a><a href="#"
                                class="btn-inquire">Inquire</a></div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="stay-card">
                    <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?w=600&h=400&fit=crop"
                        class="stay-img" alt="The Sands at Nomad">
                    <div class="stay-body">
                        <h3 class="stay-title">The Sands at Nomad</h3>
                        <div class="stay-location"><i class="fas fa-map-marker-alt" style="color:var(--sunrise-gold);"></i>
                            Diani Beach</div>
                        <div class="stay-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            4.8</div>
                        <p class="stay-desc">Boutique chic, oceanfront suites, farm-to-table dining.</p>
                        <div class="stay-price">KES 14,000 / night</div>
                        <div class="card-buttons"><a href="#" class="btn-details">Details</a><a href="#"
                                class="btn-inquire">Inquire</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Stays Section -->
        <div class="container" id="featured">
            <div class="section-title">Featured Stays</div>
            <div class="cards-grid fade-up">
                <!-- Featured 1 -->
                <div class="stay-card">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&h=400&fit=crop"
                        class="stay-img" alt="Diani Reef">
                    <div class="stay-body">
                        <h3 class="stay-title">Diani Reef Beach Resort</h3>
                        <div class="stay-location"><i class="fas fa-map-marker-alt"
                                style="color:var(--sunrise-gold);"></i> Diani, South Coast</div>
                        <div class="stay-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.8</div>
                        <p class="stay-desc">Luxury villas, private plunge pools, premier diving.</p>
                        <div class="stay-price">KES 12,000 / night</div>
                        <div class="card-buttons"><a href="#" class="btn-details">Details</a><a href="#"
                                class="btn-inquire">Inquire</a></div>
                    </div>
                </div>
                <!-- Featured 2 -->
                <div class="stay-card">
                    <img src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?w=600&h=400&fit=crop"
                        class="stay-img" alt="Lamu Swahili House">
                    <div class="stay-body">
                        <h3 class="stay-title">Lamu Swahili House</h3>
                        <div class="stay-location"><i class="fas fa-map-marker-alt"
                                style="color:var(--sunrise-gold);"></i> Lamu Island</div>
                        <div class="stay-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            4.6</div>
                        <p class="stay-desc">18th-century Swahili mansion with rooftop sea views.</p>
                        <div class="stay-price">KES 9,500 / night</div>
                        <div class="card-buttons"><a href="#" class="btn-details">Details</a><a href="#"
                                class="btn-inquire">Inquire</a></div>
                    </div>
                </div>
                <!-- Featured 3 -->
                <div class="stay-card">
                    <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?w=600&h=400&fit=crop"
                        class="stay-img" alt="Sarova Whitesands">
                    <div class="stay-body">
                        <h3 class="stay-title">Sarova Whitesands</h3>
                        <div class="stay-location"><i class="fas fa-map-marker-alt"
                                style="color:var(--sunrise-gold);"></i> Mombasa</div>
                        <div class="stay-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> 4.4</div>
                        <p class="stay-desc">Five pools, lush gardens, family-friendly resort.</p>
                        <div class="stay-price">KES 10,500 / night</div>
                        <div class="card-buttons"><a href="#" class="btn-details">Details</a><a href="#"
                                class="btn-inquire">Inquire</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="container">
            <div class="section-title">What Our Guests Say</div>
            <div class="testimonials-grid fade-up">
                <div class="testimonial-card">
                    <div class="testimonial-avatar"><i class="fas fa-user-circle"></i></div>
                    <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">“Absolutely magical stay! The team at SaviraNest curated the perfect
                        beach getaway. Everything was seamless.”</p>
                    <p class="testimonial-name">— Sarah M., Nairobi</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-avatar"><i class="fas fa-user-circle"></i></div>
                    <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="testimonial-text">“The safari lodge was beyond expectations. Great service, incredible
                        views. Will definitely book again.”</p>
                    <p class="testimonial-name">— James K., UK</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-avatar"><i class="fas fa-user-circle"></i></div>
                    <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">“We loved the Swahili house in Lamu. Authentic, peaceful, and
                        beautifully restored. Highly recommend!”</p>
                    <p class="testimonial-name">— Amina & David</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="cta-banner fade-up">

                <i class="fas fa-compass"
                    style="font-size: 2.5rem; color: var(--sunrise-gold); margin-bottom: 12px; display: inline-block;"></i>

                <h3 style="font-size: 1.8rem; margin-bottom: 12px;">
                    Find Your Perfect Stay Today
                </h3>

                <p style="max-width: 500px; margin: 0 auto 20px;">
                    Browse unique homes, compare options, and book instantly with confidence.
                </p>

                <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('stays') }}" class="btn-hero-outline">Explore Stays</a>
                    {{-- <a href="#plan" class="btn-hero-primary">Plan Your Trip</a> --}}
                </div>

            </div>
        </div>
    </main>
@endsection
