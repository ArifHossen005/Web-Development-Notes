<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormVRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:10|exclude_if:admin,host',
            'email' => 'required|email',
            'price' => 'required|numeric|between:10,100',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Name chara hobe nah bro ',
            'name.min' => 'Name min 5 chara hobena',
        ];
    }
}
