<?php

namespace App\Http\Requests\LoginWeb;

use Illuminate\Foundation\Http\FormRequest;

class LoginWebAddRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required | min:3 |max: 32'   
        ];
    }

    public function messages()
    {
        return [
           
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password không nhỏ hơn 3 ký tự',
            'password.max' => 'Password không lớn hơn 32 ký tự'
        ]; 
    }
}
