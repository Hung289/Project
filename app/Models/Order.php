<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Order extends Model
{
    protected $fillable = [
        'total_price','payment','note','user_id','customer_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id','id');
    }

    public function addOrder($customer,$cart)
    {
        $total_price_room_service = (($cart->total_price) + ($cart->total_price_service));
        $u_id = Auth::user()->id;
        $order = $this->create([
            'total_price' => $total_price_room_service,
            'payment' => request()->payment,
            'user_id' => $u_id,
            'customer_id' => $customer->id,
            'note'=>request()->note
        ]);
        return $order;
    }
}
