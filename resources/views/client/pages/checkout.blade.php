@extends('client.layout.master')
@section('title')
    Thank you!
@endsection

@section('content')
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
                                        <tr>
                                            <td colspan="5" class="cart-emty">
                                                <p>Cảm ơn bạn đã mua hàng của chúng tôi!</p>
                                                <button style="padding: 10px;background: #FF7F00">
                                                    <a href="{{route('index')}}" style="color: white">Tiếp Tục Mua Sắm</a>
                                                </button>
                                            </td>
                                        </tr>
                                    </ul>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- shopping-cart end -->
                </div>
            </div>
        </div>
    </div>
@endsection
