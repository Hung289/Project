<?php

namespace App\Http\Requests\Brand;

use Illuminate\Foundation\Http\FormRequest;

class BrandAddRequest extends FormRequest
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
            'name'=>'required|unique:brands',
            'image'=>'required|mimes:png,jpeg,gif'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên thương hiệu không được bỏ trống',
            'name.unique'=>'Tên thương hiệu đã tồn tại',
            'image.required'=>'Ảnh không được bỏ trống',
            'image.mimes'=>'Ảnh không đúng định dạng'
        ];
    }
}
