<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class ExperienceFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],

        'title' => ['eq', 'ne', 'like'],
        'category' => ['eq', 'ne', 'like'],
        'location' => ['eq', 'ne', 'like'],

        'price' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'rate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'rating' => ['eq', 'gt', 'lt', 'gte', 'lte'],

        'max_guests' => ['eq', 'gt', 'lt', 'gte', 'lte'],

        'is_active' => ['eq'],
        'is_available' => ['eq'],
        'is_featured' => ['eq'],
        'is_popular' => ['eq'],

        'period' => ['eq', 'ne'],
        'duration' => ['eq', 'gt', 'lt', 'gte', 'lte'],

        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'isActive' => 'is_active',
        'isAvailable' => 'is_available',
        'isFeatured' => 'is_featured',
        'isPopular' => 'is_popular',

        'maxGuests' => 'max_guests',
        'imageUrl' => 'image_url',
        'meetingPoint' => 'meeting_point',
        'businessId' => 'business_id',
    ];
}
