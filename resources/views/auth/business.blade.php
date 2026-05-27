@extends('layout.auth')

@section('title', 'Business Setup')

@section('content')

<div class="right-side">
    <div class="form-card p-6 fade-in">

        <h2 class="text-2xl font-bold text-white text-center mb-2">
            Business Setup
        </h2>

        <p class="text-gray-300 text-center text-sm mb-6">
            Complete your business profile to continue to SaviraNest
        </p>

        <form action="{{ route('business.setup.store') }}" method="POST">
            @csrf

            <!-- Business Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-200 mb-2">
                    <i class="fas fa-building mr-2 text-orange-400"></i>
                    Business Name
                </label>

                <input
                    type="text"
                    name="name"
                    required
                    placeholder="e.g. SaviraNest Apartments"
                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all"
                >

                @error('name')
                    <div class="text-red-400 text-xs mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Telephone + Location -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">

                <!-- Telephone -->
                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">
                        <i class="fas fa-phone-alt mr-2 text-orange-400"></i>
                        Telephone
                    </label>

                    <input
                        type="text"
                        name="telephone"
                        required
                        placeholder="+254712345678"
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all"
                    >

                    @error('telephone')
                        <div class="text-red-400 text-xs mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Location -->
                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">
                        <i class="fas fa-map-marker-alt mr-2 text-orange-400"></i>
                        Location
                    </label>

                    <input
                        type="text"
                        name="location"
                        required
                        placeholder="e.g. Nairobi, Mombasa, Kilifi"
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-orange-500 input-focus transition-all"
                    >

                    @error('location')
                        <div class="text-red-400 text-xs mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-gradient-to-r from-orange-500 to-amber-600 text-white font-semibold py-3 rounded-xl hover:shadow-lg hover:shadow-orange-500/30 transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center gap-2"
            >
                <i class="fas fa-arrow-right"></i>
                Continue
            </button>

        </form>

    </div>
</div>

@endsection