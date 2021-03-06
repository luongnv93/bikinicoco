@section('page-title')
    Thanh toán
@stop

@extends('layouts.client')

@section('content')

<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><i class="fa fa-home"></i> <a href="{{url('/')}}"> Trang chủ</a></li>
            <li><a href="/gio-hang">Giỏ hàng</a></li>
            <li class="active">Thanh toán</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Thanh toán</h1>
                <!-- BEGIN CHECKOUT PAGE -->
                <div class="panel-group checkout-page accordion scrollable" id="checkout-page">

                    <!-- BEGIN PAYMENT ADDRESS -->
                    <div id="payment-address" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-address-content" class="accordion-toggle">
                                    Thông tin quý khách
                                </a>
                            </h2>
                        </div>
                        <div id="payment-address-content" class="panel-collapse collapse in">
                            <div class="panel-body row">
                                <div class="col-md-6 col-sm-6">
                                    <h3>Thông tin cá nhân</h3>
                                    <div class="form-group">
                                        <label for="firstname">Họ <span class="require">*</span></label>
                                        <input type="text" id="firstname" class="form-control" onchange="updateUrl()">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Tên <span class="require">*</span></label>
                                        <input type="text" id="lastname" class="form-control" onchange="updateUrl()">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-Mail <span class="require">*</span></label>
                                        <input type="text" id="email" class="form-control" onchange="updateUrl()">
                                    </div>
                                    <div class="form-group">
                                        <label for="telephone">Số điện thoại <span class="require">*</span></label>
                                        <input type="text" id="telephone" class="form-control" onchange="updateUrl()">
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h3>Thông tin địa chỉ</h3>
                                    <div class="form-group">
                                        <label for="address1">Địa chỉ 1</label>
                                        <input type="text" id="address1" class="form-control" onchange="updateUrl()">
                                    </div>
                                    <div class="form-group">
                                        <label for="address2">Địa chỉ 2</label>
                                        <input type="text" id="address2" class="form-control" onchange="updateUrl()">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">Thành phố <span class="require">*</span></label>
                                        <input type="text" id="city" class="form-control" onchange="updateUrl()">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAYMENT ADDRESS -->

                    <!-- BEGIN CONFIRM -->
                    <div id="confirm" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#checkout-page" href="#confirm-content" class="accordion-toggle">
                                    Danh sách đơn hàng
                                </a>
                            </h2>
                        </div>
                        <div id="confirm-content" class="panel-collapse collapse in">
                            <div class="panel-body row">
                                <div class="col-md-12 clearfix">
                                    <div class="table-wrapper-responsive">
                                        <table>
                                            <tr>
                                                <th class="checkout-image">Ảnh</th>
                                                <th class="checkout-description">Miêu tả</th>
                                                <th class="checkout-model">Mã sản phẩm</th>
                                                <th class="checkout-quantity">Số lượng</th>
                                                <th class="checkout-price">Giá / Sản phẩm</th>
                                                <th class="checkout-total">Giá</th>
                                            </tr>
                                            @foreach($cart_contents as $cart)
                                            <tr>
                                                <td class="checkout-image">
                                                    <a href="/san-pham/{{$cart->options['slug']}}"><img src="/uploads/images/ecommerce/{{$cart->options["feature_image"]}}" alt="{{$cart->name}}"></a>
                                                </td>
                                                <td class="checkout-description">
                                                    <h3><a href="/san-pham/{{$cart->options['slug']}}">{{$cart->name}}</a></h3>
                                                </td>
                                                <td class="checkout-model">{{$cart->sku}}</td>
                                                <td class="checkout-quantity">{{$cart->qty}}</td>
                                                <td class="checkout-price"><strong>{{number_format($cart->price, 0, '.', ',')}} <span>VND</span></strong></td>
                                                <td class="checkout-total"><strong>{{number_format($cart->subtotal, 0, '.', ',')}} <span>VND</span></strong></td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    <div class="checkout-total-block">
                                        <ul>
                                            <li class="checkout-total-price">
                                                <em>Tổng giá đơn hàng</em>
                                                <strong class="price">{{number_format($cart_total, 0, '.', ',')}} <span>VND</span></strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>

                                    <a target="_blank" class="pull-right" id="thanh-toan"
                                       href="https://www.nganluong.vn/button_payment.php?receiver=mynguyen18021994@gmail.com&product_name=ORD_{{$new_order->id}}&price={{$cart_total}}&return_url=&comments=">
                                    <img src="https://www.nganluong.vn//css/newhome/img/button/pay-lg.png"border="0" />
                                    </a>

                                    <button type="button" class="btn btn-default pull-right margin-right-20">Hủy bỏ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONFIRM -->
                </div>
                <!-- END CHECKOUT PAGE -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>

    <script>
        // Update url
        function updateUrl() {

            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var telephone = $('#telephone').val();
            var address1 = $('#address1').val();

            var url = "http://" + window.location.host + "/payment/success/" + {{$new_order->id}} + "/"
                    + email + '/'
                    + firstname + '/'
                    + lastname + '/'
                    + telephone + '/'
                    + address1;

            var href = "https://www.nganluong.vn/button_payment.php?receiver=mynguyen18021994@gmail.com&product_name=ORD_{{$new_order->id}}&price={{$cart_total}}&return_url=" + url + "&comments=";

            console.debug('url');
            console.debug(url);

            $("#thanh-toan").attr("href", href);

        }
    </script>

@stop