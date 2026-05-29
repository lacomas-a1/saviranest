<?php

namespace App\Http\Resources\v1\experience;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
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
            'category' => $this->category,
            'tagline' => $this->tagline,

            'location' => $this->location,
            'meetingPoint' => $this->meeting_point,

            'imageUrl' => $this->image_url,
            'excerpt' => $this->excerpt,
            'description' => $this->description,

            'period' => $this->period,
            'duration' => $this->duration,

            'maxGuests' => $this->max_guests,

            'price' => $this->price,
            'currency' => $this->currency,

            'rate' => $this->rate,
            'rating' => $this->rating,

            'contact' => $this->contact,
            'email' => $this->email,

            'isActive' => (bool) $this->is_active,
            'isAvailable' => (bool) $this->is_available,
            'isFeatured' => (bool) $this->is_featured,
            'isPopular' => (bool) $this->is_popular,

            'businessId' => $this->business_id,
        ];
    }
}
