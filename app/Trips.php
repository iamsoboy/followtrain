<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    protected $guarded = [];

    protected $casts = [
        'week_day' => Json::class
    ];




    public function train()
    {
        return $this->belongsTo('\App\Train');
    }
}
