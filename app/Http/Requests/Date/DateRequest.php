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
     * @return array
     */
    public function rules()
    {
        return [
            'searchToDate'=> [
                new DateToLargerRule
            ]
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
