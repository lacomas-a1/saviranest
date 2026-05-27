<?php

namespace App\Http\Requests\v1\accomodation;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAmenityRequest extends FormRequest
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
            // 'icon' => 'required|string|max:255',
            // 'category' => 'required|string|max:255',
            // 'description' => 'required|string|max:255',
            'stay_id' => 'required|exists:stays,id',
            'amenities' => 'nullable|array',
            'amenities.*.title' => 'nullable|string',
            'amenities.*.icon' => 'nullable|string',
            'amenities.*.description' => 'nullable|string',
        ];
    }
}
