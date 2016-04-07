<!-- BEGIN HEADER -->
<div class="header">
    <div class="container">
        {{--<a class="site-logo" href="shop-index.html"><img src="../../assets/frontend/layout/img/logos/logo-shop-red.png" alt="Metronic Shop UI"></a>--}}
        <a class="site-logo" href="{{url('/')}}" style="display: block; width: 150px">
            <img src="/venas/img/logo2.png" alt="BIKINI HÀNG ĐẦU VỊNH BẮC BỘ" style="width:100%; height: auto">
        </a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
            <div class="top-cart-info">
                <a href="/gio-hang" class="top-cart-info-count">{{$cart_count}} sản phẩm</a>
                <a href="/gio-hang" class="top-cart-info-value">{{number_format($cart_total, 0, '.', ',')}} VND</a>
            </div>
            <i class="fa fa-shopping-cart"></i>

            <div class="top-cart-content-wrapper">
                <div class="top-cart-content">
                    <ul class="scroller" style="height: 250px;">
                        @if($cart_contents)
                        @foreach($cart_contents as $cart)
                        <li>
                            <a href="/san-pham/{{$cart->options['slug']}}"><img src="/uploads/images/ecommerce/{{$cart->options["feature_image"]}}" alt="{{$cart->name}}" width="37" height="34"></a>
                            <span class="cart-content-count">x {{$cart->qty}}</span>
                            <strong>{{$cart->name}}</strong>
                            <em>{{number_format($cart->price, 0, '.', ',')}} VND</em>
                            {{--<a href="javascript:void(0);" class="del-goods">&nbsp;</a>--}}
                        </li>
                        @endforeach
                        @endif
                        {{--<li>--}}
                            {{--<a href="shop-item.html"><img src="../../assets/frontend/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>--}}
                            {{--<span class="cart-content-count">x 1</span>--}}
                            {{--<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>--}}
                            {{--<em>$1230</em>--}}
                            {{--<a href="javascript:void(0);" class="del-goods">&nbsp;</a>--}}
                        {{--</li>--}}
                    </ul>
                    <div class="text-right">
                        <a href="/gio-hang" class="btn btn-default">Giỏ hàng</a>
                        <a href="/thanh-toan" class="btn btn-primary">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
            <ul>
                @foreach($categories as $category)
                <li><a href="{{url('/danh-muc/' . $category->slug)}}">{{$category->name}}</a></li>
                @endforeach

                <!-- BEGIN TOP SEARCH -->
                <li class="menu-search">
                    <span class="sep"></span>
                    <i class="fa fa-search search-btn"></i>

                    <div class="search-box">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" placeholder="Sản phẩm..." class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                    </span>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- END TOP SEARCH -->
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
<!-- Header END -->