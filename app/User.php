<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //correct
    public function seat()
    {
        return $this->hasMany('App\Seat');
    }

    public function feedback()
    {
        return $this->hasMany('App\Feedback');
    }

//    public function profile()
//    {
//        return $this->hasOne(Profile::class);
//    }

//    public function cardpayment()
//    {
//        return $this->hasOne(Cardpayment::class);
//    }


}
