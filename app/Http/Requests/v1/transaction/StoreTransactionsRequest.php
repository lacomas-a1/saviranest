<?php

namespace App\Http\Requests\v1\transaction;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionsRequest extends FormRequest
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
            'book_ref' => 'required|string|max:100',
            'amount' => 'required|numeric|min:0',

            'status' => 'nullable|string|max:50',

            'transaction_id' => 'nullable|string|max:255',

            'guest_name' => 'required|string|max:255',

            'payment_method' => 'required|string|max:50',

            'payment_date' => 'nullable|date',

            'booking_id' => 'required|exists:bookings,id',
        ];
    }
}
