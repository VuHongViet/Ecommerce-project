<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\ProductType;
use App\Model\ProductDetails;
use Str;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreProductRequest;
use Validator;

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
            //Lấy tên ảnh
            $file_name =$file->getClientOriginalName();
            //Lấy loại ảnh
            $file_type = $file->getMimeType();
            //Lấy kích thước ảnh
            $file_size = $file->getSize();
            if ($file_type =='image/png'||$file_type =='image/jpg'||$file_type =='image/jpeg'||$file_type =='image/gif') {
               if ($file_size <= 1048576) {
                   //Lấy đuôi ảnh
                   $file_tail =$file->getClientOriginalExtension();
                   $file_name =rand().'_'.Str_Slug($file_name);
                   $file_name = str_replace($file_tail,'.'.$file_tail,$file_name);
                   if ($file->move('img/upload/product',$file_name)) {
                    $data=$request->all();
                    $data['slug']=Str_Slug($request->name);
                    $data['image']=$file_name;
                    $product= Product::create($data);
                    foreach($request->product_details as $img){
                        $file_tail =$img->getClientOriginalExtension();
                        $file_name =rand().'_'.Str_Slug($img->getClientOriginalName());
                        $file_name = str_replace($file_tail,'.'.$file_tail,$file_name);
                        $img->move('img/upload/product_details',$file_name);
                        ProductDetails::create([
                            'image'=>$file_name,
                            'idProduct'=> $product->id,
                        ]);
                    }
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
    public function edit($id)
    {
        $category= Category::all();
        $producttype = ProductType::all();
        $product = Product::find($id);
        $product_details = ProductDetails::where('idProduct',$product->id)->get();
        return response()->json(['category'=>$category,'producttype'=>$producttype,'product'=>$product,'product_details'=>$product_details], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),
            [
                'name'=>'required|min:2|max:255',
                'quantity'=>'required',
                'price'=>'required|numeric',
                'promotional'=>'required|numeric',
                'image'=>'image',
                'product_details.*'=>'image|mimes:jpg,png,jpeg,gif|max:1048576',
                'description'=>'required',
                'information'=>'required',
                'color'=>'required',
            ],
            [
                'required'=>':attribute không được để trống',
                'min'=>':attribute tối thiểu phải có 2 kí tự',
                'max'=>':attribute tối đa 255 kí tự',
                'numeric'=>':attribute phải là số',
                'image'=>':attribute không là hình ảnh',
            ],
            [
                'name'=>'Tên sản phẩm',
                'quantity'=>'Số Lượng',
                'price'=>'Giá',
                'promotional'=>'Giá Khuyến Mãi',
                'image'=>'Ảnh',
                'description'=>'Mô tả sản phẩm',
                'information'=>'Thông tin chung',
                'product_details'=> 'Chi tiết ảnh',
                'color'=>'Màu',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error'=>'true','message'=>$validator->errors()],200);
        }
        $product = Product::find($id);
        $data=$request->all();
        $data['slug']=Str_Slug($request->name);
        if ($request->hasFile('image')) {
            $file =$request->image;
            //Lấy tên ảnh
            $file_name =$file->getClientOriginalName();
            //Lấy loại ảnh
            $file_type = $file->getMimeType();
            //Lấy kích thước ảnh
            $file_size = $file->getSize();
            if ($file_type =='image/png'||$file_type =='image/jpg'||$file_type =='image/jpeg'||$file_type =='image/gif') {
               if ($file_size <= 1048576) {
                   //Lấy đuôi ảnh
                   $file_tail =$file->getClientOriginalExtension();
                   $file_name =rand().'_'.Str_Slug($file_name);
                   $file_name = str_replace($file_tail,'.'.$file_tail,$file_name);
                   if ($file->move('img/upload/product',$file_name)) {
                        $data['image']=$file_name;
                        if(File::exists(public_path('img/upload/product/'.$product->image))){
                            File::delete(public_path('img/upload/product/'.$product->image));
                        }
                   }
               }else {
                    return response()->json(['error'=>'Hình ảnh lớn hơn 1MB']);
                }
            }else {
                return response()->json(['error'=>'File bạn chọn không phải là hình ảnh']);
            }
        }
        if ($request->hasFile('product_details')) {
           $product_details = ProductDetails::where('idProduct',$product->id)->get();
           foreach($product_details as $product_img){
                if(File::exists(public_path('img/upload/product_details/'.$product_img->image))){
                    File::delete(public_path('img/upload/product_details/'.$product_img->image));
                }
                $product_img->delete();
            }
            foreach($request->product_details as $img){
                $file_tail =$img->getClientOriginalExtension();
                $file_name =rand().'_'.Str_Slug($img->getClientOriginalName());
                $file_name = str_replace($file_tail,'.'.$file_tail,$file_name);
                $img->move('img/upload/product_details',$file_name);
                ProductDetails::create([
                    'image'=>$file_name,
                    'idProduct'=> $product->id,
                ]);
            }
        }
        $product->update($data);
        return response()->json(['success'=>'Sửa thành công']);
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
        $product_details = ProductDetails::where('idProduct',$product->id)->get();
        if(File::exists(public_path('img/upload/product/'.$product->image))){
            File::delete(public_path('img/upload/product/'.$product->image));
        }
        foreach($product_details as $product_img){
            if(File::exists(public_path('img/upload/product_details/'.$product_img->image))){
                File::delete(public_path('img/upload/product_details/'.$product_img->image));
            }
        }
        $product->delete();
        return response()->json(['success'=>'xóa thành công']);
    }
}
