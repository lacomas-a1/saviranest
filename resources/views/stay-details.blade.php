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

    <header class="stay-details-header">

        @include('helper.nav')

        <div class="hero-content container">
            <h1 class="hero-title">{{ $stay->title }}</h1>
            <p class="hero-subtitle">{{ $stay->tagline }}</p>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="resort-card fade-up">
                <div class="position-relative">
                    <div class="tour-badge"><i class="fas fa-crown me-1"></i> {{ ucfirst($stay->category) }} Beachfront
                    </div>
                    <img src="https://images.unsplash.com/photo-1610641818989-c2051b5e2cfd?ixlib=rb-4.0.3"
                        alt="Watamu Beach Resort" class="tour-image">
                </div>
                <div class="p-2 p-lg-3">
                    <!-- Compact Action Bar -->
                    <div class="compact-action-bar">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="action-badge"><i class="fas fa-tag"></i> From {{ $stay->currency }}
                                {{ $stay->price }}/{{ ucwords(str_replace('_', ' ', $stay->rate)) }}</span>
                            <span class="action-badge"><i class="fas fa-star"></i> {{ $stay->rating }}/5 Rating</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://wa.me/254102593346?text={{ urlencode("I'm interested in " . $stay->title) }}"
                                class="compact-btn compact-btn-primary"><i class="fas fa-paper-plane"></i>
                                Inquiry</a>
                            <!-- <a href="https://wa.me/254700123456?text=I%20would%20like%20to%20book%20Watamu%20Beach%20Resort"
                                                target="_blank" class="compact-btn compact-btn-whatsapp"><i class="fab fa-whatsapp"></i>
                                                WhatsApp</a> -->
                            <!-- <a href="tel:+254700123456" class="compact-btn compact-btn-phone"><i
                                                    class="fas fa-phone"></i> Call</a> -->
                            <a href="booking.html" class="compact-btn compact-btn-phone">
                                <i class="fas fa-ticket-alt"></i> Book
                            </a>
                        </div>
                    </div>

                    <!-- Tabs (added Availability) -->
                    <div class="custom-tabs">
                        <button class="tab-btn active" onclick="showTab('overview')"><i
                                class="fas fa-home me-2"></i>Overview</button>
                        <button class="tab-btn" onclick="showTab('availability'); initCalendarIfNeeded();"><i
                                class="fas fa-calendar-alt me-2"></i>Availability</button>
                        <button class="tab-btn" onclick="showTab('rooms')"><i class="fas fa-bed me-2"></i>Rooms &
                            Suites</button>
                        <button class="tab-btn" onclick="showTab('amenities')"><i
                                class="fas fa-concierge-bell me-2"></i>Amenities</button>
                        <button class="tab-btn" onclick="showTab('location')"><i
                                class="fas fa-map-marker-alt me-2"></i>Location</button>
                        <button class="tab-btn" onclick="showTab('reviews')"><i
                                class="fas fa-star me-2"></i>Reviews</button>
                    </div>

                    <!-- Overview Tab -->
                    <div id="overview" class="tab-pane active">
                        <h2 class="mb-3">{{ $stay->title }}</h2>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <p class="lead">{{ $stay->description }}</p>
                            </div>
                        </div>
                        <h3>Resort Highlights</h3>
                        <div class="feature-grid">
                            @foreach ($highlights as $highlight)
                                <div class="feature-card">
                                    <div class="feature-icon"><i class="{{ $highlight->icon }}"></i></div>
                                    <h5>{{ $highlight->title }}</h5>
                                    <p>{{ $highlight->description }}</p>
                                </div>
                            @endforeach
                        </div>
                        <p>{{ $stay->excerpt }}</p>
                    </div>

                    <!-- Rooms Tab (same as original) -->
                    <div id="rooms" class="tab-pane">
                        <h3 class="mb-4">Luxurious Accommodations</h3>
                        <div class="room-card">
                            <div class="room-header" onclick="toggleRoom(this)">
                                <h5><i class="fas fa-bed me-2"></i>Deluxe Ocean View Room</h5>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>

                            <div class="room-content">
                                <div class="room-row">

                                    <!-- Image -->
                                    <div class="room-image-col">
                                        <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3"
                                            alt="Deluxe Ocean View Room">
                                    </div>

                                    <!-- Content -->
                                    <div class="room-text-col">

                                        <!-- Description -->
                                        <p>
                                            Spacious 45m² retreat featuring king or twin beds, a private balcony with
                                            panoramic
                                            Indian Ocean views and a calm, modern coastal design.
                                        </p>

                                        <!-- Amenities -->
                                        <div class="amenities-list">
                                            <span class="amenity-tag"><i class="fas fa-wifi"></i> WiFi</span>
                                            <span class="amenity-tag"><i class="fas fa-hot-tub"></i> Rainfall
                                                shower</span>
                                            <span class="amenity-tag"><i class="fas fa-coffee"></i> Nespresso</span>
                                            <span class="amenity-tag"><i class="fas fa-tv"></i> Smart TV</span>
                                            <span class="amenity-tag"><i class="fas fa-snowflake"></i> AC</span>
                                        </div>

                                        <!-- Experience Highlights -->
                                        <div class="mt-3">
                                            <h6 class="mb-2"><i class="fas fa-star text-warning me-2"></i>Experience
                                                Highlights</h6>
                                            <ul class="small mb-2">
                                                <li>Private balcony with ocean sunrise views</li>
                                                <li>Direct beach access</li>
                                                <li>Daily housekeeping service</li>
                                                <li>Perfect for couples & relaxation stays</li>
                                            </ul>
                                        </div>

                                        <!-- Price + CTA -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div class="price-badge">From <strong>KES 8,500</strong> / night</div>
                                            <a href="#" class="btn-acc-book">Book Now →</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-card">
                            <div class="room-header" onclick="toggleRoom(this)">
                                <h5><i class="fas fa-users me-2"></i>Family Terrace Suite</h5>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>

                            <div class="room-content">
                                <div class="room-row">

                                    <!-- Image -->
                                    <div class="room-image-col">
                                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3"
                                            alt="Family Terrace Suite">
                                    </div>

                                    <!-- Content -->
                                    <div class="room-text-col">

                                        <!-- Description -->
                                        <p>
                                            Spacious 70m² family suite featuring two bedrooms, a separate living area,
                                            and a large private terrace designed for comfort, bonding, and relaxation.
                                            Perfect for families or small groups.
                                        </p>

                                        <!-- Amenities -->
                                        <div class="amenities-list">
                                            <span class="amenity-tag"><i class="fas fa-wifi"></i> WiFi</span>
                                            <span class="amenity-tag"><i class="fas fa-couch"></i> Living area</span>
                                            <span class="amenity-tag"><i class="fas fa-tshirt"></i> Laundry</span>
                                            <span class="amenity-tag"><i class="fas fa-baby-carriage"></i> Baby
                                                cot</span>
                                            <span class="amenity-tag"><i class="fas fa-snowflake"></i> AC</span>
                                        </div>

                                        <!-- Experience Highlights -->
                                        <div class="mt-3">
                                            <h6 class="mb-2"><i class="fas fa-star text-warning me-2"></i>Experience
                                                Highlights</h6>
                                            <ul class="small mb-2">
                                                <li>Private terrace for family relaxation</li>
                                                <li>Ideal for up to 5 guests</li>
                                                <li>Spacious layout with separate living room</li>
                                                <li>Perfect for long stays & group travel</li>
                                            </ul>
                                        </div>

                                        <!-- Price + CTA -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div class="price-badge">From <strong>KES 15,000</strong> / night</div>
                                            <a href="#" class="btn-acc-book">Book Now →</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-card">
                            <div class="room-header" onclick="toggleRoom(this)">
                                <h5><i class="fas fa-crown me-2"></i>Honeymoon Penthouse</h5>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>

                            <div class="room-content">
                                <div class="room-row">

                                    <!-- Image -->
                                    <div class="room-image-col">
                                        <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3"
                                            alt="Honeymoon Penthouse">
                                    </div>

                                    <!-- Content -->
                                    <div class="room-text-col">

                                        <!-- Description -->
                                        <p>
                                            Exclusive top-floor penthouse featuring a private plunge pool, panoramic
                                            ocean views,
                                            a romantic four-poster bed, and personalized butler service for a truly
                                            unforgettable stay.
                                        </p>

                                        <!-- Amenities -->
                                        <div class="amenities-list">
                                            <span class="amenity-tag"><i class="fas fa-wifi"></i> WiFi</span>
                                            <span class="amenity-tag"><i class="fas fa-hot-tub"></i> Plunge pool</span>
                                            <span class="amenity-tag"><i class="fas fa-champagne-glasses"></i>
                                                Champagne</span>
                                            <span class="amenity-tag"><i class="fas fa-user-tie"></i> Butler
                                                service</span>
                                            <span class="amenity-tag"><i class="fas fa-snowflake"></i> AC</span>
                                        </div>

                                        <!-- Experience Highlights -->
                                        <div class="mt-3">
                                            <h6 class="mb-2"><i class="fas fa-star text-warning me-2"></i>Experience
                                                Highlights</h6>
                                            <ul class="small mb-2">
                                                <li>Private plunge pool with ocean views</li>
                                                <li>Romantic setup for couples & honeymooners</li>
                                                <li>Top-floor privacy & exclusivity</li>
                                                <li>All-inclusive luxury experience</li>
                                            </ul>
                                        </div>

                                        <!-- Price + CTA -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div class="price-badge">From <strong>KES 22,000</strong> / night</div>
                                            <a href="#" class="btn-acc-book">Book Now →</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Amenities, Location, Reviews Tabs (condensed for brevity but fully functional) -->
                    <div id="amenities" class="tab-pane">
                        <h3 class="mb-4">Resort Amenities & Services</h3>
                        <div class="feature-grid">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-swimmer"></i></div>
                                <h5>Infinity Pools</h5>
                                <p>Adult & family-friendly</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-umbrella-beach"></i></div>
                                <h5>Private Beach</h5>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-spa"></i></div>
                                <h5>Kaya Spa</h5>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-dumbbell"></i></div>
                                <h5>Fitness & Yoga</h5>
                            </div>
                        </div>
                        <div class="notes-section">
                            <h5><i class="fas fa-clock me-2"></i>Check-in / Check-out</h5>
                            <p>Check-in from 14:00 | Check-out by 11:00.</p>
                        </div>
                    </div>

                    <div id="location" class="tab-pane">
                        <h3 class="mb-4">Discover Watamu</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="notes-section">
                                    <h5><i class="fas fa-map-marker-alt"></i> Getting There</h5>
                                    <p>Located on Watamu Beach Road, 5 min from Marine Park entrance.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light p-4 rounded-4 text-center"><i
                                        class="fas fa-map fa-3x text-primary mb-2"></i>
                                    <p>Maps & directions upon booking.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="reviews" class="tab-pane">
                        <h3 class="mb-4">Guest Reviews</h3>
                        <div id="reviewsList">
                            <div class="review-card">
                                <div class="review-header d-flex justify-content-between"><strong>James
                                        Mwangi</strong><span>March 2025</span></div>
                                <div class="review-rating"><i class="fas fa-star text-warning"></i><i
                                        class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
                                        class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                </div>
                                <p>Absolutely stunning!</p>
                                <div class="admin-reply"><strong>Resort Manager:</strong><br>Thank you James!</div>
                            </div>
                        </div>
                        <div class="add-review-form">
                            <h5>Add Your Review</h5>
                            <div class="row g-3">
                                <div class="col-md-6"><input type="text" id="reviewerName" class="form-control"
                                        placeholder="Your Name"></div>
                                <div class="col-md-6"><select id="reviewRating" class="form-select">
                                        <option value="5">★★★★★ (5)</option>
                                        <option value="4">★★★★☆ (4)</option>
                                    </select></div>
                                <div class="col-12">
                                    <textarea id="reviewText" class="form-control" rows="3" placeholder="Write your review..."></textarea>
                                </div>
                                <div class="col-12"><button class="btn btn-primary"
                                        style="background:var(--support-green)" onclick="addNewReview()">Submit
                                        Review</button></div>
                            </div>
                        </div>
                    </div>

                    <!-- AVAILABILITY TAB with Calendar & Book Now -->
                    <div id="availability" class="tab-pane">
                        <h3 class="mb-4">Check Availability & Book</h3>
                        <div id="calendarRoot" class="calendar-container"></div>
                    </div>

                    <!-- Photo Gallery Carousel -->
                    <h3 class="mt-5 mb-3">Photo Gallery</h3>
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($galleries as $key => $gallery)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $gallery->image_url) }}" class="d-block w-100">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <!-- <div class="cta-block fade-up text-center">
                                <i class="fas fa-umbrella-beach" style="font-size: 2.5rem; color: var(--sunrise-gold);"></i>
                                <h3 style="font-size: 1.8rem; margin-top: 12px;">Book Your Coastal Escape</h3>
                                <p>Direct ocean views, Swahili hospitality, and unforgettable sunsets await.</p>
                                <button class="btn-large"
                                    onclick="alert('✨ Thank you for choosing Watamu Beach Resort! Our team will reach out to confirm your stay.')">Check
                                    Availability →</button>
                            </div> -->

            <div class="mt-2 mb-4 text-center">
                <a href="acc.html" class="btn-back-stays"><i class="fas fa-arrow-left me-2"></i>Back to
                    Stays</a>
            </div>
        </div>
    </main>

@endsection
