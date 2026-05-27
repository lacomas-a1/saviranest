<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            if (empty($googleUser->email)) {
                return redirect()->route('login')
                    ->withErrors('No email returned from Google account.');
            }

            $user = User::where('google_id', $googleUser->id)
                ->orWhere('email', $googleUser->email)
                ->first();

            if (! $user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'provider' => 'google',
                    'avatar' => $googleUser->avatar,
                    'password' => bcrypt(Str::random(24)),
                    'role_name' => 'User',
                    'status' => 'Active',
                    'join_date' => now(),
                ]);
            } else {
                if (! $user->google_id) {
                    $user->update([
                        'google_id' => $googleUser->id,
                        'provider' => 'google',
                    ]);
                }
            }

            $user->update([
                'last_signin' => now(),
            ]);

            Auth::login($user);

            request()->session()->regenerate();

            if (! auth()->user()->business_id) {
                return redirect()->route('business.setup');
            }

            return redirect()->route('dashboard');

        } catch (\Exception $e) {
            Log::error('Google OAuth Error', [
                'message' => $e->getMessage(),
            ]);

            return redirect()->route('login')
                ->withErrors('Authentication failed. Please try again.');
        }
    }
}
