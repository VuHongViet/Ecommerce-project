<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable =[
        'name','price','quantity','total','idUser','idProduct',
    ];
    public function User()
    {
        return $this->belongsTo('App\Model\User', 'idUser', 'id');
    }
    public function Product()
    {
        return $this->belongsTo('App\Model\Product', 'idProduct', 'id');
    }
}
