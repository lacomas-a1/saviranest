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
        <div class="table-responsive">
            <table id="staysTable" class="table table-striped table-hover display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>Price (KES/night)</th>
                        <th>Rating</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="staysTableBody">
                    @foreach ($stays as $stay)
                        <td><strong>{{ $stay->title }}</strong></td>
                        <td>{{ $stay->location }}</td>
                        <td>{{ $stay->category }}</td>
                        <td>{{ $stay->price }}</td>
                        <td>{{ $stay->rating }}</td>
                        <td>
                            <a href="{{ route('view.stay.id', $stay->id) }}" class="btn-icon"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn-icon"><i class="fas fa-edit"></i></a>
                            <a href="#" data-id="{{ $stay->id }}" class="btn-icon"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
