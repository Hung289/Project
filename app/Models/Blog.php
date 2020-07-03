<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BlogImage;

class Blog extends Model
{
    protected $fillable = [
        'name','content','title','status','user_id','category_blog_id','new'
    ];

    public function blogImage(){
        return $this->hasMany('App\Models\BlogImage','blog_id','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function categoryBlog(){
        return $this->belongsTo('App\Models\CategoryBlog','category_blog_id','id');
    }

    public function commentBlog()
    {
        return $this->hasMany('App\Models\CommentBlog','blog_id','id');
    }

    public function add(){
        

        $model = $this->create([
            'name'=>request()->name,
            'content'=>request()->content,
            'title'=>request()->title,
            'status'=>request()->status,
            'user_id'=>request()->user_id,
            'category_blog_id'=>request()->category_blog_id
        ]);
        $image = request()->file('files');
        foreach($image as $img){
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/Blog'),$img_name);

            BlogImage::create([
                'image'=>$img_name,
                'blog_id'=>$model->id
            ]);
        }
        return $model;
    }

    public function updateEdit(){
        if(request()->has('files')){
            $image = request()->file('files');
            foreach($image as $img){
                $img_name= $img->getClientOriginalName();
                $img->move(base_path('public/uploads/images/Blog'),$img_name);
                BlogImage::create([
                    'image'=>$img_name,
                    'blog_id'=>$this->id
                ]);
            }
            $model = $this->update([
                'name'=>request()->name,
                'content'=>request()->content,
                'title'=>request()->title,
                'status'=>request()->status,
                'user_id'=>request()->user_id,
                'category_blog_id'=>request()->category_blog_id,
                'new'=>request()->new
            ]);
            return $model;
        }else{
            $model = $this->update([
                'name'=>request()->name,
                'content'=>request()->content,
                'title'=>request()->title,
                'status'=>request()->status,
                'user_id'=>request()->user_id,
                'category_blog_id'=>request()->category_blog_id,
                'new'=>request()->new
            ]);
            return $model;
        }
    }
}
