@extends('layout.auth')

@section('title', $seo['title'])

@section('content')
    <div class="right-side">
        <div class="form-card p-6 fade-in">
            <div class="text-center mb-2">
                <i class="fas fa-key text-orange-400 text-3xl mb-2"></i>
                <h2 class="text-2xl font-bold text-white">Forgot Password?</h2>
            </div>
            <p class="text-gray-300 text-center text-sm mb-6">Enter your email address and we'll send you a password
                reset link.</p>

            <form id="forgotForm">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-200 mb-2"><i
                            class="fas fa-envelope mr-2 text-orange-400"></i>Email Address</label>
                    <input type="email" id="resetEmail" required placeholder="hello@saviranest.co.ke"
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all">
                    <div class="error-msg" id="emailError">Please enter a valid email address</div>
                </div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-orange-500 to-amber-600 text-white font-semibold py-3 rounded-xl hover:shadow-lg hover:shadow-orange-500/30 transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center gap-2"><i
                        class="fas fa-paper-plane"></i> Send Reset Link</button>
                <div class="success-msg" id="successMsg"><i class="fas fa-check-circle mr-1"></i> Reset link sent!
                    Check your email.</div>
                <div class="text-center mt-5 text-xs text-gray-400">
                    Remember your password? <a href="{{ route('signin') }}" class="text-orange-400 hover:underline">Back to
                        Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
