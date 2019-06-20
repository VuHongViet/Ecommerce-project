<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\ProductType;
use Str;
use File;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product= Product::paginate(5);
        return view('admin.pages.product.list',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::all();
        $producttype = ProductType::all();
        return view('admin.pages.product.add',compact('category','producttype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        if ($request->hasFile('image')) {
            $file =$request->image;
            $file_name =$file->getClientOriginalName();
            $file_type = $file->getMimeType();
            $file_size = $file->getSize();
            if ($file_type =='image/png'||$file_type =='image/jpg'||$file_type =='image/jpeg'||$file_type =='image/gif') {
               if ($file_size <= 1048576) {
                   $file_name =rand().'_'.Str_Slug($file_name);
                   if ($file->move('img/upload/product',$file_name)) {
                    $data=$request->all();
                    $data['slug']=Str_Slug($request->name);
                    $data['image']=$file_name;
                    Product::create($data);
                    return redirect()->route('product.index');
                   }
               }else {
                return back()->with('images','Hình ảnh lớn hơn 1MB');
                }
            }else {
                return back()->with('images','File bạn chọn không phải là hình ảnh');
                }
        }
        else {
            return back()->with('images','Hình ảnh không được để trống');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (File::exists('img/upload/product'.$product->image)) {
            unlink('img/upload/product'.$product->image);
        }
        $product->delete();
        return response()->json(['success'=>'Xóa thành công']);
    }
}
