<?php

namespace App\Http\Resources\v1\transaction;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'bookRef' => $this->book_ref,
            'amount' => $this->amount,
            'status' => $this->status,
            'transactionId' => $this->transaction_id,
            'guestName' => $this->guest_name,
            'paymentMethod' => $this->payment_method,
            'paymentDate' => $this->payment_date,

            'bookingId' => $this->booking_id,
            'businessId' => $this->business_id,

            // Optional: formatted values
            'formattedAmount' => number_format($this->amount, 2),
            'isPaid' => $this->status === 'paid',
        ];

    }
}
