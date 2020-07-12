<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;
    protected $table = 'customer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','name','gender' ,'email','address', 'phone','note','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function order(){
        return $this->hasMany('App\Models\Order','customer_id');
    }

    public function addCustomer()
    {
        $customer = $this->create([
            'name'=>request()->name,
            'gender'=>request()->gender ,
            'email'=>request()->email,
            'address'=>request()->address, 
            'phone'=>request()->phone,
            'note'=>request()->note
        ]);
        return $customer;
    }
}
