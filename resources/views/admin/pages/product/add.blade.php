@extends('admin.layouts.master')

@section('title')
Thêm sản phẩm
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h6>
    </div>
    <div class="row" style="margin: 5px">
        <div class="col-lg-12">
            <form role="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset class="form-group">
                    <label>Tên sản phẩm</label>
                    <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm">
                    @if ($errors->has('name'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('name')}}</span>
                    @endif
                </fieldset>
                <div class="form-group">
                    <label for="quantity">Số lượng</label>
                    <input type="number" name="quantity" min="1" value="1" class="form-control">
                    @if ($errors->has('quantity'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('quantity')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">Đơn giá</label>
                    <input type="text" name="price" placeholder="Nhập đơn giá" class="form-control">
                    @if ($errors->has('price'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('price')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">Giá khuyến mại</label>
                    <input type="text" name="promotional" value="0" placeholder="Nhập giá khuyến mại nếu có"
                        class="form-control">
                    @if ($errors->has('promotional'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('promotional')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">Màu</label>
                    <input type="text" name="color" placeholder="Nhập tên màu sản phẩm" class="form-control">
                    @if ($errors->has('color'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('color')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="text">Ảnh minh họa</label><br>
                    <input type="file" name="image" class="form-control">
                    @if ($errors->has('image'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('image')}}</span>
                    @endif
                    <span class="error" style="color: red;font-size: 1rem;">{{session()->get('image')}}</span>
                </div>
                <div class="form-group">
                    <label for="text">Ảnh chi tiết</label><br>
                    <input type="file" name="product_details[]" class="form-control" multiple="multiple">
                    @if ($errors->has('product_details'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('product_details')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea name="description" cols="5" rows="5" class="form-control ckeditor"></textarea>
                    @if ($errors->has('description'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('description')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Thông Tin chung</label>
                    <textarea name="information" cols="5" rows="5" class="form-control ckeditor"></textarea>
                    @if ($errors->has('description'))
                    <span class="error" style="color: red;font-size: 1rem;">{{$errors->first('description')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Danh mục sản phẩm</label>
                    <select class="form-control cateProduct" name="idCategory">
                        @foreach($category as $cate)
                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <select class="form-control proTypeProduct" name="idProductType">
                        @foreach($producttype as $pro)
                        <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Thêm</button>
                <button type="reset" class="btn btn-primary">Nhập Lại</button>
            </form>
        </div>
    </div>
</div>
@endsection
