<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\ProductType;
use Str;
use App\Http\Requests\StoreProductTypeRequest;
use Validator;

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
        ProductType::create([
            'idCategory'=> $request->idCategory,
            'name'=>$request->name,
            'slug'=>Str::slug($request->name)
        ]);
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
            [
                'name'=>'required|min:2|max:255'
            ],
            [
                'required'=>'Tên loại sản phẩm không được để trống',
                'min'=>'Tên loại sản phẩm tối thiểu phải có 2 kí tự',
                'max'=>'Tên loại sản phẩm tối đa 255 kí tự',
                'unique'=>'Tên loại sản phẩm đã tồn tại'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['errors'=>'true','message'=>$validator->errors()]);
        }
        else {
            $producttype = ProductType::find($id);
            $producttype->update([
                'idCategory'=> $request->idCategory,
                'name'=>$request->name,
                'slug'=>Str::slug($request->name)
            ]);
            return response()->json(['success'=>'Sửa thành công']);

        }
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
        $producttype->delete();
        return response()->json(['success'=>'Xóa thành công']);
    }
}
