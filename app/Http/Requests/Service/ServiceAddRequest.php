<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceAddRequest extends FormRequest
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
            'name'=>'required|unique:services',
            'image'=>'required|mimes:png,jpeg,gif',
            'price'=>'required',
            'category_service_id'=>'required',
            'description'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên dịch vụ không được để trống',
            'name.unique'=>'Tên dịch vụ đã tồn tại',
            'image.required'=>'Ảnh không được để trống',
            'image.mimes'=>'Ảnh không đúng định dạng',
            'price.required'=>'Giá dịch vụ không được để trống',
            'category_service_id.required'=>'Danh mục dịch vụ không được để trống',
            'description.required'=>'chú thích không được để trống'
        ];
    }
}
