@extends('client.layout.master')
@section('title')
    Giỏ Hàng
@endsection

@section('content')
<section id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <!-- Tab panes -->
                <div class="col-xs-12">
                    <!-- shopping-cart start -->
                    <div class="tab-pane active" id="shopping-cart">
                        <div class="shopping-cart-content">
                            <form action="#">
                                <div class="table-content table-responsive mb-50">
                                    <ul class="text-center">
                                        @forelse ($cart as $item)
                                            <li class="cart-item-content">
                                                <div class="product-thumbnail">
                                                    <div class="pro-thumbnail-img">
                                                        <img src="{{ asset('img/upload/product/'.$item->Product->image) }}" alt="{{$item->name}}" title="{{$item->name}}">
                                                    </div>
                                                    <div class="pro-thumbnail-info">
                                                        <h6 class="product-title-2">
                                                            <a href="{{route('product_detail',$item->Product->slug)}}" title="{{$item->name}}">{{$item->name}}</a>
                                                        </h6>
                                                        <p>Loại: {{$item->Product->ProductType->name}}</p>
                                                        <p> Màu Sắc: {{$item->Product->color}}</p>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <label>Giá:</label>
                                                    <span>
                                                        {{number_format($item->price,0,',','.')}} VNĐ</div>
                                                    </span>
                                                <div class="product-quantity">
                                                    <label>Số Lượng:</label>
                                                    <div class="button">
                                                        <button class="sub change-quantity" data-id="{{$item->idProduct}}">-</button>
                                                        <input class="input_297o" type="text" value="{{$item->quantity}}" readonly>
                                                        <button class="add change-quantity" data-id="{{$item->idProduct}}">+</button>
                                                    </div>
                                                </div>
                                                <div class="product-subtotal subtotal">
                                                    <label>Tổng Tiền:</label>
                                                    <span>{{number_format($item->total,0,',','.')}} VNĐ</span>
                                                </div>
                                                <div class="product-remove">
                                                    <a class="remove-product" title="Xóa" data-toggle="modal" data-target="#exampleModal" data-id ="{{$item->id}}"><i class="zmdi zmdi-close"></i></a>
                                                </div>
                                            </li>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="cart-emty">
                                                    <p>Giỏ hàng của bạn chưa có sản phẩm nào!</p>
                                                    <button style="padding: 10px;background: #FF7F00">
                                                        <a href="{{route('index')}}" style="color: white">Tiếp Tục Mua Sắm</a>
                                                    </button>
                                                </td>
                                            </tr>

                                        @endforelse
                                    </ul>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- shopping-cart end -->
                </div>
            </div>
            <div class="row">
                @if (count($cart)>0)
                <form action="{{route('checkout.store')}}" method="POST">
                        @csrf
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="coupon-discount box-shadow p-30 mb-50">
                                    <h6 class="widget-title border-left mb-20">Thông tin giao hàng</h6>
                                    <p>Tên Người Nhận</p>
                                    <input type="text" name="name" placeholder="Nhập tên người nhận">

                                    @if ($errors->has('name'))
                                        <span class="error" style="color: red;font-size: 14px;">{{$errors->first('name')}}</span><br>
                                    @endif

                                    <label>Giới Tính</label>
                                    <input type="radio" name="gt" value="0" checked> Nam &nbsp;
                                    <input type="radio" name="gt" value="1"> Nữ

                                    <p>Địa Chỉ Nhận Hàng</p>
                                    <input type="text" name="address" placeholder="Nhập địa chỉ nhận hàng">

                                    @if ($errors->has('address'))
                                        <span class="error" style="color: red;font-size: 14px;">{{$errors->first('address')}}</span><br>
                                    @endif

                                    <p>Email</p>
                                    <input type="text" name="email" placeholder="Nhập địa chỉ email">

                                    @if ($errors->has('email'))
                                        <span class="error" style="color: red;font-size: 14px;">{{$errors->first('email')}}</span><br>
                                    @endif

                                    <p>Số Điện Thoại</p>
                                    <input type="text" name="phone" placeholder="Nhập số điện thoại" >

                                    @if ($errors->has('phone'))
                                        <span class="error" style="color: red;font-size: 14px;">{{$errors->first('phone')}}</span><br>
                                    @endif
                                </div>
                            </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="payment-details box-shadow p-30 mb-50">
                            <h6 class="widget-title border-left mb-20">Chi Tiết Hóa Đơn</h6>
                            <table>
                                <?php
                                    $totals = 0;
                                    foreach ($cart as $value) {
                                        $totals +=$value->total;
                                    }
                                ?>
                                <tr>
                                    <td class="td-title-1">Tổng Số Tiền</td>
                                    <td class="td-title-2 total">{{number_format($totals,0,',','.')}} VNĐ</td>
                                </tr>
                                <tr>
                                    <td class="td-title-1">Phí Vận Chuyển</td>
                                    <td class="td-title-2">{{number_format(20000,0,',','.')}} VNĐ</td>
                                </tr>
                                <tr>
                                    <td class="order-total">Tổng Cộng</td>
                                    <td class="order-total-price">{{number_format($totals+20000,0,',','.')}} VNĐ</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="check">
                                        <button type="submit" style="color: white">Thanh Toán</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>

  <!-- Modal -->
    <form action="{{route('addcart.destroy','id')}}" method="POST">
        @method('delete')
        @csrf
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Thông báo</h5>
                </div>
                <div class="modal-body">
                  <p>Bạn có chắc chắn muốn xóa mục này trong giỏ hàng của bạn ?</p>
                  <input type="hidden" name="id" id="id-remove" value="">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">OK</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                </div>
              </div>
            </div>
          </div>
    </form>
@endsection
