<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        return [
            'name'=> 'required|string|min:3|max:25|unique:categories,id',
            'name_bn'=> 'nullable|string|min:3|max:25',
            'description'=> 'nullable|string|max:1225',
            'description_bn'=> 'nullable|string|max:1225',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
