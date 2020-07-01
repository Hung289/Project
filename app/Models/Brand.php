<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'logo'
    ];

    public function room()
    {
        return $this->hasMany('App\Models\Room','brand_id','id');
    }

    public function add()
    {
        $img = request()->image;
        // dd($img);
        $img_name = $img->getClientOriginalName();
        $img->move(base_path('public/uploads/images/Brand'), $img_name);
        $model = $this->create([
            'name' => request()->name,
            'logo' => $img_name
        ]);

        return $model;
    }

    public function updateEdit()
    {
        if (request()->has('image')) {
            $img = request()->image;
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/Brand'), $img_name);
            $model = $this->update([
                'name' => request()->name,
                'logo' => $img_name
            ]);
            return $model;
        }else{
            $model = $this->update([
                'name' => request()->name,
            ]);
            return $model;
        }
        
    }
}
