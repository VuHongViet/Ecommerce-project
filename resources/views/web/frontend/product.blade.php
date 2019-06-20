@extends('web.frontend.layout.master')
@section('title')
    Template Thức Uống Và Đồ Ăn Nhanh | KhoTemplateVN
@endsection

@section('content')
    @include('web.frontend.slide')
<div class="product-area pb-70">
    <div class="custom-container">
        <div class="product-tab-list-wrap text-center mb-40">
            <div class="product-tab-list nav">
                <a class="active" href="#tab1" data-toggle="tab">
                    <h4>All </h4>
                </a>
                <a href="#tab2" data-toggle="tab">
                    <h4>Food </h4>
                </a>
                <a href="#tab3" data-toggle="tab">
                    <h4> Drink </h4>
                </a>
            </div>
            <p>Typi non habent claritatem insitam est usus legentis in qui facit eorum claritatem, investigationes
                    demonstraverunt lectores legere me lius quod legunt saepius.</p>
        </div>
        <div class="tab-content jump">
            <div id="tab1" class="tab-pane active">
                <div class="row">
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-1.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$100.00</span>
                                    <span class="product-price-old">$120.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$200.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-3.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$90.00</span>
                                    <span class="product-price-old">$100.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-4.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$60.00</span>
                                    <span class="product-price-old">$70.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-6.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$190.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$150.00</span>
                                    <span class="product-price-old">$170.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-8.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$80.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$180.00</span>
                                    <span class="product-price-old">$190.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-pane">
                <div class="row">
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$100.00</span>
                                    <span class="product-price-old">$120.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$200.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$90.00</span>
                                    <span class="product-price-old">$100.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-8.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-6.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$60.00</span>
                                    <span class="product-price-old">$70.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$190.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-4.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$150.00</span>
                                    <span class="product-price-old">$170.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-3.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$80.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$180.00</span>
                                    <span class="product-price-old">$190.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-1.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-pane">
                <div class="row">
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$100.00</span>
                                    <span class="product-price-old">$120.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-4.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$200.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$90.00</span>
                                    <span class="product-price-old">$100.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-3.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-1.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$60.00</span>
                                    <span class="product-price-old">$70.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$190.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$150.00</span>
                                    <span class="product-price-old">$170.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$80.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-8.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$180.00</span>
                                    <span class="product-price-old">$190.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrapper mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <div class="pro-action-left">
                                        <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                    </div>
                                    <div class="pro-action-right">
                                        <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4>
                                    <a href="product-details.html">PRODUCTS NAME HERE </a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span>$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area">
    <div class="container">
        <div class="discount-overlay bg-img pt-130 pb-130" style="background-image:url(assets/img/banner/banner-4.jpg);">
            <div class="discount-content text-center">
                <h3>It’s Time To Start <br>Your Own Revolution By Laurent</h3>
                <p>Exclusive Offer -10% Off This Week</p>
                <div class="banner-btn">
                    <a href="#">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="best-food-area pt-100 pb-95">
    <div class="custom-container">
        <div class="row">
            <div class="best-food-width-1">
                <div class="single-banner">
                    <div class="hover-style">
                        <a href="#"><img src="assets/img/banner/banner-5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="best-food-width-2">
                <div class="product-top-bar section-border mb-25">
                    <div class="section-title-wrap">
                        <h3 class="section-title section-bg-white">Best Food In Our Shop</h3>
                    </div>
                    <div class="product-tab-list-2 nav section-bg-white">
                        <a class="active" href="#tab4" data-toggle="tab">
                            <h4>All </h4>
                        </a>
                        <a href="#tab5" data-toggle="tab">
                            <h4>Food </h4>
                        </a>
                        <a href="#tab6" data-toggle="tab">
                            <h4> Drink </h4>
                        </a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="tab4" class="tab-pane active">
                        <div class="product-slider-active owl-carousel product-nav">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-1.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$100.00</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-2.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$200.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-3.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$90.00</span>
                                        <span class="product-price-old">$100.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-4.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane">
                        <div class="product-slider-active owl-carousel product-nav">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-5.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$100.00</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-6.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$200.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-7.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$90.00</span>
                                        <span class="product-price-old">$100.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-8.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane">
                        <div class="product-slider-active owl-carousel product-nav">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-9.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$100.00</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-10.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$200.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-1.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$90.00</span>
                                        <span class="product-price-old">$100.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-2.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i> Add Tto Cart</a>
                                        </div>
                                        <div class="pro-action-right">
                                            <a title="Wishlist" href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="product-details.html">PRODUCTS NAME HERE </a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="best-food-width-1 mrg-small-35">
                <div class="single-banner">
                    <div class="hover-style">
                        <a href="#"><img src="assets/img/banner/banner-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
