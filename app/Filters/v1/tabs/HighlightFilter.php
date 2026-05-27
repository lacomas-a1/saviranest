<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class HighlightFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'title' => ['eq', 'ne', 'like'],
        'description' => ['eq', 'ne', 'like'],
        'is_active' => ['eq'],
        'sort_order' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'isActive' => 'is_active',
        'sortOrder' => 'sort_order',
    ];
}
