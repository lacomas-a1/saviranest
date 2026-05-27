<?php

namespace App\Http\Resources\v1\tabs;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
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
        'imageUrl' => $this->image_url,
        'sortOrder' => $this->sort_order,
        'expsId' => $this->exps_id,
        'stayId' => $this->stay_id,
    ];
    }
}
