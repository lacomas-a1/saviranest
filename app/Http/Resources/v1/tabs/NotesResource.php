<?php

namespace App\Http\Resources\v1\tabs;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotesResource extends JsonResource
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
            'description' => $this->description,
            'expsId' => $this->exps_id,
            'sortOrder' => $this->sort_order,
        ];
    }
}
