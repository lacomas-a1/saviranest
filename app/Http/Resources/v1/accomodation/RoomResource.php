<?php

namespace App\Http\Resources\v1\accomodation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
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

            'title' => $this->title,
            'slug' => $this->slug,
            'roomType' => $this->room_type,

            'description' => $this->description,

            'imageUrl' => $this->image_url,

            'price' => $this->price,
            'currency' => $this->currency,
            'rate' => $this->rate,

            'isAvailable' => (bool) $this->is_available,

            'stayId' => $this->stay_id,
        ];
    }
}
