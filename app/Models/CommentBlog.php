<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class CommentBlog extends Model
{
    protected $fillable = [
        'user_id', 'blog_id', 'parent', 'comment'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function blog()
    {
        return $this->belongsTo('App\Models\Blog', 'blog_id', 'id');
    }

    public function postCB($id)
    {
        $blog = Blog::find($id);
        // dd($blog);
        $model = $this->create([
            'user_id'=>Auth::user()->id,
            'blog_id'=>$blog->id,
            'comment'=>request()->comment,
        ]);
        return $model;
    }

    public function postCBC($id,$parent)
    {
        // dd($id);
        $blog = Blog::find($id);
        // dd($blog);
        $model = $this->create([
            'user_id'=>Auth::user()->id,
            'blog_id'=>$blog->id,
            'comment'=>request()->commentChild,
            'parent'=>$parent,
        ]);
        return $model;
    }
}
