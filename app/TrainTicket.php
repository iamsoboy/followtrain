<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainTicket extends Model
{
    protected $guarded = [];

    public function train()
    {
        return $this->belongsTo('App\Train');
    }


}
