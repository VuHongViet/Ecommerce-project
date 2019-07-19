<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';
    protected $fillable = [
        'name','gender','address','email','phone','idUser'
    ];
    public function User()
    {
        return $this->belongsTo('App\Model\User', 'idUser', 'id');
    }
}
