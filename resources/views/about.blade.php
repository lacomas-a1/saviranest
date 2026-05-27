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
    <header class="about-header">

        @include('helper.nav')

        <div class="hero-content container">
            <h1 class="hero-title">Your Nest Away From Home</h1>
            <p class="hero-subtitle">Handcrafted stays, warm hospitality, and unforgettable journeys.</p>
        </div>
    </header>

    <main>
        <!-- About Section (Hero + Intro) -->
        <div class="container" id="about-us">
            <div class="about-wrapper fade-up">
                <div class="about-grid">
                    <div class="about-text">
                        <div class="hero-badge"><i class="fas fa-feather-alt"></i> Curated for comfort</div>
                        <p class="mb-4" style="font-size: 1rem; line-height: 1.6;">SaviraNest was born from a love for
                            authentic travel and handcrafted stays. We connect travelers with extraordinary homes — from
                            bustling city apartments to wild safari nooks. Every stay is curated for comfort, local
                            charm, and unforgettable memories.</p>
                        <p style="font-size: 0.95rem;">Discover handpicked accommodations — from cozy city apartments to
                            wild safari lodges. Book your perfect escape in seconds.</p>
                        <div class="trust-badge">
                            <div><i class="fas fa-shield-alt"></i> <span>Secure booking</span></div>
                            <div><i class="fas fa-headset"></i> <span>24/7 support</span></div>
                            <div><i class="fas fa-wifi"></i> <span>Verified stays</span></div>
                        </div>
                    </div>
                    <div class="about-image">
                        <img src="{{ asset('assets/image/about-us.jpg') }}"
                            alt="Luxury home" class="rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>

            <!-- Mission & Vision Cards -->
            <div class="mission-vision-grid fade-up">
                <div class="mv-card">
                    <i class="fas fa-bullseye"></i>
                    <h3>Our Mission</h3>
                    <p>To empower property owners and managers with an intuitive platform that reduces vacancies,
                        streamlines operations, and maximizes returns — while giving travelers a seamless booking
                        experience.</p>
                </div>
                <div class="mv-card">
                    <i class="fas fa-eye"></i>
                    <h3>Our Vision</h3>
                    <p>To become the leading hospitality ecosystem in Africa, creating genuine connections between
                        travelers and extraordinary stays through innovative technology and local heart.</p>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="container" id="features">
            <div class="section-title">Powerful Features</div>
            <div class="features-grid fade-up">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4>Seamless Booking</h4>
                    <p>Instant reservations, secure payments, and real-time availability — book your dream stay in
                        seconds.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-tools"></i></div>
                    <h4>Guest Support Portal</h4>
                    <p>24/7 assistance, local recommendations, and on-trip help — we're always a message away.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-file-signature"></i></div>
                    <h4>Digital Itineraries</h4>
                    <p>Personalized travel guides, check-in instructions, and local tips delivered to your inbox.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-chart-pie"></i></div>
                    <h4>Smart Pricing</h4>
                    <p>Dynamic rates and exclusive deals — get the best value for every stay.</p>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="container" id="why">
            <div class="section-title">Why Travelers Love SaviraNest</div>
            <div class="why-grid fade-up">
                <div class="why-card"><i class="fas fa-shield-alt"></i>
                    <h4>Secure & Verified</h4>
                    <p>Every property is verified for quality, safety, and authenticity — no surprises.</p>
                </div>
                <div class="why-card"><i class="fas fa-charging-station"></i>
                    <h4>Effortless Booking</h4>
                    <p>From search to check-in, our platform makes travel planning smooth and stress-free.</p>
                </div>
                <div class="why-card"><i class="fas fa-mobile-alt"></i>
                    <h4>Local Expertise</h4>
                    <p>We partner with hosts who share insider tips, making your stay truly immersive.</p>
                </div>
                <div class="why-card"><i class="fas fa-headset"></i>
                    <h4>24/7 Concierge</h4>
                    <p>Dedicated support in English and Swahili — we're here for you around the clock.</p>
                </div>
            </div>
        </div>

        <!-- FAQ Accordion Section -->
        <div class="container" id="faq">
            <div class="section-title">Frequently Asked Questions</div>
            <div class="fade-up">
                <div class="faq-item">
                    <div class="faq-question"><span>How do I book a stay on SaviraNest?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Booking is simple and takes just a few minutes. Search your desired
                        destination, enter your travel dates and number of guests, then browse our curated listings
                        filtered by price, amenities, and property type. Once you find the perfect match, click "Book
                        Now" to proceed to our secure checkout. Payment is processed instantly via card, mobile money,
                        or bank transfer, and a detailed confirmation — including host contact info, check-in
                        instructions, and a map pin — lands in your inbox within minutes.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>What is the cancellation policy?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Most properties offer free cancellation up to 48 hours before your scheduled
                        check-in, with a full refund processed within 5–7 business days. Some hosts offer flexible
                        same-day cancellations, while others apply a partial refund for shorter notice. The exact policy
                        for each property is prominently displayed on its listing page before you book, so there are
                        never any surprises. If your plans change due to unforeseen circumstances, our support team can
                        also review exception requests on a case-by-case basis.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>Are all properties verified?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Absolutely. Every SaviraNest property goes through a rigorous multi-step
                        verification process before appearing on our platform. This includes professional photo
                        validation to ensure listings accurately reflect the space, host identity checks via
                        government-issued ID, cross-referencing of property ownership or rental rights, and a thorough
                        analysis of guest reviews from previous stays. Verified properties carry a blue checkmark on
                        their listing, and our quality team conducts periodic re-audits to maintain standards.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>How can I contact support during my stay?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Our 24/7 concierge team is always within reach. You can contact us via live
                        chat directly in the app, email us at support@saviranest.com, or call our dedicated helpline —
                        the number is included in every booking confirmation. For urgent on-site issues like a lockout
                        or maintenance emergency, each reservation also includes a direct line to your host. If the host
                        is unresponsive, our team escalates immediately to ensure your comfort and safety are never
                        compromised.</div>
                </div>
                {{-- <div class="faq-item">
                    <div class="faq-question"><span>Can I list my own property on SaviraNest?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Yes — becoming a host is free and straightforward. Create a host account,
                        submit your property details, upload high-quality photos, and set your own pricing and
                        availability calendar. Our onboarding team will guide you through the verification process and
                        help you craft a listing that stands out. Once approved, your property goes live and is visible
                        to thousands of travellers. Hosts typically receive their first booking within 7 days of
                        listing. Payouts are made directly to your bank account or mobile wallet within 24 hours of each
                        guest's check-in.</div>
                </div> --}}
                <div class="faq-item">
                    <div class="faq-question"><span>What amenities can I expect at a SaviraNest property?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Amenities vary by property, but every listing on SaviraNest must meet a
                        baseline standard that includes clean bedding and towels, a functioning kitchen or kitchenette,
                        reliable Wi-Fi, and hot water. Many properties go well beyond the basics — offering pools,
                        private gardens, smart TVs, co-working setups, and local experience kits curated by the host.
                        You can filter search results by any amenity combination, and a full amenities checklist is
                        displayed on every listing so you always know exactly what's included before you book.</div>
                </div>
                {{-- <div class="faq-item">
                    <div class="faq-question"><span>Is my payment information secure?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Your financial security is our top priority. SaviraNest uses 256-bit SSL
                        encryption across all transactions and is fully PCI-DSS compliant. We never store raw card
                        numbers — payments are tokenised through our certified payment partners. Funds are held in
                        escrow and only released to hosts after you've checked in, giving you protection against
                        fraudulent listings. If a property fails to meet the standards described, you can raise a
                        dispute within 24 hours of arrival and receive a full refund or alternative accommodation
                        arranged at no extra cost.</div>
                </div> --}}
                <div class="faq-item">
                    <div class="faq-question"><span>Are pets allowed in SaviraNest properties?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Pet policies are set by individual hosts and clearly indicated on each
                        listing with a "Pets welcome", "Pets on request", or "No pets" label. Many of our properties are
                        pet-friendly — especially countryside cottages, villas, and stand-alone homes. When searching,
                        simply use the "Pets allowed" filter to narrow results to suitable options. If you're unsure,
                        you can message the host directly before booking to confirm details such as pet size limits or
                        any additional deposit required. SaviraNest does not charge a platform fee for bringing pets —
                        any pet-related fees are set entirely by the host.</div>
                </div>
            </div>
        </div>

        <!-- Call To Action Banner -->
        <div class="container">
            <div class="cta-block fade-up">
                <i class="fas fa-envelope-open-text"
                    style="font-size: 2.5rem; color: var(--sunrise-gold); margin-bottom: 12px; display: inline-block;"></i>
                <h3 style="font-size: 1.8rem; margin-bottom: 12px;">Join the Nest Community</h3>
                <p>Get exclusive offers, new stay alerts, and travel inspiration straight to your inbox.</p>
                <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="btn-hero-outline">Subscribe →</a>
                </div>
            </div>
        </div>
    </main>

@endsection
