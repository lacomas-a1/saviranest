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
        <div class="actions-bar">
            <h2>Manage Guests</h2>
            <div style="display: flex; gap: 12px;">
                <div class="search-filter">
                    <input type="text" id="searchInput" placeholder="Search by name or email...">
                </div>
                <button class="btn-primary-admin" data-bs-toggle="modal" data-bs-target="#addGuestModal">
                    <i class="fas fa-plus"></i> Add New Guest
                </button>
            </div>
        </div>

        <div style="overflow-x: auto;">
            <table class="data-table" id="guestsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Total Stays</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="guestsTableBody">
                    <!-- Static sample data rows -->
                    <tr>
                        <td>1</td>
                        <td><strong>James K.</strong></td>
                        <td>james@example.com</td>
                        <td>+254712345678</td>
                        <td>3</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>Sarah M.</strong></td>
                        <td>sarah@example.com</td>
                        <td>+254723456789</td>
                        <td>2</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong>David O.</strong></td>
                        <td>david@example.com</td>
                        <td>+254734567890</td>
                        <td>1</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong>Linda W.</strong></td>
                        <td>linda@example.com</td>
                        <td>+254745678901</td>
                        <td>4</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong>Michael K.</strong></td>
                        <td>michael@example.com</td>
                        <td>+254756789012</td>
                        <td>2</td>
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
