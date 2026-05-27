<?php

namespace App\Http\Requests\v1\accomodation;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStaysRequest extends FormRequest
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
            'slug' => 'nullable|string|max:255|unique:listings,slug',

            'category' => 'required|string|max:255',
            'location' => 'required|string|max:255',

            'image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // 'image_url' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'description' => 'nullable|string|max:2000',

            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'rate_type' => 'nullable|string|max:255',

            'contact' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',

            'is_available' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'is_popular' => 'nullable|boolean',

            'rating' => 'nullable|numeric|min:0|max:5',
        ];
    }
}
