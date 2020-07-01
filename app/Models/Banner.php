<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'name','content','banner','status'
    ];

    public function add()
    {
        $img = request()->image;
        $img_name = $img->getClientOriginalName();
        $img->move(base_path('public/uploads/images/Banner'),$img_name);
        $model = $this->create([
            'name'=>request()->name,
            'content'=>request()->content,
            'banner'=>$img_name,
            'status'=>request()->status
        ]);
        // dd($model);
        return $model;
    }
}
