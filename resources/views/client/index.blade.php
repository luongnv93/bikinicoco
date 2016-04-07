@extends('layouts.client')

@section('page-title')
Bikini hàng đầu vịnh bắc bộ
@stop

@section('content')
<!-- BEGIN SLIDER -->
{{--TODO Slide--}}
<div class="page-slider margin-bottom-35">
    <!-- LayerSlider start -->
    <div id="layerslider" style="width: 100%; height: 494px; margin: 0 auto;">

        <!-- slide one start -->
        <div class="ls-slide ls-slide1" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 24,25,27,28;">

            <img src="/uploads/images/slidshow/s2.jpg" class="ls-bg" alt="Slide background">

            <div class="ls-l ls-title" style="top: 96px; left: 35%; white-space: nowrap;" data-ls=" fade: true; fadeout: true; durationin: 750; durationout: 750; easingin: easeOutQuint; rotatein: 90; rotateout: -90; scalein: .5; scaleout: .5; showuntil: 4000; ">
                Tones of <strong>shop UI features</strong> designed
            </div>

            <div class="ls-l ls-mini-text" style="top: 338px; left: 35%; white-space: nowrap;" data-ls=" fade: true; fadeout: true; durationout: 750; easingin: easeOutQuint; delayin: 300; showuntil: 4000; ">
                Lorem ipsum dolor sit amet constectetuer diam<br> adipiscing elit euismod ut laoreet dolore.
            </div>
        </div>
        <!-- slide one end -->

        <!-- slide two start -->
        <div class="ls-slide ls-slide2" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

            <img src="/uploads/images/slidshow/s1.jpg" class="ls-bg" alt="Slide background">

            <div class="ls-l ls-title" style="top: 40%; left: 21%; white-space: nowrap;" data-ls=" fade: true; fadeout: true; durationin: 750; durationout: 109750; easingin: easeOutQuint; easingout: easeInOutQuint; delayin: 0; delayout: 0; rotatein: 90; rotateout: -90; scalein: .5; scaleout: .5; showuntil: 4000; ">
                <strong>Unlimted</strong> Layout Options <em>Fully Responsive</em>
            </div>

            <div class="ls-l ls-price" style="top: 50%; left: 45%; white-space: nowrap;" data-ls=" fade: true; fadeout: true; durationout: 109750; easingin: easeOutQuint; delayin: 300; scalein: .8; scaleout: .8; showuntil: 4000;">
                <b>from</b> <strong><span>$</span>25</strong>
            </div>

            <a href="#" class="ls-l ls-more" style="top: 72%; left: 21%; display: inline-block; white-space: nowrap;" data-ls=" fade: true; fadeout: true; durationin: 750; durationout: 750; easingin: easeOutQuint; easingout: easeInOutQuint; delayin: 0; delayout: 0; rotatein: 90; rotateout: -90; scalein: .5; scaleout: .5; showuntil: 4000;">
                See More Details
            </a>
        </div>
        <!-- slide two end -->

    </div>
    <!-- LayerSlider end -->
</div>
<!-- END SLIDER -->

