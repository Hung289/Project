<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class RoomStar extends Model
{
    protected $fillable = [
        'user_id','room_id','starAcao','starDes','starTran','starOver'
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
            'starAcao'=>request()->star,
            'starDes'=>request()->star1,
            'starTran'=>request()->star2,
            'starOver'=>request()->star3
        ]);
        // dd($model);
        return $model;
    }

    public function calAvg($id)
    {  
        // dd($id);
        $avgStarAcao = $this->where('room_id',$id)->avg('starAcao');
        $avgStarDes = $this->where('room_id',$id)->avg('starDes');
        $avgStarTran = $this->where('room_id',$id)->avg('starTran');
        $avgStarOver = $this->where('room_id',$id)->avg('starOver');
        $tb = ($avgStarAcao + $avgStarDes + $avgStarTran + $avgStarOver)/4;
        $mang = ['bien1'=>$avgStarAcao,'bien2'=>$avgStarDes,'bien3'=>$avgStarTran,'bien4'=>$avgStarOver,'bien5'=>$tb];
        return $mang;
    }
}
