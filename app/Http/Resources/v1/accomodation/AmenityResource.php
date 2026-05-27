<?php

namespace App\Http\Resources\v1\accomodation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AmenityResource extends JsonResource
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
            'icon' => $this->icon,
            'description' => $this->description,
            'isActive' => (bool) $this->is_active,
            'sortOrder' => $this->sort_order,
            'stayId' => $this->stay_id,
        ];
    }
}
