<?php

namespace App\Http\Requests\Date;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateToLargerRule;

class DateRequest extends FormRequest
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
     * thu valide requie đi
     * buoc 1 thanh cong =)).CHO THOONG BAOS TIEENSG VIEEJT THOOI
     * buoc 2 thanh cong =))
     * hết bước rồi vl
     * phai viet code that dry//mệt thực sự đkm
     * vui vãi lon =))
     * oke =))
     *  kkkk
     * dry tí die vc =)) tưởng viết được như js =)) php cuif vl
     * viết thế làm méo j nhỉ.viết bên kia luôn đi
     * dry =)) dry là chân llis =))vkl
     * cđe ko được lặp, phải viết ra hàm để còn tái sử dụng =))
     * chưa bao giwof viết hàm mà tái sử dụng cả vl function thôi 
     * giờ cái hàm DateToLargerRule thằng kia cx có thế dùng được mà ko cần viết lại code =))
     * dry vl . thằng nào dùng thằng kia nếu dùng được.ít lắm nó có giiongs nhau hoàn toàn đâu
     * =)) 
     * @return array
     */
    public function rules()
    {
        return [
            'searchFromDate'=>'required',
            'searchToDate'=> [
                'required', 
                new DateToLargerRule
            ]
        ];
    }

    public function messages()
    {
        return [
            'searchFromDate.required'=>'Phải chọn ngày đến',
            'searchToDate.required'=>'phiar chonj ngayf di'
        ];
    }
}
