<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use\App\Http\Requests\StoreCategoryRequest;
use Str;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(5);
        return view('admin.pages.category.list',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name)
        ]);
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Category::find($id);
        return response()->json($cate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),
            [
                'name'=>'required|min:2|max:255'
            ],
            [
                'required'=>'Tên danh mục không được để trống',
                'min'=>'Tên danh mục tối thiểu phải có 2 kí tự',
                'max'=>'Tên danh mục tối đa 255 kí tự'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['errors'=>'true','message'=>$validator->errors()]);
        }
        else {
            $cate = Category::find($id);
            $cate->update([
                'name'=>$request->name,
                'slug'=>Str::slug($request->name)
            ]);
            return response()->json(['success'=>'Sửa thành công']);

        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return response()->json(['success'=>'Xóa thành công']);
    }
}
