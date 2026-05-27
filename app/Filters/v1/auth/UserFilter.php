<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class UserFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'name' => ['eq', 'ne', 'like'],
        'email' => ['eq', 'ne', 'like'],
        'phone_number' => ['eq', 'ne', 'like'],
        'status' => ['eq', 'ne'],
        'role_name' => ['eq', 'ne'],
        'role_id' => ['eq', 'ne'],
        'business_id' => ['eq', 'ne'],

        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'last_login' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'businessId' => 'business_id',
        'roleId' => 'role_id',
        'phoneNumber' => 'phone_number',
        'roleName' => 'role_name',
        'lastLogin' => 'last_login',
        'emailVerifiedAt' => 'email_verified_at',
    ];
}
