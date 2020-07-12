<?php

namespace App\Http\Requests\RegisterWeb;

use Illuminate\Foundation\Http\FormRequest;

class RegisterWebAddRequest extends FormRequest
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
            'email' => 'required  | unique:users',
            'password' => 'required|min:3|max:32',
            're-pass'=>['required',function($attribute, $value, $fail){
                if($value !== request()->get('password')){
                    $fail($attribute.' Mật khẩu lần 2 không đúng với mật khẩu lần 1');
                }
            }]
        ];
    }

    public function messages()
    {
        return [
            'email.unique'=>'Email này đã tồn tại',
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password không nhỏ hơn 3 kí tự',
            'password.max' => 'Password không lớn hơn 32 ký tự',
            're-pass.required'=>'Nhập lại mật khẩu không được để trống'
        ];
    }
}
