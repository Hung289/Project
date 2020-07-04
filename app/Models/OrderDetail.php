<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
class OrderDetail extends Model
{
    protected $fillable = [
        'order_id','room_id','service_id','from_date','to_date','quantity_service'
    ];

    protected function order()
    {
        return $this->belongsTo('App\Models\Order','order_id','id');
    }

    protected function room()
    {
        return $this->belongsTo('App\Models\Room','room_id','id');
    }

    protected function service()
    {
        return $this->belongsTo('App\Models\Service','service_id','id');
    }


    public function checkRoomForDate($from_date, $to_date)
    {
        return $this->whereBetween('from_date', [$from_date, $to_date])
            ->orwhereBetween('to_date', [$from_date, $to_date])
            ->orwhere(function ($query) use ($from_date, $to_date){
                return $query->where('from_date', '<=', $from_date)
                     ->where('to_date', '>=',  $to_date);
            })
            ->get('room_id');
       
    }

    
}
