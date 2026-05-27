<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\auth\UserResource;
use App\Models\auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signin()
    {
        $seo = [
            'title' => 'SaviraNest | Login – Your Nest Away From Home',
            'type' => 'website',
        ];

        return view('auth.signin', compact('seo'));
    }

    public function signup()
    {
        $seo = [
            'title' => 'SaviraNest | Sign Up – Join Our Community',
            'type' => 'website',
        ];

        return view('auth.signup', compact('seo'));
    }

    public function forget()
    {
        $seo = [
            'title' => 'SaviraNest | Forgot Password – Reset Your Account',
            'type' => 'website',
        ];

        return view('auth.forget-password', compact('seo'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return response([
                'message' => 'Invalid credentials',
            ], 401);
        }

        if (! $user->is_active) {
            return response()->json([
                'message' => 'Account is inactive',
            ], 403);
        }

        // Optional: delete old tokens (if you want single session)
        $user->tokens()->delete();

        $token = $user->createToken('mobile')->plainTextToken;

        return response([
            'user' => new UserResource($user),
            'token' => $token,
        ]);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'You have been logged out successfully.');
    }
}
