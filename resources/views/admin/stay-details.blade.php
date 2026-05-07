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
        <!-- 2‑column layout: HIGHLIGHTS + GALLERY -->
        <!-- <div class="grid-2cols"> -->
        <!-- HIGHLIGHTS TABLE -->
        <div class="card-section mt-2">
            <h6><span><i class="fas fa-star text-warning"></i> Highlights</span>
                <span class="btn-sm-outline" data-bs-toggle="modal" data-bs-target="#highlightModal">+ Add
                    Highlight</span>
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
                <span class="btn-sm-outline" data-bs-toggle="modal" data-bs-target="#galleryModal">+ Add
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
                <span class="btn-sm-outline" data-bs-toggle="modal" data-bs-target="#roomModal">+ Add
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
                <span class="btn-sm-outline" data-bs-toggle="modal" data-bs-target="#amenityModal">+ Add
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
                <span class="btn-sm-outline" data-bs-toggle="modal" data-bs-target="#roomAmenityModal">+ Assign
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

    <!-- ======================== STATIC MODALS (unchanged) ======================== -->
    <div class="modal fade" id="highlightModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Highlight Item</h5><button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body"><label class="form-label">Title</label><input type="text"
                        class="form-control mb-3" value="Sample Highlight"><label class="form-label">Description</label>
                    <textarea class="form-control mb-3" rows="2">Amazing oceanfront experience</textarea><label class="form-label">Icon
                        Class</label><input type="text" class="form-control" value="fas fa-star text-warning">
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button><button type="button" class="btn btn-primary">Save
                        Highlight</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gallery Image</h5><button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body"><label class="form-label">Image URL</label><input type="text"
                        class="form-control mb-3"
                        value="https://images.unsplash.com/photo-1507525428034-b723cf961d3e"><label
                        class="form-label">Title</label><input type="text" class="form-control mb-3"
                        value="Ocean Sunset"><label class="form-label">Description</label>
                    <textarea class="form-control" rows="2">Golden hour at the shore</textarea>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button><button type="button" class="btn btn-primary">Save
                        Image</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="roomModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Room / Suite</h5><button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6"><label class="form-label">Room Name</label><input type="text"
                                class="form-control mb-3" value="Ocean View Suite"></div>
                        <div class="col-md-6"><label class="form-label">Extra Price (KES)</label><input type="number"
                                class="form-control mb-3" value="8500"></div>
                    </div><label class="form-label">Description</label>
                    <textarea class="form-control mb-3" rows="2">King bed, ocean balcony, luxury bathroom</textarea><label class="form-label">Image
                        URL</label><input type="text" class="form-control mb-3" placeholder="https://...jpg"><label
                        class="form-label">Amenities (comma)</label><input type="text" class="form-control mb-3"
                        value="WiFi, Minibar, Ocean View"><label class="form-label">Icon Class</label><input
                        type="text" class="form-control" value="fas fa-water text-info">
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button><button type="button" class="btn btn-primary">Save
                        Room</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="roomDetailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Room Details</h5><button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h5><i class="fas fa-water text-info me-2"></i> Ocean View Suite</h5>
                    <p><strong>Extra Price:</strong> KES 8,500 per night</p>
                    <p><strong>Description:</strong> King bed, ocean balcony, luxury bathroom, marble finishes, rain
                        shower.</p>
                    <p><strong>Amenities:</strong> WiFi, Minibar, Ocean View, 24h room service</p>
                    <p><strong>Icon:</strong> <i class="fas fa-water text-info"></i> fas fa-water</p>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="amenityModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Global Amenity</h5><button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body"><label class="form-label">Amenity Name</label><input type="text"
                        class="form-control mb-3" value="Free WiFi"><label class="form-label">Icon Class</label><input
                        type="text" class="form-control mb-3" value="fas fa-wifi text-success"><label
                        class="form-label">Description</label>
                    <textarea class="form-control" rows="2">High-speed fiber optic throughout the resort</textarea>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button><button type="button" class="btn btn-primary">Save
                        Amenity</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="roomAmenityModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Room Amenity</h5><button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body"><label class="form-label">Select Room</label><select class="form-select mb-3">
                        <option>Ocean View Suite</option>
                        <option>Deluxe Garden Room</option>
                        <option>Beachfront Villa</option>
                        <option>Cliff Panorama Suite</option>
                    </select><label class="form-label">Amenity Name</label><input type="text"
                        class="form-control mb-3" value="Private Jacuzzi"><label class="form-label">Icon
                        Class</label><input type="text" class="form-control mb-3"
                        value="fas fa-hot-tub text-info"><label class="form-label">Description</label>
                    <textarea class="form-control" rows="2">Whirlpool tub with ocean view</textarea>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button><button type="button" class="btn btn-primary">Assign
                        Amenity</button></div>
            </div>
        </div>
    </div>
@endsection
