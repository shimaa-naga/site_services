<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';


    public function comment()
    {
        return $this->hasMany('App\Comment' , 'order_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Service' , 'services_id');
    }

    public function getMyOrders()
    {
        return $this->belongsTo('App\User' , 'user_order');
    }

    public function getUserAddService()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }
}
