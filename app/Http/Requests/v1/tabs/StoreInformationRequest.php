<?php

namespace App\Http\Requests\v1\tabs;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreInformationRequest extends FormRequest
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
            'informations' => 'required|array',

            'informations.*.title' => 'required|string|max:255',
            'informations.*.description' => 'nullable|string',

            'exps_id' => 'required|exists:experiences,id',
        ];
    }
}
