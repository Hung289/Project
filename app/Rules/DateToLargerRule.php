<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DateToLargerRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(request()->has('searchFromDate')) {
            if (strtotime($value) < strtotime(request()->get('searchFromDate'))) {
                return false;
            }    
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ngày đến phải lớn hơn ngày đi';
    }
}
