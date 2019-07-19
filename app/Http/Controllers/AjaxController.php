<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\ProductType;
use App\Model\Product;
use App\Model\User;
use App\Model\Cart;
use Auth;
class AjaxController extends Controller
{
    public function getproducttype(Request $request){
        $producttype = ProductType::where('idCategory',$request->idCate)->get();
        return response()->json($producttype);
    }
    public function getproduct(Request $request){
        $product = Product::where('id',$request->idProduct)->get();
        foreach($product as $pt){
            $product['price']= number_format($pt->price,0,',','.');
            if ($pt->promotional>0) {
                $product['promotional']= number_format(($pt->price*(100-$pt->promotional))/100,0,',','.');
            }
            else {
                $product['promotional']=0;
            }
        }
        return response()->json(['product'=>$product]);
    }
}
