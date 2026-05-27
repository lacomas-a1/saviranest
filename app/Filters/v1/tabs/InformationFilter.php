<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class InformationFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'title' => ['eq', 'ne', 'like'],
        'description' => ['eq', 'ne', 'like'],
        'sort_order' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'sortOrder' => 'sort_order',
    ];
}
