<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetailService extends Model
{
    protected $fillable = [
        'order_detail_id', 'service_id', 'quantity_service'
    ];

    public function orderDetail()
    {
        return $this->belongsTo('App\Models\OrderDetail', 'order_detail_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Sevice', 'service_id', 'id');
    }

    public function addOrderDetailService($orderDetail, $service)
    {
        $orderDetailService = $this->create([
            'order_detail_id' => $orderDetail->id,
            'service_id' => $service['id'],
            'quantity_service' => $service['quantity'],
        ]);
        return $orderDetailService;
    }
}
