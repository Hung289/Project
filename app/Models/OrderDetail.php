<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
