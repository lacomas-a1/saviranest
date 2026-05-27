 <!-- Add Stay Modal (static, no JS) -->
 <div class="modal fade" id="addStayModal" tabindex="-1" aria-labelledby="addStayModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add New Stay</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <form id="addStayForm" enctype="multipart/form-data">
                     <div class="row g-3">

                         <div class="col-md-4">
                             <label class="form-label">Property Title *</label>
                             <input type="text" class="form-control" id="stayTitle" name="title">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Location *</label>
                             <input type="text" class="form-control" id="stayLocation" name="location">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Category *</label>
                             <select class="form-select" id="stayCategory" name="category">
                                 <option value="coast">Coast / Beach</option>
                                 <option value="safari">Safari Lodges</option>
                                 <option value="family">Family Homes</option>
                                 <option value="luxury">Luxury Apartments</option>
                             </select>
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Rate *</label>
                             <select class="form-select" id="stayRate" name="rate_type">
                                 <option value="per_night">Per Night</option>
                                 <option value="per_day">Per Day</option>
                             </select>
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Price (KES/night) *</label>
                             <input type="number" class="form-control" id="stayPrice" name="price">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Currency *</label>
                             <input type="text" class="form-control" id="stayCurrency" name="currency">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Rating (0-5) *</label>
                             <input type="number" step="0.1" class="form-control" id="stayRating" name="rating">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Contact *</label>
                             <input type="text" class="form-control" id="stayContact" name="contact">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Email *</label>
                             <input type="email" class="form-control" id="stayEmail" name="email">
                         </div>

                         <div class="col-12">
                             <label class="form-label">Short Excerpt *</label>
                             <textarea class="form-control" id="stayExcerpt" name="excerpt" rows="2"></textarea>
                         </div>

                         <div class="col-12">
                             <label class="form-label">Short Description *</label>
                             <textarea class="form-control" id="stayDescription" name="description" rows="3"></textarea>
                         </div>

                         <div class="col-md-12">
                             <label class="form-label">Image *</label>
                             <input type="file" class="form-control" id="stayImage" name="image_url">
                         </div>

                     </div>
                 </form>
             </div>
             <div class="modal-footer"><button type="button" class="btn-outline"
                     data-bs-dismiss="modal">Cancel</button>
                 <button type="submit" form="addStayForm" class="btn-primary-travel">Save Stay</button>
             </div>
         </div>
     </div>
 </div>

 <!-- Edit Stay Modal (static) -->
 {{-- <div class="modal fade" id="editStayModal" tabindex="-1" aria-labelledby="editStayModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Stay</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <form id="editStayForm">
                     <input type="hidden" id="editStayId">
                     <div class="row g-3">
                         <div class="col-md-6"><label>Title</label><input type="text" class="form-control"
                                 id="editTitle"></div>
                         <div class="col-md-6"><label>Location</label><input type="text" class="form-control"
                                 id="editLocation"></div>
                         <div class="col-md-6"><label>Category</label><select class="form-select" id="editCategory">
                                 <option value="coast">Coast / Beach</option>
                                 <option value="safari">Safari Lodges</option>
                                 <option value="lake">Lake & Highlands</option>
                             </select></div>
                         <div class="col-md-6"><label>Price (KES)</label><input type="number" class="form-control"
                                 id="editPrice"></div>
                         <div class="col-12"><label>Description</label>
                             <textarea class="form-control" id="editDesc" rows="2"></textarea>
                         </div>
                         <div class="col-md-6"><label>Rating</label><input type="number" step="0.1"
                                 class="form-control" id="editRating"></div>
                         <div class="col-md-6"><label>Image URL</label><input type="text" class="form-control"
                                 id="editImage"></div>
                     </div>
                 </form>
             </div>
             <div class="modal-footer"><button type="button" class="btn-outline"
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Update
                     Stay</button></div>
         </div>
     </div>
 </div> --}}

 <!-- Static Add Guest Modal (no JS) -->
 <div class="modal fade" id="addGuestModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-plus-circle"></i> Add New Guest
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addGuestForm">
                     <div class="row g-3">

                         <div class="col-md-4">
                             <label class="form-label">Full Name *</label>
                             <input type="text" class="form-control" id="guestName" name="name">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Email *</label>
                             <input type="email" class="form-control" id="guestEmail" name="email">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Phone</label>
                             <input type="text" class="form-control" id="guestPhone" name="phone">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Gender</label>
                             <select class="form-select" id="guestGender" name="gender">
                                 <option value="female">Female</option>
                                 <option value="male">Male</option>
                                 <option value="other">Rather Not Say</option>
                             </select>
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Nationality</label>
                             <input type="text" class="form-control" id="guestNationality" name="nationality">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Country</label>
                             <input type="text" class="form-control" id="guestCountry" name="country">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">City</label>
                             <input type="text" class="form-control" id="guestCity" name="city">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Location</label>
                             <input type="text" class="form-control" id="guestLocation" name="location">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Address</label>
                             <input type="text" class="form-control" id="guestAddress" name="address">
                         </div>

                         {{-- <div class="col-md-6">
                             <label class="form-label">Stays</label>
                             <input type="text" class="form-control" id="guestStays" name="stays"
                                 placeholder="Comma separated or JSON">
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Experiences</label>
                             <input type="text" class="form-control" id="guestExperiences" name="experiences"
                                 placeholder="Comma separated or JSON">
                         </div> --}}
                     </div>
                 </form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>
                 <button type="submit" form="addGuestForm" class="btn-primary-travel">
                     Save Guest
                 </button>
             </div>

         </div>
     </div>
 </div>

 <div class="modal fade" id="addAmenityModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-plus-circle"></i> Add New Amenity
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addAmenityForm">

    <input type="hidden" id="staysAmenityId" name="stay_id">

    <div id="amenitiesContainer">

        <div class="amenity-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0">Amenity</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-amenity">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Title *</label>

                    <input type="text"
                        class="form-control"
                        name="amenities[0][title]">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Icon *</label>

                    <input type="text"
                        class="form-control"
                        name="amenities[0][icon]"
                        placeholder="e.g fa-wifi">
                </div>

                <div class="col-md-12">
                    <label class="form-label">Description *</label>

                    <textarea class="form-control"
                        name="amenities[0][description]"
                        rows="3"></textarea>
                </div>

            </div>

        </div>

    </div>

    <button type="button"
        class="btn btn-outline-primary"
        id="addMoreAmenity">
        + Add Another Amenity
    </button>

