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
        <div class="stats-row" id="statsContainer">
            <div class="stat-card coastal">
                <div class="stat-title">Pending</div>
                <div class="stat-count" id="coastalCount">2</div>
            </div>
            <div class="stat-card safari">
                <div class="stat-title">Confirmed</div>
                <div class="stat-count" id="safariCount">2</div>
            </div>
            <div class="stat-card lifestyle">
                <div class="stat-title">Completed</div>
                <div class="stat-count" id="lifestyleCount">1</div>
            </div>
            <div class="stat-card cultural">
                <div class="stat-title">Cancelled</div>
                <div class="stat-count" id="culturalCount">2</div>
            </div>
        </div>

        <div class="actions-bar">
            <h2>Manage Bookings</h2>
            <div style="display: flex; gap: 12px;">
                <div class="search-filter">
                    <input type="text" id="searchInput" placeholder="Search by guest or property...">
                    <select id="statusFilter">
                        <option value="all">All Statuses</option>
                        <option value="confirmed">Confirmed</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                <button class="btn-primary-admin" data-bs-toggle="modal" data-bs-target="#addBookingModal">
                    <i class="fas fa-plus"></i> Add New Booking
                </button>
            </div>
        </div>

        <div style="overflow-x: auto;">
            <table class="data-table" id="bookingsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Guest Name</th>
                        <th>Property</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Status</th>
                        <th>Amount (KES)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="bookingsTableBody">
                    <!-- Static sample data rows -->
                    <tr>
                        <td>1</td>
                        <td><strong>James K.</strong></td>
                        <td>Watamu Beach Resort</td>
                        <td>2025-06-10</td>
                        <td>2025-06-15</td>
                        <td><span class="badge-status">Confirmed</span></td>
                        <td>KES 42,500</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>Sarah M.</strong></td>
                        <td>Mara Serena Lodge</td>
                        <td>2025-05-20</td>
                        <td>2025-05-23</td>
                        <td><span class="badge-status badge-completed">Completed</span></td>
                        <td>KES 66,000</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong>David O.</strong></td>
                        <td>Lamu Swahili House</td>
                        <td>2025-07-01</td>
                        <td>2025-07-04</td>
                        <td><span class="badge-status badge-pending">Pending</span></td>
                        <td>KES 28,500</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong>Linda W.</strong></td>
                        <td>Diani Reef Resort</td>
                        <td>2025-06-25</td>
                        <td>2025-06-28</td>
                        <td><span class="badge-status">Confirmed</span></td>
                        <td>KES 36,000</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong>Michael K.</strong></td>
                        <td>The Sands at Nomad</td>
                        <td>2025-06-18</td>
                        <td>2025-06-20</td>
                        <td><span class="badge-status badge-completed">Completed</span></td>
                        <td>KES 28,000</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
