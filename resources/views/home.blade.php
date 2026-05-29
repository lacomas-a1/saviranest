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

        <div class="container">
            <div class="section-toprow">
                <div class="section-header" style="text-align:left;margin-bottom:0;">
                    <h2>Browse by Category</h2>
                    <p>Find the perfect stay tailored to your lifestyle and travel experience</p>
                </div>
                <a href="#" class="view-all">View All <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="locations-grid">
                <!-- Row 1: 3 cards -->
                <div class="loc-card">
                    <img src="{{ asset('assets/image/explore/beach-villa.webp') }}" alt="Beach Villas">
                    <div class="loc-card-overlay"></div>
                    <div class="loc-card-info">
                        <h4>Beach Villas</h4><span>10 properties</span>
                    </div>
                    <button class="loc-view-btn">Explore Stays</button>
                </div>

                <div class="loc-card">
                    <img src="{{ asset('assets/image/explore/safari-lodge.webp') }}" alt="Safari Lodges">
                    <div class="loc-card-overlay"></div>
                    <div class="loc-card-info">
                        <h4>Safari Lodges</h4><span>8 properties</span>
                    </div>
                    <button class="loc-view-btn">Explore Stays</button>
                </div>

                <div class="loc-card">
                    <img src="{{ asset('assets/image/explore/luxury-apartments.webp') }}" alt="Luxury Apartments">
                    <div class="loc-card-overlay"></div>
                    <div class="loc-card-info">
                        <h4>Luxury Apartments</h4><span>12 properties</span>
                    </div>
                    <button class="loc-view-btn">Explore Stays</button>
                </div>

                <!-- Row 2 -->
                <div class="loc-row">

                    <div class="loc-card">
                        <img src="{{ asset('assets/image/explore/ocean-retreats.webp') }}" alt="Ocean Retreats">
                        <div class="loc-card-overlay"></div>
                        <div class="loc-card-info">
                            <h4>Ocean Retreats</h4><span>7 properties</span>
                        </div>
                        <button class="loc-view-btn">Explore Stays</button>
                    </div>

                    <div class="loc-card">
                        <img src="{{ asset('assets/image/explore/familyhomes.webp') }}" alt="Family Homes">
                        <div class="loc-card-overlay"></div>
                        <div class="loc-card-info">
                            <h4>Family Homes</h4><span>5 properties</span>
                        </div>
                        <button class="loc-view-btn">Explore Stays</button>
                    </div>

                    <div class="loc-card">
                        <img src="{{ asset('assets/image/explore/romantic-escape.webp') }}" alt="Romantic Escapes">
                        <div class="loc-card-overlay"></div>
                        <div class="loc-card-info">
                            <h4>Romantic Escapes</h4><span>4 properties</span>
                        </div>
                        <button class="loc-view-btn">Explore Stays</button>
                    </div>

                </div>
            </div>
        </div>


        <!-- Recommended Properties Section -->
        <div class="container">
            <div class="section-title">Featured Stays</div>
            <div class="cards-grid fade-up">
                @foreach ($stays as $stay)
                    <div class="stay-card">
                        @if ($stay->image_url)
                            <img src="{{ asset('storage/' . $stay->image_url) }}" alt="{{ $stay->slug }} image"
                                class="stay-img">
                        @else
                            <img src="{{ asset('assets/image/no-image.webp') }}" alt="No Image" class="stay-img">
                        @endif
                        <div class="stay-body">
                            <h3 class="stay-title">{{ $stay->title }}</h3>
                            <div class="stay-location"><i class="fas fa-map-marker-alt"
                                    style="color:var(--sunrise-gold);"></i> {{ $stay->location }}</div>
                            <div class="stay-rating">
                                @for ($i = 1; $i <= $stay->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                                <span class="ms-1 small text-muted">({{ $stay->rating }})</span>
                            </div>
                            <p class="stay-desc">{{ $stay->excerpt }}</p>
                            <div class="stay-price">{{ $stay->currency }} {{ $stay->price }}/ {{ ucwords(str_replace('_', ' ', $stay->rate)) }}</div>
                            <div class="card-buttons">
                                <a href="{{ route('stay.show', $stay->id) }}" class="btn-details">Details</a>
                                <a href="https://wa.me/254102593346?text={{ urlencode("I'm interested in " . $stay->title) }}"
                                    class="btn-inquire">Inquire</a>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="center-btn">
                <a href="{{ route('stays') }}" class="btn-outline">Load More Items</a>
            </div>
        </div>

        <div class="container">
            <div class="section-title">Featured Experiences</div>
            <div class="experiences-grid fade-up">
                @foreach ($experiences as $experience)
                    <div class="exp-card">
                        @if ($experience->image_url)
                            <img src="{{ asset('storage/' . $experience->image_url) }}"
                                alt="{{ $experience->slug }} image" class="exp-img">
                        @else
                            <img src="{{ asset('assets/image/no-image.webp') }}" alt="No Image" class="exp-img">
                        @endif
                        <div class="exp-body">
                            <h3 class="exp-title">{{ $experience->title }}</h3>
                            <div class="location-text"><i class="fas fa-map-marker-alt"
                                    style="color: var(--sunrise-gold);"></i> {{ $experience->location }}</div>
                            <div class="rating-stars">
                                @for ($i = 1; $i <= $experience->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                                <span class="ms-1 small text-muted">({{ $experience->rating }})</span>
                            </div>
                            <div class="exp-desc">{{ $experience->description }}</div>
                            <div class="exp-meta">
                                <span class="exp-price">{{ $experience->currency }} {{ $experience->price }}</span>
                                <span class="exp-duration">
                                    <i class="far fa-clock"></i> {{ $experience->duration }}
                                </span>
                            </div>
                            <div class="card-buttons">
                                <a href="{{ route('experience.show', $experience->id) }}" class="btn btn-outline-accent">
                                    <i class="fas fa-info-circle"></i> Details
                                </a>
                                <a href="https://wa.me/254102593346?text={{ urlencode("I'm interested in " . $experience->title) }}"
                                    class="btn btn-inquire wa-inquire">
                                    <i class="fab fa-whatsapp"></i> Inquire
                                </a>
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('booking') }}" target="_blank" class="btn-exp-book"><i
                                        class="fas fa-ticket-alt"></i> Book
                                    Now →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="center-btn">
                <a href="{{ route('experiences') }}" class="btn-outline">Load More Experiences</a>
            </div>
        </div>
        
        <!-- Features Section -->
        <div class="container">
            <div class="section-header-center">
                <span class="section-badge">Why Choose SaviraNest</span>
                <h2>Our Premium Features</h2>
                <p>
                    Experience modern hospitality with curated stays, personalized travel experiences,
                    and seamless booking solutions designed for every traveler.
                </p>
            </div>
            <div class="ftr-grid">
                <!-- Main Card -->
                <div class="ftr-main">
                    <img src="{{ asset('assets/image/feature/luxury-beachfront.webp') }}" alt="Oceanfront Stays">
                    <div class="ftr-main-content">
                        <span class="ftr-tag">Featured</span>
                        <h3>Luxury Oceanfront Escapes</h3>
                        <p>
                            Discover handpicked beachfront villas and coastal retreats with breathtaking
                            ocean views and unforgettable experiences.
                        </p>
                    </div>
                </div>

                <!-- Right Grid -->
                <div>
                    <div class="ftr-right">
                        <!-- Card -->
                        <div class="ftr-sub-card">
                            <img src="{{ asset('assets/image/feature/easy-booking.webp') }}" alt="Easy Booking">
                            <div class="ftr-sub-content">
                                <h4>Easy Booking System</h4>
                                <p>
                                    Secure reservations with instant confirmations and smooth payments.
                                </p>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="ftr-sub-card">
                            <img src="{{ asset('assets/image/feature/curated-escape.webp') }}" alt="Safari Experiences">
                            <span class="ftr-tag" style="position:absolute;top:14px;left:14px;">Safari</span>
                            <div class="ftr-sub-content">
                                <h4>Curated Experiences</h4>
                                <p>
                                    Explore safaris, ocean adventures, and unique local activities.
                                </p>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="ftr-sub-card">
                            <img src="{{ asset('assets/image/feature/smart-homes.webp') }}" alt="Smart Stay Management">
                            <div class="ftr-sub-content">
                                <h4>Smart Stay Management</h4>
                                <p>
                                    Manage bookings, communication, and personalized guest support.
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="ftr-sub-card" style="background:#0f172a;">

                            <div class="ftr-sub-content" style="bottom:50%;transform:translateY(50%);">

                                <h4>24/7 Guest Assistance</h4>

                                <p>
                                    Dedicated support available anytime for a seamless experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        {{-- <div class="container">
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
        </div> --}}

        <!-- Call to Action -->
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
                    <a href="#plan" class="btn-hero-primary">Contact Us</a>
                </div>

            </div>
        </div>
    </main>
@endsection
