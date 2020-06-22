<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name','price','description','status','image','category_service_id'
    ];

    public function categoryService(){
        return $this->belongsTo('App\Models\CategoryService','category_service_id','id');
    }

    public function add(){
        $img = request()->image;
        $img_name = $img->getClientOriginalName();
        $img->move(base_path('public/uploads/images/servicess'),$img_name);

        $model = $this->create([
            'name'=>request()->name,
            'price'=>request()->price,
            'description'=>request()->description,
            'status'=>request()->status,
            'image'=>$img_name,
            'category_service_id'=>request()->category_service_id
        ]);

        return $model;
    }

    public function updateEdit(){
        if(request()->has('image')){
            $img = request()->image;
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/servicess'),$img_name);

            $model = $this->update([
                'name'=>request()->name,
                'price'=>request()->price,
                'description'=>request()->description,
                'status'=>request()->status,
                'image'=>$img_name,
                'category_service_id'=>request()->category_service_id 
            ]);
            return $model;
        }else{
            $model = $this->update([
                'name'=>request()->name,
                'price'=>request()->price,
                'description'=>request()->description,
                'status'=>request()->status,
                'category_service_id'=>request()->category_service_id 
            ]);
            return $model;
        }
        
    }
}
