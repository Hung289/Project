<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RoomImage;

class Room extends Model
{
    protected $fillable = [
        'name','location','bed','bath','area','priceNight','priceWeekends','priceWeekly','priceClearFee','description','status','gym','Laundry','tvCable','wifi','FreeParking','Security','category_room_id','user_room_id'
    ];

    public function cateRoom(){
        return $this->belongsTo('App\Models\CategoryRoom','category_room_id','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_room_id','id');
    }

    public function roomImage(){
        return $this->hasMany('App\Models\RoomImage','room_id','id');
    }

    public function add(){
        
        $model = $this->create([
            'name'=>request()->name,
            'location'=>request()->location,
            'bed'=>request()->bed,
            'bath'=>request()->bath,
            'area'=>request()->area,
            'priceNight'=>request()->priceNight,
            'priceWeekends'=>request()->priceWeekends,
            'priceWeekly'=>request()->priceWeekly,
            'priceClearFee'=>request()->priceClearFee,
            'description'=>request()->description,
            'status'=>request()->status,
            'gym'=>request()->gym,
            'Laundry'=>request()->Laundry,
            'tvCable'=>request()->tvCable,
            'wifi'=>request()->wifi,
            'FreeParking'=>request()->FreeParking,
            'Security'=>request()->Security,
            'category_room_id'=>request()->category_room_id,
            'user_room_id'=>request()->user_room_id
        ]);
        $images = request()->file('files');
        foreach($images as $img){
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/rooms'),$img_name);
            RoomImage::create([
                'image'=>$img_name,
                'room_id'=>$model->id
            ]);
        }

        return $model;
    }

    public function updateEdit(){
        if(request()->has('files')){
            $images = request()->file('files');
            foreach($images as $img){
                $img_name = $img->getClientOriginalName();
                $img->move(base_path('Public/uploads/images/rooms'),$img_name);
                RoomImage::create([
                    'image'=>$img_name,
                    'room_id'=>$this->id
                ]);
            }
            $model = $this->update([
                'name'=>request()->name,
                'location'=>request()->location,
                'bed'=>request()->bed,
                'bath'=>request()->bath,
                'area'=>request()->area,
                'priceNight'=>request()->priceNight,
                'priceWeekends'=>request()->priceWeekends,
                'priceWeekly'=>request()->priceWeekly,
                'priceClearFee'=>request()->priceClearFee,
                'description'=>request()->description,
                'status'=>request()->status,
                'gym'=>request()->gym,
                'Laundry'=>request()->Laundry,
                'tvCable'=>request()->tvCable,
                'wifi'=>request()->wifi,
                'FreeParking'=>request()->FreeParking,
                'Security'=>request()->Security,
                'category_room_id'=>request()->category_room_id,
                'user_room_id'=>request()->user_room_id
            ]);
            return $model;
        }else{
            $model = $this->update([
                'name'=>request()->name,
                'location'=>request()->location,
                'bed'=>request()->bed,
                'bath'=>request()->bath,
                'area'=>request()->area,
                'priceNight'=>request()->priceNight,
                'priceWeekends'=>request()->priceWeekends,
                'priceWeekly'=>request()->priceWeekly,
                'priceClearFee'=>request()->priceClearFee,
                'description'=>request()->description,
                'status'=>request()->status,
                'gym'=>request()->gym,
                'Laundry'=>request()->Laundry,
                'tvCable'=>request()->tvCable,
                'wifi'=>request()->wifi,
                'FreeParking'=>request()->FreeParking,
                'Security'=>request()->Security,
                'category_room_id'=>request()->category_room_id,
                'user_room_id'=>request()->user_room_id
            ]);
            return $model;
        }
    }
}
