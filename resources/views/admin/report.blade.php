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
        <h2 class="mb-3">Reports & Analytics</h2>

        <!-- Date Range Filter -->
        <div class="filter-bar">
            <div class="date-range">
                <label><i class="fas fa-calendar-alt"></i> From:</label>
                <input type="date" id="startDate" value="2025-01-01">
                <label>To:</label>
                <input type="date" id="endDate" value="2025-12-31">
            </div>
            <button class="btn-filter" id="applyFilterBtn"><i class="fas fa-sync-alt"></i> Apply Filter</button>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid" id="statsGrid">
            <div class="stat-card">
                <div class="stat-info">
                    <h4>Total Bookings</h4>
                    <div class="stat-number" id="totalBookings">0</div>
                </div><i class="fas fa-calendar-check" style="font-size:2rem; color:var(--sunrise-gold);"></i>
            </div>
            <div class="stat-card">
                <div class="stat-info">
                    <h4>Total Revenue (KES)</h4>
                    <div class="stat-number" id="totalRevenue">0</div>
                </div><i class="fas fa-chart-line" style="font-size:2rem; color:var(--sunrise-gold);"></i>
            </div>
            <div class="stat-card">
                <div class="stat-info">
                    <h4>Avg. Booking Value</h4>
                    <div class="stat-number" id="avgBookingValue">0</div>
                </div><i class="fas fa-chart-simple" style="font-size:2rem; color:var(--sunrise-gold);"></i>
            </div>
            <div class="stat-card">
                <div class="stat-info">
                    <h4>Completed Payments</h4>
                    <div class="stat-number" id="completedPayments">0</div>
                </div><i class="fas fa-credit-card" style="font-size:2rem; color:var(--sunrise-gold);"></i>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="chart-row">
            <div class="chart-card">
                <h3><i class="fas fa-chart-bar"></i> Monthly Bookings</h3>
                <canvas id="bookingsChart" height="200"></canvas>
            </div>
            <div class="chart-card">
                <h3><i class="fas fa-chart-line"></i> Revenue Trend (KES)</h3>
                <canvas id="revenueChart" height="200"></canvas>
            </div>
        </div>

        <!-- Top Performing Stays -->
        <div class="chart-card" style="margin-bottom: 1.5rem;">
            <h3><i class="fas fa-trophy"></i> Top Performing Stays</h3>
            <table class="recent-table">
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Bookings</th>
                        <th>Revenue (KES)</th>
                    </tr>
                </thead>
                <tbody id="topStaysTable"></tbody>
            </table>
        </div>
    </div>
@endsection