</form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>

                 <button type="button" class="btn-primary-travel">
                     Save Amenity
                 </button>
             </div>

         </div>
     </div>
 </div>

 <div class="modal fade" id="addRoomAmenityModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-plus-circle"></i> Add Room Amenity
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addRoomAmenityForm">

    <input type="hidden" id="staysRoomAmenityId" name="stay_id">

    <div id="roomAmenitiesContainer">

        <div class="room-amenity-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0">Room Amenity</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-room-amenity">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Title *</label>

                    <input type="text"
                        class="form-control"
                        name="room_amenities[0][title]">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Icon *</label>

                    <input type="text"
                        class="form-control"
                        name="room_amenities[0][icon]"
                        placeholder="e.g fa-wifi">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Room *</label>

                    <select class="form-select"
                        name="room_amenities[0][room_id]">

                        <option value="">Select Room</option>

                    </select>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Description *</label>

                    <textarea class="form-control"
                        name="room_amenities[0][description]"
                        rows="3"></textarea>
                </div>

            </div>

        </div>

    </div>

    <button type="button"
        class="btn btn-outline-primary"
        id="addMoreRoomAmenity">
        + Add Another Room Amenity
    </button>

</form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>
                 <button type="button" class="btn-primary-travel">
                     Save Room Amenity
                 </button>
             </div>

         </div>
     </div>
 </div>

 <div class="modal fade" id="addRoomModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-bed"></i> Add New Room
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addRoomForm" enctype="multipart/form-data">
                     <div class="row g-3">

                         <input type="text" class="form-control" id="staysRoomId" name="stay_id">

                         <div class="col-md-4">
                             <label class="form-label">Title *</label>
                             <input type="text" class="form-control" id="roomTitle" name="title">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Room Type *</label>
                             <input type="text" class="form-control" id="roomType" name="room_type"
                                 placeholder="e.g Deluxe, Standard">
                         </div>

                         {{-- <div class="col-md-6">
                             <label class="form-label">Stay *</label>
                             <select class="form-select" id="roomStayId" name="stay_id">
                                 <option value="">Select Stay</option>
                                 @foreach ($stays as $stay)
                                    <option value="{{ $tour->id }}">{{ $tour->title }} - {{ $tour->location }}</option>
                                @endforeach
                             </select>
                         </div> --}}

                         <div class="col-md-4">
                             <label class="form-label">Price *</label>
                             <input type="number" class="form-control" id="roomPrice" name="price">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Currency *</label>
                             <input type="text" class="form-control" id="roomCurrency" name="currency"
                                 placeholder="KES / USD">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Rate *</label>
                             <select class="form-select" id="roomRate" name="rate">
                                 <option value="per_night">Per Night</option>
                                 <option value="per_day">Per Day</option>
                             </select>
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Availability *</label>
                             <select class="form-select" id="roomAvailability" name="is_available">
                                 <option value="1">Available</option>
                                 <option value="0">Not Available</option>
                             </select>
                         </div>

                         <div class="col-md-12">
                             <label class="form-label">Description *</label>
                             <textarea class="form-control" id="roomDescription" name="description" rows="3"></textarea>
                         </div>

                         <div class="col-md-12">
                             <label class="form-label">Image URL *</label>
                             <input type="file" class="form-control" id="roomImage" name="image_url">
                         </div>
                     </div>
                 </form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>
                 <button type="submit" form="addRoomForm" class="btn-primary-travel">
                     Save Room
                 </button>
             </div>

         </div>
     </div>
 </div>

 <div class="modal fade" id="addExperienceItineraryModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-map-marked-alt"></i> Add Experience Itinerary
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addExperienceItineraryForm">

    <input type="hidden"
        name="exps_id"
        id="experienceItenaryId">

    <div id="itineraryContainer">

        <div class="itinerary-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0">Itinerary</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-itinerary">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Title *</label>

                    <input type="text"
                        class="form-control"
                        name="itineraries[0][title]">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Period *</label>

                    <input type="text"
                        class="form-control"
                        name="itineraries[0][period]"
                        placeholder="e.g Day 1 Morning">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Sort Order</label>

                    <input type="number"
                        class="form-control"
                        name="itineraries[0][sort_order]"
                        value="0">
                </div>

                <div class="col-md-12">
                    <label class="form-label">Description *</label>

                    <textarea class="form-control"
                        name="itineraries[0][description]"
                        rows="4"></textarea>
                </div>

            </div>

        </div>

    </div>

    <button type="button"
        class="btn btn-outline-primary"
        id="addMoreItinerary">
        + Add Another Itinerary
    </button>

