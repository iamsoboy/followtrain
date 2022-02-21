<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [];


    public function traintickets()
    {
        return $this->hasMany('App\TrainTicket');
    }
}
