<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class GuestFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'name' => ['eq', 'ne', 'like'],
        'email' => ['eq', 'ne', 'like'],
        'phone' => ['eq', 'ne', 'like'],
        'gender' => ['eq', 'ne'],
        'nationality' => ['eq', 'ne', 'like'],
        'country' => ['eq', 'ne', 'like'],
        'city' => ['eq', 'ne', 'like'],
        'business_id' => ['eq', 'ne'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'businessId' => 'business_id',
    ];
}
