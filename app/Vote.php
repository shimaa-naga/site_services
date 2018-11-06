<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    protected $table = 'votes';


    // who user make vote
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }


    // this vote belongs any service
    public function service()
    {
        return $this->belongsTo('App\Service' , 'services_id');
    }
}
