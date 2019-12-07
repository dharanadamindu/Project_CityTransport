<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteR extends Model
{
    public function routetime()
    {
        return $this->hasMany('app\Routetime');
    }

    public function halt()
    {
        return $this->hasMany(Halt::class);
    }

    public function nearby()
    {
        return $this->hasMany(Nearby::class);
    }
}
