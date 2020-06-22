<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    protected $fillable = [
        'name','slug','image','description','ordering','status'
    ];


    public function blog(){
        return $this->hasMany('App\Models\Blog','category_blog_id','id');
    }


    public function add(){
        $img = request()->image;
        $img_name = $img->getClientOriginalName();
        $img->move(base_path('public/uploads/images/CategoryBlog'),$img_name);

        $model = $this->create([
            'name'=>request()->name,
            'slug'=>Str::slug(request()->name),
            'image'=>$img_name,
            'description'=>request()->description,
            'status'=>request()->status
        ]);

        return $model;
    }

    public function updateEdit(){
        if(request()->has('image')){
            $img = request()->image;
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/CategoryBlog'),$img_name);

            $model = $this->update([
                'name'=>request()->name,
                'slug'=>Str::slug(request()->name),
                'image'=>$img_name,
                'description'=>request()->description,
                'status'=>request()->status
            ]);

            return $model;
        }else{
            $model = $this->update([
                'name'=>request()->name,
                'slug'=>Str::slug(request()->name),
                'description'=>request()->description,
                'status'=>request()->status
            ]);
        }
    }
}
