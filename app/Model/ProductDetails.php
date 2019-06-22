<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    protected $table ='product_details';
    protected $fillable=[
        'image','idProduct',
    ];
    public function Product()
    {
        return $this->belongsTo('App\Model\Product', 'idProduct', 'id');
    }
}
