<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
