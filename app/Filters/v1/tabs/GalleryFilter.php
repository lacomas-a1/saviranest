<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class GalleryFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'sort_order' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'sortOrder' => 'sort_order',
    ];
}
