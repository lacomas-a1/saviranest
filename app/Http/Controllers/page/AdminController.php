<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\accomodation\Stays;
use App\Models\tabs\Gallery;
use App\Models\tabs\Highlight;

class AdminController extends Controller
{
    public function dashboard()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Dashboard',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        $stays = Stays::all();

        return view('admin.dashboard', compact(['seo', 'stays']));
    }

    public function accomodation()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Stay Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        $stays = Stays::all();

        return view('admin.stay', compact(['seo', 'stays']));
    }

    public function viewStayID($id)
    {
        session(['selected_stay' => $id]);

        return redirect()->route('accdetails');
    }

    public function accdetails()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Stay Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        // $user = Auth::user();

        $stay_id = session('selected_stay');

        $stays = Stays::where('id', $stay_id)->firstOrFail();
        $highlights = Highlight::where('stay_id', $stay_id)->get();
        $galleries = Gallery::where('stay_id', $stay_id)->get();

        return view('admin.stay-details', compact(['seo', 'stays', 'highlights', 'galleries']));
    }

    public function experience()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Experience Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        $stays = Stays::all();

        return view('admin.experience', compact(['seo', 'stays']));
    }

    public function bookings()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Booking Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        $stays = Stays::all();

        return view('admin.booking', compact(['seo', 'stays']));
    }

    public function guest()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Guest Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        $stays = Stays::all();

        return view('admin.guest', compact(['seo', 'stays']));
    }

    public function transaction()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Transaction Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        $stays = Stays::all();

        return view('admin.transaction', compact(['seo', 'stays']));
    }

    public function report()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Report Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        $stays = Stays::all();

        return view('admin.report', compact(['seo', 'stays']));
    }

    public function expdetails()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Experience Management',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        $stays = Stays::all();

        return view('admin.exp-details', compact(['seo', 'stays']));
    }

    
}
