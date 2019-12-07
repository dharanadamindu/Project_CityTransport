<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routetime extends Model
{
    public function route()
    {
        return $this->belongsTo('App\Route_r');
    }

    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }
}
