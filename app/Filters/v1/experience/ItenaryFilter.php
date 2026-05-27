<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class ItenaryFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'exps_id' => ['eq', 'ne'],
        'title' => ['eq', 'ne', 'like'],
        'period' => ['eq', 'ne'],
        'description' => ['eq', 'like'],
        'sort_order' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'expsId' => 'exps_id',
        'isActive' => 'is_active',
        'sortOrder' => 'sort_order',
    ];
}
