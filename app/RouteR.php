<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteR extends Model
{
    public function routeTime()
    {
        return $this->hasMany('app\Routetime');
    }
}
