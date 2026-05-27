<?php

namespace App\Http\Requests\v1\accomodation;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRoomAmenityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'title' => 'required|string|max:255',
            // 'slug' => 'nullable|string|max:255|unique:room_features,slug',
            // 'icon' => 'required|string|max:255',
            // 'description' => 'required|string|max:1000',

            // 'is_active' => 'nullable|boolean',
            // 'sort_order' => 'nullable|integer|min:0',

            'room_amenities' => 'nullable|array',
            'room_amenities.*.title' => 'nullable|string',
            'room_amenities.*.icon' => 'nullable|string',
            // 'room_amenities.*.room_id' => 'nullable|exists:rooms,id',
            'room_amenities.*.description' => 'nullable|string',

            'room_id' => 'required|exists:rooms,id',
        ];
    }
}
