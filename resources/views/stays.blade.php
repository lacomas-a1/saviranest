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
                @foreach ($stays as $stay)
                    <div class="col-lg-4 col-md-6 accommodation-item" data-category="{{ strtolower($stay->category) }}">
                        <div class="accommodation-card">
                            <div class="img-holder">
                                @if ($stay->image_url)
                                    <img src="{{ asset('storage/' . $stay->image_url) }}" alt="{{ $stay->slug }} image"
                                        class="card-img-top">
                                @else
                                    <img src="{{ asset('assets/image/no-image.webp') }}" alt="No Image"
                                        class="card-img-top">
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $stay->title }}</h5>
                                <div class="location-text"><i class="fas fa-map-marker-alt"
                                        style="color: var(--sunrise-gold);"></i> {{ $stay->location }}</div>
                                <div class="rating-stars">
                                    @for ($i = 1; $i <= $stay->rating; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    <span class="ms-1 small text-muted">({{ $stay->rating }})</span>
                                </div>
                                <p class="desc-text">{{ $stay->excerpt }}</p>
                                <div class="amenities-list">
                                    <span class="amenity-tag"><i class="fas fa-wifi"></i> WiFi</span>
                                    <span class="amenity-tag"><i class="fas fa-hot-tub"></i> Plunge pool</span>
                                    <span class="amenity-tag"><i class="fas fa-snowflake"></i> AC</span>
                                </div>
                                <div class="price-block">{{ $stay->currency }} {{ $stay->price }}/{{ ucwords(str_replace('_', ' ', $stay->rate)) }}
                                </div>
                                <div class="card-buttons">
                                    <a href="{{ route('stay.show', $stay->id) }}" class="btn btn-outline-accent">
                                        <i class="fas fa-info-circle"></i> Details
                                    </a>
                                    <a href="https://wa.me/254102593346?text={{ urlencode("I'm interested in " . $stay->title) }}"
                                        target="_blank" class="btn btn-inquire">
                                        <i class="fab fa-whatsapp"></i> Inquire
                                    </a>
                                </div>
                                <div class="mt-2">
                                    <a href="#" class="btn-exp-book"><i class="fas fa-ticket-alt"></i> Book Now →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
