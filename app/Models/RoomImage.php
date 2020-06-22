<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    protected $fillable = [
        'image','room_id'
    ];

    public function room(){
        return $this->belongsTo('App\Models\Room','room_id','id');
    }
}
