<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class RoleFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'name' => ['eq', 'ne', 'like'],
        'business_id' => ['eq', 'ne'],
    ];

    protected $columnMap = [
        'businessId' => 'business_id',
    ];

}
