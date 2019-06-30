<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table ='information';
    protected $fillable=[
        'avatar','address','phone','email','idUser',
    ];
    public function User()
    {
        return $this->belongsTo('App\Model\User', 'idUser', 'id');
    }
}
