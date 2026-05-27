<?php

namespace App\Http\Requests\v1\book;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [
            'room_type' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',

            'status' => 'nullable|string|max:50',
            'ndays' => 'required|integer|min:1',

            'checkin' => 'required|date',
            'checkout' => 'required|date|after_or_equal:checkin',

            'prefered_time' => 'nullable|string|max:50',

            'adult_no' => 'required|integer|min:1',
            'child_no' => 'nullable|integer|min:0',

            'guest_name' => 'required|string|max:255',
            'guest_email' => 'nullable|email|max:255',
            'guest_phone' => 'required|string|max:20',

            'guest_request' => 'nullable|string|max:1000',

            'stay_id' => 'nullable|exists:stays,id',
            'exps_id' => 'nullable|exists:experiences,id',
        ];
    }
}
