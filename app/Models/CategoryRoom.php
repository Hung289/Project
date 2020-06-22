<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class CategoryRoom extends Model
{
    protected $fillable = [
        'name','slug','image','description','ordering','status'
    ];


    public function room(){
        return $this->hasMany('App\Models\Room','category_room_id','id');
    }

    public function add(){
        $img = request()->image;
        $image_name = $img->getClientOriginalName();
        $img->move(base_path('public/uploads/images/CategoryRoom'),$image_name);

        $model = $this->create([
            'name'=>request()->name,
            'slug'=>Str::slug(request()->name),
            'image'=>$image_name,
            'description'=>request()->description,
            'status'=>request()->status
        ]);

        return $model;
    }

    public function updateEdit(){
        if(request()->has('image')){
            $img = request()->image;
            $image_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/CategoryRoom'),$image_name);

            $model = $this->update([
                'name'=>request()->name,
                'slug'=>Str::slug(request()->name),
                'image'=>$image_name,
                'description'=>request()->description,
                'status'=>request()->status
            ]);
        }else{
            $model = $this->update([
                'name'=>request()->name,
                'slug'=>Str::slug(request()->name),
                'description'=>request()->description,
                'status'=>request()->status
            ]);
        }
        return $model;
    }
}
