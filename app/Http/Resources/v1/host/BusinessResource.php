<?php

namespace App\Http\Resources\v1\host;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessResource extends JsonResource
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
            'location' => $this->location,

            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}