</form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>
                 <button type="button" class="btn-primary-travel">
                     Save Itinerary
                 </button>
             </div>

         </div>
     </div>
 </div>

  <div class="modal fade" id="addBusinessItemModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-md">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-plus-circle"></i> Add Business Item
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addBusinessItemForm">
                     <div class="row g-3">

                         <div class="col-md-12">
                             <label class="form-label">Name *</label>
                             <input type="text" class="form-control" id="businessItemName" name="name">
                         </div>

                         <div class="col-md-12">
                             <label class="form-label">Business *</label>
                             <select class="form-select" id="businessItemBusinessId" name="business_id">
                                 <option value="">Select Business</option>
                                 <!-- Dynamic businesses here -->
                             </select>
                         </div>

                     </div>
                 </form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>
                 <button type="button" class="btn-primary-travel">
                     Save
                 </button>
             </div>

         </div>
     </div>
 </div>

 <!-- Static Edit Guest Modal -->
 {{-- <div class="modal fade" id="editGuestModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Guest</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <div class="row g-3">
                     <div class="col-md-6"><label>Full Name</label><input type="text" class="form-control"
                             id="editName"></div>
                     <div class="col-md-6"><label>Email</label><input type="email" class="form-control"
                             id="editEmail"></div>
                     <div class="col-md-6"><label>Phone</label><input type="text" class="form-control"
                             id="editPhone"></div>
                     <div class="col-md-6"><label>Total Stays</label><input type="number" class="form-control"
                             id="editStays"></div>
                 </div>
             </div>
             <div class="modal-footer"><button type="button" class="btn-outline"
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Update
                     Guest</button></div>
         </div>
     </div>
 </div> --}}

 <div class="modal fade" id="addGalleryModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-images"></i> Add Gallery Images
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addGalleryForm" enctype="multipart/form-data">
                     <div class="row g-3">

                         <input type="text" class="form-control" name="exps_id" id="experienceGalleryId">
                         <input type="text" class="form-control" name="stay_id" id="staysGalleryId">

                         <div class="col-md-12">
                             <label class="form-label">Upload Images *</label>
                             <input type="file" class="form-control" name="image_url[]" id="galleryImages"
                                 multiple accept="image/*">
                             <small class="text-muted">You can select multiple images</small>
                         </div>
                     </div>
                 </form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">Cancel</button>
                 <button type="button" class="btn-primary-travel">Upload Images</button>
             </div>

         </div>
     </div>
 </div>

 <div class="modal fade" id="addHighlightModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-star"></i> Add Highlights
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">

                 <form id="addHighlightForm">

                     <input type="hidden" name="exps_id" id="experienceHighlightId">
                     <input type="hidden" name="stay_id" id="staysHighlightId">

                     <div id="highlightsContainer">

                         <!-- FIRST ITEM -->
                         <div class="highlight-item border rounded p-3 mb-3">

                             <div class="d-flex justify-content-between align-items-center mb-3">
                                 <h6 class="mb-0">Highlight</h6>

                                 <button type="button" class="btn btn-danger btn-sm remove-highlight">
                                     Remove
                                 </button>
                             </div>

                             <div class="row g-3">

                                 <div class="col-md-6">
                                     <label class="form-label">Title *</label>
                                     <input type="text" class="form-control" name="highlights[0][title]">
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label">Icon *</label>
                                     <input type="text" class="form-control" name="highlights[0][icon]"
                                         placeholder="e.g fa-star">
                                 </div>

                                 <div class="col-md-12">
                                     <label class="form-label">Description *</label>

                                     <textarea class="form-control" name="highlights[0][description]" rows="3"></textarea>
                                 </div>

                             </div>

                         </div>

                     </div>

                     <button type="button" class="btn btn-outline-primary" id="addMoreHighlight">
                         + Add Another Highlight
                     </button>

                 </form>

             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>

                 <button type="submit" form="addHighlightForm" class="btn-primary-travel">
                     Save Highlights
                 </button>
             </div>

         </div>
     </div>
 </div>

 <div class="modal fade" id="addInformationModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-info-circle"></i> Add Information
                 </h5>

                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">

                 <form id="addInformationForm">

                     <input type="hidden" name="exps_id" id="experienceInfoId">

                     <div id="informationContainer">

                         <div class="information-item border rounded p-3 mb-3">

                             <div class="d-flex justify-content-between align-items-center mb-3">
                                 <h6 class="mb-0">Information</h6>

                                 <button type="button" class="btn btn-danger btn-sm remove-information">
                                     Remove
                                 </button>
                             </div>

                             <div class="row g-3">

                                 <div class="col-md-6">
                                     <label class="form-label">Title *</label>

                                     <input type="text" class="form-control" name="informations[0][title]">
                                 </div>

                                 <div class="col-12">
                                     <label class="form-label">Description *</label>

                                     <textarea class="form-control" name="informations[0][description]" rows="4"></textarea>
                                 </div>

                             </div>

                         </div>

                     </div>

                     <button type="button" class="btn btn-outline-primary" id="addMoreInformation">
                         + Add Another Information
                     </button>

                 </form>

             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>

                 <button type="submit" form="addInformationForm" class="btn-primary-travel">
                     Save Information
                 </button>
             </div>

         </div>
     </div>
 </div>

 <div class="modal fade" id="addNoteModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-sticky-note"></i> Add Notes
                 </h5>

                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">

                 <form id="addNoteForm">

                     <input type="hidden" name="exps_id" id="experienceNotesId">

                     <div id="notesContainer">

                         <div class="note-item border rounded p-3 mb-3">

                             <div class="d-flex justify-content-between align-items-center mb-3">
                                 <h6 class="mb-0">Note</h6>

                                 <button type="button" class="btn btn-danger btn-sm remove-note">
                                     Remove
                                 </button>
                             </div>

                             <div class="row g-3">

                                 <div class="col-md-6">
                                     <label class="form-label">Title *</label>

                                     <input type="text" class="form-control" name="notes[0][title]">
                                 </div>

                                 <div class="col-12">
                                     <label class="form-label">Description *</label>

                                     <textarea class="form-control" name="notes[0][description]" rows="4"></textarea>
                                 </div>

                             </div>

                         </div>

                     </div>

                     <button type="button" class="btn btn-outline-primary" id="addMoreNotes">
                         + Add Another Note
                     </button>

                 </form>

             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">
                     Cancel
                 </button>

                 <button type="submit" form="addNoteForm" class="btn-primary-travel">
                     Save Notes
                 </button>
             </div>

         </div>
     </div>
 </div>

 <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-receipt"></i> Add Transaction
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addTransactionForm">
                     <div class="row g-3">

                         <div class="col-md-6">
                             <label class="form-label">Booking Reference *</label>
                             <input type="text" class="form-control" name="book_ref" id="txnBookRef">
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Amount *</label>
                             <input type="number" class="form-control" name="amount" id="txnAmount">
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Status *</label>
                             <select class="form-select" name="status" id="txnStatus">
                                 <option value="pending">Pending</option>
                                 <option value="paid">Paid</option>
                                 <option value="failed">Failed</option>
                             </select>
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Guest Name *</label>
                             <input type="text" class="form-control" name="guest_name" id="txnGuestName">
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Payment Method *</label>
                             <select class="form-select" name="payment_method" id="txnPaymentMethod">
                                 <option value="cash">Cash</option>
                                 <option value="card">Card</option>
                                 <option value="mpesa">M-Pesa</option>
                                 <option value="bank">Bank Transfer</option>
                             </select>
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Payment Date *</label>
                             <input type="date" class="form-control" name="payment_date" id="txnPaymentDate">
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Booking</label>
                             <select class="form-select" name="booking_id" id="txnBookingId">
                                 <option value="">Select Booking</option>
                                 <!-- dynamic bookings -->
                             </select>
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Business</label>
                             <select class="form-select" name="business_id" id="txnBusinessId">
                                 <option value="">Select Business</option>
                                 <!-- dynamic businesses -->
                             </select>
                         </div>

                     </div>
                 </form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">Cancel</button>
                 <button type="button" class="btn-primary-travel">Save Transaction</button>
             </div>

         </div>
     </div>
 </div>

 <!-- ADD Experience Modal (static, no JS) -->
 <div class="modal fade" id="addExpModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title">
                     <i class="fas fa-plus-circle"></i> Add New Experience
                 </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <form id="addExpForm" enctype="multipart/form-data">
                     <div class="row g-3">

                         <div class="col-md-4">
                             <label class="form-label">Experience Title *</label>
                             <input type="text" class="form-control" name="title" id="expTitle">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Category *</label>
                             <select class="form-select" name="category" id="expCategory">
                                 <option value="coastal">Coastal</option>
                                 <option value="safari">Safari & Adventure</option>
                                 <option value="lifestyle">Lifestyle & Relaxation</option>
                                 <option value="cultural"Cultural & Local</option>
                             </select>
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Location *</label>
                             <input type="text" class="form-control" name="location" id="expLocation">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Meeting Point *</label>
                             <input type="text" class="form-control" name="meeting_point" id="expMeetingPoint">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Price (KES) *</label>
                             <input type="number" class="form-control" name="price" id="expPrice">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Currency</label>
                             <select class="form-select" name="currency" id="expCurrency">
                                 <option value="USD">$ Dollar</option>
                                 <option value="KES">KES Shillings</option>
                             </select>
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Rate *</label>
                             <select class="form-select" name="rate" id="expRate">
                                 <option value="per_night">Per Night</option>
                                 <option value="per_day">Per Day</option>
                                 <option value="per_hr">Per Hour</option>
                             </select>
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Max Guests *</label>
                             <input type="number" class="form-control" name="max_guests" id="expMaxGuests">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Period *</label>
                             <input type="text" class="form-control" name="period" id="expPeriod"
                                 placeholder="e.g 2 Days">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Duration *</label>
                             <input type="text" class="form-control" name="duration" id="expDuration"
                                 placeholder="e.g 2 hrs, Full day">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Rating (0-5)</label>
                             <input type="number" step="0.1" class="form-control" name="rating"
                                 id="expRating">
                         </div>

                         <div class="col-md-4">
                             <label class="form-label">Contact *</label>
                             <input type="text" class="form-control" name="contact" id="expContact">
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Email *</label>
                             <input type="email" class="form-control" name="email" id="expEmail">
                         </div>

                         <div class="col-md-6">
                             <label class="form-label">Image URL (optional)</label>
                             <input type="file" class="form-control" name="image_url" id="expImage"
                                 placeholder="https://...">
                         </div>

                         <div class="col-12">
                             <label class="form-label">Excerpt *</label>
                             <textarea class="form-control" name="excerpt" id="expExcerpt" rows="2"></textarea>
                         </div>

                         <div class="col-12">
                             <label class="form-label">Short Description *</label>
                             <textarea class="form-control" name="description" id="expDescription" rows="3"></textarea>
                         </div>
                     </div>
                 </form>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn-outline" data-bs-dismiss="modal">Cancel</button>
                 <button type="submit" form="addExpForm" class="btn-primary-travel">Save Experience</button>
             </div>

         </div>
     </div>
 </div>

 <!-- EDIT Experience Modal (static) -->
 {{-- <div class="modal fade" id="editExpModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Experience</h5><button type="button"
                         class="btn-close" data-bs-dismiss="modal"></button>
                 </div>
                 <div class="modal-body"><input type="hidden" id="editExpId">
                     <div class="row g-3">
                         <div class="col-md-6"><label>Title</label><input type="text" class="form-control"
                                 id="editTitle"></div>
                         <div class="col-md-6"><label>Category</label><select class="form-select" id="editCategory">
                                 <option value="coastal">Coastal</option>
                                 <option value="safari">Safari</option>
                                 <option value="lifestyle">Lifestyle</option>
                                 <option value="cultural">Cultural</option>
                             </select></div>
                         <div class="col-md-6"><label>Price (KES)</label><input type="number" class="form-control"
                                 id="editPrice"></div>
                         <div class="col-md-6"><label>Duration</label><input type="text" class="form-control"
                                 id="editDuration"></div>
                         <div class="col-md-6"><label>Rating (0-5)</label><input type="number" step="0.1"
                                 class="form-control" id="editRating"></div>
                         <div class="col-12"><label>Description</label>
                             <textarea class="form-control" id="editDesc" rows="2"></textarea>
                         </div>
                         <div class="col-12"><label>Image URL</label><input type="text" class="form-control"
                                 id="editImage"></div>
                     </div>
                 </div>
                 <div class="modal-footer"><button type="button" class="btn-outline"
                         data-bs-dismiss="modal">Cancel</button><button type="button"
                         class="btn-primary-travel">Update
                         Experience</button></div>
             </div>
         </div>
     </div> --}}

 <!-- Static Add Booking Modal (no JS functionality) -->
 {{-- <div class="modal fade" id="addBookingModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add New Booking</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                 </div>
                 <div class="modal-body">
                     <div class="row g-3">
                         <div class="col-md-6"><label class="form-label">Guest Name *</label><input type="text"
                                 class="form-control" id="bookingGuest"></div>
                         <div class="col-md-6"><label class="form-label">Property / Stay *</label><input
                                 type="text" class="form-control" id="bookingProperty"></div>
                         <div class="col-md-6"><label class="form-label">Check In Date *</label><input type="date"
                                 class="form-control" id="bookingCheckIn"></div>
                         <div class="col-md-6"><label class="form-label">Check Out Date *</label><input
                                 type="date" class="form-control" id="bookingCheckOut"></div>
                         <div class="col-md-6"><label class="form-label">Status *</label><select class="form-select"
                                 id="bookingStatus">
                                 <option value="confirmed">Confirmed</option>
                                 <option value="pending">Pending</option>
                                 <option value="completed">Completed</option>
                                 <option value="cancelled">Cancelled</option>
                             </select></div>
                         <div class="col-md-6"><label class="form-label">Total Amount (KES) *</label><input
                                 type="number" class="form-control" id="bookingAmount"></div>
                     </div>
                 </div>
                 <div class="modal-footer"><button type="button" class="btn-outline"
                         data-bs-dismiss="modal">Cancel</button><button type="button"
                         class="btn-primary-travel">Save
                         Booking</button></div>
             </div>
         </div>
     </div> --}}

 <!-- Static Edit Booking Modal -->
 {{-- <div class="modal fade" id="editBookingModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Booking</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                 </div>
                 <div class="modal-body">
                     <div class="row g-3">
                         <div class="col-md-6"><label>Guest Name</label><input type="text" class="form-control"
                                 id="editGuest"></div>
                         <div class="col-md-6"><label>Property</label><input type="text" class="form-control"
                                 id="editProperty"></div>
                         <div class="col-md-6"><label>Check In</label><input type="date" class="form-control"
                                 id="editCheckIn"></div>
                         <div class="col-md-6"><label>Check Out</label><input type="date" class="form-control"
                                 id="editCheckOut"></div>
                         <div class="col-md-6"><label>Status</label><select class="form-select" id="editStatus">
                                 <option value="confirmed">Confirmed</option>
                                 <option value="pending">Pending</option>
                                 <option value="completed">Completed</option>
                                 <option value="cancelled">Cancelled</option>
                             </select></div>
                         <div class="col-md-6"><label>Amount (KES)</label><input type="number" class="form-control"
                                 id="editAmount"></div>
                     </div>
                 </div>
                 <div class="modal-footer"><button type="button" class="btn-outline"
                         data-bs-dismiss="modal">Cancel</button><button type="button"
                         class="btn-primary-travel">Update
                         Booking</button></div>
             </div>
         </div>
     </div> --}}

 <!-- Static Add Transaction Modal (no JS) -->
 {{-- <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add New Transaction</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                 </div>
                 <div class="modal-body">
                     <div class="row g-3">
                         <div class="col-md-6"><label class="form-label">Booking Reference *</label><input
                                 type="text" class="form-control" placeholder="e.g., BKG-001"></div>
                         <div class="col-md-6"><label class="form-label">Guest Name *</label><input type="text"
                                 class="form-control"></div>
                         <div class="col-md-6"><label class="form-label">Amount (KES) *</label><input type="number"
                                 class="form-control"></div>
                         <div class="col-md-6"><label class="form-label">Payment Method *</label><select
                                 class="form-select">
                                 <option>M-Pesa</option>
                                 <option>Credit Card</option>
                                 <option>Bank Transfer</option>
                                 <option>Cash</option>
                             </select></div>
                         <div class="col-md-6"><label class="form-label">Status *</label><select class="form-select">
                                 <option>Completed</option>
                                 <option>Pending</option>
                                 <option>Failed</option>
                             </select></div>
                         <div class="col-md-6"><label class="form-label">Transaction Date *</label><input
                                 type="date" class="form-control"></div>
                     </div>
                 </div>
                 <div class="modal-footer"><button type="button" class="btn-outline"
                         data-bs-dismiss="modal">Cancel</button><button type="button"
                         class="btn-primary-travel">Save
                         Transaction</button></div>
             </div>
         </div>
     </div> --}}

 <!-- Static Edit Transaction Modal -->
 {{-- <div class="modal fade" id="editTransactionModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Transaction</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                 </div>
                 <div class="modal-body">
                     <div class="row g-3">
                         <div class="col-md-6"><label>Booking Reference</label><input type="text"
                                 class="form-control">
                         </div>
                         <div class="col-md-6"><label>Guest Name</label><input type="text" class="form-control">
                         </div>
                         <div class="col-md-6"><label>Amount (KES)</label><input type="number" class="form-control">
                         </div>
                         <div class="col-md-6"><label>Payment Method</label><select class="form-select">
                                 <option>M-Pesa</option>
                                 <option>Credit Card</option>
                                 <option>Bank Transfer</option>
                                 <option>Cash</option>
                             </select></div>
                         <div class="col-md-6"><label>Status</label><select class="form-select">
                                 <option>Completed</option>
                                 <option>Pending</option>
                                 <option>Failed</option>
                             </select></div>
                         <div class="col-md-6"><label>Transaction Date</label><input type="date"
                                 class="form-control">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer"><button type="button" class="btn-outline"
                         data-bs-dismiss="modal">Cancel</button><button type="button"
                         class="btn-primary-travel">Update
                         Transaction</button></div>
             </div>
         </div>
     </div> --}}

 <script>
     let highlightIndex = 1;

     $('#addMoreHighlight').on('click', function() {

         let html = `
        <div class="highlight-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0">Highlight</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-highlight">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Title *</label>
                    <input type="text"
                        class="form-control"
                        name="highlights[${highlightIndex}][title]">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Icon *</label>
                    <input type="text"
                        class="form-control"
                        name="highlights[${highlightIndex}][icon]"
                        placeholder="e.g fa-star">
                </div>

                <div class="col-md-12">
                    <label class="form-label">Description *</label>

                    <textarea class="form-control"
                        name="highlights[${highlightIndex}][description]"
                        rows="3"></textarea>
                </div>

            </div>

        </div>
    `;

         $('#highlightsContainer').append(html);

         highlightIndex++;
     });

     $(document).on('click', '.remove-highlight', function() {
         $(this).closest('.highlight-item').remove();
     });

     let informationIndex = 1;
     let noteIndex = 1;

     /*
     |--------------------------------------------------------------------------
     | ADD INFORMATION
     |--------------------------------------------------------------------------
     */

     $('#addMoreInformation').on('click', function() {

         let html = `
        <div class="information-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0">Information</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-information">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Title *</label>

                    <input type="text"
                        class="form-control"
                        name="informations[${informationIndex}][title]">
                </div>

                <div class="col-12">
                    <label class="form-label">Description *</label>

                    <textarea class="form-control"
                        name="informations[${informationIndex}][description]"
                        rows="4"></textarea>
                </div>

            </div>

        </div>
    `;

         $('#informationContainer').append(html);

         informationIndex++;
     });

     $(document).on('click', '.remove-information', function() {
         $(this).closest('.information-item').remove();
     });

     /*
     |--------------------------------------------------------------------------
     | ADD NOTES
     |--------------------------------------------------------------------------
     */

     $('#addMoreNotes').on('click', function() {

         let html = `
        <div class="note-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0">Note</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-note">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Title *</label>

                    <input type="text"
                        class="form-control"
                        name="notes[${noteIndex}][title]">
                </div>

                <div class="col-12">
                    <label class="form-label">Description *</label>

                    <textarea class="form-control"
                        name="notes[${noteIndex}][description]"
                        rows="4"></textarea>
                </div>

            </div>

        </div>
    `;

         $('#notesContainer').append(html);

         noteIndex++;
     });

     $(document).on('click', '.remove-note', function() {
         $(this).closest('.note-item').remove();
     });

     let amenityIndex = 1;
