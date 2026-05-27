<?php

namespace App\Http\Resources\v1\auth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'phoneNumber' => $this->phone_number,

            'status' => $this->status,
            'roleName' => $this->role_name,
            'roleId' => $this->role_id,

            'avatar' => $this->avatar,

            'provider' => $this->provider,
            'googleId' => $this->google_id,

            'lastLogin' => $this->last_login,
            'joinDate' => $this->join_date,

            'emailVerifiedAt' => $this->email_verified_at,

            'businessId' => $this->business_id,
        ];
    }
}
