<?php

namespace App\Http\Resources\v1\guest;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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

            'reviewerName' => $this->reviewer_name,
            'reviewerEmail' => $this->reviewer_email,

            'rating' => $this->rating,
            'review' => $this->review,

            'reply' => $this->reply,
            'adminName' => $this->admin_name,

            'isApproved' => (bool) $this->is_approved,

            'stayId' => $this->stay_id,
            'expsId' => $this->exps_id,
        ];
    }
}
