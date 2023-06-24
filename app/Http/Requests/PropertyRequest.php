<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'       => 'required|min:5',
            'price'       => 'required|min:6|numeric',
            'description' => 'required|min:20',
            'wc'          => 'required|min:1|numeric',
            'parking'     => 'required|min:1|numeric',
            'rooms'       => 'required|min:1|numeric',
        ];
    }
}
