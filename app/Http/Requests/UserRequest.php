<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'cod_ced' => 'required|numeric|digits_between:5,20',
            'name' => 'required|string|max:255',
            'tel' => 'required|numeric|digits:10',
            'rol' => 'required|string',
            'email' => 'required|string|email|max:255',
            'sede_ext' => 'required|string|'
            
           
        ];
    }
}
