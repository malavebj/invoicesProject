<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'string', 
                'max:255',
                'required'
            ],
            'description' => [
                'required'
            ],
            'price' => [
                'required',
                'numeric',
                'min:0'
            ],
            'tax' => [
                'required',
                'numeric',
                'min:0',
                'max:100'
            ]
        ];
    }
}
