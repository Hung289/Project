<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\RoomImage;

class Room extends Model
{
    protected $fillable = [
        'name', 'location', 'bed', 'bath', 'area', 'priceNight', 'priceWeekends', 'priceWeekly', 'priceClearFee', 'description', 'status', 'gym', 'Laundry', 'tvCable', 'wifi', 'FreeParking', 'Security', 'category_room_id', 'user_room_id', 'brand_id', 'guest', 'adult','content','link_map'
    ];

    public function cateRoom()
    {
        return $this->belongsTo('App\Models\CategoryRoom', 'category_room_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_room_id', 'id');
    }

    public function roomImage()
    {
        return $this->hasMany('App\Models\RoomImage', 'room_id', 'id');
    }

    public function reviewRoom()
    {
        return $this->hasMany('App\Models\ReviewRoom', 'room_id', 'id')->where('parent', 0)->orderBy('id', 'DESC')->limit(2);
    }

    public function roomStar()
    {
        return $this->hasMany('App\Models\RoomStar', 'room_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }

    public function orderDetail()
    {
        return $this->hasMany('App\Models\OrderDetail','room_id','id');
    }


    public function add()
    {

        $model = $this->create([
            'name' => request()->name,
            'location' => request()->location,
            'bed' => request()->bed,
            'bath' => request()->bath,
            'area' => request()->area,
            'priceNight' => request()->priceNight,
            'priceWeekends' => request()->priceWeekends,
            'priceWeekly' => request()->priceWeekly,
            'priceClearFee' => request()->priceClearFee,
            'description' => request()->description,
            'status' => request()->status,
            'gym' => request()->gym,
            'Laundry' => request()->Laundry,
            'tvCable' => request()->tvCable,
            'wifi' => request()->wifi,
            'FreeParking' => request()->FreeParking,
            'Security' => request()->Security,
            'category_room_id' => request()->category_room_id,
            'user_room_id' => request()->user_room_id,
            'brand_id' => request()->brand_id,
            'guest' => request()->guest,
            'adult' => request()->adult,
            'content' => request()->content,
            'link_map' =>request()->link_map
        ]);
        $images = request()->file('files');
        foreach ($images as $img) {
            $img_name = $img->getClientOriginalName();
            $img->move(base_path('public/uploads/images/rooms'), $img_name);
            RoomImage::create([
                'image' => $img_name,
                'room_id' => $model->id
            ]);
        }

        return $model;
    }

    public function updateEdit()
    {
        if (request()->has('files')) {
            $images = request()->file('files');
            foreach ($images as $img) {
                $img_name = $img->getClientOriginalName();
                $img->move(base_path('public/uploads/images/rooms'), $img_name);
                RoomImage::create([
                    'image' => $img_name,
                    'room_id' => $this->id
                ]);
            }
            $model = $this->update([
                'name' => request()->name,
                'location' => request()->location,
                'bed' => request()->bed,
                'bath' => request()->bath,
                'area' => request()->area,
                'priceNight' => request()->priceNight,
                'priceWeekends' => request()->priceWeekends,
                'priceWeekly' => request()->priceWeekly,
                'priceClearFee' => request()->priceClearFee,
                'description' => request()->description,
                'status' => request()->status,
                'gym' => request()->gym,
                'Laundry' => request()->Laundry,
                'tvCable' => request()->tvCable,
                'wifi' => request()->wifi,
                'FreeParking' => request()->FreeParking,
                'Security' => request()->Security,
                'category_room_id' => request()->category_room_id,
                'user_room_id' => request()->user_room_id,
                'guest' => request()->guest,
                'adult' => request()->adult,
            ]);
            return $model;
        } else {
            $model = $this->update([
                'name' => request()->name,
                'location' => request()->location,
                'bed' => request()->bed,
                'bath' => request()->bath,
                'area' => request()->area,
                'priceNight' => request()->priceNight,
                'priceWeekends' => request()->priceWeekends,
                'priceWeekly' => request()->priceWeekly,
                'priceClearFee' => request()->priceClearFee,
                'description' => request()->description,
                'status' => request()->status,
                'gym' => request()->gym,
                'Laundry' => request()->Laundry,
                'tvCable' => request()->tvCable,
                'wifi' => request()->wifi,
                'FreeParking' => request()->FreeParking,
                'Security' => request()->Security,
                'category_room_id' => request()->category_room_id,
                'user_room_id' => request()->user_room_id,
                'guest' => request()->guest,
                'adult' => request()->adult,
            ]);
            return $model;
        }
    }


    public function scopeOrderByParam($query)
    {
        //  dd($query);
        if (request()->orderby && request()->ord) {

            $orderby = request()->orderby;

            $ord = request()->ord;
            $query = $query->orderBy($orderby, $ord);
            // dd($query);
        }
        return $query;
    }

    public function filteRoom($params)
    {
        extract($params);
        $query = $this;

        if (!empty($search)) {
            $query = $query->where('location', 'like', '%' . $search . '%');
        }

        if (!empty($listRoomUsed)) {
            $query = $query->whereNotIn('id', $listRoomUsed);
        }

        if (!empty($prices)) {
            $arr = explode(' ', $prices);
            $price['min'] = substr($arr[0], 1, strlen($arr[0]));
            $price['max'] = substr($arr[2], 1, strlen($arr[2]));
            $query = $query->whereBetween('priceNight', [$price['min'], $price['max']]);
        }

        if (!empty($beds)) {
            $query = $query->where('bed', $beds);
        }

        if (!empty($baths)) {
            $query = $query->where('bath', $baths);
        }

        if (!empty($guests)) {
            $query = $query->where('guest', $guests);
        }

        if (!empty($adults)) {
            $query = $query->where('adult', $adults);
        }

        return $query->paginate(40);
    }

    public function updateStatusRooms()
    {
        $model = $this->update([
            'status'=>request()->status
        ]);
        return $model;
    }
}
