<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $table = 'notifications';


    // who user send notification
    public function getUserSendNotification()
    {
        return $this->belongsTo('App\User' ,'user_notify_you');
    }


    // who user received notification
    public function getUserReceiveNotify()
    {
        return $this->belongsTo('App\User' ,'user_id');
    }
}
