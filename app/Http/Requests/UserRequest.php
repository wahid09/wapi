<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if (request()->isMethod('post')) {
            $passwordRule = 'required';
        } elseif (request()->isMethod('put')) {
            $passwordRule = 'nullable';
        }


        return [
            'name' => [
                'required', 'string', 'max:255',
            ],
            'email' => [
                'required', 'email', 'max:255',
                Rule::unique('users')->ignore(optional($this->user)->id),
            ],
            'password' => [
                $passwordRule, 'string', 'min:8', 'confirmed',
            ]
        ];
    }
}
