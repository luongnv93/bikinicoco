@section('page-title')
    Giỏ hàng
@stop

@extends('layouts.client')

@section('content')


    <div class="main">
        <div class="container">
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <h1>Giỏ hàng của bạn</h1>

                    <div class="goods-page">
                        <div class="goods-data clearfix">
                            <div class="table-wrapper-responsive">
                                <table summary="Shopping cart">
                                    <tr>
                                        <th class="goods-page-image">Ảnh</th>
                                        <th class="goods-page-description">Miêu tả</th>
                                        <th class="goods-page-ref-no">Mã Sản phẩm</th>
                                        <th class="goods-page-quantity">Số lượng</th>
                                        <th class="goods-page-price">Giá / Sản phẩm</th>
                                        <th class="goods-page-total" colspan="2">Tổng</th>
                                    </tr>

                                    @foreach($cart_contents as $cart)
                                    <tr>
                                        <td class="goods-page-image">
                                            <a href="/san-pham/{{$cart->options['slug']}}"><img
                                                        src="/uploads/images/ecommerce/{{$cart->options["feature_image"]}}"
                                                        alt="{{$cart->name}}"></a>
                                        </td>
                                        <td class="goods-page-description">
                                            <h3><a href="/san-pham/{{$cart->options['slug']}}">{{$cart->name}}</a></h3>

                                            {{--<p><strong>Item 1</strong> - Color: Green; Size: S</p>--}}
                                            {{--<em>More info is here</em>--}}
                                        </td>
                                        <td class="goods-page-ref-no">
                                            {{$cart->sku}}
                                        </td>
                                        <td class="goods-page-quantity">
                                            <form method="POST" action="/update-cart">
                                                <div class="product-quantity">
                                                    <input id="product-quantity" type="text" name="quantity" value="{{$cart->qty}}" class="form-control">
                                                    <input type="hidden" value="{{$cart->rowid}}" name="rowId"/>
                                                    <button type="submit" class="" style="border: 0px; margin-top: 2px; width: 71px; background: #edeff1; padding: 0px">
                                                        <i class="fa fa-check"></i> Update
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="goods-page-price">
                                            <strong>{{number_format($cart->price, 0, '.', ',')}} <span>VND</span></strong>
                                        </td>
                                        <td class="goods-page-total">
                                            <strong>{{number_format($cart->subtotal, 0, '.', ',')}} <span>VND</span></strong>
                                        </td>
                                        <td class="del-goods-col">
                                            <a class="del-goods" href="/delete-row/{{$cart->rowid}}">&nbsp;</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </table>
                            </div>

                            <div class="shopping-total">
                                <ul>
                                    <li class="shopping-total-price">
                                        <em>Tổng đơn hàng</em>
                                        <strong class="price">{{number_format($cart_total, 0, '.', ',')}} VND</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="/" class="btn btn-default" type="submit">Tiếp tục mua sắm <i class="fa fa-shopping-cart"></i></a>
                        <a href="/thanh-toan" class="btn btn-primary" type="submit">Thanh toán <i class="fa fa-check"></i></a>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->

            <!-- BEGIN SIMILAR PRODUCTS -->
            <div class="row margin-bottom-40">
                <div class="col-md-12 col-sm-12">
                    <h2>Sản phẩm bán chạy</h2>

                    <div class="owl-carousel owl-carousel4">

                        @foreach($productBestsellers as $p)
                            <div>
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="/uploads/images/ecommerce/{{$p->feature_image}}" class="img-responsive" alt="{{$p->name}}">
                                        <div>
                                            <a href="/uploads/images/ecommerce/{{$p->feature_image}}" class="btn btn-default fancybox-button">Zoom</a>
                                        </div>
                                    </div>
                                    <h3><a href="/san-pham/{{$p->slug}}">{{$p->name}}</a></h3>
                                    <div class="pi-price">{{number_format($p->listed_price, 0, '.', ',')}} VND</div>
                                    <form method="POST" action="/add-to-cart-category">
                                        <input type="hidden" name="product_id" value="{{$p->id}}">
                                        <input type="hidden" name="quantity" value="1" class="form-control">
                                        <button type="submit" class="btn btn-default add2cart">
                                            <i class="fa fa-shopping-cart"></i> Thêm
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- END SIMILAR PRODUCTS -->
        </div>
    </div>

@stop