<?php

namespace App\Http\Requests\v1\guest;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreGuestsRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',

            // 'stays' => 'nullable|integer',
            // 'experiences' => 'nullable|integer',

            'gender' => 'nullable|string|max:20',
            'nationality' => 'nullable|string|max:100',

            'country' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'location' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ];
    }
}
