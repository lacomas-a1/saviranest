<?php

namespace App\Http\Requests\v1\tabs;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreNotesRequest extends FormRequest
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
            // 'description' => 'nullable|array',
            // 'description.*' => 'nullable|string|max:255',
            // 'description' => 'nullable|string|max:2000',

            'exps_id' => 'required|exists:experiences,id',
            'notes' => 'nullable|array',
            'notes.*.title' => 'nullable|string',
            'notes.*.description' => 'nullable|string',

            // 'sort_order' => 'nullable|integer|min:0',
        ];
    }
}
