@section('page-title')
    {{$product->name}}
@stop

@extends('layouts.client')

@section('content')

<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><i class="fa fa-home"></i> <a href="{{url('/')}}"> Trang chủ</a></li>
            {{--<li><a href="">Store</a></li>--}}
            <li class="active">{{$product->name}}</li>
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
                <div class="sidebar-products clearfix">
                    <h2>Sản phẩm bán chạy</h2>

                    @foreach($productBestsellers as $p)
                        <div class="item">
                            <a href="/product/{{$p->slug}}"><img src="/uploads/images/ecommerce/{{$p->feature_image}}" alt="{{$p->name}}"></a>
                            <h3><a href="/product/{{$p->slug}}">{{$p->name}}</a></h3>
                            <div class="price">{{number_format($p->listed_price, 0, '.', ',')}} VND</div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="product-page">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="product-main-image">
                                <img src="/uploads/images/ecommerce/{{$product->feature_image}}"
                                     alt="{{$product->name}}" class="img-responsive"
                                     data-BigImgsrc="/uploads/images/ecommerce/{{$product->feature_image}}">
                            </div>
                            <div class="product-other-images">

                                @foreach($productGallery as $pg)
                                    <a href="/uploads/images/ecommerce/{{$pg->feature_image}}" class="fancybox-button" rel="photos-lib">
                                        <img alt="Berry Lace Dress" src="/uploads/images/ecommerce/{{$pg->feature_image}}">
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <h1>{{$product->name}}</h1>

                            <div class="price-availability-block clearfix">
                                <div class="price">
                                    <strong> {{number_format($product->listed_price, 0, '.', ',')}} VND</strong>
                                    {{--<em><span>{{number_format($p->listed_price, 0, '.', ',')}} VND</span></em>--}}
                                </div>
                                <div class="availability">
                                    Trạng thái: <strong>Còn hàng</strong>
                                </div>
                            </div>
                            <div class="description">
                               {!! $product->description !!}
                            </div>

                            <div class="product-page-cart">
                                <form method="POST" action="/add-to-cart-category">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <div class="product-quantity">
                                        <input id="product-quantity" type="text" name="quantity" value="1" readonly class="form-control input-sm">
                                    </div>
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                </form>
                            </div>

                            <ul class="social-icons">
                                <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                                <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                                <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a>
                                </li>
                                <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                                <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
                            </ul>
                        </div>

                        <div class="product-page-content">
                            <ul id="myTab" class="nav nav-tabs">
                                <li><a href="#Description" data-toggle="tab">Feedback</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade" id="Description">
                                    <p>{!! $product->content !!}</p>
                                </div>
                            </div>
                        </div>

                        {{--<div class="sticker sticker-sale"></div>--}}
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
            <div class="col-md-12 col-sm-12">
                <h2>Sản phẩm nổi bật</h2>

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
        <!-- END SIMILAR PRODUCTS -->
    </div>
</div>

@stop