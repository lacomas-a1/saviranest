<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $seo = [
            'title' => 'Luxury Stays & Travel Experiences in Kenya | SaviraNest',
            'description' => 'Book luxury beach resorts, safari lodges, oceanfront villas, and curated travel experiences across Kenya. Discover unforgettable stays with SaviraNest.',
            'keywords' => 'luxury stays Kenya, Kenya vacation rentals, beachfront villas Kenya, safari lodges Kenya, Watamu resorts, Diani beach hotels, boutique stays Kenya, oceanfront accommodation, travel experiences Kenya, luxury travel Africa, holiday homes Kenya, romantic getaways Kenya, family vacations Kenya, Swahili coastal stays, luxury apartments Kenya, Kenyan coast accommodation, safari experiences Africa, luxury villa rentals, eco resorts Kenya, vacation homes Africa',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('home', compact('seo'));
    }

    public function about()
    {
        $seo = [
            'title' => 'About SaviraNest | Curated Luxury Stays & Experiences',
            'description' => 'Learn about SaviraNest and our mission to connect travelers with exceptional stays, coastal escapes, safari lodges, and authentic Kenyan experiences.',
            'keywords' => 'about SaviraNest, Kenya travel company, curated stays Kenya, luxury accommodation Africa, boutique travel experiences, hospitality Kenya, coastal retreats Kenya, safari travel experts, luxury vacation rentals',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('about', compact('seo'));
    }

    public function stays()
    {
        $seo = [
            'title' => 'Luxury Accommodations & Beach Resorts in Kenya | SaviraNest',
            'description' => 'Explore handpicked luxury accommodations including beach resorts, villas, safari lodges, apartments, and oceanfront retreats across Kenya.',
            'keywords' => 'Kenya accommodation, luxury resorts Kenya, beach villas Kenya, Watamu hotels, Diani resorts, Kilifi stays, luxury apartments Nairobi, boutique hotels Kenya, beachfront stays Africa, safari camps Kenya, holiday rentals Kenya',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('stays', compact('seo'));
    }

    public function experiences()
    {
        $seo = [
            'title' => 'Kenya Travel Experiences & Coastal Adventures | SaviraNest',
            'description' => 'Book unforgettable travel experiences including snorkeling, dolphin tours, dhow cruises, safaris, cultural tours, and wellness retreats in Kenya.',
            'keywords' => 'Kenya experiences, snorkeling Watamu, dolphin tours Kenya, dhow cruises, safari adventures Kenya, ocean activities Kenya, Swahili cultural tours, deep sea fishing Kenya, travel adventures Africa',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('experiences', compact('seo'));
    }

    public function pricing()
    {
        $seo = [
            'title' => 'Host Pricing & Property Listing Plans | SaviraNest',
            'description' => 'List your property on SaviraNest and reach travelers worldwide. Flexible pricing plans, transparent commissions, and premium property exposure.',
            'keywords' => 'property listing Kenya, host pricing, vacation rental commissions, list your villa Kenya, property management Kenya, Airbnb alternative Kenya, luxury stay hosting',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('pricing', compact('seo'));
    }

    public function contact()
    {
        $seo = [
            'title' => 'Contact SaviraNest | Bookings, Travel Help & Partnerships',
            'description' => 'Contact SaviraNest for accommodation bookings, partnerships, travel inquiries, and curated Kenya travel experiences. We are here to help.',
            'keywords' => 'contact SaviraNest, Kenya travel support, booking inquiries Kenya, accommodation assistance, coastal travel Kenya, hospitality support Africa',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('contact', compact('seo'));
    }

    public function booking()
    {
        $seo = [
            'title' => 'Book Luxury Stays & Experiences in Kenya | SaviraNest',
            'description' => 'Reserve luxury accommodations, safari lodges, beach villas, and curated experiences across Kenya with instant booking and secure payments.',
            'keywords' => 'book Kenya accommodation, Kenya stay booking, reserve safari lodge, beach villa booking Kenya, Watamu resorts booking, luxury travel Kenya',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('booking', compact('seo'));
    }

    public function expdetails()
    {
        $seo = [
            'title' => 'Snorkeling & Dolphin Watch in Watamu | SaviraNest',
            'description' => 'Enjoy snorkeling, dolphin watching, coral reef adventures, and sandbank picnics in Watamu. Book unforgettable ocean experiences with SaviraNest.',
            'keywords' => 'snorkeling Watamu, dolphin watching Kenya, Watamu marine park, ocean safari Kenya, coral reef adventures, beach excursions Kenya',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('exp-details', compact('seo'));
    }

    public function staydetails()
    {
        $seo = [
            'title' => 'Watamu Beach Resort | Luxury Oceanfront Stay in Kenya',
            'description' => 'Experience beachfront luxury at Watamu Beach Resort with ocean views, infinity pools, spa experiences, and direct beach access.',
            'keywords' => 'Watamu Beach Resort, oceanfront hotel Kenya, luxury resort Watamu, beachfront accommodation Kenya, Indian Ocean resorts',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('stay-details', compact('seo'));
    }

    public function accdetails()
    {
        $seo = [
            'title' => 'Deluxe Ocean View Room | Watamu Beach Resort',
            'description' => 'Stay in a luxury ocean view room at Watamu Beach Resort featuring beachfront access, premium comfort, modern amenities, and coastal elegance.',
            'keywords' => 'ocean view room Watamu, luxury hotel room Kenya, beachfront suite Watamu, deluxe accommodation Kenya',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('acc-details', compact('seo'));
    }
}
