<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';
    protected $fillable =[
        'idCategory','name','slug',
    ];
    public function Category()
    {
        return $this->belongsTo('App\Model\Category', 'idCategory', 'id');
    }
    public function Product()
    {
        return $this->hasMany('App\Model\Product', 'idProductType', 'id');
    }
}
