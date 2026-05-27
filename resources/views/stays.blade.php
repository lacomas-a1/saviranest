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

    <header class="accommodation-header">

        @include('helper.nav')

        <div class="hero-content container">
            <h1 class="hero-title">Unforgettable Stays Across Kenya</h1>
            <p class="hero-subtitle">Beachfront bliss · Safari lodges · Eco-retreats</p>
        </div>
    </header>

    <!-- Category Filter & Cards (unchanged) -->
    <div class="container">
        <div class="category-bar">
            <button class="filter-btns active" data-filter="all">All Stays</button>
            <button class="filter-btns" data-filter="coast">Coast / Beach Villas</button>
            {{-- <button class="filter-btns" data-filter="coast">Ocean Retreats</button> --}}
            <button class="filter-btns" data-filter="safari">Safari Lodges</button>
            {{-- <button class="filter-btns" data-filter="romantic">Romantic Escapes</button> --}}
            <button class="filter-btns" data-filter="family">Family Homes</button>
            <button class="filter-btns" data-filter="luxury">Luxury Apartments</button>
        </div>
    </div>

    <section class="accommodation-grid-section">
        <div class="container">
            <div class="row g-4" id="accommodationGrid">
                <!-- Card 1 - Watamu Beach Resort (coast) -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="coast">
                    <div class="accommodation-card">
                        <div class="img-holder"><img
                                src="https://images.unsplash.com/photo-1610641818989-c2051b5e2cfd?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="Watamu Beach Resort"></div>
                        <div class="card-body">
                            <h5 class="card-title">Watamu Beach Resort</h5>
                            <div class="location-text"><i class="fas fa-map-marker-alt"
                                    style="color: var(--sunrise-gold);"></i> Watamu, Coast Region</div>
                            <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                <span class="ms-1 small text-muted">(4.6)</span>
                            </div>
                            <p class="desc-text">Oceanfront paradise with infinity pool, direct beach access, and
                                Swahili spa.</p>
                            <div class="amenities-list">
                                <span class="amenity-tag"><i class="fas fa-wifi"></i> WiFi</span>
                                <span class="amenity-tag"><i class="fas fa-hot-tub"></i> Plunge pool</span>
                                <span class="amenity-tag"><i class="fas fa-snowflake"></i> AC</span>
                            </div>
                            <div class="price-block">KES 8,500 / night</div>
                            <div class="card-buttons"><a href="{{ route('staydetails') }}" class="btn btn-outline-accent"><i
                                        class="fas fa-info-circle"></i> Details</a><a
                                    href="https://wa.me/254700123456?text=I'm%20interested%20in%20Watamu%20Beach%20Resort"
                                    target="_blank" class="btn btn-inquire"><i class="fab fa-whatsapp"></i> Inquire</a>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 7 - Family Terrace Suite -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="family">
                    <div class="accommodation-card">
                        <div class="img-holder">
                            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="Family Terrace Suite">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Family Terrace Suite</h5>

                            <div class="location-text">
                                <i class="fas fa-map-marker-alt" style="color: var(--sunrise-gold);"></i>
                                Coastal Resort, Kenya
                            </div>

                            <div class="rating-stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                <span class="ms-1 small text-muted">(4.7)</span>
                            </div>

                            <p class="desc-text">
                                Spacious 70m² family suite featuring two bedrooms, a separate living area.
                            </p>

                            <div class="amenities-list">
                                <span class="amenity-tag"><i class="fas fa-wifi"></i> WiFi</span>
                                <span class="amenity-tag"><i class="fas fa-hot-tub"></i> Plunge pool</span>
                                <span class="amenity-tag"><i class="fas fa-snowflake"></i> AC</span>
                            </div>

                            <div class="price-block">KES 15,000 / night</div>

                            <div class="card-buttons">
                                <a href="{{ route('accdetails') }}" class="btn btn-outline-accent">
                                    <i class="fas fa-info-circle"></i> Details
                                </a>
                                <a href="https://wa.me/254700123456?text=I'm%20interested%20in%20Family%20Terrace%20Suite"
                                    target="_blank" class="btn btn-inquire">
                                    <i class="fab fa-whatsapp"></i> Inquire
                                </a>
                            </div>

                            <div class="mt-2">
                                <a href="#" class="btn-exp-book">
                                    <i class="fas fa-ticket-alt"></i> Book Now →
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Card 8 - Honeymoon Penthouse -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="luxury">
                    <div class="accommodation-card">
                        <div class="img-holder">
                            <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="Honeymoon Penthouse">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Honeymoon Penthouse</h5>

                            <div class="location-text">
                                <i class="fas fa-map-marker-alt" style="color: var(--sunrise-gold);"></i>
                                Oceanfront Top Floor Suite
                            </div>

                            <div class="rating-stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i>
                                <span class="ms-1 small text-muted">(5.0)</span>
                            </div>

                            <p class="desc-text">
                                Exclusive top-floor penthouse featuring a private plunge pool, panoramic ocean views.
                            </p>

                            <div class="amenities-list">
                                <span class="amenity-tag"><i class="fas fa-wifi"></i> WiFi</span>
                                <span class="amenity-tag"><i class="fas fa-hot-tub"></i> Plunge pool</span>
                                <span class="amenity-tag"><i class="fas fa-snowflake"></i> AC</span>
                            </div>

                            <div class="price-block">KES 22,000 / night</div>

                            <div class="card-buttons">
                                <a href="{{ route('accdetails') }}" class="btn btn-outline-accent">
                                    <i class="fas fa-info-circle"></i> Details
                                </a>
                                <a href="https://wa.me/254700123456?text=I'm%20interested%20in%20Honeymoon%20Penthouse"
                                    target="_blank" class="btn btn-inquire">
                                    <i class="fab fa-whatsapp"></i> Inquire
                                </a>
                            </div>

                            <div class="mt-2">
                                <a href="#" class="btn-exp-book">
                                    <i class="fas fa-ticket-alt"></i> Book Now →
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Card - Deluxe Ocean View Room -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="safari">
                    <div class="accommodation-card">

                        <div class="img-holder">
                            <img src="https://images.unsplash.com/photo-1505693314120-0d443867891c?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="Deluxe Ocean View Room">
                        </div>

                        <div class="card-body">

                            <h5 class="card-title">Deluxe Ocean View Room</h5>

                            <div class="location-text">
                                <i class="fas fa-map-marker-alt" style="color: var(--sunrise-gold);"></i>
                                Watamu Beach Resort, Kenya
                            </div>

                            <div class="rating-stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                <span class="ms-1 small text-muted">(4.6)</span>
                            </div>

                            <p class="desc-text">
                                Spacious 45m² retreat featuring king or twin beds, a private balcony with panoramic.
                            </p>

                            <div class="amenities-list">
                                <span class="amenity-tag"><i class="fas fa-wifi"></i> WiFi</span>
                                <span class="amenity-tag"><i class="fas fa-couch"></i> Living area</span>
                                <span class="amenity-tag"><i class="fas fa-tshirt"></i> Laundry</span>
                            </div>

                            <div class="price-block">KES 8,500 / night</div>

                            <div class="card-buttons">
                                <a href="{{ route('accdetails') }}" class="btn btn-outline-accent">
                                    <i class="fas fa-info-circle"></i> Details
                                </a>
                                <a href="https://wa.me/254700123456?text=I'm%20interested%20in%20Deluxe%20Ocean%20View%20Room"
                                    target="_blank" class="btn btn-inquire">
                                    <i class="fab fa-whatsapp"></i> Inquire
                                </a>
                            </div>

                            <div class="mt-2">
                                <a href="#" class="btn-exp-book">
                                    <i class="fas fa-ticket-alt"></i> Book Now →
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
