<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Halt extends Model
{
    public function fair(){
        return $this->belongsToMany(Fair::class);
    }

    public function router()
    {
        return $this->belongsTo(RouteR::class);
    }


}