let roomAmenityIndex = 1;
let itineraryIndex = 1;

/*
|--------------------------------------------------------------------------
| AMENITIES
|--------------------------------------------------------------------------
*/

$('#addMoreAmenity').on('click', function () {

    let html = `
        <div class="amenity-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6>Amenity</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-amenity">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label>Title *</label>

                    <input type="text"
                        class="form-control"
                        name="amenities[${amenityIndex}][title]">
                </div>

                <div class="col-md-6">
                    <label>Icon *</label>

                    <input type="text"
                        class="form-control"
                        name="amenities[${amenityIndex}][icon]">
                </div>

                <div class="col-md-12">
                    <label>Description *</label>

                    <textarea class="form-control"
                        name="amenities[${amenityIndex}][description]"
                        rows="3"></textarea>
                </div>

            </div>

        </div>
    `;

    $('#amenitiesContainer').append(html);

    amenityIndex++;
});

$(document).on('click', '.remove-amenity', function () {
    $(this).closest('.amenity-item').remove();
});

/*
|--------------------------------------------------------------------------
| ROOM AMENITIES
|--------------------------------------------------------------------------
*/

$('#addMoreRoomAmenity').on('click', function () {

    let roomOptions = $('#roomAmenityRoomId').html();

    let html = `
        <div class="room-amenity-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6>Room Amenity</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-room-amenity">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label>Title *</label>

                    <input type="text"
                        class="form-control"
                        name="room_amenities[${roomAmenityIndex}][title]">
                </div>

                <div class="col-md-6">
                    <label>Icon *</label>

                    <input type="text"
                        class="form-control"
                        name="room_amenities[${roomAmenityIndex}][icon]">
                </div>

                <div class="col-md-6">
                    <label>Room *</label>

                    <select class="form-select"
                        name="room_amenities[${roomAmenityIndex}][room_id]">

                        ${roomOptions}

                    </select>
                </div>

                <div class="col-md-12">
                    <label>Description *</label>

                    <textarea class="form-control"
                        name="room_amenities[${roomAmenityIndex}][description]"
                        rows="3"></textarea>
                </div>

            </div>

        </div>
    `;

    $('#roomAmenitiesContainer').append(html);

    roomAmenityIndex++;
});

