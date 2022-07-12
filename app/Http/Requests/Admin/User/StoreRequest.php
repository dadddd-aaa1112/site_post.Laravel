<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',

            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'требуется имя',
            'name.string' => 'требуется строковое значение',
            'email.required' => 'требуется email',
            'email.string' => 'email должен быть корректным',
            'email.email' => 'email должен быть корректным',
            'email.unique' => 'такой email уже есть в системе',

        ];
    }

}
