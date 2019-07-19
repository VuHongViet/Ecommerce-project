<?php

namespace App\Model;

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
        'name', 'email', 'password','social_id','rules',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Information()
    {
        return $this->hasOne('App\Model\Information', 'idUser', 'id');
    }
    public function Cart()
    {
        return $this->hasOne('App\Model\Cart', 'idUser', 'id');
    }
    public function Order()
    {
        return $this->hasMany('App\Model\Order', 'idUser', 'id');
    }
}
