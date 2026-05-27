@extends('layout.admin')

@section('title', $seo['title'])

@section('meta')

    <meta property="og:title" content="{{ $seo['title'] }}">
    {{-- <meta property="og:description" content="{{ $seo['description'] }}"> --}}
    <meta property="og:image" content="{{ $seo['image'] }}">
    {{-- <meta property="og:url" content="{{ $seo['url'] }}"> --}}
    <meta property="og:type" content="{{ $seo['type'] }}">
    {{-- <link rel="canonical" href="{{ $seo['canonical'] }}"> --}}

@endsection

@section('content')
    <div class="dashboard-content">
        <!-- HIGHLIGHTS Section -->
        <div class="card-section">
            <div class="card-header-custom">
                <h3><i class="fas fa-star text-warning me-2"></i> Highlights</h3>
                {{-- <span class="btn-sm-outline">+ Add Highlight</span> --}}
                <a href="#" class="btn-sm-outline open-highlights" data-exps-id="{{ $exps->id }}"
                    data-bs-toggle="modal" data-bs-target="#addHighlightModal">
                    + Add Highlight &nbsp;
                </a>

            </div>
            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Icon</th>
                            <th style="width:90px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sunset View</td>
                            <td>Ocean sunset views from every balcony</td>
                            <td><i class="fas fa-sun text-warning"></i></td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td>Beach Access</td>
                            <td>Private beach entry 2min walk</td>
                            <td><i class="fas fa-umbrella-beach text-primary"></i></td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td>Infinity Pool</td>
                            <td>Heated ocean view pool</td>
                            <td><i class="fas fa-water text-info"></i></td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td>Spa & Wellness</td>
                            <td>Full-service spa with ocean views</td>
                            <td><i class="fas fa-spa text-success"></i></td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- GALLERY Section -->
        <div class="card-section">
            <div class="card-header-custom">
                <h3><i class="fas fa-images me-2 text-info"></i> Gallery Images</h3>
                {{-- <span class="btn-sm-outline"></span> --}}
                <a href="#" class="btn-sm-outline open-images" data-exps-id="{{ $exps->id }}"
                    data-bs-toggle="modal" data-bs-target="#addGalleryModal">
                    + Add Image &nbsp;
                </a>
            </div>
            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=80&h=60&fit=crop"
                                    class="gallery-thumb" alt="ocean"></td>
                            <td>Ocean Sunset</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash"></i></span></td>
                        </tr>
                        <tr>
                            <td><img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?w=80&h=60&fit=crop"
                                    class="gallery-thumb" alt="beach"></td>
                            <td>Beach View</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash"></i></span></td>
                        </tr>
                        <tr>
                            <td><img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=80&h=60&fit=crop"
                                    class="gallery-thumb" alt="pool"></td>
                            <td>Infinity Pool</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash"></i></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ITINERARY Steps -->
        <div class="card-section">
            <div class="card-header-custom">
                <h3><i class="fas fa-list-ol me-2 text-primary"></i> Itinerary Steps</h3>
                {{-- <span class="btn-sm-outline">+ Add Step</span> --}}
                <a href="#" class="btn-sm-outline open-itenary" data-exps-id="{{ $exps->id }}"
                    data-bs-toggle="modal" data-bs-target="#addExperienceItineraryModal">
                    + Add Step &nbsp;
                </a>
            </div>
            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge-time">08:00 – 08:30</span></td>
                            <td>Pick‑up & Welcome</td>
                            <td>Hotel pick‑up in Watamu/Kilifi. Briefing on safety, marine life.</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td><span class="badge-time">08:30 – 09:45</span></td>
                            <td>Dolphin Search & Swim</td>
                            <td>Cruise to dolphin hotspots. Snorkel and observe in natural habitat.</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td><span class="badge-time">09:45 – 11:00</span></td>
                            <td>Coral Garden Snorkeling</td>
                            <td>Two reef sites – shallow and deep. Spot clownfish, turtles.</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td><span class="badge-time">11:00 – 11:45</span></td>
                            <td>Sandbank Picnic</td>
                            <td>Fresh coconut, mango, juice, snacks on a pristine sandbar.</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td><span class="badge-time">11:45 – 12:15</span></td>
                            <td>Return Journey</td>
                            <td>Leisurely cruise back, drop‑off at accommodation.</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- IMPORTANT NOTES -->
        <div class="card-section">
            <div class="card-header-custom">
                <h3><i class="fas fa-clipboard-list me-2 text-warning"></i> Important Notes</h3>
                {{-- <span class="btn-sm-outline">+ Add Note</span> --}}
                <a href="#" class="btn-sm-outline open-notes" data-exps-id="{{ $exps->id }}"
                    data-bs-toggle="modal" data-bs-target="#addNoteModal">
                    + Add Note &nbsp;
                </a>
            </div>
            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Note / Detail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">✅
                                    Included</span></td>
                            <td>Hotel pick‑up/drop‑off (Watamu, Kilifi, Malindi)</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">✅
                                    Included</span></td>
                            <td>Snorkeling gear (mask, snorkel, fins, life vest)</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-info bg-opacity-10 text-info px-3 py-2 rounded-pill">🎒 What to
                                    Bring</span></td>
                            <td>Swimsuit, towel, reef‑safe sunscreen, hat, camera</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2 rounded-pill">⚠️
                                    Restrictions</span></td>
                            <td>Not suitable for non‑swimmers without life jacket</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-secondary bg-opacity-10 px-3 py-2 rounded-pill">🌿
                                    Sustainability</span></td>
                            <td>No touching corals – we support reef clean‑ups</td>
                            <td class="btn-icon-group"><span class="btn-icon btn-edit"><i
                                        class="fas fa-edit"></i></span><span class="btn-icon btn-delete"><i
                                        class="fas fa-trash-alt"></i></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- MEETING POINT Information -->
        <div class="card-section">
            <div class="card-header-custom">
                <h3><i class="fas fa-map-marker-alt me-2 text-danger"></i> Meeting Point Information</h3>
                {{-- <span class="btn-sm-outline">Edit Details</span> --}}
                <a href="#" class="btn-sm-outline open-info" data-exps-id="{{ $exps->id }}"
                    data-bs-toggle="modal" data-bs-target="#addInformationModal">
                    + Important Info &nbsp;
                </a>
            </div>
            <div class="meeting-point-card">
                <div class="meeting-info">
                    <h5><i class="fas fa-location-dot text-danger"></i> Watamu Boat Yard</h5>
                    <p><i class="fas fa-map-pin"></i> Next to Ocean Sports Resort, Watamu, Kenya</p>
                    <p><i class="fas fa-external-link-alt"></i> <a href="#">https://maps.app.goo.gl/example</a></p>
                    <p><i class="fas fa-car-side"></i> <strong>Pick-up:</strong> Free pick-up from Watamu & Kilifi hotels
                        (07:40–08:10). Malindi hotels extra KES 500 return.</p>
                </div>
                <span class="btn-outline border rounded-pill px-4 py-2">Edit</span>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.open-highlights', function() {
            $('#experienceHighlightId').val($(this).data('exps-id'));
        });

        $(document).on('click', '.open-info', function() {
            $('#experienceInfoId').val($(this).data('exps-id'));
        });

        $(document).on('click', '.open-notes', function() {
            $('#experienceNotesId').val($(this).data('exps-id'));
        });

        $(document).on('click', '.open-images', function() {
            $('#experienceGalleryId').val($(this).data('exps-id'));
        });

        $(document).on('click', '.open-itenary', function() {
            $('#experienceItenaryId').val($(this).data('exps-id'));
        });
    </script>

@endsection
