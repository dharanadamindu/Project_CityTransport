<?php

namespace App;

use Seat;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{

    public function seat()
    {
        return $this->hasMany('App\Seat');
    }

    public function halt()
    {
        return $this->hasMany('App\Halt');
    }

    public function employee()
    {
        return $this->belongsToMany('App\Employee');
    }



    public function routetime()
    {
        return $this->hasMany('App\Routetime');
    }

}
