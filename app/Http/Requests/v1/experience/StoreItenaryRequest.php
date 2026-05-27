<?php

namespace App\Http\Requests\v1\experience;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreItenaryRequest extends FormRequest
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
            'exps_id' => 'required|exists:experiences,id',
            'itineraries' => 'nullable|array',
            'itineraries.*.title' => 'nullable|string',
            'itineraries.*.period' => 'nullable|string',
            'itineraries.*.description' => 'nullable|string',
            'itineraries.*.sort_order' => 'nullable|integer',

            // 'title' => 'required|string|max:255',
            // 'period' => 'required|string|max:255',

            // 'description' => 'nullable|string|max:1000',

            // 'sort_order' => 'nullable|integer|min:0',
        ];
    }
}
