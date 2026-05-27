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

    <header class="pricing-header">

        @include('helper.nav')

        <div class="hero-content container">
            <h1 class="hero-title">Simple, Transparent Pricing</h1>
            <p class="hero-subtitle">Plans for hosts and property partners — no hidden fees, just great stays.</p>
        </div>
    </header>

    <main>
        <!-- Pricing Plans Section -->
        <div class="container" id="pricing">
            <div class="section-title">Transparent Pricing Plans</div>
            <div class="pricing-grid fade-up">
                <!-- Starter -->
                <div class="pricing-card">
                    <h3>Starter</h3>
                    <!-- <div class="pricing-price">$29<span>/month</span></div> -->
                    <div class="pricing-description">Perfect for small property owners starting out</div>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> 1 active listing</li>
                        <li><i class="fas fa-check-circle"></i> 8% booking commission</li>
                        <li><i class="fas fa-check-circle"></i> Basic calendar & availability</li>
                        <li><i class="fas fa-check-circle"></i> Guest messaging system</li>
                        <li><i class="fas fa-times-circle"></i> Professional photography</li>
                        <li><i class="fas fa-times-circle"></i> Priority support</li>
                    </ul>
                    <button class="pricing-btn"
                        onclick="alert('✨ Starter plan: start listing your property today. Contact us to activate.')">Get
                        Started →</button>
                </div>
                <!-- Professional -->
                <div class="pricing-card">
                    <h3>Professional</h3>
                    <!-- <div class="pricing-price">$59<span>/month</span></div> -->
                    <div class="pricing-description">Ideal for growing portfolios</div>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Up to 5 listings</li>
                        <li><i class="fas fa-check-circle"></i> 5% commission</li>
                        <li><i class="fas fa-check-circle"></i> Dynamic pricing dashboard</li>
                        <li><i class="fas fa-check-circle"></i> Advanced analytics & insights</li>
                        <li><i class="fas fa-check-circle"></i> Email & chat support</li>
                        <li><i class="fas fa-times-circle"></i> Dedicated account manager</li>
                    </ul>
                    <button class="pricing-btn"
                        onclick="alert('📈 Professional plan: boost your visibility and revenue.')">Choose Plan</button>
                </div>
                <!-- Elite (Popular) -->
                <div class="pricing-card">
                    <div class="popular-ribbon"><i class="fas fa-star"></i> Most Popular</div>
                    <h3>Elite</h3>
                    <!-- <div class="pricing-price">$99<span>/month</span></div> -->
                    <div class="pricing-description">Everything you need to scale</div>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Unlimited listings</li>
                        <li><i class="fas fa-check-circle"></i> 2% commission</li>
                        <li><i class="fas fa-check-circle"></i> Featured placement & SEO boost</li>
                        <li><i class="fas fa-check-circle"></i> Professional photos & virtual tour</li>
                        <li><i class="fas fa-check-circle"></i> Priority 24/7 support (Swahili/Eng)</li>
                        <li><i class="fas fa-check-circle"></i> Verified Host badge</li>
                    </ul>
                    <button class="pricing-btn btn-premium"
                        onclick="alert('🔥 Elite plan – unlimited listings + premium support. Get the best value!')">Upgrade
                        Now</button>
                </div>
                <!-- Enterprise -->
                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="pricing-price">Custom</div>
                    <div class="pricing-description">Custom solutions for hotels, lodges & large estates</div>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Unlimited properties & units</li>
                        <li><i class="fas fa-check-circle"></i> Dedicated account manager</li>
                        <li><i class="fas fa-check-circle"></i> API integration & channel manager</li>
                        <li><i class="fas fa-check-circle"></i> White-glove onboarding & training</li>
                        <li><i class="fas fa-check-circle"></i> SLA-based support 24/7</li>
                        <li><i class="fas fa-check-circle"></i> Global distribution network</li>
                    </ul>
                    <button class="pricing-btn"
                        onclick="alert('🏢 Enterprise plan: contact our team for custom deployment & premium features.')">Contact
                        Sales</button>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="container" id="why">
            <div class="section-title">Why Partner with SaviraNest?</div>
            <div class="why-grid fade-up">
                <div class="why-card"><i class="fas fa-globe-africa"></i>
                    <h4>Local & Global Reach</h4>
                    <p>Attract travelers from Kenya and worldwide looking for authentic, curated stays.</p>
                </div>
                <div class="why-card"><i class="fas fa-chart-line"></i>
                    <h4>Revenue Maximization</h4>
                    <p>Smart pricing tools and marketing exposure help you earn more year-round.</p>
                </div>
                <div class="why-card"><i class="fas fa-mobile-alt"></i>
                    <h4>Host Dashboard</h4>
                    <p>Manage bookings, messages, and payouts easily from any device.</p>
                </div>
                <div class="why-card"><i class="fas fa-headset"></i>
                    <h4>Local Support</h4>
                    <p>24/7 assistance in English and Swahili, plus dedicated account managers for large portfolios.</p>
                </div>
            </div>
        </div>

        <!-- FAQ Accordion Section -->
        <div class="container" id="faq">
            <div class="section-title">Frequently Asked Questions</div>
            <div class="fade-up">
                {{-- <div class="faq-item">
                    <div class="faq-question"><span>How do I list my property on SaviraNest?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Getting listed is simple and takes less than 30 minutes. Sign up for a host
                        account, choose a plan that fits your portfolio size, and complete your property profile —
                        including photos, amenities, pricing, and availability. Our review team checks every submission
                        for quality and accuracy. Once approved, your listing goes live within 48 hours and becomes
                        immediately visible to thousands of active travellers on the platform.</div>
                </div> --}}
                <div class="faq-item">
                    <div class="faq-question"><span>Are there long-term contracts?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">No long-term commitment is required. All SaviraNest host plans operate on a
                        flexible month-to-month basis. You can upgrade, downgrade, or cancel your plan at any time from
                        your account dashboard with no penalties, exit fees, or notice periods. If you cancel mid-cycle,
                        your plan remains active until the end of the billing period and you will not be charged again.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>How do I receive payouts from bookings?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Payouts are processed automatically within 24 hours of each guest's
                        confirmed check-in. You can receive funds via direct bank transfer, M-Pesa, Airtel Money, or
                        PayPal — whichever you set as your preferred payout method in your account settings. You can
                        update your payout details at any time, and a full earnings breakdown is available in your host
                        dashboard, including pending, processed, and historical transactions.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>Do you offer a free trial for property managers?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Yes — new hosts can access a 14-day free trial of the Professional plan with
                        no credit card required and no commitment. The trial includes full access to multi-property
                        management tools, dynamic pricing, analytics, and priority support. At the end of the trial
                        period, you can choose to subscribe or downgrade to a free tier. Contact our onboarding team at
                        host@saviranest.com to activate your trial.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>How many properties can I list under one account?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">The number of properties you can list depends on your chosen plan. The
                        Starter plan supports up to 2 listings, the Growth plan supports up to 10, and the Professional
                        plan offers unlimited listings. Each property gets its own dedicated profile page, availability
                        calendar, and pricing controls. If you manage a large portfolio and need a custom setup, our
                        enterprise team can build a tailored solution — reach out to us at host@saviranest.com for a
                        consultation.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>Can I control my own pricing and availability?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Absolutely. You have full control over your nightly rates, minimum stay
                        requirements, and availability calendar. You can set different prices for weekdays, weekends,
                        and peak seasons, and block out dates for personal use or maintenance at any time. Professional
                        and Growth plan users also get access to our dynamic pricing tool, which automatically adjusts
                        rates based on local demand, seasonal trends, and competitor pricing to help you maximise
                        occupancy and revenue.</div>
                </div>
                {{-- <div class="faq-item">
                    <div class="faq-question"><span>What happens if a guest damages my property?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">All bookings made through SaviraNest include host damage protection up to a
                        set limit depending on your plan. If a guest causes damage, report it through your host
                        dashboard within 48 hours of check-out with photographic evidence and an itemised cost estimate.
                        Our resolution team reviews the claim and, where validated, compensates you from the guest's
                        security deposit or the SaviraNest Host Guarantee fund. For high-value properties, we strongly
                        recommend enabling the optional security deposit feature on your listings as an additional layer
                        of protection.</div>
                </div> --}}
                <div class="faq-item">
                    <div class="faq-question"><span>How does the guest review system work for hosts?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">After every completed stay, both the guest and host are invited to leave a
                        review. Guest reviews are posted on your listing page and contribute to your overall host
                        rating, which directly influences your visibility in search results. You also have the
                        opportunity to respond publicly to any review — a great way to show future guests how attentive
                        and professional you are. Reviews are moderated by our team to ensure they meet our community
                        guidelines, and any review that violates our policies can be flagged for removal.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>Is my listing visible internationally?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">Yes. SaviraNest is accessible globally, and your listing is visible to
                        travellers searching from any country. Listings are displayed in multiple currencies based on
                        the guest's location, and our platform supports multilingual browsing. To maximise your
                        international appeal, we recommend writing your property description in clear, simple English
                        and uploading high-quality photos that accurately showcase the space. Properties with
                        professional photography receive on average 40% more bookings than those without.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question"><span>What support is available to help me set up my listing?</span><i
                            class="fas fa-plus faq-icon"></i></div>
                    <div class="faq-answer">We offer a range of onboarding resources to help you get started. All new
                        hosts have access to our step-by-step listing setup guide, a video walkthrough library, and a
                        dedicated host help centre. Professional plan subscribers are assigned a personal onboarding
                        specialist who can assist with pricing strategy, photo tips, and listing optimisation during
                        their first 30 days. For ongoing support, our host support team is available 7 days a week via
                        live chat and email at host@saviranest.com.</div>
                </div>
            </div>
        </div>

        <!-- CTA Banner -->
        <div class="container">
            <div class="cta-block fade-up">
                <i class="fas fa-house-chimney"
                    style="font-size: 2.5rem; color: var(--sunrise-gold); margin-bottom: 12px; display: inline-block;"></i>
                <h3 style="font-size: 1.8rem; margin-bottom: 12px;">Ready to Share Your Nest?</h3>
                <p>Join SaviraNest and welcome travelers from around the world. Start earning today.</p>
                <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="btn-hero-outline">Become a Host →</a>
                </div>
            </div>
        </div>
    </main>
@endsection
