<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $guarded = [];

    public function trips()
    {
        return $this->hasMany('App\Trips');
    }

    public function trainticket()
    {
        return $this->hasMany('App\TrainTicket');
    }
}
