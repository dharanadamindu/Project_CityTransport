<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routetime extends Model
{
//    public function router()
//    {
//        return $this->hasMany('App\RouteR');
//    }

    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }
}

