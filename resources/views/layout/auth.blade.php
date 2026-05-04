<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>@yield('title', config('app.name'))</title>
    <link rel="icon" href="{{ asset('assets/image/favicon.ico') }}" type="image/x-icon">
    <script src="{{ asset('assets/js/tailwindcdn.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <div class="split-layout">
        <!-- Left Side: Branding -->
        <div class="left-side">
            <div class="logo-container">
                <img class="brand-logo" src="{{ asset('assets/image/savira_nest_logo.webp') }}" alt="SaviraNest Logo">
            </div>
        </div>

        <!-- Right Side: Login Card -->
        @yield('content')
    </div>

    <!-- Forgot password modal trigger (simple alert in demo) -->
    <div id="forgotModal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm items-center justify-center z-50">
    </div>

    <script>
        // Login form handler
        const loginForm = document.getElementById('loginForm');

        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const email = document.getElementById('loginEmail').value.trim();
            const pwd = document.getElementById('loginPassword').value;

            if (email && pwd) {
                // Optional alert
                alert(`🔐 Welcome back ${email}!`);

                // ✅ Redirect to dashboard
                window.location.href = 'admin/dashboard.html'; // adjust path if needed
            } else {
                alert('Please enter both email and password.');
            }
        });

        // Toggle password visibility
        document.getElementById('toggleLoginPassword').addEventListener('click', () => {
            const input = document.getElementById('loginPassword');
            const type = input.type === 'password' ? 'text' : 'password';
            input.type = type;
            document.getElementById('toggleLoginPassword').innerHTML = type === 'password' ?
                '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
        });

        // Form validation and submission
        const form = document.getElementById('signupForm');
        const fullName = document.getElementById('fullName');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const locationInput = document.getElementById('location');
        const password = document.getElementById('password');
        const confirmPwd = document.getElementById('confirmPassword');

        const nameError = document.getElementById('nameError');
        const emailError = document.getElementById('emailError');
        const phoneError = document.getElementById('phoneError');
        const locationError = document.getElementById('locationError');
        const passwordError = document.getElementById('passwordError');
        const confirmError = document.getElementById('confirmError');

        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const digits = phone.replace(/\D/g, '');
            return digits.length >= 10 && digits.length <= 15;
        }

        // Real-time validation
        fullName.addEventListener('input', () => {
            if (fullName.value.trim() === '') nameError.style.display = 'block';
            else nameError.style.display = 'none';
        });
        email.addEventListener('input', () => {
            if (!isValidEmail(email.value.trim())) emailError.style.display = 'block';
            else emailError.style.display = 'none';
        });
        phone.addEventListener('input', () => {
            if (!isValidPhone(phone.value.trim())) phoneError.style.display = 'block';
            else phoneError.style.display = 'none';
        });
        locationInput.addEventListener('input', () => {
            if (locationInput.value.trim() === '') locationError.style.display = 'block';
            else locationError.style.display = 'none';
        });
        password.addEventListener('input', () => {
            if (password.value.length < 8) passwordError.style.display = 'block';
            else passwordError.style.display = 'none';
            if (confirmPwd.value !== '') {
                if (password.value !== confirmPwd.value) confirmError.style.display = 'block';
                else confirmError.style.display = 'none';
            }
        });
        confirmPwd.addEventListener('input', () => {
            if (password.value !== confirmPwd.value) confirmError.style.display = 'block';
            else confirmError.style.display = 'none';
        });

        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', () => {
            const type = password.type === 'password' ? 'text' : 'password';
            password.type = type;
            document.getElementById('togglePassword').innerHTML = type === 'password' ?
                '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
        });
        document.getElementById('toggleConfirmPassword').addEventListener('click', () => {
            const type = confirmPwd.type === 'password' ? 'text' : 'password';
            confirmPwd.type = type;
            document.getElementById('toggleConfirmPassword').innerHTML = type === 'password' ?
                '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
        });

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            let isValid = true;

            if (fullName.value.trim() === '') {
                nameError.style.display = 'block';
                isValid = false;
            } else nameError.style.display = 'none';

            if (!isValidEmail(email.value.trim())) {
                emailError.style.display = 'block';
                isValid = false;
            } else emailError.style.display = 'none';

            if (!isValidPhone(phone.value.trim())) {
                phoneError.style.display = 'block';
                isValid = false;
            } else phoneError.style.display = 'none';

            if (locationInput.value.trim() === '') {
                locationError.style.display = 'block';
                isValid = false;
            } else locationError.style.display = 'none';

            if (password.value.length < 8) {
                passwordError.style.display = 'block';
                isValid = false;
            } else passwordError.style.display = 'none';

            if (password.value !== confirmPwd.value) {
                confirmError.style.display = 'block';
                isValid = false;
            } else confirmError.style.display = 'none';

            if (isValid) {
                alert(
                    `🎉 Account created!\n\nName: ${fullName.value.trim()}\nEmail: ${email.value.trim()}\nPhone: ${phone.value.trim()}\nLocation: ${locationInput.value.trim()}\n\nWe've sent a verification email.`);
                // In production: redirect to dashboard or send data to server
            } else {
                alert('Please fix the errors before submitting.');
            }
        });
    </script>
</body>

</html>
