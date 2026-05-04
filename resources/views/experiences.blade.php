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

    <div class="experiences-header">

        @include('helper.nav')

        <div class="hero-content container">
            <h1 class="hero-title">Curated Local Experiences</h1>
            <p class="hero-subtitle">Beyond a place to sleep — unforgettable moments, crafted by locals.</p>
        </div>
    </div>

    <main>
        <!-- Category Filter Bar -->
        <div class="container">
            <div class="category-bar">
                <button class="filter-btn active" data-filter="all">All Experiences</button>
                <button class="filter-btn" data-filter="coastal">Coastal</button>
                <button class="filter-btn" data-filter="safari">Safari & Adventure</button>
                <button class="filter-btn" data-filter="lifestyle">Lifestyle & Relaxation</button>
                <button class="filter-btn" data-filter="cultural">Cultural & Local</button>
            </div>
        </div>

        <!-- Experiences Grid with data-category attributes -->
        <div class="container">
            <div class="experiences-grid fade-up" id="experiencesGrid">
                <!-- Coastal category cards -->
                <div class="exp-card" data-category="coastal">
                    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=600&h=400&fit=crop"
                        class="exp-img" alt="Snorkeling Watamu">
                    <div class="exp-body">
                        <h3 class="exp-title">Snorkeling & Dolphin Watch</h3>
                        <div class="location-text"><i class="fas fa-map-marker-alt"
                                style="color: var(--sunrise-gold);"></i> Diani Beach, South Coast</div>
                        <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span
                                class="ms-1 small text-muted">(4.9)</span></div>
                        <div class="exp-desc">Explore coral gardens, swim with dolphins, picnic on sandbank. All gear
                            included.</div>
                        <div class="exp-meta"><span class="exp-price">KES 4,200</span><span class="exp-duration"><i
                                    class="far fa-clock"></i> 4 hrs</span></div>
                        <div class="card-buttons"><a href="{{ route('expdetails') }}" class="btn btn-outline-accent"><i
                                    class="fas fa-info-circle"></i> Details</a>
                            <a href="#" class="btn btn-inquire wa-inquire"><i class="fab fa-whatsapp"></i>
                                Inquire</a>
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('booking') }}" target="_blank" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book
                                Now →</a>
                        </div>
                    </div>

                </div>

                <div class="exp-card" data-category="coastal">
                    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=600&h=400&fit=crop"
                        class="exp-img" alt="Sunset dhow cruise">
                    <div class="exp-body">
                        <h3 class="exp-title">Sunset Dhow Cruise</h3>
                        <div class="location-text"><i class="fas fa-map-marker-alt"
                                style="color: var(--sunrise-gold);"></i> Diani, Kilifi, Malindi, Watamu South Coast
                        </div>
                        <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span
                                class="ms-1 small text-muted">(4.9)</span></div>
                        <div class="exp-desc">Sail into the Indian Ocean on a traditional dhow. Snacks, drinks, and
                            breathtaking Kilifi sunset.</div>
                        <div class="exp-meta"><span class="exp-price">KES 3,500</span><span class="exp-duration"><i
                                    class="far fa-clock"></i> 2 hrs</span></div>
                        <div class="card-buttons"><a href="exp-details.html" class="btn btn-outline-accent"><i
                                    class="fas fa-info-circle"></i> Details</a>
                            <a href="#" class="btn btn-inquire wa-inquire"><i class="fab fa-whatsapp"></i>
                                Inquire</a>
                        </div>
                        <div class="mt-2">
                            <a href="" target="_blank" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book
                                Now →</a>
                        </div>
                    </div>
                </div>

                <!-- Safari category card -->
                <div class="exp-card" data-category="safari">
                    <img src="https://images.unsplash.com/photo-1549366021-9f761d450615?w=600&h=400&fit=crop"
                        class="exp-img" alt="Tsavo day safari">
                    <div class="exp-body">
                        <h3 class="exp-title">Tsavo East Day Safari</h3>
                        <div class="location-text"><i class="fas fa-map-marker-alt"
                                style="color: var(--sunrise-gold);"></i> Taita Taveta, Coast</div>
                        <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span
                                class="ms-1 small text-muted">(4.9)</span></div>
                        <div class="exp-desc">Game drive with expert guide, picnic lunch, search for elephants, lions,
                            and more.</div>
                        <div class="exp-meta"><span class="exp-price">KES 12,000</span><span class="exp-duration"><i
                                    class="far fa-clock"></i> Full day</span></div>
                        <div class="card-buttons"><a href="exp-details.html" class="btn btn-outline-accent"><i
                                    class="fas fa-info-circle"></i> Details</a>
                            <a href="#" class="btn btn-inquire wa-inquire"><i class="fab fa-whatsapp"></i>
                                Inquire</a>
                        </div>
                        <div class="mt-2">
                            <a href="" target="_blank" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book
                                Now →</a>
                        </div>
                    </div>
                </div>

                <!-- Lifestyle & Relaxation cards -->
                <div class="exp-card" data-category="lifestyle">
                    <img src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?w=600&h=400&fit=crop"
                        class="exp-img" alt="Beach yoga">
                    <div class="exp-body">
                        <h3 class="exp-title">Beachfront Yoga & Wellness</h3>
                        <div class="location-text"><i class="fas fa-map-marker-alt"
                                style="color: var(--sunrise-gold);"></i> Diani, Kilifi, Malindi, Watamu South Coast
                        </div>
                        <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span
                                class="ms-1 small text-muted">(4.9)</span></div>
                        <div class="exp-desc">Morning or sunset yoga session with certified instructor. Tea and
                            meditation included.</div>
                        <div class="exp-meta"><span class="exp-price">KES 1,800</span><span class="exp-duration"><i
                                    class="far fa-clock"></i> 1.5 hrs</span></div>
                        <div class="card-buttons"><a href="exp-details.html" class="btn btn-outline-accent"><i
                                    class="fas fa-info-circle"></i> Details</a>
                            <a href="#" class="btn btn-inquire wa-inquire"><i class="fab fa-whatsapp"></i>
                                Inquire</a>
                        </div>
                        <div class="mt-2">
                            <a href="" target="_blank" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book
                                Now →</a>
                        </div>
                    </div>
                </div>
                <div class="exp-card" data-category="lifestyle">
                    <img src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?w=600&h=400&fit=crop"
                        class="exp-img" alt="Private chef dinner">
                    <div class="exp-body">
                        <h3 class="exp-title">Private Chef Dinner</h3>
                        <div class="location-text"><i class="fas fa-map-marker-alt"
                                style="color: var(--sunrise-gold);"></i> Diani, Kilifi, Malindi, Watamu South Coast
                        </div>
                        <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span
                                class="ms-1 small text-muted">(4.9)</span></div>
                        <div class="exp-desc">Romantic dinner setup at your villa. Swahili-seafood menu, tailored to
                            your taste.</div>
                        <div class="exp-meta"><span class="exp-price">KES 6,500</span><span class="exp-duration"><i
                                    class="far fa-clock"></i> 3 hrs</span></div>
                        <div class="card-buttons"><a href="exp-details.html" class="btn btn-outline-accent"><i
                                    class="fas fa-info-circle"></i> Details</a>
                            <a href="#" class="btn btn-inquire wa-inquire"><i class="fab fa-whatsapp"></i>
                                Inquire</a>
                        </div>
                        <div class="mt-2">
                            <a href="" target="_blank" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book
                                Now →</a>
                        </div>
                    </div>
                </div>

                <!-- Cultural & Local card -->
                <div class="exp-card" data-category="cultural">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&h=400&fit=crop"
                        class="exp-img" alt="Swahili cooking class">
                    <div class="exp-body">
                        <h3 class="exp-title">Swahili Cooking Class</h3>
                        <div class="location-text"><i class="fas fa-map-marker-alt"
                                style="color: var(--sunrise-gold);"></i> Diani, Kilifi, Malindi, Watamu South Coast
                        </div>
                        <div class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span
                                class="ms-1 small text-muted">(4.9)</span></div>
                        <div class="exp-desc">Learn to make coconut fish curry, samosas, and chapati. Eat what you cook.
                        </div>
                        <div class="exp-meta"><span class="exp-price">KES 2,500</span><span class="exp-duration"><i
                                    class="far fa-clock"></i> 3 hrs</span></div>
                        <div class="card-buttons"><a href="exp-details.html" class="btn btn-outline-accent"><i
                                    class="fas fa-info-circle"></i> Details</a>
                            <a href="#" class="btn btn-inquire wa-inquire"><i class="fab fa-whatsapp"></i>
                                Inquire</a>
                        </div>
                        <div class="mt-2">
                            <a href="" target="_blank" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book
                                Now →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- How It Works -->
        <div class="container">
            <div class="section-title">How It Works</div>
            <div class="steps-container fade-up">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4>Browse & Choose</h4>
                    <p>Explore unique experiences by category — coastal, safari, culture, or relaxation.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4>Select Your Stay</h4>
                    <p>Pick your preferred date, group size, and any add-ons (private transport, meals).</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h4>Book Instantly</h4>
                    <p>Secure online payment, receive confirmation, and get ready for an unforgettable time.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h4>Enjoy & Share</h4>
                    <p>Show up, relax, and create memories — we handle all the logistics.</p>
                </div>
            </div>
        </div>

        <!-- CTA Banner -->
        <div class="container">
            <div class="cta-banner fade-up"
                style="background: linear-gradient(135deg, var(--deep-navy), #1a3a60); border-radius: 48px; padding: 56px 40px; margin: 60px auto; text-align: center; color: white;">
                <i class="fas fa-map-marked-alt"
                    style="font-size: 2.5rem; color: var(--sunrise-gold); margin-bottom: 12px; display: inline-block;"></i>
                <h3 style="font-size: 1.8rem; margin-bottom: 12px;">Curate Your Own Adventure</h3>
                <p>Mix and match experiences to create your perfect itinerary. Our travel concierge is here to help.</p>
                <button class="btn-large"
                    style="background: var(--sunrise-gold); color: var(--deep-navy); padding: 14px 36px; border-radius: 60px; font-weight: 700; border: none; margin-top: 20px;"
                    onclick="alert('✨ Contact our concierge: hello@saviranest.co.ke')">Plan My Trip →</button>
            </div>
        </div>
    </main>

@endsection
