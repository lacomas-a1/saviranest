<?php

namespace App\Http\Requests\v1\guest;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreReviewsRequest extends FormRequest
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
            'reviewer_name' => 'required|string|max:255',
            'reviewer_email' => 'nullable|email|max:255',

            'rating' => 'required|numeric|min:1|max:5',
            'review' => 'required|string|max:2000',

            'reply' => 'nullable|string|max:2000',
            'admin_name' => 'nullable|string|max:255',

            'is_approved' => 'nullable|boolean',

            'stay_id' => 'nullable|exists:stays,id',
            'exps_id' => 'nullable|exists:experiences,id',
        ];
    }
}
