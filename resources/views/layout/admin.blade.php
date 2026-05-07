<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>@yield('title', config('app.name'))</title>

    @yield('meta')

    <link rel="icon" href="{{ asset('assets/image/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="admin-wrapper">
        <!-- Sidebar (fixed) -->
        @include('helper.aside')
        
        <!-- Main content (scrollable) -->
        <main class="admin-main">
            <div class="admin-topbar">
                <button class="menu-toggle" id="menuToggleBtn"><i class="fas fa-bars"></i></button>
            </div>

            @yield('content')
        </main>
    </div>
    <div class="overlay" id="sidebarOverlay"></div>

    @include('admin.modal.modal')

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/admin-main.js') }}"></script>
</body>

</html>