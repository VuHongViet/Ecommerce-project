<footer id="footer" class="footer-area">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="footer-top-inner gray-bg">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-4">
                            <div class="single-footer footer-about">
                                <div class="footer-logo">
                                    <img src="{{ asset('client/img/logo/logo.png') }}" alt="">
                                </div>
                                <div class="footer-brief">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the subas industry's standard dummy text
                                        ever since the 1500s,</p>
                                    <p>When an unknown printer took a galley of type and If you are going to use
                                        a passage of Lorem Ipsum scrambled it to make.</p>
                                </div>
                                <ul class="footer-social">
                                    <li>
                                        <a class="facebook"  title="Facebook"><i
                                                class="zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="google-plus" title="Google Plus"><i
                                                class="zmdi zmdi-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter"  title="Twitter"><i
                                                class="zmdi zmdi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="rss"  title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 hidden-md hidden-sm">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">Sản Phẩm</h4>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>Sản Phẩm Mới</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>Giảm Giá</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle"></i><span>Bán Chạy Nhất</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">Cá Nhân</h4>
                                <ul class="footer-menu">
                                    @if (Auth::check())
                                        <li>
                                            <a href="#">
                                                <i class="zmdi zmdi-circle"></i><span>My Cart</span>
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a data-toggle="modal" data-target="#myModal" style="cursor: pointer">
                                                <i class="zmdi zmdi-circle"></i><span>My Cart</span>
                                            </a>
                                        </li>
                                         <li>
                                            <a data-toggle="modal" data-target="#myModal" style="cursor: pointer"><i class="zmdi zmdi-circle"></i><span>Đăng Nhập</span></a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" data-target="#regis" style="cursor: pointer"><i
                                                class="zmdi zmdi-circle"></i><span>Đăng Kí</span></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">Liên Hệ</h4>
                                <div class="footer-message">
                                    <form action="#">
                                        <input type="text" name="name" placeholder="Your name here...">
                                        <input type="text" name="email" placeholder="Your email here...">
                                        <textarea class="height-80" name="message"
                                            placeholder="Your messege here..."></textarea>
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">submit
                                            message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom black-bg">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="copyright">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="copyright-text">
                                <p>&copy; <a href="#" target="_blank">DevItems</a> 2017. All Rights Reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <ul class="footer-payment text-right">
                                <li>
                                    <a><img src="{{ asset('client/img/payment/1.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a><img src="{{ asset('client/img/payment/2.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a><img src="{{ asset('client/img/payment/3.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a><img src="{{ asset('client/img/payment/4.jpg') }}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
