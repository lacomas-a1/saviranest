<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class BusinessFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'name' => ['eq', 'ne', 'like'],
        'location' => ['eq', 'ne', 'like'],
        'email' => ['eq', 'ne', 'like'],
        'phone' => ['eq', 'ne', 'like'],
    ];
}
