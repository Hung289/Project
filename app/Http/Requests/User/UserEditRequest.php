<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;


class UserEditRequest extends FormRequest
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
    public function rules(User $user)
    {
        
        return [
            'name' => 'required',
            'email' => 'required | email | unique:users,email,'.request()->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'name không được bỏ trống',
            'email.required'=>'email không được bỏ trống',
            'email.email'=>'email không đúng định dạng email',
            'email.unique'=>'email đã tồn tại',
        ];
    }
}
