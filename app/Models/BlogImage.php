<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    protected $fillable = [
        'image','blog_id'
    ];

    public function blog(){
        return $this->belongsTo('App\Models\Blog','blog_id','id');
    }
}
