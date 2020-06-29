<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class RoomStar extends Model
{
    protected $fillable = [
        'user_id','room_id','star'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room','room_id','id');
    }

    public function postStar()
    {
        $model = $this->create([
            'user_id'=>request()->idUser,
            'room_id'=>request()->idRoom,
            'star'=>request()->star
        ]);
        // dd($model);
        return $model;
    }
}
