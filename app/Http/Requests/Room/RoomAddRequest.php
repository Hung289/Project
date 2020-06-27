<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class RoomAddRequest extends FormRequest
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
            'name'=>'required|unique:rooms',
            'location'=>'required',
            'bed'=>'required',
            'bath'=>'required',
            'area'=>'required',
            'priceNight'=>'required',
            'priceWeekends'=>'required',
            'priceWeekly'=>'required',
            'priceClearFee'=>'required',
            // 'description '=>'required|min:3|max:2555',
            'category_room_id'=>'required',
            'files'=>'required',
            'files.*'=>'mimes:jpg,jpeg,png,bmp|max:20000'

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên phòng không được để trống',
            'name.unique'=>'Tên phòng đã tồn tại',
            'location.required'=>'Vị trí phòng không được để trống',
            'bed.required'=>'Số giường ngủ không được để trống',
            'bath.required'=>'Số bồn tắm không được để trống',
            'area.required'=>'Diện tích phòng không được để trống',
            'priceNight.required'=>'Giá phòng một đêm không được để trống',
            'priceWeekends.required'=>'Giá phòng cuối tuần không được bỏ trống',
            'priceWeekly.required'=>'Giá phòng một tuần không được bỏ trống',
            'priceClearFee.required'=>'Phí dọn dẹp không được bỏ trống',
            // 'description.required'=>'Giới thiệu về phòng không được bỏ trống',
            'category_room_id.required'=>'Phải chọn danh mục phòng',
            'files.required'=>'Phải chọn ít nhất 1 ảnh',
            'files.*.mimes'=>'Ảnh nhập vào không đúng định dạng',
            'files.*.max'=>'Ảnh nhập vào không đc lớn hơn 20MB'
        ];
    }
}
