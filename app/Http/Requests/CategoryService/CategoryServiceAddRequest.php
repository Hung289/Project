<?php

namespace App\Http\Requests\CategoryService;

use Illuminate\Foundation\Http\FormRequest;

class CategoryServiceAddRequest extends FormRequest
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
            'name'=>'required|unique:category_services',
            'image'=>'required|mimes:png,jpeg,gif',
            'imageHover'=>'required|mimes:png,jpeg,gif',
            'bannerService'=>'required|mimes:png,jpeg,gif',
            'linkVideoService'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên danh mục dịch vụ không được để trống',
            'name.unique'=>'Danh mục này đã tồn tại',
            'image.required'=>'Ảnh không được để trống',
            'image.mimes'=>'Image không đúng định dạng',
            'imageHover.required'=>'ImageHover không được để trống',
            'imageHover.mimes'=>'ImageHover không đúng định dạng',
            'bannerService.required'=>'BannerService không được để trống',
            'bannerService.mimes'=>'bannerService không đúng định dạng',
            'linkVideoService.required'=>'linkVideoService không được để trống'
        ];
    }
}
