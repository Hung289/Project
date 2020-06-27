<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogAddRequest extends FormRequest
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
            'name'=>'required | unique:blogs',
            'content'=>'required',
            'title'=>'required',
            'category_blog_id'=>'required',
            'user_id'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên blog không được để trống',
            'name.unique'=>'Tên Blog đã tồn tại',
            'content.required'=>'Content không được bỏ trống',
            'title.required'=>'Title không được bỏ trống',
            'category_blog_id.required'=>'Danh muc của blog không được bỏ trống',
            'user_id.required'=>'Người đăng bài không được bỏ trống'
        ];        
    }
}
