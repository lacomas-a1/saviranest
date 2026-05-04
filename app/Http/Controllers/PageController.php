<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $seo = [
            'title' => 'SaviraNest | Your Nest Away From Home',
            'description' => 'Discover handpicked stays from luxury beach resorts to safari lodges. Book your perfect escape with SaviraNest.',
            'keywords' => 'Kenya accommodations, beach resorts, safari lodges, Watamu hotels, Diani resorts, vacation rentals',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('home', compact('seo'));
    }

    public function about()
    {
        $seo = [
            'title' => 'SaviraNest | About – Your Nest Away From Home',
            'description' => 'Discover SaviraNest – handpicked stays from urban apartments to safari lodges. About our mission, features, and why travelers love us.',
            'keywords' => 'SaviraNest about, curated stays Kenya, vacation rentals, boutique accommodations',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('about', compact('seo'));
    }

    public function stays()
    {
        $seo = [
            'title' => 'SaviraNest | Premium Accommodations & Stays',
            'description' => 'Discover the best accommodations in Kenya from luxury beach resorts to safari lodges. Handpicked stays with ocean views, wildlife encounters, and Swahili charm.',
            'keywords' => 'SaviraNest, Kenya accommodations, beach resorts Kenya, safari lodges, Kilifi stays, Watamu hotels, Diani resorts, camping rentals Kenya, travel experiences Kenya',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('stays', compact('seo'));
    }

    public function experiences()
    {
        $seo = [
            'title' => 'SaviraNest | Experiences – Curated Local Adventures',
            'description' => 'Book unforgettable experiences along Kenyas coast and beyond: sunset dhow cruises, safari adventures, cultural tours, and wellness retreats.',
            'keywords' => 'Kenya experiences, Watamu boat tours, safari day trips, cooking classes, snorkeling, yoga retreats',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('experiences', compact('seo'));
    }

    public function pricing()
    {
        $seo = [
            'title' => 'SaviraNest | Pricing – Host Plans & Booking Fees',
            'description' => 'Transparent pricing for property partners. List your stay with SaviraNest and reach global travelers. Flexible plans, low commissions.',
            'keywords' => 'SaviraNest pricing, host plans, accommodation listing fees, vacation rental commission, Kenya stays',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('pricing', compact('seo'));
    }

    public function contact()
    {
        $seo = [
            'title' => 'SaviraNest | Contact -  Your Nest Away From Home',
            'description' => 'Reach out to SaviraNest for bookings, partnerships, or travel advice. Visit our office in Kilifi or send us a message.',
            'keywords' => 'SaviraNest contact, customer support, booking inquiries, Kenya stays, Kilifi office',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('contact', compact('seo'));
    }

    public function booking()
    {
        $seo = [
            'title' => 'SaviraNest | Book Stays & Experiences – Reserve Your Adventure',
            'description' => 'Book your perfect stay or experience in Kenya. Choose from handpicked beach resorts, safari lodges, cultural tours, and more. Instant confirmation.',
            'keywords' => 'SaviraNest booking, Kenya stay booking, experience booking Kenya, beach resorts Kenya, safari lodges, Diani resorts, Masai Mara safari, Watamu snorkeling',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('booking', compact('seo'));
    }

    public function expdetails()
    {
        $seo = [
            'title' => 'Snorkeling & Dolphin Watch | SaviraNest – Ocean Safari Experience',
            'description' => 'Snorkel vibrant coral gardens, swim with wild dolphins, and enjoy a picnic on a secluded sandbank. All gear included. Book your Watamu ocean adventure.',
            'keywords' => 'snorkeling Watamu, dolphin watching Kenya, ocean safari, marine adventure, sandbank picnic, SaviraNest experiences',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('exp-details', compact('seo'));
    }

    public function staydetails()
    {
        $seo = [
            'title' => 'Watamu Beach Resort | SaviraNest – Premium Oceanfront Stay',
            'description' => 'Experience luxury beachfront accommodation at Watamu Beach Resort. Direct Indian Ocean access, infinity pool, fine dining, and marine adventures.',
            'keywords' => 'Watamu Beach Resort, Watamu accommodation, beachfront hotel Kenya, SaviraNest stays, luxury oceanfront stay Kenya',
            'image' => asset('assets/image/favicon.ico'),
            // 'canonical' => 'https://saviranest.co.ke/',
            // 'url' => 'https://saviranest.co.ke/',
            'type' => 'website',
        ];

        return view('stay-details', compact('seo'));
    }
}
