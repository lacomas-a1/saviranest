<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class RoomsFilter extends ApiFilter
{
    protected $safeParams = [
        'title' => ['eq', 'ne', 'like'],
        'slug' => ['eq', 'ne', 'like'],
        'room_type' => ['eq', 'ne'],
        'stay_id' => ['eq', 'ne'],
        'price' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'currency' => ['eq', 'ne'],
        'rate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'is_available' => ['eq'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'roomType' => 'room_type',
        'stayId' => 'stay_id',
        'isAvailable' => 'is_available',
    ];

}