<div class="main">
    <div class="container">

        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SALE PRODUCT -->
            <div class="col-md-12 sale-product">
                <h2>Sản phẩm mơi</h2>
                <div class="owl-carousel owl-carousel5">

                    @foreach($productNew as $p)
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="/uploads/images/ecommerce/{{$p->feature_image}}" class="img-responsive" alt="{{$p->name}}">
                                <div>
                                    <a href="/uploads/images/ecommerce/{{$p->feature_image}}" class="btn btn-default fancybox-button">Zoom</a>
                                    {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                    {{--<form method="post" action="https://www.nganluong.vn/advance_payment.php">--}}
                                        {{--<input type=hidden name=receiver value="luongnv93@gmail.com"/>--}}
                                        {{--<input type=hidden name=product value="{{$p->id}}"/>--}}
                                        {{--<input type=hidden name=price value="{{$p->listed_price}}"/>--}}
                                        {{--<input type=hidden name=return_url value="http://complete.com/thank.php"/>--}}
                                        {{--<input type=hidden name=comments value=""/>--}}
                                        {{--<input type=image--}}
                                               {{--src="https://www.nganluong.vn/data/images/merchant/button/btn-buynow-121.png"/>--}}
                                    {{--</form>--}}
                                </div>
                            </div>
                            <h3><a href="/san-pham/{{$p->slug}}">{{$p->name}}</a></h3>
                            <div class="pi-price">{{number_format($p->listed_price, 0, '.', ',')}} VND</div>

                            {{--<form method="post" action="https://www.nganluong.vn/advance_payment.php">--}}
                                {{--<input type=hidden name=receiver value="luongnv93@gmail.com" />--}}
                                {{--<input type=hidden name=product value="{{$p->id}}" />--}}
                                {{--<input type=hidden name=price value="{{$p->listed_price}}" />--}}
                                {{--<input type=hidden name=return_url value="http://complete.com/thank.php" />--}}
                                {{--<input type=hidden name=comments value="" />--}}
                                {{--<input type=image src="https://www.nganluong.vn/data/images/merchant/button/btn-buynow-121.png" />--}}
                            {{--</form>--}}

                            <form method="POST" action="/add-to-cart-category">
                                <input type="hidden" name="product_id" value="{{$p->id}}">
                                <input type="hidden" name="quantity" value="1" class="form-control">
                                <button type="submit" class="btn btn-default add2cart">
                                    <i class="fa fa-shopping-cart"></i> Thêm
                                </button>
                            </form>
                            {{--<a href="#" class="btn btn-default add2cart">Add to cart</a>--}}
                            <div class="sticker sticker-new"></div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">

            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-4">
                <ul class="list-group margin-bottom-25 sidebar-menu">

                    @foreach($categories as $c)
                    <li class="list-group-item clearfix"><a href="danh-muc/{{$c->slug}}"><i class="fa fa-angle-right"></i> {{$c->name}}</a></li>
                    @endforeach

                </ul>
            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-8">
                <h2>Sản phẩm bán chạy</h2>
                <div class="owl-carousel owl-carousel3">

                    @foreach($productBestsellers as $p)
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/uploads/images/ecommerce/{{$p->feature_image}}" class="img-responsive" alt="{{$p->name}}">
                                    <div>
                                        <a href="/uploads/images/ecommerce/{{$p->feature_image}}" class="btn btn-default fancybox-button">Zoom</a>
                                        {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
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
                                {{--<div class="sticker sticker-new"></div>--}}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">

            <!-- BEGIN TWO PRODUCTS -->
            <div class="col-md-6 two-items-bottom-items">
                <h2>Sản phẩm giảm giá</h2>
                <div class="owl-carousel owl-carousel2">

                    @foreach($productBestsellers2 as $p)
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/uploads/images/ecommerce/{{$p->feature_image}}" class="img-responsive" alt="{{$p->name}}">
                                    <div>
                                        <a href="/uploads/images/ecommerce/{{$p->feature_image}}" class="btn btn-default fancybox-button">Zoom</a>
                                        {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
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
                                <div class="sticker sticker-sale"></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- END TWO PRODUCTS -->

            <!-- BEGIN PROMO -->
            <div class="col-md-6 shop-index-carousel">
                <div class="content-slider">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="../../assets/frontend/pages/img/index-sliders/slide1.jpg" class="img-responsive" alt="Berry Lace Dress">
                            </div>
                            {{--<div class="item">--}}
                                {{--<img src="../../assets/frontend/pages/img/index-sliders/slide2.jpg" class="img-responsive" alt="Berry Lace Dress">--}}
                            {{--</div>--}}
                            <div class="item">
                                <img src="../../assets/frontend/pages/img/index-sliders/slide3.jpg" class="img-responsive" alt="Berry Lace Dress">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROMO -->
        </div>
        <!-- END TWO PRODUCTS & PROMO -->
    </div>
</div>

<!-- BEGIN fast view of a product -->
<div id="product-pop-up" style="display: none; width: 700px;">
    <div class="product-page product-pop-up">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-3">
                <div class="product-main-image">
                    <img src="../../assets/frontend/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
                </div>
                <div class="product-other-images">
                    <a href="#" class="active"><img alt="Berry Lace Dress" src="../../assets/frontend/pages/img/products/model3.jpg"></a>
                    <a href="#"><img alt="Berry Lace Dress" src="../../assets/frontend/pages/img/products/model4.jpg"></a>
                    <a href="#"><img alt="Berry Lace Dress" src="../../assets/frontend/pages/img/products/model5.jpg"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-9">
                <h2>Cool green dress with red bell</h2>
                <div class="price-availability-block clearfix">
                    <div class="price">
                        <strong><span>$</span>47.00</strong>
                        <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                        Availability: <strong>In Stock</strong>
                    </div>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat
                        Nostrud duis molestie at dolore.</p>
                </div>
                <div class="product-page-options">
                    <div class="pull-left">
                        <label class="control-label">Size:</label>
                        <select class="form-control input-sm">
                            <option>L</option>
                            <option>M</option>
                            <option>XL</option>
                        </select>
                    </div>
                    <div class="pull-left">
                        <label class="control-label">Color:</label>
                        <select class="form-control input-sm">
                            <option>Red</option>
                            <option>Blue</option>
                            <option>Black</option>
                        </select>
                    </div>
                </div>
                <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                </div>
            </div>

            <div class="sticker sticker-sale"></div>
        </div>
    </div>
</div>
<!-- END fast view of a product -->

@stop