<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table = 'category';
   protected $fillable =[
       'name','slug',
   ];
    public function productType()
    {
        return $this->hasMany('App\Model\ProductType', 'idCategory', 'id');
    }
    public function product()
    {
        return $this->hasMany('App\Model\Product', 'idCategory', 'id');
    }
}
