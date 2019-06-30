<div id="sticky-header" class="header-middle-area plr-185">
    <div class="container-fluid">
        <div class="full-width-mega-dropdown">
            <div class="row">
                <!-- logo -->
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="logo">
                        <a href="{{route('index')}}">
                            <img src={{ asset('client/img/logo/logo.png') }} alt="main logo">
                        </a>
                    </div>
                </div>
                <!-- primary-menu -->
                <div class="col-md-6 hidden-sm hidden-xs">
                    <nav id="primary-menu">
                        <ul class="main-menu text-center">
                            <li><a href="{{ url('/')}}">Trang chủ</a>
                            </li>
                            <li class="mega-parent"><a>Danh mục</a>
                                <div class="mega-menu-area clearfix">
                                    <div class="mega-menu-link f-left" style="height: 290px">
                                        @foreach ($category as $cate)
                                            <ul class="single-mega-item">
                                                <li class="menu-title" title="{{$cate->name}}">{{$cate->name}}</li>
                                                @if (count($cate->productType)>0)
                                                    @foreach ($cate->productType as $producttype)
                                                        <li class="producttype-menu">
                                                            <a href="{{url('/'.$producttype->slug)}}" title="{{$producttype->name}}" data-src="{{$producttype->image}}">{{$producttype->name}}</a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                    <div class="mega-menu-photo f-left">
                                            <img src="">
                                    </div>
                                </div>
                            </li>
                            @if (Auth::check())
                                <li>
                                    <a>Tài Khoản {{Auth::user()->name}}</a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}">Đăng Xuất</a>
                                </li>
                            @else
                                <li>
                                    <a data-toggle="modal" data-target="#myModal">Đăng nhập</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#regis">Đăng kí</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <!-- header-search & total-cart -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="search-top-cart  f-right">
                        <!-- header-search -->
                        <div class="header-search f-left">
                            <div class="header-search-inner">
                                <button class="search-toggle">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                                <form action="#" method="GET">
                                    <div class="top-search-box">
                                        <input type="text" placeholder="Tìm kiếm trên Jewelry">
                                        <button type="submit" title="Search">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- total-cart -->
                        <div class="total-cart f-left">
                            <div class="total-cart-in">
                                <div class="cart-toggler">
                                    @if (Auth::check())
                                        <a href="#" title="Bạn có 2 sản phẩm">
                                            <span class="cart-quantity">2</span><br>
                                            <span class="cart-icon">
                                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                                            </span>
                                        </a>
                                    @else
                                        <a data-toggle="modal" data-target="#myModal">
                                            <span class="cart-quantity"></span><br>
                                            <span class="cart-icon">
                                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                                            </span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="z-index:99999">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đăng nhập</h4>
            </div>
            <form  id="login" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                    <div class="alert alert-danger errorLogin"></div>
                                <Label>Địa chỉ Email</Label>
                                <input type="text" placeholder="Nhập địa chỉ email" name="email">
                                <div class="alert alert-danger errorEmail"></div>
                            </fieldset>
                            <fieldset class="form-group">
                                <Label>Mật Khẩu</Label>
                                <input type="password" placeholder="Nhập mật khẩu" name="password">
                                <div class="alert alert-danger errorPassword"></div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" style="border-radius:5px" value="Đăng nhập">
                        <a href="{{url('login/facebook')}}" class="btn btn-primary socialite">
                        <span class="fa fa-facebook"></span> Đăng nhập Facebook</a>
                    <a href="{{url('login/google')}}" class="btn btn-danger socialite">
                        <span class="fa fa-google-plus"></span> Đăng nhập Google</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="regis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="z-index:99999">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đăng kí tài khoản</h4>
            </div>
            <form id="register"method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <Label>Họ Tên</Label>
                                <input type="text" placeholder="Nhập họ và tên" name="name">
                                <div class="alert alert-danger errorName"></div>
                            </fieldset>
                            <fieldset class="form-group">
                                <Label>Địa Chỉ Email</Label>
                                <input type="text" placeholder="Nhập địa chỉ email" name="email">
                                <div class="alert alert-danger errorEmail"></div>
                            </fieldset>
                            <fieldset class="form-group">
                                <Label>Mật Khẩu</Label>
                                <input type="password" placeholder="Nhập mật khẩu" name="password">
                                <div class="alert alert-danger errorPassword"></div>
                            </fieldset>
                            <fieldset class="form-group">
                                <Label>Nhập Lại Mật Khẩu</Label>
                                <input type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation">
                                <div class="alert alert-danger errorConfirm"></div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" style="border-radius:5px" value="Đăng kí">
                </div>
            </form>
        </div>
    </div>
</div>
