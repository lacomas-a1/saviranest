<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class BookFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'ne'],

        'book_ref' => ['eq', 'ne', 'like'],
        'status' => ['eq', 'ne'],
        'room_type' => ['eq', 'ne'],

        'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'ndays' => ['eq', 'gt', 'lt', 'gte', 'lte'],

        'checkin' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'checkout' => ['eq', 'gt', 'lt', 'gte', 'lte'],

        'adult_no' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'child_no' => ['eq', 'gt', 'lt', 'gte', 'lte'],

        'guest_name' => ['eq', 'ne', 'like'],
        'guest_email' => ['eq', 'ne', 'like'],
        'guest_phone' => ['eq', 'ne', 'like'],

        'stay_id' => ['eq', 'ne'],
        'exps_id' => ['eq', 'ne'],
        'business_id' => ['eq', 'ne'],

        'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'bookRef' => 'book_ref',
        'roomType' => 'room_type',
        'preferredTime' => 'preferred_time',

        'adultNo' => 'adult_no',
        'childNo' => 'child_no',

        'guestName' => 'guest_name',
        'guestEmail' => 'guest_email',
        'guestPhone' => 'guest_phone',
        'guestRequest' => 'guest_request',

        'stayId' => 'stay_id',
        'expsId' => 'exps_id',
        'businessId' => 'business_id',
    ];
}
