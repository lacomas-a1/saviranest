<?php

namespace App\Http\Requests\v1\experience;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreExperienceRequest extends FormRequest
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
            'slug' => 'nullable|string|max:255|unique:experiences,slug',
            'category' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'meeting_point' => 'nullable|string|max:255',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // 'image_url' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'description' => 'nullable|string|max:2000',
            'period' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'max_guests' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'rate' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'is_active' => 'nullable|boolean',
            'is_available' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'is_popular' => 'nullable|boolean',
            'rating' => 'nullable|numeric|min:0|max:5',
        ];
    }
}
