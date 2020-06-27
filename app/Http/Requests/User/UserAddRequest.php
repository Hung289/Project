<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            'name'=>'required|unique:users',
            'avatar' => 'required|mimes:jpge,png,gif,jpg',
            'email'=>'required|unique:users',
            'password'=>'required | min:3 | max:32'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên người dùng không được để trống',
            'name.unique'=>'Tên đã tồn tại',
            'email.required'=>'Email không được để trống',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Password không được để trống',
            'avatar.mimes'=>'Ảnh bạn nhập không đúng định dạng',
            'avatar.required'=>'Bạn chưa chọn ảnh đại diện'
        ];
    }
}
