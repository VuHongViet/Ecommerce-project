@extends('client.layout.master')
@section('title')
    Shop
@endsection



@section('content')
    <!-- Start page content -->
    <div id="page-content" class="page-wrapper">

        <!-- SHOP SECTION START -->
        <div class="shop-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3 col-sm-12">
                        <div class="shop-content">
                            <!-- shop-option start -->
                            <div class="shop-option box-shadow mb-30 clearfix">
                                <!-- Nav tabs -->
                                <ul class="shop-tab f-left" role="tablist">
                                    <li class="active">
                                        <a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                                    </li>
                                    <li>
                                        <a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- shop-option end -->
                            <!-- Tab Content start -->
                            <div class="tab-content">
                                <!-- grid-view -->
                                <div role="tabpanel" class="tab-pane active" id="grid-view">
                                    <div class="row">
                                        @foreach ($products as $product)
                                              <!-- product-item start -->
                                            <div class="col-md-4 col-sm-4 col-xs-12 xs-mobie-large">
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
                                            <!-- product-item end -->
                                        @endforeach
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="list-view">
                                    <div class="row">
                                        @foreach ($products as $collection)
                                             <!-- product-item start -->
                                            <div class="col-md-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="{{route('product_detail',$collection->slug)}}" title="{{$collection->name}}">
                                                            <img src={{ asset('img/upload/product/'.$collection->image) }} alt="{{$collection->name}}" />
                                                        </a>
                                                        <div class="shadown_product">
                                                            <a href="{{route('product_detail',$collection->slug)}}" title="{{$collection->name}}"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                            <a href="{{route('product_detail',$collection->slug)}}">{{$collection->name}}</a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a><i class="zmdi zmdi-star"></i></a>
                                                                <a><i class="zmdi zmdi-star"></i></a>
                                                                <a><i class="zmdi zmdi-star"></i></a>
                                                                <a><i class="zmdi zmdi-star-half"></i></a>
                                                                <a><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <span class="pro-price">{{$collection->color}}</span>
                                                        @if ($collection->promotional>0)
                                                            <h3 class="pro-price">{{number_format(($collection->price*(100-$collection->promotional))/100,0,',','.')}} VNĐ</h3>
                                                        @else
                                                            <h3 class="pro-price">{{number_format($collection->price,0,',','.')}} VNĐ</h3>
                                                        @endif
                                                        <p>{!! $collection->description !!}</p>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a data-toggle="modal" data-target="#productModal" title="Quickview" class="quickview" data-id="{{$collection->id}}">
                                                                    <i class="zmdi zmdi-zoom-in"></i>
                                                                </a>
                                                            </li>
                                                            @if (Auth::check())
                                                                <li>
                                                                    <a class="addcart" style="cursor: pointer" title="Thêm vào giỏ" data-id="{{$collection->id}}">
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
                                            <!-- product-item end -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content end -->
                            <!-- shop-pagination start -->
                            <ul class="shop-pagination box-shadow text-center ptblr-10-30">
                                {{$products->onEachSide(1)->links()}}
                            </ul>
                            <!-- shop-pagination end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-md-pull-9 col-sm-12">
                        <!-- widget-search -->

                        <!-- widget-categories -->
                        <aside class="widget widget-categories box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20">Sản Phẩm</h6>
                            <div id="cat-treeview" class="product-cat">
                                <ul>
                                    @foreach ($category as $item)
                                        <li><a>{{$item->name}}</a>
                                            <ul>
                                                @if (count($item->productType)>0)
                                                    @foreach ($item->productType as $producttypes)
                                                        <li><a href="{{url('/'.$producttypes->slug)}}" title="{{$producttypes->name}}">{{$producttypes->name}}</a></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                        <!-- shop-filter -->
                        <!-- widget-color -->
                        <aside class="widget widget-color box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20">Màu Sắc</h6>
                            <ul>
                                @foreach ($color as $colors)
                                    <li class="color-1"><a style="cursor: pointer">{{$colors->color}}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget widget-product box-shadow">
                            <h6 class="widget-title border-left mb-20">Sản Phẩm Liên Quan</h6>
                            <!-- product-item start -->
                            @foreach ($product_recent as $product_recent)
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{route('product_detail',$product_recent->slug)}}" title="{{$product_recent->name}}">
                                            <img src={{ asset('img/upload/product/'.$product_recent->image) }} alt="{{$product_recent->name}}" />
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                                <a href="{{route('product_detail',$product_recent->slug)}}" title="{{$product_recent->name}}">{{$product_recent->name}}</a>
                                        </h6>
                                        @if ($product_recent->promotional>0)
                                            <h3 class="pro-price">{{number_format(($product_recent->price*(100-$product_recent->promotional))/100,0,',','.')}} VNĐ</h3>
                                        @else
                                            <h3 class="pro-price">{{number_format($product_recent->price,0,',','.')}} VNĐ</h3>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            <!-- product-item end -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </div>
    <!-- End page content -->
@endsection
