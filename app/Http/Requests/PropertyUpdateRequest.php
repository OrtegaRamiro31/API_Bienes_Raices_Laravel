<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyUpdateRequest extends FormRequest
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
            'title'       => 'min:5',
            'price'       => 'min:10000|numeric',
            'description' => 'min:20',
            'wc'          => 'min:1|numeric',
            'parking'     => 'min:0|numeric',
            'rooms'       => 'min:1|numeric',
        ];
    }
}
