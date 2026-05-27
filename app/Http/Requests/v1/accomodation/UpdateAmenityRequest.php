<?php

namespace App\Http\Requests\v1\accomodation;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAmenityRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'name' => 'required|string|max:255',
                'icon' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ];
        } else {
            return [
                'name' => 'sometimes|required|string|max:255',
                'icon' => 'sometimes|required|string|max:255',
                'category' => 'sometimes|required|string|max:255',
                'description' => 'sometimes|required|string|max:255',
            ];
        }
    }
}
