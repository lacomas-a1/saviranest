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

    <header class="exp-details-header">

        @include('helper.nav')

        <div class="hero-content container">
            <h1 class="hero-title">Snorkeling & Dolphin Watch</h1>
            <p class="hero-subtitle">Explore coral gardens · Swim with wild dolphins · Sandbank picnic</p>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="resort-card fade-up">
                <div class="position-relative">
                    <div class="tour-badge"><i class="fas fa-fish me-1"></i> Marine Adventure</div>
                    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=1200&h=500&fit=crop"
                        alt="Snorkeling Watamu" class="tour-image">
                </div>
                <div class="p-4 p-lg-3">
                    <!-- Compact Action Bar -->
                    <div class="compact-action-bar">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="action-badge"><i class="fas fa-tag"></i> KES 4,200 / person</span>
                            <span class="action-badge"><i class="fas fa-clock"></i> 4 hours</span>
                            <span class="action-badge"><i class="fas fa-star"></i> 4.9/5 Rating</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="booking.html" class="compact-btn compact-btn-primary" data-bs-toggle="modal"
                                data-bs-target="#bookingModal"><i class="fas fa-calendar-check"></i> Book Now</a>
                            <a href="https://wa.me/254712345678?text=I'm%20interested%20in%20Snorkeling%20%26%20Dolphin%20Watch"
                                target="_blank" class="compact-btn compact-btn-whatsapp"><i class="fab fa-whatsapp"></i>
                                WhatsApp</a>
                        </div>
                    </div>

                    <!-- Tabs: Overview, Itinerary, Notes, Reviews, Location -->
                    <div class="custom-tabs">
                        <button class="tab-btn active" onclick="showTab('overview')"><i
                                class="fas fa-water me-2"></i>Overview</button>
                        <button class="tab-btn" onclick="showTab('itinerary')"><i
                                class="fas fa-list-ol me-2"></i>Itinerary</button>
                        <button class="tab-btn" onclick="showTab('notes')"><i
                                class="fas fa-clipboard-list me-2"></i>Important Notes</button>
                        <button class="tab-btn" onclick="showTab('location')"><i
                                class="fas fa-map-marker-alt me-2"></i>Meeting Point</button>
                        <button class="tab-btn" onclick="showTab('reviews')"><i
                                class="fas fa-star me-2"></i>Reviews</button>
                    </div>

                    <!-- Overview Tab -->
                    <div id="overview" class="tab-pane active">
                        <h2 class="mb-3">Snorkeling & Dolphin Watch – Watamu Marine Park</h2>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <p class="lead">Embark on a 4‑hour ocean safari to the pristine waters of Watamu Marine
                                    National Park. Snorkel over kaleidoscopic coral reefs, swim alongside wild
                                    bottlenose dolphins, and relax on a secluded sandbank with a tropical picnic.</p>
                            </div>
                        </div>
                        <h3>Experience Highlights</h3>
                        <div class="feature-grid">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-fish"></i></div>
                                <h5>Coral Gardens</h5>
                                <p>Vibrant reefs with angelfish, parrotfish, and sea turtles</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-dolphin"></i></div>
                                <h5>Dolphin Watching</h5>
                                <p>Swim with friendly pods (seasonal & responsible)</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-umbrella-beach"></i></div>
                                <h5>Sandbank Picnic</h5>
                                <p>Fresh tropical fruits, juice & snacks on a private sandbar</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-mask"></i></div>
                                <h5>All Gear Included</h5>
                                <p>Mask, snorkel, fins, and life jackets provided</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-camera"></i></div>
                                <h5>GoPro Rental</h5>
                                <p>Capture underwater memories (optional add‑on)</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-icon"><i class="fas fa-ship"></i></div>
                                <h5>Boat with Shade</h5>
                                <p>Comfortable 12‑seater, toilet & fresh water rinse</p>
                            </div>
                        </div>
                        <p>Led by certified marine guides, this tour combines adventure with conservation. We follow
                            strict dolphin‑watching ethics (no chasing, safe distance) and support local reef protection
                            initiatives. Suitable for beginners and experienced snorkelers alike.</p>
                    </div>

                    <!-- Itinerary Tab -->
                    <div id="itinerary" class="tab-pane">
                        <h3 class="mb-4">Your Ocean Safari – Step by Step</h3>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-time">08:00 – 08:30</div>
                                <div class="timeline-content">
                                    <h5>Pick‑up & Welcome</h5>
                                    <p>Hotel pick‑up in Watamu/Kilifi. Briefing on safety, marine life, and responsible
                                        dolphin interaction.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-time">08:30 – 09:45</div>
                                <div class="timeline-content">
                                    <h5>Dolphin Search & Swim</h5>
                                    <p>Cruise to dolphin hotspots. When a pod is located, you’ll have up to 45 minutes
                                        to snorkel and observe them in their natural habitat (no touching or feeding).
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-time">09:45 – 11:00</div>
                                <div class="timeline-content">
                                    <h5>Coral Garden Snorkeling</h5>
                                    <p>Two different reef sites – shallow and deep. Spot clownfish, moray eels, and if
                                        lucky, a hawksbill turtle.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-time">11:00 – 11:45</div>
                                <div class="timeline-content">
                                    <h5>Sandbank Picnic & Relaxation</h5>
                                    <p>Step onto a pristine sandbar. Enjoy fresh coconut, mango, juice, and light snacks
                                        while taking Insta‑worthy photos.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-time">11:45 – 12:15</div>
                                <div class="timeline-content">
                                    <h5>Return Journey</h5>
                                    <p>Leisurely cruise back, with stops for more dolphin sightings if time permits.
                                        Drop‑off at your accommodation.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Important Notes Tab -->
                    <div id="notes" class="tab-pane">
                        <h3 class="mb-4">What You Should Know</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="notes-section">
                                    <h5><i class="fas fa-check-circle text-success me-2"></i>Included</h5>
                                    <ul>
                                        <li>Hotel pick‑up/drop‑off (Watamu, Kilifi, Malindi)</li>
                                        <li>Snorkeling gear (mask, snorkel, fins, life vest)</li>
                                        <li>Professional marine guide</li>
                                        <li>Bottled water, fresh fruit, juice & snacks</li>
                                        <li>All marine park fees</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="notes-section">
                                    <h5><i class="fas fa-hand-peace me-2"></i>What to Bring</h5>
                                    <ul>
                                        <li>Swimsuit & towel</li>
                                        <li>Reef‑safe sunscreen (or wear a UV shirt)</li>
                                        <li>Hat, sunglasses, camera</li>
                                        <li>Cash for extra drinks or tips</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="notes-section">
                                    <h5><i class="fas fa-exclamation-triangle text-warning me-2"></i>Restrictions</h5>
                                    <ul>
                                        <li>Not suitable for non‑swimmers without life jacket</li>
                                        <li>Children under 6 must be accompanied by an adult</li>
                                        <li>Dolphin sightings are wild – we cannot guarantee, but chances >85%</li>
                                        <li>Weather dependent; free rescheduling or full refund</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="notes-section">
                                    <h5><i class="fas fa-leaf me-2"></i>Sustainability Commitment</h5>
                                    <ul>
                                        <li>No touching corals or marine animals</li>
                                        <li>Biodegradable sunscreen only</li>
                                        <li>Part of proceeds fund local reef clean‑ups</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meeting Point / Location Tab -->
                    <div id="location" class="tab-pane">
                        <h3 class="mb-4">Meeting & Departure Points</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="notes-section">
                                    <h5><i class="fas fa-ship"></i> Main Departure Jetty</h5>
                                    <p><strong>Watamu Boat Yard</strong><br>Next to Ocean Sports Resort, Watamu.
                                        <br>GPS: -3.3496, 40.0284
                                    </p>
                                    <p>Free parking available. Please arrive 15 minutes before departure.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="notes-section">
                                    <h5><i class="fas fa-hotel"></i> Hotel Pick‑up</h5>
                                    <p>We pick up from all major hotels in Watamu, Kilifi, and Malindi. Specific time
                                        will be confirmed after booking (usually 07:40–08:10).</p>
                                    <p><i class="fas fa-map-marker-alt"></i> Extra charge for Malindi hotels: KES 500
                                        return.</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="bg-light p-3 rounded-4 text-center">
                                    <i class="fas fa-map fa-2x text-primary mb-2"></i>
                                    <p><strong>Exact location link</strong> will be sent via WhatsApp/email after
                                        confirmation.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div id="reviews" class="tab-pane">
                        <h3 class="mb-4">Guest Reviews (4.9 ★)</h3>
                        <div id="reviewsList">
                            <div class="review-card">
                                <div class="review-header d-flex justify-content-between"><strong>Lena
                                        Schmidt</strong><span>February 2026</span></div>
                                <div class="review-rating"><i class="fas fa-star text-warning"></i><i
                                        class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
                                        class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                </div>
                                <p>Absolutely magical! We swam with a pod of about 30 dolphins. The guide was very
                                    respectful of the animals. Snorkeling sites were like aquariums. The sandbank picnic
                                    was the cherry on top.</p>
                                <div class="admin-reply"><strong>Tour Operator:</strong><br>Thank you Lena! We're
                                    delighted you had such a wonderful encounter.</div>
                            </div>
                            <div class="review-card">
                                <div class="review-header d-flex justify-content-between"><strong>David & Anne
                                        Mwangi</strong><span>January 2026</span></div>
                                <div class="review-rating"><i class="fas fa-star text-warning"></i><i
                                        class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
                                        class="fas fa-star text-warning"></i><i
                                        class="fas fa-star-half-alt text-warning"></i></div>
                                <p>Great value for money. Saw dolphins but they were shy – still amazing to watch from
                                    the boat. Snorkeling gear was clean and new. The crew was very friendly.</p>
                                <div class="admin-reply"><strong>Tour Operator:</strong><br>Asante sana! We always
                                    respect the animals' space, but we're glad you enjoyed the reefs and service.</div>
                            </div>
                        </div>
                        <div class="add-review-form mt-5">
                            <h5>Add Your Review</h5>
                            <div class="row g-3">
                                <div class="col-md-6"><input type="text" id="reviewerName" class="form-control"
                                        placeholder="Your Name"></div>
                                <div class="col-md-6"><select id="reviewRating" class="form-select">
                                        <option value="5">★★★★★ (5)</option>
                                        <option value="4">★★★★☆ (4)</option>
                                        <option value="3">★★★☆☆ (3)</option>
                                    </select></div>
                                <div class="col-12"><textarea id="reviewText" class="form-control" rows="3"
                                        placeholder="Write your review..."></textarea></div>
                                <div class="col-12"><button class="btn btn-primary"
                                        style="background:var(--support-green)" onclick="addNewReview()">Submit
                                        Review</button></div>
                            </div>
                        </div>
                    </div>

                    <!-- Photo Gallery -->
                    <h3 class="mt-5 mb-3">Photo Gallery</h3>
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img
                                    src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=800&h=400&fit=crop"
                                    class="d-block w-100" alt="Dolphins Watamu"></div>
                            <div class="carousel-item"><img
                                    src="https://images.unsplash.com/photo-1560275619-4662e36fa65c?w=800&h=400&fit=crop"
                                    class="d-block w-100" alt="Coral garden"></div>
                            <div class="carousel-item"><img
                                    src="https://images.unsplash.com/photo-1508672019048-805c876b67e2?w=800&h=400&fit=crop"
                                    class="d-block w-100" alt="Sandbank picnic"></div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                    </div>
                </div>
            </div>

            <div class="mt-2 mb-4 text-center">
                <a href="experiences.html" class="btn-back-stays"><i class="fas fa-arrow-left me-2"></i>Back to
                    Experiences</a>
            </div>
        </div>
    </main>
@endsection
