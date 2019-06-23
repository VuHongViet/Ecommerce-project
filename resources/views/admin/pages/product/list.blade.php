@extends('admin.layouts.master')

@section('title')
Danh sách loại sản phẩm
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Loại Sản Phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{route('product.create')}}" class="btn btn-success">Thêm mới</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Thông tin</th>
                        <th>Màu</th>
                        <th>Loại sản phẩm</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Thông tin</th>
                        <th>Màu</th>
                        <th>Loại sản phẩm</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($product as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->name }}</td>
                        <td>
                            <b>Số lượng</b>: {{ $value->quantity }}
                            <br />
                            <b>Đơn giá</b>: {{ $value->price }}
                            <br />
                            <b>Khuyến mại</b>: {{ $value->promotional }}
                            <br />
                            <b>Hình minh họa</b>:
                            <img src="{{ asset('img/upload/product/'.$value->image) }}" width="100" height="100">
                        </td>
                        <td>{{ $value->color }}</td>
                        <td>{{ $value->ProductType->name }}</td>
                        <td>
                            <button class="btn btn-primary editProduct" title="{{ "Sửa ".$value->name }}"
                                data-toggle="modal" data-target="#edit" type="button" data-id="{{ $value->id }}"><i
                                    class="fas fa-edit"></i></button>
                            <button class="btn btn-danger deleteProduct" title="{{ "Xóa ".$value->name }}"
                                data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pull-right">{{ $product->links() }}</div>
        </div>
    </div>
</div>
<!-- Edit Modal-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa category <span class="title"></span></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="margin: 5px">
                    <div class="col-lg-12">
                        <form role="form" id="updateProduct" method="post" enctype="multipart/form-data">
                            <fieldset class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control name" name="name" placeholder="Nhập tên sản phẩm">
                                <div class="alert alert-danger errorName"></div>
                            </fieldset>
                            <div class="form-group">
                                <label for="quantity">Số lượng</label>
                                <input type="number" name="quantity" min="1" value="1" class="form-control quantity">
                                <div class="alert alert-danger errorQuantity"></div>
                            </div>
                            <div class="form-group">
                                <label for="price">Đơn giá</label>
                                <input type="text" name="price" placeholder="Nhập đơn giá" class="form-control price">
                                <div class="alert alert-danger errorPrice"></div>
                            </div>
                            <div class="form-group">
                                <label for="price">Giá khuyến mại</label>
                                <input type="text" name="promotional" value="0" placeholder="Nhập giá khuyến mại nếu có"
                                    class="form-control promotional">
                                <div class="alert alert-danger errorPromotional"></div>
                            </div>
                            <div class="form-group">
                                <label for="price">Màu</label>
                                <input type="text" name="color" placeholder="Nhập tên màu sản phẩm"
                                    class="form-control color">
                                <div class="alert alert-danger errorColor"></div>
                            </div>
                                <img class="img img-thumnail imageThum" width="70" height="70" lign="center">
                                <div class="form-group">
                                    <label for="price">Ảnh minh họa</label>
                                    <input type="file" name="image" class="form-control image">
                                    <div class="alert alert-danger errorImage"></div>
                                </div>
                                <div class="imageThums"></div>
                                <div class="form-group">
                                    <label for="text">Ảnh chi tiết</label><br>
                                    <input type="file" name="product_details[]" class="form-control product_details"
                                        multiple="multiple">
                                    <div class="alert alert-danger errorPhoto"></div>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea name="description" cols="5" rows="5"
                                        class="form-control description ckeditor" id="ckeditor"></textarea>
                                    <div class="alert alert-danger errorDescription"></div>
                                </div>
                                <div class="form-group">
                                    <label>Thông Tin chung</label>
                                    <textarea name="information" cols="5" rows="5"
                                        class="form-control ckeditor information" id="information"></textarea>
                                    <div class="alert alert-danger errorInformation"></div>
                                </div>
                                <div class="form-group">
                                    <label>Danh mục sản phẩm</label>
                                    <select class="form-control cateProduct" name="idCategory"></select>
                                </div>
                                <div class="form-group">
                                    <label>Loại sản phẩm</label>
                                    <select class="form-control proTypeProduct" name="idProductType"></select>
                                </div>
                                <input type="submit" class="btn btn-success" value="Sửa">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- delete Modal-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" style="margin-left: 183px;">
                <button type="button" class="btn btn-success delProduct">Có</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
            </div>
        </div>
    </div>
</div>
@endsection
