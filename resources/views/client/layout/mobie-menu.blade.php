<div class="mobile-menu-area hidden-lg hidden-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li>
                                <a href="{{ url('/')}}">Trang chủ</a>
                            </li>
                            <li>
                                <a>Sản phẩm</a>
                                <ul>
                                    @foreach ($producttype as $item)
                                        <li>
                                            <a href="{{url('/'.$item->slug)}}">{{$item->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
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
            </div>
        </div>
    </div>
</div>
