<?php

namespace App;

use Seat;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    public function employee()
    {
        return $this->belongsToMany(Bus::class);
    }

    public function seat()
    {
        return $this->hasMany('App\Seat');
    }

    public function routetime()
    {
        return $this->hasMany('App\Routetime');
    }

}
