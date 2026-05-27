<aside class="admin-sidebar" id="adminSidebar">
    <div class="sidebar-header">
        <img src="{{ asset('assets/image/savira_nest_logo.png') }}" alt="SaviraNest Logo">
        {{-- <h4>SaviraNest Admin</h4> --}}
    </div>
    <div class="sidebar-nav">
        <div class="nav-item-admin">
            <a href="{{ route('dashboard') }}"
                class="nav-link-admin {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </div>
        <div class="nav-item-admin">
            <a href="{{ route('accomodation') }}"
                class="nav-link-admin {{ request()->routeIs('accomodation', 'accdetails') ? 'active' : '' }}">
                <i class="fas fa-building"></i> Accomodation
            </a>
        </div>
        <div class="nav-item-admin">
            <a href="{{ route('experience') }}"
                class="nav-link-admin {{ request()->routeIs('experience', 'exprdetails') ? 'active' : '' }}">
                <i class="fas fa-compass"></i> Experiences
            </a>
        </div>
        <div class="nav-item-admin">
            <a href="{{ route('bookings') }}" class="nav-link-admin {{ request()->routeIs('bookings') ? 'active' : '' }}">
                <i class="fas fa-calendar-check"></i> Bookings
            </a>
        </div>
        <div class="nav-item-admin">
            <a href="{{ route('guest') }}" class="nav-link-admin {{ request()->routeIs('guest') ? 'active' : '' }}">
                <i class="fas fa-users"></i> Guests
            </a>
        </div>
        <div class="nav-item-admin">
            <a href="{{ route('transaction') }}"
                class="nav-link-admin  {{ request()->routeIs('transaction') ? 'active' : '' }}">
                <i class="fas fa-credit-card"></i> Transactions
            </a>
        </div>
        <div class="nav-item-admin">
            <a href="{{ route('report') }}" class="nav-link-admin {{ request()->routeIs('report') ? 'active' : '' }}">
                <i class="fas fa-chart-line"></i> Reports
            </a>
        </div>
        {{-- <div class="nav-item-admin">
            <a href="settings.html" class="nav-link-admin">
                <i class="fas fa-cog"></i> Settings
            </a>
        </div>
        <div class="nav-item-admin">
            <a href="#" class="nav-link-admin">
                <i class="fas fa-headset"></i> Support
            </a>
        </div> --}}
    </div>
    <div class="login-persona">
        <div class="avatar-sm">SN</div>
        <div class="name">Savira Nest</div>
        <div class="role">Super Administrator</div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn" id="logoutBtn"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
    </div>
</aside>
