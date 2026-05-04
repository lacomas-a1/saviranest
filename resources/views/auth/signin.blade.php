@extends('layout.auth')

@section('title', $seo['title'])

@section('content')
    <div class="right-side">
        <div class="form-card p-6 fade-in">
            <h2 class="text-2xl font-bold text-white text-center mb-2">Welcome Back</h2>
            <p class="text-gray-300 text-center text-sm mb-6">Log in to continue your adventure</p>

            <form id="loginForm">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-200 mb-2"><i
                            class="fas fa-envelope mr-2 text-orange-400"></i>Email Address</label>
                    <input type="email" id="loginEmail" required placeholder="hello@saviranest.co.ke"
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-200 mb-2"><i
                            class="fas fa-lock mr-2 text-orange-400"></i>Password</label>
                    <div class="relative">
                        <input type="password" id="loginPassword" required placeholder="••••••••"
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all pr-12">
                        <button type="button" id="toggleLoginPassword"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-orange-400"><i
                                class="fas fa-eye"></i></button>
                    </div>
                </div>
                <div class="text-right mb-4">
                    <a href="{{ route('forget') }}" class="text-xs text-orange-400 hover:underline">Forgot
                        password?</a>
                </div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-orange-500 to-amber-600 text-white font-semibold py-3 rounded-xl hover:shadow-lg hover:shadow-orange-500/30 transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center gap-2"><i
                        class="fas fa-arrow-right-to-bracket"></i> Sign In</button>

                <div class="divider">
                    <div class="divider-line"></div>
                    <span class="text-gray-400 text-xs">or continue with</span>
                    <div class="divider-line"></div>
                </div>
                <button type="button" id="googleLoginBtn"
                    class="w-full bg-white/10 border border-white/20 rounded-xl py-3 flex items-center justify-center gap-2 text-white hover:bg-white/20 transition"><i
                        class="fab fa-google text-red-400"></i> Sign in with Google</button>

                <!-- Link to Signup -->
                <div class="text-center mt-5 text-xs text-gray-400">
                    Don’t have an account?
                    <a href="{{ route('signup') }}" class="text-orange-400 hover:underline">Sign up</a>
                </div>
            </form>
        </div>
    </div>
@endsection
