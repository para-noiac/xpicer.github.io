<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Lesson3Request extends Request
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
            'name'=>'required|unique:mysql.lesson3,name',
            'description'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Name (Global) is required.',
            'name.unique'=>'Name (Global) must be unique.',
            'description.required'=>'Description (Global) is required.',
        ];
    }
}
