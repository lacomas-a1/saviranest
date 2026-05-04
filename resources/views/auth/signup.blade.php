@extends('layout.auth')

@section('title', $seo['title'])

@section('content')

    <div class="right-side">
        <div class="form-card p-6 fade-in">
            <h2 class="text-2xl font-bold text-white text-center mb-2">Create Account</h2>
            <p class="text-gray-300 text-center text-sm mb-6">Join SaviraNest – book stays, experiences & rentals</p>

            <form id="signupForm">
                <!-- Row 1: Full Name + Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-200 mb-2"><i
                                class="fas fa-user mr-2 text-orange-400"></i>Full Name</label>
                        <input type="text" id="fullName" required placeholder="John Doe"
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all">
                        <div class="error-msg" id="nameError">Full name is required</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200 mb-2"><i
                                class="fas fa-envelope mr-2 text-orange-400"></i>Email Address</label>
                        <input type="email" id="email" required placeholder="hello@saviranest.co.ke"
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all">
                        <div class="error-msg" id="emailError">Valid email required</div>
                    </div>
                </div>

                <!-- Row 2: Phone Number + Location -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-200 mb-2"><i
                                class="fas fa-phone-alt mr-2 text-orange-400"></i>Phone Number</label>
                        <input type="tel" id="phone" required placeholder="+254712345678"
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all">
                        <div class="error-msg" id="phoneError">Enter a valid phone number (e.g., +254712345678)</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200 mb-2"><i
                                class="fas fa-map-marker-alt mr-2 text-orange-400"></i>Location (City / Region)</label>
                        <input type="text" id="location" required placeholder="e.g., Nairobi, Mombasa, Kilifi"
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all">
                        <div class="error-msg" id="locationError">Location is required</div>
                    </div>
                </div>

                <!-- Row 3: Password + Confirm Password -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-200 mb-2"><i
                                class="fas fa-lock mr-2 text-orange-400"></i>Password</label>
                        <div class="relative">
                            <input type="password" id="password" required placeholder="At least 8 characters"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all pr-12">
                            <button type="button" id="togglePassword"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-orange-400"><i
                                    class="fas fa-eye"></i></button>
                        </div>
                        <div class="error-msg" id="passwordError">Password must be at least 8 characters</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200 mb-2"><i
                                class="fas fa-check-circle mr-2 text-orange-400"></i>Confirm Password</label>
                        <div class="relative">
                            <input type="password" id="confirmPassword" required placeholder="Confirm your password"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all pr-12">
                            <button type="button" id="toggleConfirmPassword"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-orange-400"><i
                                    class="fas fa-eye"></i></button>
                        </div>
                        <div class="error-msg" id="confirmError">Passwords do not match</div>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit"
                    class="w-full bg-gradient-to-r from-orange-500 to-amber-600 text-white font-semibold py-3 rounded-xl hover:shadow-lg hover:shadow-orange-500/30 transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center gap-2"><i
                        class="fas fa-user-plus"></i> Sign Up</button>

                <div class="divider">
                    <div class="divider-line"></div>
                    <span class="text-gray-400 text-xs">or sign up with</span>
                    <div class="divider-line"></div>
                </div>
                <button type="button" id="googleSignupBtn"
                    class="w-full bg-white/10 border border-white/20 rounded-xl py-3 flex items-center justify-center gap-2 text-white hover:bg-white/20 transition"><i
                        class="fab fa-google text-red-400"></i> Sign up with Google</button>

                <!-- Link to Login -->
                <div class="text-center mt-5 text-xs text-gray-400">
                    Already have an account? <a href="{{ route('signin') }}" class="text-orange-400 hover:underline">Log in</a>
                </div>
            </form>
        </div>
    </div>
@endsection
