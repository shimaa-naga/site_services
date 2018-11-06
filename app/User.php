<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function services()
    {
        return $this->hasMany('App\Service','user_id');
    }


    public function ordersIMade()
    {
        return $this->hasMany('App\Order' ,'user_order');
    }


    public function getMyServiceOrder()
    {
        return $this->hasMany('App\Order' ,'user_id');
    }

    // get all message i send
    public function getMessagesIAdd()
    {
        return $this->hasMany('App\Message' ,'user_message_you');
    }

    public function getMessagesIReceived()
    {
        return $this->hasMany('App\Message' ,'user_id');
    }

    // who cause notification
    public function getMyNotify()
    {
        return $this->hasMany('App\Notification' ,'user_notify_you');
    }

    // who get notification
    public function getMyNotification()
    {
        return $this->hasMany('App\Notification' ,'user_id');
    }

    public function vote()
    {
        return $this->hasMany('App\Vote' , 'user_id');
    }
}
