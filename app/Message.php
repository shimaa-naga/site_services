<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = 'messages';


// who user send message
    public function getSendUser()
    {
        return $this->belongsTo('APP\User' ,'user_message_you');
    }


    // who user received message
    public function getReceivedUser()
    {
        return $this->belongsTo('APP\User' ,'user_id');
    }

}
