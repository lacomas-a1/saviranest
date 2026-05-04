<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
