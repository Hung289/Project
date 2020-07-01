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

    public function myQuery($params)
    {
        // vao day la coi nhu ham filter trong nay
        // tạo 1 cai array params[] chua select
//dm mới à . nhìn đi.day laf mang cac cai co the search a, uwf
        // mấy cài này làm sao mà truyền vào đây thì cụ lo nhớ =))
        // j đấy//truy vân đâu vl
        // từ từ
        // cai  nay cở cty tôi là nó viết ajaxx gứi đến controller, controller khới tạo params sau đó gọi đến hàm ở model
        $params[] = [
            'search' => request()->location,
            'from_date' => request()->searchFromDate,
            'to_date' => '..',
            'type_room' => 'chich',
            'price' => '',
        ];

        // đây sẽ là query

        if ($params['from_date'] && $params['to_date']) {
            // thif query den thang order_detail
            $xxx = 'SELECT * FROM order_details WHERE from_date NOT BETWEEN '.$params['from_date'].' AND '.$params['to_date']
        }
    }
}
