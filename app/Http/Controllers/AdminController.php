<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Dashboard',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.dashboard', compact('seo'));
    }

    public function stays()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Stay Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.stay', compact('seo'));
    }

    public function experience()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Experience Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.experience', compact('seo'));
    }

    public function booking()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Booking Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.booking', compact('seo'));
    }

    public function guest()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Guest Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.guest', compact('seo'));
    }

    public function transaction()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Transaction Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.transaction', compact('seo'));
    }

    public function report()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Report Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.report', compact('seo'));
    }

    public function expdetails()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Experience Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.exp-details', compact('seo'));
    }

    public function staydetails()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Stay Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('admin.stay-details', compact('seo'));
    }
}
