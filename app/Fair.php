<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fair extends Model
{
    public function halt()
    {
        return $this->belongsToMany('App\Halt');
    }
}
