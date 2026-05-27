<?php

namespace App\Filters\v1\accomodation;

use App\Filters\ApiFilter;

class TransactionFilter extends ApiFilter
{
    protected $safeParams = [
    'id' => ['eq', 'ne'],
    'book_ref' => ['eq', 'ne', 'like'],
    'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    'status' => ['eq', 'ne'],
    'payment_method' => ['eq', 'ne'],
    'payment_date' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    'booking_id' => ['eq', 'ne'],
    'transaction_id' => ['eq', 'ne'],
    'business_id' => ['eq', 'ne'],
    'created_at' => ['eq', 'gt', 'lt', 'gte', 'lte'],
];
    
protected $columnMap = [
    'bookRef' => 'book_ref',
    'paymentMethod' => 'payment_method',
    'paymentDate' => 'payment_date',
    'transactionId' => 'transaction_id',
    'businessId' => 'business_id',
];

}
