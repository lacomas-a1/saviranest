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
            <h2>Manage Transactions</h2>
            <div style="display: flex; gap: 12px;">
                <div class="search-filter">
                    <input type="text" id="searchInput" placeholder="Search by guest or ref...">
                    <select id="statusFilter">
                        <option value="all">All Statuses</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="failed">Failed</option>
                    </select>
                </div>
                <button class="btn-primary-admin" data-bs-toggle="modal" data-bs-target="#addTransactionModal">
                    <i class="fas fa-plus"></i> Add Transaction
                </button>
            </div>
        </div>

        <div style="overflow-x: auto;">
            <table class="data-table" id="transactionsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Booking Ref</th>
                        <th>Guest Name</th>
                        <th>Amount (KES)</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="transactionsTableBody">
                    <!-- Static sample data rows -->
                    <tr>
                        <td>1</td>
                        <td>BKG-001</td>
                        <td><strong>James K.</strong></td>
                        <td>KES 42,500</td>
                        <td>M-Pesa</td>
                        <td><span class="badge-status">Completed</span></td>
                        <td>2025-06-10</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BKG-002</td>
                        <td><strong>Sarah M.</strong></td>
                        <td>KES 66,000</td>
                        <td>Credit Card</td>
                        <td><span class="badge-status">Completed</span></td>
                        <td>2025-05-20</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>BKG-003</td>
                        <td><strong>David O.</strong></td>
                        <td>KES 28,500</td>
                        <td>Bank Transfer</td>
                        <td><span class="badge-status badge-pending">Pending</span></td>
                        <td>2025-07-01</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>BKG-004</td>
                        <td><strong>Linda W.</strong></td>
                        <td>KES 36,000</td>
                        <td>M-Pesa</td>
                        <td><span class="badge-status">Completed</span></td>
                        <td>2025-06-25</td>
                        <td>
                            <button class="btn-icon"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>BKG-005</td>
                        <td><strong>Michael K.</strong></td>
                        <td>KES 28,000</td>
                        <td>Cash</td>
                        <td><span class="badge-status badge-failed">Failed</span></td>
                        <td>2025-06-18</td>
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
