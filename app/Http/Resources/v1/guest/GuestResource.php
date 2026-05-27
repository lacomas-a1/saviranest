<?php

namespace App\Http\Resources\v1\guest;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GuestResource extends JsonResource
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

            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,

            'gender' => $this->gender,
            'nationality' => $this->nationality,

            'country' => $this->country,
            'city' => $this->city,
            'location' => $this->location,
            'address' => $this->address,

            'businessId' => $this->business_id,
        ];
    }
}
