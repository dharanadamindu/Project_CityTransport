<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteR extends Model
{

    public function halt()
    {
        return $this->hasMany('App\Halt');
    }


//    public function routetime()
//    {
//        return $this->hasMany('App\Routetime');
//    }

//    public function halt()
//    {
//        return $this->hasMany('app\Halt');
//    }

//    public function nearby()
//    {
//        return $this->hasMany(Nearby::class);
//    }
}
