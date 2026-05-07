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
        <!-- Stats cards for experience categories (static counts) -->
        <div class="stats-row" id="statsContainer">
            <div class="stat-card coastal">
                <div class="stat-title">Coastal Experiences</div>
                <div class="stat-count" id="coastalCount">2</div>
            </div>
            <div class="stat-card safari">
                <div class="stat-title">Safari & Adventure</div>
                <div class="stat-count" id="safariCount">2</div>
            </div>
            <div class="stat-card lifestyle">
                <div class="stat-title">Lifestyle & Relaxation</div>
                <div class="stat-count" id="lifestyleCount">1</div>
            </div>
            <div class="stat-card cultural">
                <div class="stat-title">Cultural & Local</div>
                <div class="stat-count" id="culturalCount">2</div>
            </div>
        </div>

        <div class="actions-bar">
            <h2>Manage Experiences</h2>
            <div style="display: flex; gap: 12px;">
                <div class="search-filter">
                    <input type="text" id="searchInput" placeholder="Search by title...">
                    <select id="categoryFilter">
                        <option value="all">All Categories</option>
                        <option value="coastal">Coastal</option>
                        <option value="safari">Safari & Adventure</option>
                        <option value="lifestyle">Lifestyle & Relaxation</option>
                        <option value="cultural">Cultural & Local</option>
                    </select>
                </div>
                <button class="btn-primary-admin" data-bs-toggle="modal" data-bs-target="#addExpModal">
                    <i class="fas fa-plus"></i> Add New Experience
                </button>
            </div>
        </div>

        <div style="overflow-x: auto;">
            <table class="data-table" id="experiencesTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price (KES)</th>
                        <th>Duration</th>
                        <th>Rating ⭐</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="experiencesTableBody">
                    <!-- Static sample data rows -->
                    <tr>
                        <td>1</td>
                        <td><strong>Sunset Dhow Cruise</strong></td>
                        <td>🌊 Coastal</td>
                        <td>KES 3,500</td>
                        <td>2 hours</td>
                        <td><span class="badge bg-warning text-dark">⭐ 4.7</span></td>
                        <td>
                            <a href="{{ route('expdetails') }}" class="btn-icon"><i class="fas fa-eye"></i></a>
                            {{-- <button class="btn-icon"><i class="fas fa-eye"></i></button> --}}
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>Tsavo East Full Day Safari</strong></td>
                        <td>🐘 Safari</td>
                        <td>KES 12,500</td>
                        <td>Full day</td>
                        <td><span class="badge bg-warning text-dark">⭐ 4.9</span></td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-eye"></i></button>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong>Beachfront Yoga & Wellness</strong></td>
                        <td>🧘 Lifestyle</td>
                        <td>KES 1,800</td>
                        <td>1.5 hours</td>
                        <td><span class="badge bg-warning text-dark">⭐ 4.8</span></td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-eye"></i></button>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong>Swahili Cooking Class</strong></td>
                        <td>🎭 Cultural</td>
                        <td>KES 2,500</td>
                        <td>3 hours</td>
                        <td><span class="badge bg-warning text-dark">⭐ 4.6</span></td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-eye"></i></button>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong>Snorkeling at Kisite Marine Park</strong></td>
                        <td>🌊 Coastal</td>
                        <td>KES 4,200</td>
                        <td>4 hours</td>
                        <td><span class="badge bg-warning text-dark">⭐ 4.9</span></td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-eye"></i></button>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
