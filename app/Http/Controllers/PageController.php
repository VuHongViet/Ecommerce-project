<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Model\Category;
use\App\Model\ProductType;
use\App\Model\Product;
use Auth;
use DB;
use Str;
class PageController extends Controller
{

    public function index(){
        $product = Product::all();
        $product_price = $product->sortByDesc('price')->take(8);
        $product_all = $product->random(8);
        $product_times = $product->sortByDesc('created_at')->take(8);
        return view('client.pages.index',compact('product_price','product_all','product_times'));
    }
    public function products(){
        $products = Product::paginate(9);
        $product_recent = $products->random(5);
        $color=Product::select('color')->groupBy('color')->get();
        return view('client.pages.products',compact('products','product_recent','color'));
    }
    public function productlist($slug){
        $producttype = ProductType::where('slug',$slug)->first();
        $products = $producttype->Product()->paginate(9);
        $product_recent = Product::where('idProductType','<>',$producttype->id)->get()->random(5);
        $color= $producttype->Product()->select('color')->groupBy('color')->get();
        return view('client.pages.product_list',compact('products','product_recent','color'));
    }
    public function productDetail($product_detail){
        $product = Product::where('slug',$product_detail)->get();
        // dd($product);
        return view('client.pages.product_detail',compact('product'));
    }
    public function search(Request $request){
        $slug=Str::slug($request->key);
        $products = Product::where('name','like','%'.$request->key.'%')
            ->orWhere('slug','like','%'.$slug.'%')->get();
        $product_recent = $products->random(5);
        $color = $products->groupBy('color');
        // dd($color);
        return view('client.pages.search',compact('products','color','product_recent'));
    }
}