$(document).on('click', '.remove-room-amenity', function () {
    $(this).closest('.room-amenity-item').remove();
});

/*
|--------------------------------------------------------------------------
| ITINERARIES
|--------------------------------------------------------------------------
*/

$('#addMoreItinerary').on('click', function () {

    let html = `
        <div class="itinerary-item border rounded p-3 mb-3">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6>Itinerary</h6>

                <button type="button"
                    class="btn btn-danger btn-sm remove-itinerary">
                    Remove
                </button>
            </div>

            <div class="row g-3">

                <div class="col-md-6">
                    <label>Title *</label>

                    <input type="text"
                        class="form-control"
                        name="itineraries[${itineraryIndex}][title]">
                </div>

                <div class="col-md-6">
                    <label>Period *</label>

                    <input type="text"
                        class="form-control"
                        name="itineraries[${itineraryIndex}][period]">
                </div>

                <div class="col-md-6">
                    <label>Sort Order</label>

                    <input type="number"
                        class="form-control"
                        name="itineraries[${itineraryIndex}][sort_order]"
                        value="0">
                </div>

                <div class="col-md-12">
                    <label>Description *</label>

                    <textarea class="form-control"
                        name="itineraries[${itineraryIndex}][description]"
                        rows="4"></textarea>
                </div>

            </div>

        </div>
    `;

    $('#itineraryContainer').append(html);

    itineraryIndex++;
});

$(document).on('click', '.remove-itinerary', function () {
    $(this).closest('.itinerary-item').remove();
});
 </script>
