<?php

namespace App\Http\Requests\CheckOut;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutAddRequest extends FormRequest
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
            'name'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required',
            'note'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên không được bỏ trống',
            'gender.required'=>'Gender không được bỏ trống',
            'phone.required'=>'Phone không được bỏ trống',
            'address.required'=>'Address không được bỏ trống',
            'email.required'=>'Email không được bỏ trống',
            'note.required'=>'Note không được bỏ trống'
        ]; 
    }
}
