<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route_r extends Model
{
    public function routeTime()
    {
        return $this->hasMany('app\Routetime');
    }
}
