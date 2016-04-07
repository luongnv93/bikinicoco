@section('page-title')
    {{$category->name}}
@stop

@extends('layouts.client')

@section('content')


    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i> <a href="{{url('/')}}"> Trang chủ</a></li>
                <li class="active">{{$category->name}}</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                <div class="sidebar col-md-3 col-sm-5">
                    <ul class="list-group margin-bottom-25 sidebar-menu">

                        @foreach($categories as $c)
                        <li class="list-group-item clearfix">
                            <a href="/danh-muc/{{$c->slug}}">
                                <i class="fa fa-angle-right"></i> {{$c->name}}
                            </a>
                        </li>
                        @endforeach

                    </ul>

                    {{--TODO | sidebar-filter--}}
                    {{--<div class="sidebar-filter margin-bottom-25">--}}
                        {{--<h2>Filter</h2>--}}
                        {{--<h3>Availability</h3>--}}
                        {{--<div class="checkbox-list">--}}
                            {{--<label><input type="checkbox"> Not Available (3)</label>--}}
                            {{--<label><input type="checkbox"> In Stock (26)</label>--}}
                        {{--</div>--}}

                        {{--<h3>Price</h3>--}}
                        {{--<p>--}}
                            {{--<label for="amount">Range:</label>--}}
                            {{--<input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">--}}
                        {{--</p>--}}
                        {{--<div id="slider-range"></div>--}}
                    {{--</div>--}}

                    {{--TODO | sidebar-products--}}
                    <div class="sidebar-products clearfix">
                        <h2>Sản phẩm bán chạy</h2>

                        @foreach($productBestsellers as $p)
                        <div class="item">
                            <a href="/san-pham/{{$p->slug}}"><img src="/uploads/images/ecommerce/{{$p->feature_image}}" alt="{{$p->name}}"></a>
                            <h3><a href="/san-pham/{{$p->slug}}">{{$p->name}}</a></h3>
                            <div class="price">{{number_format($p->listed_price, 0, '.', ',')}} VND</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-7">

                    {{-- TODO filter--}}
                    {{--<div class="row list-view-sorting clearfix">--}}
                        {{--<div class="col-md-2 col-sm-2 list-view">--}}
                            {{--<a href="javascript:;"><i class="fa fa-th-large"></i></a>--}}
                            {{--<a href="javascript:;"><i class="fa fa-th-list"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-10 col-sm-10">--}}
                            {{--<div class="pull-right">--}}
                                {{--<label class="control-label">Show:</label>--}}
                                {{--<select class="form-control input-sm">--}}
                                    {{--<option value="#?limit=24" selected="selected">24</option>--}}
                                    {{--<option value="#?limit=25">25</option>--}}
                                    {{--<option value="#?limit=50">50</option>--}}
                                    {{--<option value="#?limit=75">75</option>--}}
                                    {{--<option value="#?limit=100">100</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="pull-right">--}}
                                {{--<label class="control-label">Sort&nbsp;By:</label>--}}
                                {{--<select class="form-control input-sm">--}}
                                    {{--<option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default--}}
                                    {{--</option>--}}
                                    {{--<option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>--}}
                                    {{--<option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>--}}
                                    {{--<option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>--}}
                                    {{--<option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>--}}
                                    {{--<option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>--}}
                                    {{--<option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>--}}
                                    {{--<option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>--}}
                                    {{--<option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <!-- BEGIN PRODUCT LIST -->
                    <div class="product-list">
                        @foreach($products as $p)
                        <!-- PRODUCT ITEM START -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/uploads/images/ecommerce/{{$p->feature_image}}"
                                         class="img-responsive" alt="{{$p->name}}">
                                    <div>
                                        <a href="/uploads/images/ecommerce/{{$p->feature_image}}"
                                           class="btn btn-default fancybox-button">Zoom</a>
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
                        <!-- PRODUCT ITEM END -->
                        @endforeach
                    </div>
                    {{--<div class="row product-list">--}}
                        {{--<!-- PRODUCT ITEM START -->--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="product-item">--}}
                                {{--<div class="pi-img-wrapper">--}}
                                    {{--<img src="../../assets/frontend/pages/img/products/model4.jpg"--}}
                                         {{--class="img-responsive" alt="Berry Lace Dress">--}}
                                    {{--<div>--}}
                                        {{--<a href="../../assets/frontend/pages/img/products/model4.jpg"--}}
                                           {{--class="btn btn-default fancybox-button">Zoom</a>--}}
                                        {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<h3><a href="shop-item.html">Berry Lace Dress Berry Lace Dress</a></h3>--}}
                                {{--<div class="pi-price">$29.00</div>--}}
                                {{--<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- PRODUCT ITEM END -->--}}
                        {{--<!-- PRODUCT ITEM START -->--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="product-item">--}}
                                {{--<div class="pi-img-wrapper">--}}
                                    {{--<img src="../../assets/frontend/pages/img/products/model5.jpg"--}}
                                         {{--class="img-responsive" alt="Berry Lace Dress">--}}
                                    {{--<div>--}}
                                        {{--<a href="../../assets/frontend/pages/img/products/model5.jpg"--}}
                                           {{--class="btn btn-default fancybox-button">Zoom</a>--}}
                                        {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<h3><a href="shop-item.html">Berry Lace Dress</a></h3>--}}
                                {{--<div class="pi-price">$29.00</div>--}}
                                {{--<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>--}}
                                {{--<div class="sticker sticker-new"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- PRODUCT ITEM END -->--}}
                        {{--<!-- PRODUCT ITEM START -->--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="product-item">--}}
                                {{--<div class="pi-img-wrapper">--}}
                                    {{--<img src="../../assets/frontend/pages/img/products/model3.jpg"--}}
                                         {{--class="img-responsive" alt="Berry Lace Dress">--}}
                                    {{--<div>--}}
                                        {{--<a href="../../assets/frontend/pages/img/products/model3.jpg"--}}
                                           {{--class="btn btn-default fancybox-button">Zoom</a>--}}
                                        {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<h3><a href="shop-item.html">Berry Lace Dress</a></h3>--}}
                                {{--<div class="pi-price">$29.00</div>--}}
                                {{--<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- PRODUCT ITEM END -->--}}
                    {{--</div>--}}
                    {{--<div class="row product-list">--}}
                        {{--<!-- PRODUCT ITEM START -->--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="product-item">--}}
                                {{--<div class="pi-img-wrapper">--}}
                                    {{--<img src="../../assets/frontend/pages/img/products/model7.jpg"--}}
                                         {{--class="img-responsive" alt="Berry Lace Dress">--}}
                                    {{--<div>--}}
                                        {{--<a href="../../assets/frontend/pages/img/products/model7.jpg"--}}
                                           {{--class="btn btn-default fancybox-button">Zoom</a>--}}
                                        {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<h3><a href="shop-item.html">Berry Lace Dress</a></h3>--}}
                                {{--<div class="pi-price">$29.00</div>--}}
                                {{--<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- PRODUCT ITEM END -->--}}
                        {{--<!-- PRODUCT ITEM START -->--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="product-item">--}}
                                {{--<div class="pi-img-wrapper">--}}
                                    {{--<img src="../../assets/frontend/pages/img/products/model1.jpg"--}}
                                         {{--class="img-responsive" alt="Berry Lace Dress">--}}
                                    {{--<div>--}}
                                        {{--<a href="../../assets/frontend/pages/img/products/model1.jpg"--}}
                                           {{--class="btn btn-default fancybox-button">Zoom</a>--}}
                                        {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<h3><a href="shop-item.html">Berry Lace Dress</a></h3>--}}
                                {{--<div class="pi-price">$29.00</div>--}}
                                {{--<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- PRODUCT ITEM END -->--}}
                        {{--<!-- PRODUCT ITEM START -->--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                            {{--<div class="product-item">--}}
                                {{--<div class="pi-img-wrapper">--}}
                                    {{--<img src="../../assets/frontend/pages/img/products/model2.jpg"--}}
                                         {{--class="img-responsive" alt="Berry Lace Dress">--}}
                                    {{--<div>--}}
                                        {{--<a href="../../assets/frontend/pages/img/products/model2.jpg"--}}
                                           {{--class="btn btn-default fancybox-button">Zoom</a>--}}
                                        {{--<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<h3><a href="shop-item.html">Berry Lace Dress</a></h3>--}}
                                {{--<div class="pi-price">$29.00</div>--}}
                                {{--<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>--}}
                                {{--<div class="sticker sticker-sale"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- PRODUCT ITEM END -->--}}
                    {{--</div>--}}
                    <!-- END PRODUCT LIST -->

                    <!-- BEGIN PAGINATOR -->
                    <div class="row">
                        {{--<div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>--}}
                        <div class="col-md-12 text-right">
                            {!! $products->render()!!}
                        </div>
                    </div>
                    <!-- END PAGINATOR -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>

    <!-- BEGIN fast view of a product -->
    {{--<div id="product-pop-up" style="display: none; width: 700px;">--}}
        {{--<div class="product-page product-pop-up">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-sm-6 col-xs-3">--}}
                    {{--<div class="product-main-image">--}}
                        {{--<img src="../../assets/frontend/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">--}}
                    {{--</div>--}}
                    {{--<div class="product-other-images">--}}
                        {{--<a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="../../assets/frontend/pages/img/products/model3.jpg"></a>--}}
                        {{--<a href="javascript:;"><img alt="Berry Lace Dress" src="../../assets/frontend/pages/img/products/model4.jpg"></a>--}}
                        {{--<a href="javascript:;"><img alt="Berry Lace Dress" src="../../assets/frontend/pages/img/products/model5.jpg"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-sm-6 col-xs-9">--}}
                    {{--<h1>Cool green dress with red bell</h1>--}}
                    {{--<div class="price-availability-block clearfix">--}}
                        {{--<div class="price">--}}
                            {{--<strong><span>$</span>47.00</strong>--}}
                            {{--<em>$<span>62.00</span></em>--}}
                        {{--</div>--}}
                        {{--<div class="availability">--}}
                            {{--Availability: <strong>In Stock</strong>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="description">--}}
                        {{--<p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat--}}
                            {{--Nostrud duis molestie at dolore.</p>--}}
                    {{--</div>--}}
                    {{--<div class="product-page-options">--}}
                        {{--<div class="pull-left">--}}
                            {{--<label class="control-label">Size:</label>--}}
                            {{--<select class="form-control input-sm">--}}
                                {{--<option>L</option>--}}
                                {{--<option>M</option>--}}
                                {{--<option>XL</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="pull-left">--}}
                            {{--<label class="control-label">Color:</label>--}}
                            {{--<select class="form-control input-sm">--}}
                                {{--<option>Red</option>--}}
                                {{--<option>Blue</option>--}}
                                {{--<option>Black</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="product-page-cart">--}}
                        {{--<div class="product-quantity">--}}
                            {{--<input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">--}}
                        {{--</div>--}}
                        {{--<button class="btn btn-primary" type="submit">Add to cart</button>--}}
                        {{--<a href="shop-item.html" class="btn btn-default">More details</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="sticker sticker-sale"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- END fast view of a product -->

@stop