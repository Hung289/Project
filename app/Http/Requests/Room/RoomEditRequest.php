<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class RoomEditRequest extends FormRequest
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
            'location'=>'required',
            'bed'=>'required',
            'bath'=>'required',
            'area'=>'required',
            'priceNight'=>'required',
            'priceWeekends'=>'required',
            'priceWeekly'=>'required',
            'priceClearFee'=>'required',
            // 'description '=>'required|min:3|max:2555',
            'category_room_id'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên phòng không được để trống',
            'location.required'=>'Vị trí phòng không được để trống',
            'bed.required'=>'Số giường ngủ không được để trống',
            'bath.required'=>'Số bồn tắm không được để trống',
            'area.required'=>'Diện tích phòng không được để trống',
            'priceNight.required'=>'Giá phòng một đêm không được để trống',
            'priceWeekends.required'=>'Giá phòng cuối tuần không được bỏ trống',
            'priceWeekly.required'=>'Giá phòng một tuần không được bỏ trống',
            'priceClearFee.required'=>'Phí dọn dẹp không được bỏ trống',
            // 'description.required'=>'Giới thiệu về phòng không được bỏ trống',

            'category_room_id.required'=>'Phải chọn danh mục phòng'
        ];
    }
}
