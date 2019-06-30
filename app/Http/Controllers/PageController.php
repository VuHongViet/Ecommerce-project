<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Model\Category;
use\App\Model\ProductType;

class PageController extends Controller
{
    public function __construct(){
        $category = Category::all();
        $producttype = ProductType::all();
        view()->share(['category'=>$category,'producttype'=>$producttype]);
    }
    public function index(){
        return view('client.pages.index');
    }
}
