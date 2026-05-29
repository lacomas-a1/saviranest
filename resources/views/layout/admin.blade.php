<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>@yield('title', config('app.name'))</title>

    @yield('meta')

    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <link rel="icon" href="{{ asset('assets/image/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <!-- jQuery FIRST -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- YOUR SCRIPT LAST -->
    <script>
        $('#addStayForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: '/businesses/stays',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    Swal.fire('Success', response.message, 'success');

                    $('#addStayForm')[0].reset();

                    let modalEl = document.getElementById('addStayModal');
                    let modal = bootstrap.Modal.getInstance(modalEl);

                    if (modal) {
                        modal.hide();
                    }

                    window.location.href = '/accomodation';
                },

                error: function(xhr) {
                    Swal.fire('Error', xhr.responseJSON.message, 'error');
                }
            });
        });

        $('#addRoomForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: '/businesses/rooms',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    Swal.fire('Success', response.message, 'success');

                    $('#addRoomForm')[0].reset();

                    let modalEl = document.getElementById('addRoomModal');
                    let modal = bootstrap.Modal.getInstance(modalEl);

                    if (modal) {
                        modal.hide();
                    }

                    // window.location.href = '/accdetails';
                },

                error: function(xhr) {
                    Swal.fire('Error', xhr.responseJSON.message, 'error');
                }
            });
        });

        $('#addExpForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: '/businesses/experience',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    Swal.fire('Success', response.message, 'success');

                    $('#addExpForm')[0].reset();

                    let modalEl = document.getElementById('addExpModal');
                    let modal = bootstrap.Modal.getInstance(modalEl);

                    if (modal) {
                        modal.hide();
                    }

                    window.location.href = '/experience';
                },

                error: function(xhr) {
                    Swal.fire('Error', xhr.responseJSON.message, 'error');
                }
            });
        });

        $('#addGuestForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: '/businesses/guests',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    Swal.fire('Success', response.message, 'success');

                    $('#addGuestForm')[0].reset();

                    let modalEl = document.getElementById('addGuestModal');
                    let modal = bootstrap.Modal.getInstance(modalEl);

                    if (modal) {
                        modal.hide();
                    }

                    window.location.href = '/guest';
                },

                error: function(xhr) {
                    Swal.fire('Error', xhr.responseJSON.message, 'error');
                }
            });
        });

        $('#addHighlightForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: '/businesses/highlight',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    Swal.fire('Success', response.message, 'success');

                    $('#addHighlightForm')[0].reset();

                    let modalEl = document.getElementById('addHighlightModal');
                    let modal = bootstrap.Modal.getInstance(modalEl);

                    if (modal) {
                        modal.hide();
                    }

                    window.location.reload();
                    // window.location.href = '/accomodation';
                },

                error: function(xhr) {
                    Swal.fire('Error', xhr.responseJSON.message, 'error');
                }
            });
        });

        $('#addGalleryForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: '/businesses/gallery',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    Swal.fire('Success', response.message, 'success');

                    $('#addGalleryForm')[0].reset();

                    let modalEl = document.getElementById('addGalleryModal');
                    let modal = bootstrap.Modal.getInstance(modalEl);

                    if (modal) {
                        modal.hide();
                    }

                    window.location.reload();
                    // window.location.href = '/accomodation';
                },

                error: function(xhr) {
                    Swal.fire('Error', xhr.responseJSON.message, 'error');
                }
            });
        });
    </script>

</body>

</html>
