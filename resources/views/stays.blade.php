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
            <button class="filter-btn active" data-filter="all">All Stays</button>
            <button class="filter-btn" data-filter="coast">Coast / Beach</button>
            <button class="filter-btn" data-filter="safari">Safari Lodges</button>
            <button class="filter-btn" data-filter="lake">Lake & Highlands</button>
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
                            <div class="price-block">KES 8,500 / night</div>
                            <div class="card-buttons"><a href="{{ route('staydetails') }}" class="btn btn-outline-accent"><i
                                        class="fas fa-info-circle"></i> Details</a><a
                                    href="https://wa.me/254700123456?text=I'm%20interested%20in%20Watamu%20Beach%20Resort"
                                    target="_blank" class="btn btn-inquire"><i class="fab fa-whatsapp"></i> Inquire</a>
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('booking') }}" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 - Diani Reef Beach Resort (coast) -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="coast">
                    <div class="accommodation-card">
                        <div class="img-holder"><img
                                src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="Diani Reef Beach Resort"></div>
                        <div class="card-body">
                            <h5 class="card-title">Diani Reef Beach Resort</h5>
                            <div class="location-text"><i class="fas fa-map-marker-alt"
                                    style="color: var(--sunrise-gold);"></i> Diani Beach, South Coast</div>
                            <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span
                                    class="ms-1 small text-muted">(4.8)</span></div>
                            <p class="desc-text">Luxury villas with private plunge pools & premier diving center.
                                All-inclusive available.</p>
                            <div class="price-block">KES 12,000 / night</div>
                            <div class="card-buttons"><a href="acc-details.html" class="btn btn-outline-accent"><i
                                        class="fas fa-info-circle"></i> Details</a><a
                                    href="https://wa.me/254700123456?text=I'm%20interested%20in%20Diani%20Reef%20Beach%20Resort"
                                    target="_blank" class="btn btn-inquire"><i class="fab fa-whatsapp"></i> Inquire</a>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 - Sarova Whitesands (coast) -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="coast">
                    <div class="accommodation-card">
                        <div class="img-holder"><img
                                src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="Sarova Whitesands Beach Resort"></div>
                        <div class="card-body">
                            <h5 class="card-title">Sarova Whitesands Beach Resort</h5>
                            <div class="location-text"><i class="fas fa-map-marker-alt"
                                    style="color: var(--sunrise-gold);"></i> Bamburi, Mombasa</div>
                            <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> <span
                                    class="ms-1 small text-muted">(4.4)</span></div>
                            <p class="desc-text">Five pools, lush gardens, multiple restaurants on a white-sand beach.
                                Family-friendly.</p>
                            <div class="price-block">KES 10,500 / night</div>
                            <div class="card-buttons"><a href="acc-details.html" class="btn btn-outline-accent"><i
                                        class="fas fa-info-circle"></i> Details</a><a
                                    href="https://wa.me/254700123456?text=I'm%20interested%20in%20Sarova%20Whitesands"
                                    target="_blank" class="btn btn-inquire"><i class="fab fa-whatsapp"></i> Inquire</a>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 - Masai Mara Sopa Lodge (safari) -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="safari">
                    <div class="accommodation-card">
                        <div class="img-holder"><img
                                src="https://images.unsplash.com/photo-1549366021-9f761d450615?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="Masai Mara Sopa Lodge"></div>
                        <div class="card-body">
                            <h5 class="card-title">Masai Mara Sopa Lodge</h5>
                            <div class="location-text"><i class="fas fa-map-marker-alt"
                                    style="color: var(--sunrise-gold);"></i> Masai Mara, Narok</div>
                            <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star-half-alt"></i> <span class="ms-1 small text-muted">(4.5)</span>
                            </div>
                            <p class="desc-text">Perched on the slopes of Oloolaimutia Hills, overlooking the plains.
                                Unmatched wildebeest views.</p>
                            <div class="price-block">KES 18,000 / night (full board)</div>
                            <div class="card-buttons"><a href="acc-details.html" class="btn btn-outline-accent"><i
                                        class="fas fa-info-circle"></i> Details</a><a
                                    href="https://wa.me/254700123456?text=I'm%20interested%20in%20Masai%20Mara%20Sopa%20Lodge"
                                    target="_blank" class="btn btn-inquire"><i class="fab fa-whatsapp"></i> Inquire</a>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 5 - The Sands at Nomad (coast) -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="coast">
                    <div class="accommodation-card">
                        <div class="img-holder"><img
                                src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="The Sands at Nomad"></div>
                        <div class="card-body">
                            <h5 class="card-title">The Sands at Nomad</h5>
                            <div class="location-text"><i class="fas fa-map-marker-alt"
                                    style="color: var(--sunrise-gold);"></i> Diani Beach, South Coast</div>
                            <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span
                                    class="ms-1 small text-muted">(4.9)</span></div>
                            <p class="desc-text">Boutique chic with oceanfront suites, yoga shala, and farm-to-table
                                cuisine.</p>
                            <div class="price-block">KES 14,000 / night</div>
                            <div class="card-buttons"><a href="acc-details.html" class="btn btn-outline-accent"><i
                                        class="fas fa-info-circle"></i> Details</a><a
                                    href="https://wa.me/254700123456?text=I'm%20interested%20in%20The%20Sands%20at%20Nomad"
                                    target="_blank" class="btn btn-inquire"><i class="fab fa-whatsapp"></i> Inquire</a>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 6 - Lamu Swahili House (coast) -->
                <div class="col-lg-4 col-md-6 accommodation-item" data-category="coast">
                    <div class="accommodation-card">
                        <div class="img-holder"><img
                                src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?ixlib=rb-4.0.3&w=600&h=400&fit=crop"
                                class="card-img-top" alt="Lamu Swahili House"></div>
                        <div class="card-body">
                            <h5 class="card-title">Lamu Swahili House</h5>
                            <div class="location-text"><i class="fas fa-map-marker-alt"
                                    style="color: var(--sunrise-gold);"></i> Lamu Island, Archipelago</div>
                            <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star-half-alt"></i> <span class="ms-1 small text-muted">(4.5)</span>
                            </div>
                            <p class="desc-text">Restored 18th-century Swahili mansion with rooftop terrace and sea
                                views. Authentic charm.</p>
                            <div class="price-block">KES 9,500 / night</div>
                            <div class="card-buttons"><a href="acc-details.html" class="btn btn-outline-accent"><i
                                        class="fas fa-info-circle"></i> Details</a><a
                                    href="https://wa.me/254700123456?text=I'm%20interested%20in%20Lamu%20Swahili%20House"
                                    target="_blank" class="btn btn-inquire"><i class="fab fa-whatsapp"></i> Inquire</a>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
