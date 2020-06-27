<?php

namespace App\Http\Requests\CategoryRoom;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRoomAddRequest extends FormRequest
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
            'name'=>'required|unique:category_rooms',
            'image'=>'required|mimes:jpge,png,jpg,gif'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên danh mục phòng không được để trống',
            'name.unique'=>'Tên danh muc đã tồn tại',
            'image.required'=>'Ảnh không được để trống',
            'immage.mimes'=>'Ảnh không đúng định dạng. Vui lòng chọn lại ảnh'
        ];
    }
}
