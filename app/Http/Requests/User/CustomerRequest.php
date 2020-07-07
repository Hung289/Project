<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckPassCustomer;
use App\Rules\CheckResPass;
class CustomerRequest extends FormRequest
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
            'OldPass'=> [
                new CheckPassCustomer
            ],
            
            'ResNewPass'=>[
                new CheckResPass
            ]
        ];
    }

    public function messages()
    {
        return [
            
        ];     
    }
}
