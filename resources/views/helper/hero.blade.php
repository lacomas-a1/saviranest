<div class="container">
    <div class="navbar-wrapper navbar-hero" id="navbarWrapper">
        <div class="custom-navbar">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="container-fluid px-0 navbar-content">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/image/savira_nest_logo.webp') }}" alt="Savira Nest Logo" class="travel-logo">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a>
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{ route('about') }}">About</a>
                            <a class="nav-link {{ request()->routeIs('stays', 'staydetails', 'accdetails') ? 'active' : '' }}"
                                href="{{ route('stays') }}">Stays</a>
                            <a class="nav-link {{ request()->routeIs('experiences', 'expdetails') ? 'active' : '' }}"
                                href="{{ route('experiences') }}">Experiences</a>
                            <a class="nav-link {{ request()->routeIs('pricing') ? 'active' : '' }}"
                                href="{{ route('pricing') }}">Pricing</a>
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contact</a>
                        </ul>
                    </div>
                    <div class="nav-right">
                        <a href="{{ route('signin') }}" class="btn-primary-travel">Login / Sign Up</a>
                    </div>
                    <button class="mobile-menu-toggle" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileOffcanvas">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</div>
