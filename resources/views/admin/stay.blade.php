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
            <div class="stat-card coast">
                <div class="stat-title">Coast / Beach</div>
                <div class="stat-count" id="coastCount">5</div>
            </div>
            <div class="stat-card safari">
                <div class="stat-title">Safari Lodges</div>
                <div class="stat-count" id="safariCount">1</div>
            </div>
            <div class="stat-card lake">
                <div class="stat-title">Lake & Highlands</div>
                <div class="stat-count" id="lakeCount">0</div>
            </div>
        </div>

        <div class="actions-bar">
            <h2>Manage Stays</h2>
            <div style="display: flex; gap: 12px;">
                <div class="search-filter">
                    <input type="text" id="searchInput" placeholder="Search by title or location...">
                    <select id="categoryFilter">
                        <option value="all">All Categories</option>
                        <option value="coast">Coast / Beach</option>
                        <option value="safari">Safari Lodges</option>
                        <option value="lake">Lake & Highlands</option>
                    </select>
                </div>
                <button class="btn-primary-admin" data-bs-toggle="modal" data-bs-target="#addStayModal">
                    <i class="fas fa-plus"></i> Add New Stay
                </button>
            </div>
        </div>
        <div style="overflow-x: auto;">
            <table class="stay-table" id="staysTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>Price (KES/night)</th>
                        <th>Rating</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="staysTableBody">
                    <tr data-id="1" data-category="coast" data-price="8500" data-rating="4.6"
                        data-description="Oceanfront paradise with infinity pool and Swahili spa. Perfect for couples and families seeking tranquility."
                        data-image="https://images.unsplash.com/photo-1610641818989-c2051b5e2cfd?w=600&h=400&fit=crop">
                        <td>1</td>
                        <td><strong>Watamu Beach Resort</strong></td>
                        <td>Watamu, Coast Region</td>
                        <td>Coast / Beach</td>
                        <td>KES 8,500</td>
                        <td>4.6</td>
                        <td>
                            <a href="{{ route('staydetails') }}" class="btn-icon"><i class="fas fa-eye"></i></a>
                            {{-- <button class="btn-icon"><i class="fas fa-eye"></i></button> --}}
                            <button class="btn-icon"><i class="fas fa-edit"></i></button><button class="btn-icon"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr data-id="2" data-category="coast" data-price="12000" data-rating="4.8"
                        data-description="Luxury villas with private plunge pools & premier diving. Spectacular ocean views and world-class service."
                        data-image="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&h=400&fit=crop">
                        <td>2</td>
                        <td><strong>Diani Reef Beach Resort</strong></td>
                        <td>Diani Beach, South Coast</td>
                        <td>Coast / Beach</td>
                        <td>KES 12,000</td>
                        <td>4.8</td>
                        <td><button class="btn-icon"><i class="fas fa-eye"></i></button><button class="btn-icon"><i
                                    class="fas fa-edit"></i></button><button class="btn-icon"><i
                                    class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr data-id="3" data-category="coast" data-price="10500" data-rating="4.4"
                        data-description="Five pools, lush gardens, family-friendly resort with kids club and water sports."
                        data-image="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?w=600&h=400&fit=crop">
                        <td>3</td>
                        <td><strong>Sarova Whitesands</strong></td>
                        <td>Bamburi, Mombasa</td>
                        <td>Coast / Beach</td>
                        <td>KES 10,500</td>
                        <td>4.4</td>
                        <td><button class="btn-icon"><i class="fas fa-eye"></i></button><button class="btn-icon"><i
                                    class="fas fa-edit"></i></button><button class="btn-icon"><i
                                    class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr data-id="4" data-category="safari" data-price="18000" data-rating="4.5"
                        data-description="Perched on the slopes overlooking the plains, wildebeest views. Authentic safari experience."
                        data-image="https://images.unsplash.com/photo-1549366021-9f761d450615?w=600&h=400&fit=crop">
                        <td>4</td>
                        <td><strong>Masai Mara Sopa Lodge</strong></td>
                        <td>Masai Mara, Narok</td>
                        <td>Safari Lodges</td>
                        <td>KES 18,000</td>
                        <td>4.5</td>
                        <td><button class="btn-icon"><i class="fas fa-eye"></i></button><button class="btn-icon"><i
                                    class="fas fa-edit"></i></button><button class="btn-icon"><i
                                    class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr data-id="5" data-category="coast" data-price="14000" data-rating="4.9"
                        data-description="Boutique chic, oceanfront suites, farm-to-table dining. Eco-luxury at its finest."
                        data-image="https://images.unsplash.com/photo-1582719508461-905c673771fd?w=600&h=400&fit=crop">
                        <td>5</td>
                        <td><strong>The Sands at Nomad</strong></td>
                        <td>Diani Beach, South Coast</td>
                        <td>Coast / Beach</td>
                        <td>KES 14,000</td>
                        <td>4.9</td>
                        <td><button class="btn-icon"><i class="fas fa-eye"></i></button><button class="btn-icon"><i
                                    class="fas fa-edit"></i></button><button class="btn-icon"><i
                                    class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr data-id="6" data-category="coast" data-price="9500" data-rating="4.5"
                        data-description="Restored 18th-century Swahili mansion with rooftop sea views. Cultural heritage meets comfort."
                        data-image="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?w=600&h=400&fit=crop">
                        <td>6</td>
                        <td><strong>Lamu Swahili House</strong></td>
                        <td>Lamu Island</td>
                        <td>Coast / Beach</td>
                        <td>KES 9,500</td>
                        <td>4.5</td>
                        <td><button class="btn-icon"><i class="fas fa-eye"></i></button><button class="btn-icon"><i
                                    class="fas fa-edit"></i></button><button class="btn-icon"><i
                                    class="fas fa-trash-alt"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
