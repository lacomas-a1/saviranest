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

    <header class="booking-header">

        @include('helper.nav')

        <div class="hero-content container">
            <h1 class="hero-title">Book Your Stay or Experience</h1>
            <p class="hero-subtitle">Secure your dream accommodation or adventure in Kenya — instant confirmation</p>
        </div>
    </header>

    <div class="container">
        <div class="booking-card">
            <!-- Toggle between Stay and Experience -->
            <div class="toggle-booking-type">
                <button type="button" id="stayTypeBtn" class="booking-type-btn active"><i class="fas fa-bed me-2"></i>
                    Book a Stay</button>
                <button type="button" id="experienceTypeBtn" class="booking-type-btn"><i class="fas fa-hiking me-2"></i>
                    Book an Experience</button>
            </div>

            <!-- Main Booking Form -->
            <form id="bookingForm">
                <!-- Hidden field to store booking type -->
                <input type="hidden" id="bookingType" value="stay">

                <!-- STAY SPECIFIC FIELDS (visible by default) -->
                <div id="stayFields">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label-custom"><i class="fas fa-hotel text-warning"></i> Select Property
                                *</label>
                            <select id="stayProperty" class="form-select-booking" required>
                                <option value="">-- Choose a stay --</option>
                                <option value="Watamu Beach Resort" data-price="8500">Watamu Beach Resort – KES
                                    8,500/night</option>
                                <option value="Diani Reef Beach Resort" data-price="12000">Diani Reef Beach Resort – KES
                                    12,000/night</option>
                                <option value="Sarova Whitesands Beach Resort" data-price="10500">Sarova Whitesands –
                                    KES 10,500/night</option>
                                <option value="Masai Mara Sopa Lodge" data-price="18000">Masai Mara Sopa Lodge – KES
                                    18,000/night (FB)</option>
                                <option value="The Sands at Nomad" data-price="14000">The Sands at Nomad – KES
                                    14,000/night</option>
                                <option value="Lamu Swahili House" data-price="9500">Lamu Swahili House – KES
                                    9,500/night</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label-custom"><i class="fas fa-tag"></i> Room Type</label>
                            <select id="roomType" class="form-select-booking">
                                <option value="Standard">Standard Room</option>
                                <option value="Deluxe">Deluxe / Ocean View</option>
                                <option value="Suite">Suite / Private Villa</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label-custom"><i class="fas fa-calendar-check"></i> Check-in Date
                                *</label>
                            <input type="date" id="checkin" class="form-control-booking" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label-custom"><i class="fas fa-calendar-day"></i> Check-out Date
                                *</label>
                            <input type="date" id="checkout" class="form-control-booking" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label class="form-label-custom"><i class="fas fa-user-friends"></i> Adults</label>
                            <input type="number" id="adults" class="form-control-booking" value="2" min="1" max="10">
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="form-label-custom"><i class="fas fa-child"></i> Children</label>
                            <input type="number" id="children" class="form-control-booking" value="0" min="0" max="6">
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="form-label-custom"><i class="fas fa-bed"></i> Nights *</label>
                            <input type="number" id="nights" class="form-control-booking" placeholder="Auto-calculated"
                                readonly style="background:#eef2ff;">
                        </div>
                    </div>
                </div>

                <!-- EXPERIENCE SPECIFIC FIELDS (hidden initially) -->
                <div id="experienceFields" style="display: none;">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="form-label-custom"><i class="fas fa-tree"></i> Select Experience *</label>
                            <select id="experienceItem" class="form-select-booking">
                                <option value="">-- Choose an adventure --</option>
                                <option value="Masai Mara Full Day Safari" data-price="12500">Masai Mara Full Day Safari
                                    (incl. lunch) – KES 12,500 p.p</option>
                                <option value="Diani Snorkeling & Wasini Island" data-price="5500">Diani Snorkeling &
                                    Wasini Island – KES 5,500 p.p</option>
                                <option value="Watamu Marine Park & Mida Creek" data-price="4800">Watamu Marine Park &
                                    Mida Creek – KES 4,800 p.p</option>
                                <option value="Lamu Dhow Sunset Cruise" data-price="3200">Lamu Dhow Sunset Cruise – KES
                                    3,200 p.p</option>
                                <option value="Hell's Gate Cycling & Hiking" data-price="3900">Hell's Gate Cycling &
                                    Hiking – KES 3,900 p.p</option>
                                <option value="Coffee Farm & Kiambethu Tea Tour" data-price="4500">Farm-to-Table Coffee
                                    Tour – KES 4,500 p.p</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label-custom"><i class="fas fa-calendar-alt"></i> Preferred Date
                                *</label>
                            <input type="date" id="experienceDate" class="form-control-booking">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label-custom"><i class="fas fa-users"></i> Number of Participants
                                *</label>
                            <input type="number" id="participants" class="form-control-booking" value="2" min="1"
                                max="20">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label-custom"><i class="fas fa-clock"></i> Preferred Time Slot</label>
                        <select id="timeSlot" class="form-select-booking">
                            <option value="Morning (8:00 AM)">Morning (8:00 AM)</option>
                            <option value="Afternoon (1:00 PM)">Afternoon (1:00 PM)</option>
                            <option value="Full Day">Full Day</option>
                        </select>
                    </div>
                </div>

                <!-- Common Guest Information -->
                <div class="row mt-3">
                    <div class="col-md-4 form-group">
                        <label class="form-label-custom"><i class="fas fa-user"></i> Full Name *</label>
                        <input type="text" id="guestName" class="form-control-booking" placeholder="John Mwangi"
                            required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="form-label-custom"><i class="fas fa-envelope"></i> Email *</label>
                        <input type="email" id="guestEmail" class="form-control-booking" placeholder="hello@example.com"
                            required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="form-label-custom"><i class="fas fa-phone-alt"></i> Phone (WhatsApp) *</label>
                        <input type="tel" id="guestPhone" class="form-control-booking" placeholder="+2547XXXXXXXX"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="form-label-custom"><i class="fas fa-comment"></i> Special Requests</label>
                        <textarea rows="3" placeholder="Dietary, accessibility,..." class="form-control-booking"></textarea>
                    </div>
                </div>

                <!-- Price Summary & Booking Button -->
                <div class="price-summary" id="priceSummary">
                    <div class="d-flex justify-content-between align-items-center">
                        <span><strong>Total estimated price:</strong></span>
                        <span id="totalAmountDisplay" class="fw-bold fs-5" style="color: var(--support-green);">KES
                            0</span>
                    </div>
                    <div class="small text-muted mt-1" id="breakdownText">Select options above to see total</div>
                </div>

                <button type="submit" class="btn-book-now mt-3"><i class="fas fa-lock me-2"></i> Confirm & Proceed to
                    Payment</button>
            </form>
        </div>
    </div>

@endsection
