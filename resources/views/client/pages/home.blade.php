@extends('client.layouts.index')
@section('content')
    @include('client.partials.slide')
    <div class="container">
        <div class="header-service wow bounceInUp animated">
            <div class="col-lg-4 col-sm-6 col-xs-3">
                <div class="content">
                    <div class="icon-truck">&nbsp;</div>
                    <span class="hidden-xs"><strong>Miễn phí giao hàng</strong> trên 3 sản phẩm</span></div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-3">
                <div class="content">
                    <div class="icon-support">&nbsp;</div>
                    <span class="hidden-xs"><strong>Tư vấn dịch vụ</strong> Tận hình</span></div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-3">
                <div class="content">
                    <div class="icon-money">&nbsp;</div>
                    <span class="hidden-xs"><strong>Thanh toán</strong> trực tiếp</span></div>
            </div>

        </div>
    </div>

    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products">
            <div class="new_title center">
                <h2>Sách bán chạy nhất</h2>
            </div>
            <div id="featured-slider" class="product-flexslider hidden-buttons">

                <div class="slider-items slider-width-col4">
                    <!-- Item -->
                    @foreach($bestBook as $item)
                        <div class="item">
                            <div class="col-item">
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
                                    </div>
                                </center>
                                <div class="info">
                                    <div class="info-inner">
                                        <div class="item-title"><a title=" {{$item->title}}"
                                                                   href="{{url('book/'.$item->id.'/'.$item->slug)}}"> {{$item->title}}</a>
                                        </div>
                                        <!--item-title-->
                                        <div class="item-content">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating"></div>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                @if($item->discount>0)
                                                    <p class="special-price"><span
                                                                class="price"> {{number_format($item->price * (1- $item->discount/100))}} </span>
                                                    </p>
                                                    <p class="old-price"><span class="price-sep">-</span> <span
                                                                class="price">{{number_format($item->price)}}
                                                            vnđ </span></p>
                                                @endif
                                            </div>


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

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products">
            <div class="new_title center">
                <h2>Sách mới</h2>
            </div>
            <div id="featured-slider" class="product-flexslider hidden-buttons">

                <div class="slider-items slider-width-col4">
                    <!-- Item -->
                    @foreach($newBook as $item)
                        <div class="item">
                            <div class="col-item">
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
                                    </div>
                                </center>
                                <div class="info">
                                    <div class="info-inner">
                                        <div class="item-title"><a title=" {{$item->title}}"
                                                                   href="{{url('book/'.$item->id.'/'.$item->slug)}}"> {{$item->title}}</a>
                                        </div>
                                        <!--item-title-->
                                        <div class="item-content">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating"></div>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                @if($item->discount>0)
                                                    <p class="special-price"><span
                                                                class="price"> {{number_format($item->price * (1- $item->discount/100))}} </span>
                                                    </p>
                                                    <p class="old-price"><span class="price-sep">-</span> <span
                                                                class="price">{{number_format($item->price)}}
                                                            vnđ </span></p>
                                                @endif
                                            </div>


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

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="promo-banner-section container wow bounceInUp animated">
        <div class="row">
            @if(isset($banner1))
            <div class="col-lg-12"><img alt="promo-banner3" src="{{url('uploads/slides/')}}/{{$banner1->image}}"
                                        style="width:100%;height:188px "></div>
       @endif
        </div>
    </div>
    <!-- End promo banner section -->
    <!-- middle slider -->
    <section class="middle-slider container wow bounceInUp animated">
        <div class="row">
            <div class="col-md-6">
                <div class="bag-product-slider small-pr-slider cat-section">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2>Sách nổi bật</h2>
                        </div>
                        <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3">
                            @foreach($topBook as $item)
                                <!-- Item -->
                                    <div class="item">
                                        <div class="col-item">
                                            <div class="new-label new-top-right">mới</div>

                                            @if($item->discount>0)
                                                <div class="sale-label sale-top-right">-{{$item->discount}}%</div>
                                            @endif
                                            @if($item->quantity == 0)
                                                <div class="sale-label sale-top-right">hết</div>
                                            @endif
                                            <div class="product-image-area">
                                                <a class="product-image" title="{{$item->title}}"
                                                   href="{{url('book/'.$item->id.'/'.$item->slug)}}">
                                                    <img
                                                            src="{{url('uploads/books/')}}/{{$item->thumbnail}}"
                                                            class="img-responsive"
                                                            alt="a"/> </a>
                                            </div>
                                            <div class="info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a title=" {{$item->title}}"
                                                                               href="{{url('book/'.$item->id.'/'.$item->slug)}}"> {{$item->title}} </a>
                                                    </div>
                                                    <!--item-title-->
                                                    <div class="item-content">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating"></div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            @if($item->discount>0)

                                                                {{--<p class="special-price"><span--}}
                                                                {{--class="price"> {{number_format($item->cost)}} vnd</span>--}}
                                                                {{--</p>--}}

                                                                <p class="special-price"><span
                                                                            class="price"> {{number_format($item->price * (1-$item->discount/100))}} </span>
                                                                </p>
                                                                <p class="old-price"><span
                                                                            class="price-sep">-</span> <span
                                                                            class="price">{{number_format($item->price)}}
                                                                        vnđ </span></p>
                                                            @endif
                                                        </div>


                                                    </div>
                                                    <!--item-content-->
                                                </div>
                                                <!--info-inner-->
                                                <a href="{{ url('addcart/'.$item->id) }}">
                                                    <div class="actions">
                                                        <button type="button" title="Đặt hàng"
                                                                class="button btn-cart">
                                                            <span>Thêm vào giỏ hàng</span>
                                                        </button>
                                                    </div>
                                                </a>
                                                <!--actions-->

                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- End Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shoes-product-slider small-pr-slider cat-section">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2>Sách giảm giá</h2>
                        </div>
                        <div id="shoes-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col3">
                            @foreach($discountBook as $item)
                                <!-- Item -->
                                    <div class="item">
                                        <div class="col-item">
                                            <div class="new-label new-top-right">mới</div>

                                            @if($item->discount>0)
                                                <div class="sale-label sale-top-right">-{{$item->discount}}%</div>
                                            @endif
                                            @if($item->quantity == 0)
                                                <div class="sale-label sale-top-right">hết</div>
                                            @endif
                                            <div class="product-image-area"><a class="product-image"
                                                                               title="{{$item->title}}"
                                                                               href="{{url('book/'.$item->id.'/'.$item->slug)}}">
                                                    <img
                                                            src="{{url('uploads/books/')}}/{{$item->thumbnail}}"
                                                            class="img-responsive"
                                                            alt="a"/> </a>
                                            </div>
                                            <div class="info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a title=" {{$item->title}}"
                                                                               href="{{url('book/'.$item->id.'/'.$item->slug)}}">{{$item->title}}</a>
                                                    </div>
                                                    <!--item-title-->
                                                    <div class="item-content">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div class="rating"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <p class="special-price"><span
                                                                        class="price"> {{number_format($item->price *(1-$item->discount/100))}} </span>
                                                            </p>
                                                            <p class="old-price"><span class="price-sep">-</span> <span
                                                                        class="price">{{number_format($item->price)}}
                                                                    vnđ </span></p>
                                                        </div>


                                                    </div>
                                                    <!--item-content-->
                                                </div>

                                                <!--info-inner-->
                                                <a href="{{ url('addcart/'.$item->id) }}">
                                                    <div class="actions">
                                                        <button type="button" title="Đặt hàng"
                                                                class="button btn-cart">
                                                            <span>Thêm vào giỏ hàng</span>
                                                        </button>
                                                    </div>
                                                </a>
                                                <!--actions-->

                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products">
            <div class="new_title center">
                <h2>Khóa học mới </h2>
            </div>
            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                    <!-- Item -->
                    @foreach($maxSale as $item)
                        <div class="item">
                            <div class="col-item">
                                <div class="new-label new-top-right">mới</div>

                                @if($item->discount>0)
                                    <div class="sale-label sale-top-right">-{{$item->discount}}%</div>
                                @endif
                                @if($item->status==0)
                                    <div class="new-label new-top-right">free</div>
                                @endif
                                <center>
                                    <div class="product-image-area"><a class="product-image" title="{{$item->title}}"
                                                                       href="{{url('course/'.$item->id.'/'.$item->slug)}}">
                                            <img
                                                    src="{{url('')}}/{{$item->thumbnail}}"
                                                    class="img-responsive" alt="a"/> </a>

                                    </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title=" {{$item->title}}"
                                                                       href="{{url('course/'.$item->id.'/'.$item->slug)}}">
                                                    {{$item->title}} </a></div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    @if($item->status==0)
                                                        <p class="old-price"><span class="price-sep"></span> <span
                                                                    class="price"> {{number_format($item->cost)}}
                                                                VNĐ </span></p>
                                                    @else
                                                        @if($item->discount>0)
                                                            <p class="special-price">
                                                            <span class="price" id="product-price-902">
                                                                {{number_format($item->cost*(1-$item->discount/100))}}
                                                            </span>
                                                            </p>
                                                            <p class="old-price"><span class="price-sep"></span> <span
                                                                        class="price"> {{number_format($item->cost)}}
                                                                    VNĐ </span></p>
                                                        @else
                                                            <p class="special-price">
                                                            <span class="price" id="product-price-902">
                                                                {{number_format($item->cost)}} vnd
                                                            </span>
                                                            </p>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                            <!--item-content-->
                                        </div>
                                        <!--info-inner-->
                                        @if($item->status==0)
                                            <div class="actions">
                                                <button type="button" title="Đặt hàng" class="button btn-cart">
                                                    <span>Học Miễn phí</span>
                                                </button>
                                            </div>
                                        @else
                                            <a href="{{ url('coursecart/'.$item->id) }}">
                                                <div class="actions">
                                                    <button type="button" title="Đặt hàng" class="button btn-cart">
                                                        <span>Thêm vào giỏ hàng</span></button>
                                                </div>
                                            </a>
                                    @endif
                                    <!--actions-->

                                        <div class="clearfix"></div>
                                    </div>
                                </center>

                            </div>
                        </div>
                @endforeach
                <!-- End Item -->
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Slider -->
    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products">
            <div class="new_title center">
                <h2>Khóa học nổi bật</h2>
            </div>
            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                    <!-- Item -->
                    @foreach($latest as $item)
                        <div class="item">
                            <div class="col-item">
                                <div class="new-label new-top-right">mới</div>

                                @if($item->discount>0)
                                    <div class="sale-label sale-top-right">-{{$item->discount}}%</div>
                                @endif
                                @if($item->status==0)
                                    <div class="new-label new-top-right">free</div>
                                @endif
                                <center>
                                    <div class="product-image-area"><a class="product-image" title="{{$item->title}}"
                                                                       href="{{url('course/'.$item->id.'/'.$item->slug)}}">
                                            <img
                                                    src="{{url('')}}/{{$item->thumbnail}}"
                                                    class="img-responsive" alt="a"/> </a>

                                    </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title=" {{$item->title}}"
                                                                       href="{{url('course/'.$item->id.'/'.$item->slug)}}">
                                                    {{$item->title}} </a></div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    @if($item->status==0)
                                                        <p class="old-price"><span class="price-sep"></span> <span
                                                                    class="price"> {{number_format($item->cost)}}
                                                                VNĐ </span></p>
                                                    @else
                                                        @if($item->discount>0)
                                                            <p class="special-price">
                                                            <span class="price" id="product-price-902">
                                                                {{number_format($item->cost*(1-$item->discount/100))}}
                                                            </span>
                                                            </p>
                                                            <p class="old-price"><span class="price-sep"></span> <span
                                                                        class="price"> {{number_format($item->cost)}}
                                                                    VNĐ </span></p>
                                                        @else
                                                            <p class="special-price">
                                                            <span class="price" id="product-price-902">
                                                                {{number_format($item->cost)}} vnd
                                                            </span>
                                                            </p>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                            <!--item-content-->
                                        </div>
                                        <!--info-inner-->
                                        @if($item->status==0)
                                            <div class="actions">
                                                <button type="button" title="Đặt hàng" class="button btn-cart">
                                                    <span>Học Thử Miễn Phí</span></button>
                                            </div>
                                        @else
                                            <a href="{{ url('coursecart/'.$item->id) }}">
                                                <div class="actions">
                                                    <button type="button" title="Đặt hàng" class="button btn-cart">
                                                        <span>Thêm vào giỏ hàng</span></button>
                                                </div>
                                            </a>
                                    @endif
                                    <!--actions-->

                                        <div class="clearfix"></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                @endforeach
                <!-- End Item -->
                </div>
            </div>
        </div>
    </section>

    <div class="promo-banner-section container wow bounceInUp animated">
        <div class="row">
            @if(isset($banner2))
            <div class="col-lg-12"><img alt="promo-banner3" src="{{url('uploads/slides/')}}/{{$banner2->image}}"
                                        style="width:100%; height:188px"></div>
                @endif
        </div>
    </div>

    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products">
            <div class="new_title center">
                <h2>Tài liệu mới</h2>
            </div>
            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                    <!-- Item -->
                    @foreach($latestBatch as $item)
                        <div class="item">
                            <div class="col-item">
                                <div class="new-label new-top-right">mới</div>
                                @if($item->status==1)

                                    <div class="new-label new-top-right">Free</div>
                                @else
                                    @if($item->discount>0)
                                        <div class="sale-label sale-top-right">-{{$item->discount}}%</div>
                                    @endif
                                @endif
                                <center>
                                    <div class="product-image-area"><a class="product-image" title="{{$item->title}}"
                                                                       href="{{url('batch/'.$item->id.'/'.$item->slug)}}">
                                            <img
                                                    src="{{url('')}}/{{$item->thumbnail}}"
                                                    class="img-responsive" alt="a"/> </a>
                                    </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title=" {{$item->title}}"
                                                                       href="{{url('batch/'.$item->id.'/'.$item->slug)}}">
                                                    {{$item->title}} </a></div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    @if($item->status==1)
                                                        <p
                                                                class="old-price"><span class="price-sep"></span>
                                                            <span class="price"> {{number_format($item->price)}}
                                                                VNĐ </span>
                                                        </p>
                                                    @else
                                                        @if($item->discount>0)
                                                            <p class="special-price"><span class="price"
                                                                                           + id="product-price-902"> {{number_format($item->price*(1-$item->discount/100))}}
                                                                    VNĐ</span>
                                                            </p>
                                                            <p class="old-price"><span class="price-sep"></span>
                                                                <span class="price"> {{number_format($item->price)}}
                                                                    VNĐ </span>
                                                            </p>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                            <!--item-content-->
                                        </div>
                                        <!--info-inner-->
                                        @if($item->status==1)
                                            <a
                                                    href="{{url('batch/'.$item->id.'/'.$item->slug)}}">

                                                <div class="actions">

                                                    <button type="button" title="Đặt hàng"
                                                            class="button btn-cart">
                                                        <span>Tệp đề miễn phí</span>
                                                    </button>
                                                </div>
                                            </a>
                                        @else
                                            <a
                                                    href="{{ url('addcart/'.$item->id) }}">
                                                <div class="actions">
                                                    <button type="button" title="Đặt hàng"
                                                            class="button btn-cart">
                                                        <span>Thêm vào giỏ hàng</span>

                                                    </button>
                                                </div>
                                            </a>
                                    @endif
                                    <!--actions-->
                                        <div class="clearfix"></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                @endforeach
                <!-- End Item -->
                </div>
            </div>
        </div>
    </section>
@endsection








