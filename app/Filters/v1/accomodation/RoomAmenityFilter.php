<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class RoomAmenityFilter extends ApiFilter
{
    protected $safeParams = [
        'title' => ['eq', 'ne', 'like'],
        'slug' => ['eq', 'ne', 'like'],
        'room_id' => ['eq', 'ne'],
        'is_active' => ['eq'],
        'sort_order' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'roomId' => 'room_id',
        'isActive' => 'is_active',
        'sortOrder' => 'sort_order',
    ];

}
