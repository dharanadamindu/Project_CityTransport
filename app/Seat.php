<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //correct
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }

}
