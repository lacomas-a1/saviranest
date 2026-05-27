<?php

namespace App\Http\Resources\v1\experience;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItenaryResource extends JsonResource
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
            'period' => $this->period,
            'description' => $this->description,

            'sortOrder' => $this->sort_order,
            'expsId' => $this->exps_id,
        ];
    }
}
