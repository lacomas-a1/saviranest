<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class ReviewFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'reviewer_name' => ['eq', 'ne', 'like'],
        'reviewer_email' => ['eq', 'ne', 'like'],
        'rating' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'is_approved' => ['eq'],
        'admin_name' => ['eq', 'ne', 'like'],
        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'isApproved' => 'is_approved',
        'reviewerName' => 'reviewer_name',
        'reviewerEmail' => 'reviewer_email',
        'adminName' => 'admin_name',
    ];
}
