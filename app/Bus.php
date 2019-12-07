<?php

namespace App;

use Seat;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    public function employee()
    {
        return $this->hasMany('App\employee');
    }

    public function seats()
    {
        return $this->hasMany('App\Seat');
    }

    public function routeTime()
    {
        return $this->hasMany('App\Routetime');
    }
}
