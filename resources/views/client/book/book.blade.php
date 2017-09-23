@extends('client.layouts.index')
@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                                        <li class="home"><a href="{{'/'}}" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                                       <li class=""><a href="{{'book'}}" title="Go to Home Page"><strong>Sách</strong></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end breadcrumbs -->
    <!-- Two columns content -->
    <div class="main-container col2-left-layout">
        <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated">
                    <div class="category-description std">
                        <div class="category-image"><img src="{{asset('client_img/banner_book.png')}}" alt="cat imges "
                                                         title="Sofas ">
                        </div>
                    </div>
                    <div class="category-title">
                        <h1> Sách</h1>
                    </div>
                    <div class="row">
                        @foreach($hotBook as $item)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6">
                                <div class="item" >
                                    <div class="col-item" >
                                        <div class="new-label new-top-right">Mới</div>
                                        @if($item->discount>0)
                                            <div class="sale-label sale-top-right">-{{$item->discount}}%</div>
                                        @endif
                                        @if($item->quantity == 0)
                                            <div class="sale-label sale-top-right">Hết</div>
                                        @endif
                                        <center>
                                            <div class="product-image-area"><a class="{{$item->title}}"
                                                                               title="{{$item->title}}"
                                                                               href="{{url('book/'.$item->id.'/'.$item->slug)}}">
                                                    <img
                                                            src="{{url('uploads/books/')}}/{{$item->thumbnail}}"
                                                            class="img-responsive"
                                                            alt="product-image"/> </a>
                                                {{--<div class="hover_fly"><a class="exclusive ajax_add_to_cart_button"--}}
                                                                          {{--href="{{ url('addcart/'.$item->id) }}"--}}
                                                                          {{--title="Đặt hàng">--}}

                                                        {{--<i class="icon-shopping-cart"></i><span>Đặt hàng</span>--}}

                                                    {{--</a> </div>--}}
                                            </div>
                                        </center>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a title=" {{$item->title}}"
                                                       href="{{url('book/'.$item->id.'/'.$item->slug)}}"> {{$item->title}}</a>
                                                </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    {{--<div class="ratings">--}}
                                                        {{--<div class="rating-box">--}}
                                                            {{--<div class="rating"></div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    @if($item->discount>0)
                                                        <p class="special-price"><span class="price" id="product-price-902"> {{number_format($item->price*(1-$item->discount/100))}}
                                                                                           VNĐ </span>
                                                        </p>
                                                        <p class="old-price"><span class="price-sep"></span>
                                                            <span
                                                                    class="price"> {{number_format($item->price)}}
                                                                VNĐ </span></p>

                                                        {{--<p class="special-price"><span--}}
                                                        {{--class="price"> {{number_format($item->cost)}} vnd</span>--}}
                                                        {{--</p>--}}
                                                    @endif
                                                        {{--<p class="special-price"><span--}}
                                                                    {{--class="price"> {{number_format($item->price)}} vnđ</span>--}}
                                                        {{--</p>--}}

                                                </div>

                                            <!--item-content-->
                                            </div>
                                            <a href="{{ url('addcart/'.$item->id) }}">
                                                <div class="actions">
                                                    <button type="button" title="Đặt hàng"
                                                            class="button btn-cart">
                                                        <span>Thêm vào giỏ hàng</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <!--info-inner-->
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!-- End Item -->
                            </div>
                        @endforeach
                    </div>
                </section>
                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
                    @include('client.partials.category')
                    <div class="block block-layered-nav">
                        <div class="block-title">Mua ngay</div>
                        <div class="block-content">
                            <p class="block-subtitle">Tùy chọn</p>
                            <dl id="narrow-by-list">
                                {!! Form::open(['method'=>'get', 'url'=>'book','files'=>true]) !!}
                                <div class="form-group">
                                    <label for="email">Giá từ</label>
                                    <input type="text" name="fromPrice"class="form-control" id="" placeholder="Nhập giá trị ">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">đến giá</label>
                                    <input type="text" name="toPrice" class="form-control" placeholder="Nhập giá trị " >
                                </div>
                                <button type="submit" class="btn btn-default">Gửi</button>
                                {!! Form::close() !!}
                            </dl>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>

@endsection



