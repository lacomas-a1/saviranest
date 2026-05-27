<?php

namespace App\Http\Requests\v1\tabs;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
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
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',

            'stay_id' => 'nullable|exists:stays,id',
            'exps_id' => 'nullable|exists:experiences,id',
        ];
    }
}
