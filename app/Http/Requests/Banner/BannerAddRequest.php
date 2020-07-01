<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerAddRequest extends FormRequest
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
            'name'=>'required | unique:banners',
            'content'=>'required',
            'image'=>'required | mimes:png,jpeg,gif',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên banner không được bỏ trống',
            'name.unique'=>'Tên banner đã tồn tại',
            'content.required'=>'Nội dung banner không được bỏ trống',
            'image.required'=>'Ảnh banner không được để trống',
            'image.mimes'=>'Ảnh banner không đúng định dạng'
        ];
    }
}
