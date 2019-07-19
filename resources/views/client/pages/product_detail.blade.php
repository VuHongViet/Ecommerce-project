@extends('client.layout.master')
@section('title')
{{$product[0]->name}}
@endsection

@section('content')
<div class="shop-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- single-product-area start -->
                <div class="single-product-area mb-80">
                    <div class="row">
                        <!-- imgs-zoom-area start -->
                        @foreach ($product as $item)
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="imgs-zoom-area">
                                <div class="shadow">
                                    <img id="zoom_03" src="{{ asset('img/upload/product/'.$item->image) }}"
                                        data-zoom-image="{{ asset('img/upload/product/'.$item->image) }}" alt="">
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                            @foreach ($item->ProductDetails as $items)
                                            <div class="p-c">
                                                <a href="#"
                                                    data-image="{{ asset('img/upload/product_details/'.$items->image) }}"
                                                    data-zoom-image="{{ asset('img/upload/product_details/'.$items->image) }}">
                                                    <img class="zoom_03"
                                                        src="{{ asset('img/upload/product_details/'.$items->image) }}"
                                                        alt="">
                                                </a>
                                            </div>
                                            @endforeach
                                            <div class="p-c">
                                                    <a href="#"
                                                        data-image="{{ asset('img/upload/product_details/'.$items->image) }}"
                                                        data-zoom-image="{{ asset('img/upload/product_details/'.$items->image) }}">
                                                        <img class="zoom_03"
                                                            src="{{ asset('img/upload/product_details/'.$items->image) }}"
                                                            alt="">
                                                    </a>
                                            </div>
                                            <div class="p-c">
                                                    <a href="#"
                                                        data-image="{{ asset('img/upload/product_details/'.$items->image) }}"
                                                        data-zoom-image="{{ asset('img/upload/product_details/'.$items->image) }}">
                                                        <img class="zoom_03"
                                                            src="{{ asset('img/upload/product_details/'.$items->image) }}"
                                                            alt="">
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- imgs-zoom-area end -->
                        <!-- single-product-info start -->
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="single-product-info">
                                <h3 class="text-black-1">{{$item->name}}</h3>
                                <!-- hr -->
                                <hr>
                                <!-- single-product-tab -->
                                <div class="single-product-tab">
                                    <ul class="reviews-tab mb-20">
                                        <li class="active"><a href="#description" data-toggle="tab">Mô Tả</a></li>
                                        <li><a href="#information" data-toggle="tab">Thông Tin Chung</a></li>
                                        <li><a href="#reviews" data-toggle="tab">Bình Luận</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="description">
                                            <p>{!! $item->description!!}</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="information">
                                            <p>{!! $item->information!!}</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="reviews">
                                            <!-- reviews-tab-desc -->
                                            <div class="reviews-tab-desc">
                                                <!-- single comments -->
                                                @forelse ($item->Comment as $comment)
                                                    <div class="media mt-30">
                                                        <div class="media-left">
                                                            <a href="#"><img class="media-object" src="img/author/1.jpg"
                                                                    alt="#"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="clearfix">
                                                                <div class="name-commenter pull-left">
                                                                    <h6 class="media-heading"><a href="#">Gerald Barnes</a>
                                                                    </h6>
                                                                    <p class="mb-10">27 Jun, 2017 at 2:30pm</p>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <ul class="reply-delate">
                                                                        <li><a href="#">Reply</a></li>
                                                                        <li>/</li>
                                                                        <li><a href="#">Delate</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Integer accumsan egestas .</p>
                                                        </div>
                                                    </div>
                                                @empty
                                                    Không có bình luận nào
                                                @endforelse
                                                <!-- single comments -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  hr -->
                                <hr>
                                <!-- single-pro-color-rating -->
                                <div class="single-pro-color-rating clearfix">
                                    <div class="sin-pro-color f-left">
                                        <p class="color-title f-left">Màu Sắc:</p>
                                        <div class="widget-color f-left">
                                            <ul>
                                                <li>{{$item->color}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-rating sin-pro-rating f-right">
                                        <a><i class="zmdi zmdi-star"></i></a>
                                        <a ><i class="zmdi zmdi-star"></i></a>
                                        <a ><i class="zmdi zmdi-star"></i></a>
                                        <a ><i class="zmdi zmdi-star-half"></i></a>
                                        <a ><i class="zmdi zmdi-star-outline"></i></a>
                                        <span class="text-black-5">( 27 Rating )</span>
                                    </div>
                                </div>
                                <!-- hr -->
                                <hr>
                                <!-- plus-minus-pro-action -->
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <div class="plus-minus-pro-action">
                                        <div class="sin-plus-minus  clearfix">
                                            <p class="color-title">Qty</p>
                                            <div class="button">
                                                <button class="sub">-</button>
                                                <input class="input_297o" type="text" value="01" readonly>
                                                <button class="add">+</button>
                                            </div>
                                        </div>
                                        <div class="shop">
                                                @if (Auth::check())
                                                <button type="submit">
                                                    <a title="Mua Ngay" id="addcart">Mua Ngay</a>
                                                </button>
                                                <button>
                                                    <a title="Thêm Vào Giỏ" id="addcart">Thêm Vào Giỏ</a>
                                                </button>
                                                @else
                                                    <button>
                                                        <a title="Mua Ngay" data-toggle="modal" data-target="#myModal" id="addcart">Mua Ngay</a>
                                                    </button>
                                                    <button>
                                                        <a title="Thêm Vào Giỏ" data-toggle="modal" data-target="#myModal" id="addcart">Thêm Vào Giỏ</a>
                                                    </button>
                                                @endif
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- single-product-info end -->
                        @endforeach
                    </div>
                </div>
                <!-- single-product-area end -->
            </div>
        </div>
    </div>
</div>
@endsection
