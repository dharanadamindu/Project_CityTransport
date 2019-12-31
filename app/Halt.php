<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Halt extends Model
{


    public function route()
    {
        return $this->belongsTo('App\RouteR');
    }


    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }

    public function fair()
    {
        return $this->belongsToMany('App\Fair');
    }


}
