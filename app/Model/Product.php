<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable =[
        'name','slug','description','quantity','price','promotional','image','idCategory','idProductType',
    ];
    public function Category()
    {
        return $this->belongsTo('App\Model\Category', 'idCategory', 'id');
    }
    public function ProductType()
    {
        return $this->belongsTo('App\Model\ProductType', 'idProductType', 'id');
    }
}
