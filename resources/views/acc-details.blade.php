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
            <h1 class="hero-title">Deluxe Ocean View Room</h1>
            <p class="hero-subtitle">Oceanfront Paradise · Infinity Pool · Direct Beach Access</p>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="resort-card fade-up">
                <div class="position-relative">
                    <div class="tour-badge"><i class="fas fa-water me-1"></i> Ocean View Room</div>
                    <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3"
                        alt="Watamu Beach Resort" class="tour-image">
                </div>
                <div class="p-2 p-lg-3">
                    <!-- Compact Action Bar -->
                    <div class="compact-action-bar">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="action-badge"><i class="fas fa-tag"></i> From KES 8,500/night</span>
                            <span class="action-badge"><i class="fas fa-star"></i> 4.6/5 Rating</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="compact-btn compact-btn-primary"><i class="fas fa-paper-plane"></i>
                                Inquiry</a>
                            <a href="booking.html" class="compact-btn compact-btn-phone"> <i class="fas fa-ticket-alt"></i> 
                                Book </a>
                        </div>
                    </div>

                    <!-- Tabs (Rooms & Suites tab removed) -->
                    <div class="custom-tabs">
                        <button class="tab-btn active" onclick="showTab('overview')"><i
                                class="fas fa-home me-2"></i>Overview</button>
                        <button class="tab-btn" onclick="showTab('availability');"><i
                                class="fas fa-calendar-alt me-2"></i>Availability</button>
                        <button class="tab-btn" onclick="showTab('amenities')"><i
                                class="fas fa-concierge-bell me-2"></i>Amenities</button>
                        <button class="tab-btn" onclick="showTab('location')"><i
                                class="fas fa-map-marker-alt me-2"></i>Location</button>
                        <button class="tab-btn" onclick="showTab('reviews')"><i
                                class="fas fa-star me-2"></i>Reviews</button>
                    </div>

                    <!-- Overview Tab (focused on Deluxe Ocean View Room) -->
                    <div id="overview" class="tab-pane active">
                        <h2 class="mb-3">Deluxe Ocean View Room - Watamu Beach Resort</h2>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <p class="lead">Spacious 45m² retreat with king or twin beds, a private balcony, and
                                    panoramic Indian Ocean views in a calm coastal design.
                                    Floor-to-ceiling sliding doors invite natural light and ocean breezes, creating a
                                    seamless indoor–outdoor experience.
                                    Enjoy premium comforts including air conditioning, high-speed WiFi, Smart TV,
                                    Nespresso machine, and a plush seating area.
                                    The elegant bathroom features a rainfall shower and luxury finishes—perfect for a
                                    relaxing and tranquil coastal escape.</p>
                            </div>
                        </div>
                        <h3 class="mt-5">Resort Highlights</h3>
                        <div class="feature-grid">

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-swimmer"></i></div>
                                <h5>Infinity Pool</h5>
                                <p>Ocean-view pool with swim-up bar</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-spa"></i></div>
                                <h5>Kaya Spa</h5>
                                <p>Traditional Swahili massages</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-utensils"></i></div>
                                <h5>Sea Breeze Restaurant</h5>
                                <p>Fresh seafood & local cuisine</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-dumbbell"></i></div>
                                <h5>Fitness Center</h5>
                                <p>24/7 gym & yoga deck</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-ship"></i></div>
                                <h5>Boat Excursions</h5>
                                <p>Sunset cruises & island hopping</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-cocktail"></i></div>
                                <h5>Beach Bar</h5>
                                <p>Signature cocktails by the ocean</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-water"></i></div>
                                <h5>Direct Beach Access</h5>
                                <p>Step straight onto the sand</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-heart"></i></div>
                                <h5>Couples Retreat</h5>
                                <p>Perfect for romantic and relaxing stays</p>
                            </div>

                        </div>
                        <p class="desc">Watamu Beach Resort combines eco‑conscious luxury with genuine Swahili
                            hospitality. The
                            Deluxe Ocean View Room offers panoramic ocean views, and the resort operates on solar energy
                            with a strong commitment to marine conservation.</p>
                    </div>

                    <!-- Amenities Tab -->
                    <div id="amenities" class="tab-pane">
                        <h3 class="mb-4">Resort Amenities & Services</h3>

                        <div class="feature-grid">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-wifi"></i></div>
                                <h5>High-Speed WiFi</h5>
                                <p>Seamless connectivity throughout the resort</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-hot-tub"></i></div>
                                <h5>Rainfall Shower</h5>
                                <p>Luxury in-room bathing experience</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-coffee"></i></div>
                                <h5>Nespresso Machine</h5>
                                <p>Premium coffee at your convenience</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-tv"></i></div>
                                <h5>Smart TV</h5>
                                <p>Entertainment with streaming access</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-snowflake"></i></div>
                                <h5>Air Conditioning</h5>
                                <p>Cool and comfortable indoor climate</p>
                            </div>

                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-sun"></i></div>
                                <h5>Private Balcony</h5>
                                <p>Ocean sunrise views from your room</p>
                            </div>

                        </div>

                        <div class="notes-section">
                            <h5><i class="fas fa-clock me-2"></i>Check-in / Check-out</h5>
                            <p>Check-in from 14:00 | Check-out by 11:00.</p>
                        </div>
                    </div>

                    <!-- Location Tab -->
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

                    <!-- Reviews Tab -->
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
                                <p>The Deluxe Ocean View Room was absolutely stunning! Waking up to the Indian Ocean was
                                    unforgettable.</p>
                                <div class="admin-reply"><strong>Resort Manager:</strong><br>Thank you James! We're so
                                    glad you enjoyed the ocean views.</div>
                                <div class="reply-form"><input type="text" class="reply-input"
                                        placeholder="Write a reply..."><button class="reply-btn"
                                        onclick="replyToReview(this)">Reply</button></div>
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
                                <div class="col-12"><textarea id="reviewText" class="form-control" rows="3"
                                        placeholder="Write your review..."></textarea></div>
                                <div class="col-12"><button class="btn btn-primary"
                                        style="background:var(--support-green)" onclick="addNewReview()">Submit
                                        Review</button></div>
                            </div>
                        </div>
                    </div>

                    <!-- AVAILABILITY TAB with booking form (only Deluxe Ocean View Room) -->
                    <div id="availability" class="tab-pane">
                        <h3 class="mb-4">Check Availability & Book</h3>
                        <div id="calendarRoot" class="calendar-container"></div>
                    </div>

                    <!-- Photo Gallery Carousel -->
                    <h3 class="mt-5 mb-3">Photo Gallery</h3>
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img
                                    src="https://images.unsplash.com/photo-1544551763-46a013bb70d5"
                                    class="d-block w-100" alt="Pool"></div>
                            <div class="carousel-item"><img
                                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e"
                                    class="d-block w-100" alt="Beach"></div>
                            <div class="carousel-item"><img
                                    src="https://images.unsplash.com/photo-1547970810-dc1eac37d174"
                                    class="d-block w-100" alt="Dining"></div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                    </div>
                </div>
            </div>

            <div class="mt-2 mb-4 text-center">
                <a href="acc.html" class="btn-back-stays"><i class="fas fa-arrow-left me-2"></i>Back to Stays</a>
            </div>
        </div>
    </main>
@endsection
