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

                    <!-- BEGIN PAGINATOR -->
                    <div class="row">
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

@stop