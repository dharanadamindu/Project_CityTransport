<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    public function employee(){
        return $this->hasMany('App\employee');
    }
}
