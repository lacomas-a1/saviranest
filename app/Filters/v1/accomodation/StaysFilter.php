<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class StaysFilter extends ApiFilter
{
    protected $safeParams = [
        'title' => ['eq', 'ne', 'like'],
        'slug' => ['eq', 'ne', 'like'],
        'category' => ['eq', 'ne', 'like'],
        'location' => ['eq', 'ne', 'like'],
        'price' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'currency' => ['eq', 'ne'],
        'rating' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'is_available' => ['eq'],
        'is_featured' => ['eq'],
        'is_popular' => ['eq'],
        'business_id' => ['eq', 'ne'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'isAvailable' => 'is_available',
        'isFeatured' => 'is_featured',
        'isPopular' => 'is_popular',
        'businessId' => 'business_id',
    ];

}
