<?php

namespace App\Http\Resources\v1\book;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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

            'roomType' => $this->room_type,
            'status' => $this->status,

            'nights' => $this->ndays,

            'checkin' => $this->checkin,
            'checkout' => $this->checkout,
            'preferredTime' => $this->prefered_time,

            'adults' => $this->adult_no,
            'children' => $this->child_no,

            'guestName' => $this->guest_name,
            'guestEmail' => $this->guest_email,
            'guestPhone' => $this->guest_phone,
            'guestRequest' => $this->guest_request,

            'stayId' => $this->stay_id,
            'expsId' => $this->exps_id,
            'businessId' => $this->business_id,
        ];
    }
}
