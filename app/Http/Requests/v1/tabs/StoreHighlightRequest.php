<?php

namespace App\Http\Requests\v1\tabs;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreHighlightRequest extends FormRequest
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
            'highlights' => 'nullable|array',
            'highlights.*.title' => 'nullable|string|max:255',
            'highlights.*.icon' => 'nullable|string|max:255',
            'highlights.*.description' => 'nullable|string',

            'stay_id' => 'nullable|exists:stays,id',
            'exps_id' => 'nullable|exists:experiences,id',
            'room_id' => 'nullable|exists:rooms,id',
        ];
    }
}
