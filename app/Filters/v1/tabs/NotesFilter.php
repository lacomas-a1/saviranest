<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class NotesFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'title' => ['eq', 'ne', 'like'],
        'description' => ['eq', 'ne', 'like'],
        'exps_id' => ['eq', 'ne'],
        'sort_order' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'is_active' => ['eq'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'expsId' => 'exps_id',
        'isActive' => 'is_active',
        'sortOrder' => 'sort_order',
    ];
}
