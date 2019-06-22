<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable =[
        'name','slug','description','quantity','price','promotional','color','infor','image','idCategory','idProductType',
    ];
    public function Category()
    {
        return $this->belongsTo('App\Model\Category', 'idCategory', 'id');
    }
    public function ProductType()
    {
        return $this->belongsTo('App\Model\ProductType', 'idProductType', 'id');
    }
    public function ProductDetails()
    {
        return $this->hasMany('App\Model\ProductDetails', 'idProduct', 'id');
    }
    public function Comment()
    {
        return $this->hasMany('App\Model\Comment', 'idProduct', 'id');
    }
}
