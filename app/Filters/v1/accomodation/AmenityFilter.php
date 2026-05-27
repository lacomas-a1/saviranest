<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class AmenityFilter extends ApiFilter
{
    protected $safeParams = [
        'title' => ['eq', 'ne', 'like'],
        'stay_id' => ['eq', 'ne'],
        'is_active' => ['eq'],
        'sort_order' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'stayId' => 'stay_id',
        'isActive' => 'is_active',
        'sortOrder' => 'sort_order',
        'stayID' => 'stay_id',
    ];

}
