<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\ProductType;

class AjaxController extends Controller
{
    public function getproducttype(Request $request){
        $producttype = ProductType::where('idCategory',$request->idCate)->get();
        return response()->json($producttype);
    }
}
