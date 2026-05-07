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
        <h2 style="margin-bottom: 1.5rem;">Dashboard</h2>
        <!-- 4 cards row -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-info">
                    <h4>Total Properties</h4>
                    <div class="stat-number">42</div>
                    <small>+3 this month</small>
                </div>
                <div class="stat-icon"><i class="fas fa-home"></i></div>
            </div>
            <div class="stat-card">
                <div class="stat-info">
                    <h4>Total Bookings</h4>
                    <div class="stat-number">186</div>
                    <small>+28% vs last month</small>
                </div>
                <div class="stat-icon"><i class="fas fa-calendar-alt"></i></div>
            </div>
            <div class="stat-card">
                <div class="stat-info">
                    <h4>Total Guests</h4>
                    <div class="stat-number">342</div>
                    <small>unique visitors</small>
                </div>
                <div class="stat-icon"><i class="fas fa-user-friends"></i></div>
            </div>
            <div class="stat-card">
                <div class="stat-info">
                    <h4>Revenue (KES)</h4>
                    <div class="stat-number">2.45M</div>
                    <small>this quarter</small>
                </div>
                <div class="stat-icon"><i class="fas fa-chart-line"></i></div>
            </div>
        </div>

        <!-- Charts + Recent Activity -->
        <div class="row-grid">
            <div class="card-panel">
                <h3><i class="fas fa-chart-simple" style="color: var(--sunrise-gold);"></i> Monthly Bookings
                </h3>
                <canvas id="bookingChart" height="200" style="width:100%; max-height:220px;"></canvas>
            </div>
            <div class="card-panel">
                <h3><i class="fas fa-clock"></i> Recent Bookings</h3>
                <table class="recent-table">
                    <thead>
                        <tr>
                            <th>Guest</th>
                            <th>Property</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>James K.</td>
                            <td>Watamu Beach Resort</td>
                            <td><span class="badge-status">Confirmed</span></td>
                            <td>KES 8,500</td>
                        </tr>
                        <tr>
                            <td>Sarah M.</td>
                            <td>Mara Serena Lodge</td>
                            <td><span class="badge-status">Completed</span></td>
                            <td>KES 22,000</td>
                        </tr>
                        <tr>
                            <td>David O.</td>
                            <td>Lamu Swahili House</td>
                            <td><span class="badge-status badge-pending">Pending</span></td>
                            <td>KES 9,500</td>
                        </tr>
                        <tr>
                            <td>Linda W.</td>
                            <td>Diani Reef Resort</td>
                            <td><span class="badge-status">Confirmed</span></td>
                            <td>KES 12,000</td>
                        </tr>
                        <tr>
                            <td>Michael K.</td>
                            <td>The Sands at Nomad</td>
                            <td><span class="badge-status">Completed</span></td>
                            <td>KES 14,000</td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin-top: 1rem; text-align: right;"><a href="#" class="btn-sm-outline">View
                        all</a></div>
            </div>
        </div>
    </div>
@endsection
