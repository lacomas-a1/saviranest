 <!-- Add Stay Modal (static, no JS) -->
 <div class="modal fade" id="addStayModal" tabindex="-1" aria-labelledby="addStayModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add New Stay</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <form id="addStayForm">
                     <div class="row g-3">
                         <div class="col-md-6"><label class="form-label">Property Title *</label><input type="text"
                                 class="form-control" id="stayTitle"></div>
                         <div class="col-md-6"><label class="form-label">Location *</label><input type="text"
                                 class="form-control" id="stayLocation"></div>
                         <div class="col-md-6"><label class="form-label">Category *</label><select class="form-select"
                                 id="stayCategory">
                                 <option value="coast">Coast / Beach</option>
                                 <option value="safari">Safari Lodges</option>
                                 <option value="lake">Lake & Highlands</option>
                             </select></div>
                         <div class="col-md-6"><label class="form-label">Price (KES/night) *</label><input
                                 type="number" class="form-control" id="stayPrice"></div>
                         <div class="col-12"><label class="form-label">Short Description *</label>
                             <textarea class="form-control" id="stayDesc" rows="2"></textarea>
                         </div>
                         <div class="col-md-6"><label class="form-label">Rating (0-5) *</label><input type="number"
                                 step="0.1" class="form-control" id="stayRating"></div>
                         <div class="col-md-6"><label class="form-label">Image URL</label><input type="text"
                                 class="form-control" id="stayImage" placeholder="https://..."></div>
                     </div>
                 </form>
             </div>
             <div class="modal-footer"><button type="button" class="btn-outline"
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Save
                     Stay</button></div>
         </div>
     </div>
 </div>

 <!-- Edit Stay Modal (static) -->
 <div class="modal fade" id="editStayModal" tabindex="-1" aria-labelledby="editStayModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
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
 </div>

 <!-- Static Add Guest Modal (no JS) -->
 <div class="modal fade" id="addGuestModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add New Guest</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <div class="row g-3">
                     <div class="col-md-6"><label class="form-label">Full Name *</label><input type="text"
                             class="form-control" id="guestName"></div>
                     <div class="col-md-6"><label class="form-label">Email Address *</label><input type="email"
                             class="form-control" id="guestEmail"></div>
                     <div class="col-md-6"><label class="form-label">Phone Number</label><input type="text"
                             class="form-control" id="guestPhone"></div>
                     <div class="col-md-6"><label class="form-label">Total Stays (optional)</label><input
                             type="number" class="form-control" id="guestStays" value="0"></div>
                 </div>
             </div>
             <div class="modal-footer"><button type="button" class="btn-outline"
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Save
                     Guest</button></div>
         </div>
     </div>
 </div>

 <!-- Static Edit Guest Modal -->
 <div class="modal fade" id="editGuestModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
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
 </div>

 <!-- ADD Experience Modal (static, no JS) -->
 <div class="modal fade" id="addExpModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add New Experience</h5><button
                     type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <div class="row g-3">
                     <div class="col-md-6"><label class="form-label">Experience Title *</label><input type="text"
                             class="form-control" id="expTitle"></div>
                     <div class="col-md-6"><label class="form-label">Category *</label><select class="form-select"
                             id="expCategory">
                             <option value="coastal">🌊 Coastal</option>
                             <option value="safari">🐘 Safari & Adventure</option>
                             <option value="lifestyle">🧘 Lifestyle & Relaxation</option>
                             <option value="cultural">🎭 Cultural & Local</option>
                         </select></div>
                     <div class="col-md-6"><label class="form-label">Price (KES) *</label><input type="number"
                             class="form-control" id="expPrice"></div>
                     <div class="col-md-6"><label class="form-label">Duration *</label><input type="text"
                             class="form-control" id="expDuration" placeholder="e.g., 2 hrs, Full day"></div>
                     <div class="col-md-6"><label class="form-label">Rating (0-5) *</label><input type="number"
                             step="0.1" class="form-control" id="expRating" placeholder="4.5"></div>
                     <div class="col-12"><label class="form-label">Short Description *</label>
                         <textarea class="form-control" id="expDesc" rows="2"></textarea>
                     </div>
                     <div class="col-12"><label class="form-label">Image URL (optional)</label><input type="text"
                             class="form-control" id="expImage" placeholder="https://..."></div>
                 </div>
             </div>
             <div class="modal-footer"><button type="button" class="btn-outline"
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Save
                     Experience</button></div>
         </div>
     </div>
 </div>

 <!-- EDIT Experience Modal (static) -->
 <div class="modal fade" id="editExpModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
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
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Update
                     Experience</button></div>
         </div>
     </div>
 </div>

 <!-- Static Add Booking Modal (no JS functionality) -->
 <div class="modal fade" id="addBookingModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add New Booking</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <div class="row g-3">
                     <div class="col-md-6"><label class="form-label">Guest Name *</label><input type="text"
                             class="form-control" id="bookingGuest"></div>
                     <div class="col-md-6"><label class="form-label">Property / Stay *</label><input type="text"
                             class="form-control" id="bookingProperty"></div>
                     <div class="col-md-6"><label class="form-label">Check In Date *</label><input type="date"
                             class="form-control" id="bookingCheckIn"></div>
                     <div class="col-md-6"><label class="form-label">Check Out Date *</label><input type="date"
                             class="form-control" id="bookingCheckOut"></div>
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
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Save
                     Booking</button></div>
         </div>
     </div>
 </div>

 <!-- Static Edit Booking Modal -->
 <div class="modal fade" id="editBookingModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
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
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Update
                     Booking</button></div>
         </div>
     </div>
 </div>

 <!-- Static Add Transaction Modal (no JS) -->
 <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add New Transaction</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <div class="row g-3">
                     <div class="col-md-6"><label class="form-label">Booking Reference *</label><input type="text"
                             class="form-control" placeholder="e.g., BKG-001"></div>
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
                     <div class="col-md-6"><label class="form-label">Transaction Date *</label><input type="date"
                             class="form-control"></div>
                 </div>
             </div>
             <div class="modal-footer"><button type="button" class="btn-outline"
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Save
                     Transaction</button></div>
         </div>
     </div>
 </div>

 <!-- Static Edit Transaction Modal -->
 <div class="modal fade" id="editTransactionModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
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
                     <div class="col-md-6"><label>Guest Name</label><input type="text" class="form-control"></div>
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
                     <div class="col-md-6"><label>Transaction Date</label><input type="date" class="form-control">
                     </div>
                 </div>
             </div>
             <div class="modal-footer"><button type="button" class="btn-outline"
                     data-bs-dismiss="modal">Cancel</button><button type="button" class="btn-primary-travel">Update
                     Transaction</button></div>
         </div>
     </div>
 </div>
