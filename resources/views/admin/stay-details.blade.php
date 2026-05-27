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
        <!-- HIGHLIGHTS TABLE -->
        <div class="card-section mt-2">
            <h6><span><i class="fas fa-star text-warning"></i> Highlights</span>
                <span class="btn-sm-outline open-stay-highlight" data-stays-id="{{ $stays->id }}" data-bs-toggle="modal"
                    data-bs-target="#addHighlightModal">+ Add Highlight </span>
            </h6>
            <div class="table-responsive">
                <table class="stay-table">
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
                            <td data-label="Title">Sunset View</td>
                            <td data-label="Description">Ocean sunset views from every balcony</td>
                            <td data-label="Icon"><i class="fas fa-sun text-warning"></i></td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#highlightModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Title">Beach Access</td>
                            <td data-label="Description">Private beach entry 2min walk</td>
                            <td data-label="Icon"><i class="fas fa-umbrella-beach text-primary"></i></td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#highlightModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Title">Infinity Pool</td>
                            <td data-label="Description">Heated ocean view pool</td>
                            <td data-label="Icon"><i class="fas fa-water text-info"></i></td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#highlightModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Title">Spa & Wellness</td>
                            <td data-label="Description">Full-service spa with ocean views</td>
                            <td data-label="Icon"><i class="fas fa-spa text-success"></i></td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#highlightModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- GALLERY IMAGES -->
        <div class="card-section mt-2">
            <h6><span><i class="fas fa-images"></i> Gallery Images</span>
                <span class="btn-sm-outline open-stay-gallery" data-stays-id="{{ $stays->id }}" data-bs-toggle="modal"
                    data-bs-target="#addGalleryModal">+ Add
                    Image</span>
            </h6>
            <div class="table-responsive">
                <table class="stay-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Image"><img
                                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=80&h=60&fit=crop"
                                    class="gallery-thumb-sm" alt="ocean"></td>
                            <td data-label="Title">Ocean Sunset</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#galleryModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Image"><img
                                    src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?w=80&h=60&fit=crop"
                                    class="gallery-thumb-sm" alt="beach"></td>
                            <td data-label="Title">Beach View</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#galleryModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Image"><img
                                    src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=80&h=60&fit=crop"
                                    class="gallery-thumb-sm" alt="pool"></td>
                            <td data-label="Title">Infinity Pool</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#galleryModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- </div> -->

        <!-- ROOMS & SUITES (full width) -->
        <div class="card-section mt-2">
            <h6><span><i class="fas fa-bed"></i> Rooms & Suites</span>
                <span class="btn-sm-outline open-stay-rooms" data-stays-id="{{ $stays->id }}" data-bs-toggle="modal"
                    data-bs-target="#addRoomModal">+ Add
                    Room</span>
            </h6>
            <div class="table-responsive">
                <table class="stay-table">
                    <thead>
                        <tr>
                            <th>Room name</th>
                            <th>Description</th>
                            <th>Amenities (short)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Room name"><i class="fas fa-water text-info me-1"></i> Ocean View
                                Suite</td>
                            <td data-label="Description">King bed, ocean balcony, luxury bathroom</td>
                            <td data-label="Amenities"><span class="badge bg-light">WiFi, Minibar, Ocean
                                    View</span></td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-view"
                                    data-bs-toggle="modal" data-bs-target="#roomDetailModal"><i
                                        class="fas fa-eye"></i></button><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#roomModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Room name"><i class="fas fa-tree text-success me-1"></i> Deluxe
                                Garden Room</td>
                            <td data-label="Description">Queen bed, garden terrace, quiet zone</td>
                            <td data-label="Amenities"><span class="badge bg-light">WiFi, Garden access</span>
                            </td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-view"
                                    data-bs-toggle="modal" data-bs-target="#roomDetailModal"><i
                                        class="fas fa-eye"></i></button><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#roomModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Room name"><i class="fas fa-umbrella-beach text-primary me-1"></i>
                                Beachfront Villa</td>
                            <td data-label="Description">Private pool, direct beach access</td>
                            <td data-label="Amenities"><span class="badge bg-light">Private pool, Butler, Beach
                                    kit</span></td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-view"
                                    data-bs-toggle="modal" data-bs-target="#roomDetailModal"><i
                                        class="fas fa-eye"></i></button><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#roomModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Room name"><i class="fas fa-mountain-sun text-secondary me-1"></i>
                                Cliff Panorama Suite</td>
                            <td data-label="Description">Floor-to-ceiling windows, sunset deck</td>
                            <td data-label="Amenities"><span class="badge bg-light">Jacuzzi, Fireplace, Premium
                                    WiFi</span></td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-view"
                                    data-bs-toggle="modal" data-bs-target="#roomDetailModal"><i
                                        class="fas fa-eye"></i></button><button class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#roomModal"><i class="fas fa-edit"></i></button><button
                                    class="btn-delete"><i class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- SECOND ROW: GLOBAL AMENITIES + ROOM AMENITIES -->
        <!-- <div class="mt-2"> -->
        <!-- GLOBAL AMENITIES TABLE -->
        <div class="card-section mt-2">
            <h6><span><i class="fas fa-concierge-bell"></i> Global Amenities</span>
                <span class="btn-sm-outline open-stay-amenity" data-stays-id="{{ $stays->id }}" data-bs-toggle="modal"
                    data-bs-target="#addAmenityModal">+ Add
                    Amenity</span>
            </h6>
            <div class="table-responsive">
                <table class="stay-table">
                    <thead>
                        <tr>
                            <th>Amenity</th>
                            <th>Icon</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Amenity">Free WiFi</td>
                            <td data-label="Icon"><i class="fas fa-wifi text-success"></i></td>
                            <td data-label="Description">High-speed fiber optic</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#amenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Amenity">Swimming Pool</td>
                            <td data-label="Icon"><i class="fas fa-water text-primary"></i></td>
                            <td data-label="Description">Infinity ocean view</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#amenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Amenity">Air Conditioning</td>
                            <td data-label="Icon"><i class="fas fa-snowflake text-info"></i></td>
                            <td data-label="Description">Individual climate control</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#amenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Amenity">Restaurant</td>
                            <td data-label="Icon"><i class="fas fa-utensils text-warning"></i></td>
                            <td data-label="Description">Fine dining on site</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#amenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Amenity">Fitness Center</td>
                            <td data-label="Icon"><i class="fas fa-dumbbell text-danger"></i></td>
                            <td data-label="Description">24h gym & yoga studio</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#amenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ROOM-SPECIFIC AMENITIES -->
        <div class="card-section mt-2">
            <h6><span><i class="fas fa-door-open"></i> Room Amenities (per room)</span>
                <span class="btn-sm-outline open-room-amenity" data-stays-id="{{ $stays->id }}" data-bs-toggle="modal"
                    data-bs-target="#addRoomAmenityModal">+ Assign
                    to Room</span>
            </h6>
            <div class="table-responsive">
                <table class="stay-table">
                    <thead>
                        <tr>
                            <th>Amenity</th>
                            <th>Icon</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Amenity">Ocean View Suite: Private Jacuzzi</td>
                            <td data-label="Icon"><i class="fas fa-hot-tub text-info"></i></td>
                            <td data-label="Description">Whirlpool tub on terrace</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#roomAmenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Amenity">Beachfront Villa: Butler Service</td>
                            <td data-label="Icon"><i class="fas fa-user-tie text-warning"></i></td>
                            <td data-label="Description">24/7 dedicated butler</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#roomAmenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Amenity">Deluxe Garden: Outdoor Shower</td>
                            <td data-label="Icon"><i class="fas fa-shower text-success"></i></td>
                            <td data-label="Description">Garden rain shower</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#roomAmenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Amenity">Cliff Suite: Fireplace</td>
                            <td data-label="Icon"><i class="fas fa-fire text-danger"></i></td>
                            <td data-label="Description">Cozy electric fireplace</td>
                            <td data-label="Actions" class="btn-icon-group"><button class="btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#roomAmenityModal"><i
                                        class="fas fa-edit"></i></button><button class="btn-delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- </div> -->
    </div>

    <script>
        $(document).on('click', '.open-stay-highlight', function() {
            $('#staysHighlightId').val($(this).data('stays-id'));
        });

        $(document).on('click', '.open-stay-gallery', function() {
            $('#staysGalleryId').val($(this).data('stays-id'));
        });

        $(document).on('click', '.open-stay-rooms', function() {
            $('#staysRoomId').val($(this).data('stays-id'));
        });

        $(document).on('click', '.open-stay-amenity', function() {
            $('#staysAmenityId').val($(this).data('stays-id'));
        });

        $(document).on('click', '.open-room-amenity', function() {
            $('#staysRoomAmenityId').val($(this).data('stays-id'));
        });
    </script>
@endsection
