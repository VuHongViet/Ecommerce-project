<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\ProductType;
use Str;
use File;
use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProducttypeRequest;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producttype = ProductType::paginate(5);
        return view('admin.pages.producttype.list',compact('producttype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.pages.producttype.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductTypeRequest $request)
    {
        $file =$request->image;
        $file_name =$file->getClientOriginalName();
        $file_tail =$file->getClientOriginalExtension();
        $file_name =rand().'_'.Str_Slug($file_name);
        $file_name = str_replace($file_tail,'.'.$file_tail,$file_name);
        if ($file->move('img/upload/producttype',$file_name)) {
            $data=$request->all();
            $data['slug']=Str_Slug($request->name);
            $data['image']=$file_name;
            $productype= Producttype::create($data);
        }
        return redirect()->route('producttype.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producttype= ProductType::find($id);
        $category= Category::all();
        return response()->json(['producttype'=>$producttype,'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProducttypeRequest $request, $id)
    {
        $producttype = ProductType::find($id);
        $data= $request->all();
        $data['slug']=Str_Slug($request->name);
        if ($request->hasFile('image')) {
            $file =$request->image;
            $file_name =$file->getClientOriginalName();
            $file_tail =$file->getClientOriginalExtension();
            $file_name =rand().'_'.Str_Slug($file_name);
            $file_name = str_replace($file_tail,'.'.$file_tail,$file_name);
            $file->move('img/upload/producttype',$file_name);
            if(File::exists(public_path('img/upload/producttype/'.$producttype->image))){
                File::delete(public_path('img/upload/producttype/'.$producttype->image));
            }
            $data['image']=$file_name;
        }
        else {
            $data['image']=$producttype->image;
        }
        $producttype->update($data);
        return response()->json(['success'=>'Sửa thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producttype = ProductType::find($id);
        if(File::exists(public_path('img/upload/producttype/'.$producttype->image))){
            File::delete(public_path('img/upload/producttype/'.$producttype->image));
        }
        $producttype->delete();
        return response()->json(['success'=>'Xóa thành công']);
    }
}
