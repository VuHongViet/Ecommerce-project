@extends('client.layout.master')

@section('title')
Trang chủ
@endsection

@section('slide')
@include('client.layout.slide')
@endsection

@section('content')
<section id="page-content" class="page-wrapper">

    <!-- FEATURED PRODUCT SECTION START -->
    <!-- FEATURED PRODUCT SECTION END -->

    <!-- PRODUCT TAB SECTION START -->
    <div class="product-tab-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase">Danh sách sản phẩm</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="pro-tab-menu text-right">
                        <!-- Nav tabs -->
                        <ul>
                            <li class="active"><a href="#popular-product" data-toggle="tab">Tất Cả Sản Phẩm
                                </a></li>
                            <li><a href="#new-arrival" data-toggle="tab">Hàng Mới Về</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-tab">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- popular-product start -->
                    <div class="tab-pane active" id="popular-product">
                        <div class="row">
                            <!-- product-item start -->
                            @foreach ($product_all as $product)
                                <div class="col-md-3 col-sm-4 col-xs-12 xs-mobie-large">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="{{route('product_detail',$product->slug)}}" title="{{$product->name}}">
                                                <img src={{ asset('img/upload/product/'.$product->image) }} alt="{{$product->name}}" />
                                            </a>
                                            <div class="shadown_product">
                                                <a href="{{route('product_detail',$product->slug)}}" title="{{$product->name}}"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="{{route('product_detail',$product->slug)}}">{{$product->name}}</a>
                                            </h6>
                                            <div class="pro-rating">
                                                <a><i class="zmdi zmdi-star"></i></a>
                                                <a><i class="zmdi zmdi-star"></i></a>
                                                <a><i class="zmdi zmdi-star"></i></a>
                                                <a><i class="zmdi zmdi-star-half"></i></a>
                                                <a><i class="zmdi zmdi-star-outline"></i></a>
                                            </div>
                                            <span class="pro-price">{{$product->color}}</span>
                                            @if ($product->promotional>0)
                                                <h3 class="pro-price">{{number_format(($product->price*(100-$product->promotional))/100,0,',','.')}} VNĐ</h3>
                                            @else
                                                <h3 class="pro-price">{{number_format($product->price,0,',','.')}} VNĐ</h3>
                                            @endif
                                            <ul class="action-button">
                                                <li>
                                                    <a data-toggle="modal" data-target="#productModal" title="Quickview" class="quickview" data-id="{{$product->id}}">
                                                        <i class="zmdi zmdi-zoom-in"></i>
                                                    </a>
                                                </li>
                                                @if (Auth::check())
                                                    <li>
                                                        <a class="addcart" style="cursor: pointer" title="Thêm vào giỏ" data-id="{{$product->id}}">
                                                            <i class="zmdi zmdi-shopping-cart-plus" ></i>
                                                        </a>
                                                    </li>
                                                    <div class="action-click">
                                                        <span class="icon-check">Đã Thêm</span>
                                                    </div>
                                                @else
                                                    <li>
                                                        <a data-toggle="modal" data-target="#myModal" style="cursor: pointer" title="Thêm vào giỏ"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- product-item end -->
                        </div>
                        <div class="pull-right">
                            <a href="{{route('products')}}">Xem Thêm</a>
                        </div>
                    </div>
                    <!-- popular-product end -->
                    <!-- new-arrival start -->
                    <div class="tab-pane" id="new-arrival">
                        <div class="row">
                            <!-- product-item start -->
                            @foreach ($product_times as $pt_times)
                                <div class="col-md-3 col-sm-4 col-xs-12 xs-mobie-large">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="{{route('product_detail',$pt_times->slug)}}" title="{{$pt_times->name}}">
                                                <img src="{{ asset('img/upload/product/'.$pt_times->image) }}" alt="{{$pt_times->name}}" />
                                            </a>
                                            <div class="shadown_product">
                                                <a href="{{route('product_detail',$pt_times->slug)}}" title="{{$pt_times->name}}"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="{{route('product_detail',$pt_times->slug)}}">{{$pt_times->name}}</a>
                                            </h6>
                                            <div class="pro-rating">
                                                <a><i class="zmdi zmdi-star"></i></a>
                                                <a><i class="zmdi zmdi-star"></i></a>
                                                <a><i class="zmdi zmdi-star"></i></a>
                                                <a><i class="zmdi zmdi-star-half"></i></a>
                                                <a><i class="zmdi zmdi-star-outline"></i></a>
                                            </div>
                                            <span class="pro-price">{{$pt_times->color}}</span>
                                            @if ($pt_times->promotional>0)
                                                <h3 class="pro-price">{{number_format(($pt_times->price*(100-$pt_times->promotional))/100,0,',','.')}} VNĐ</h3>
                                            @else
                                                <h3 class="pro-price">{{number_format($pt_times->price,0,',','.')}} VNĐ</h3>
                                            @endif
                                            <ul class="action-button">
                                                <li>
                                                    <a data-toggle="modal" data-target="#productModal" title="Quickview" class="quickview" data-id="{{$pt_times->id}}">
                                                        <i class="zmdi zmdi-zoom-in"></i>
                                                    </a>
                                                </li>
                                                @if (Auth::check())
                                                    <li>
                                                        <a class="addcart" style="cursor: pointer" title="Thêm vào giỏ" data-id="{{$pt_times->id}}">
                                                            <i class="zmdi zmdi-shopping-cart-plus" ></i>
                                                        </a>
                                                    </li>
                                                    <div class="action-click">
                                                        <span class="icon-check">Đã Thêm</span>
                                                    </div>
                                                @else
                                                    <li>
                                                        <a data-toggle="modal" data-target="#myModal" style="cursor: pointer" title="Thêm vào giỏ"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- product-item end -->
                        </div>
                    </div>
                    <!-- new-arrival end -->
                    <!-- best-seller start -->

                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB SECTION END -->

</section>
@endsection
