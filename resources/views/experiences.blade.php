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
                @foreach ($experiences as $experience)
                    <div class="exp-card" data-category="{{ strtolower($experience->category) }}">
                        @if ($experience->image_url)
                            <img src="{{ asset('storage/' . $experience->image_url) }}" alt="{{ $experience->slug }} image"
                                class="exp-img">
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
                                <span class="exp-price">{{ $experience->currency }} {{ $experience->price }} Per Person</span>
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
            <div class="cta-banner fade-up">
                <i class="fas fa-map-marked-alt"
                    style="font-size: 2.5rem; color: var(--sunrise-gold); margin-bottom: 12px; display: inline-block;"></i>
                <h3 style="font-size: 1.8rem; margin-bottom: 12px;">
                    Curate Your Own Adventure
                </h3>
                <p style="max-width: 500px; margin: 0 auto 20px;">
                    Mix and match experiences to create your perfect itinerary. Our travel concierge is here to help.
                </p>
                <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                    <a href="https://wildnomads.co.ke/tour" target="_blank" class="btn-hero-outline">Explore Tours</a>
                    <a href="https://wildnomads.co.ke/contact" target="_blank" class="btn-hero-primary">Plan My Trip →</a>
                </div>

            </div>
        </div>
    </main>

@endsection
