<?php

namespace App\Http\Requests\v1\accomodation;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRoomsRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            // 'slug' => 'nullable|string|max:255|unique:rooms,slug',
            'room_type' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',

            'image_url' => 'required|string|max:255',

            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'rate' => 'required|string|max:255',

            'is_available' => 'nullable|boolean',

            'stay_id' => 'required|exists:stays,id',
        ];
    }
}
