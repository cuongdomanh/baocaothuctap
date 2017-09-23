@extends('client.layouts.index')


@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                                        <li class="home"><a href="{{'/'}}" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span>
                                                                <li class=""><a href="{{'course'}}" title="Go to Home Page"><strong>Khóa học</strong></a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End breadcrumbs -->
    <!-- Two columns content -->
    <div class="main-container col2-left-layout">
        <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated animated"
                         style="visibility: visible;">
                    <div class="category-description std">
                        <div class="category-image"><img src="{{asset('client_img/banner_video.jpg')}}" alt="cat imges "
                                                         title="Sofas ">
                        </div>
                    </div>
                    <div class="category-title">
                        <h1>Khóa học </h1>
                    </div>
                    <div class="category-products">
                        @foreach($course as $item)
                            <div class="col-sm-3">
                                <div class="item">
                                    <div class="col-item">
                                        <div class="new-label new-top-right">New
                                        </div>
                                        @if($item->discount>0)
                                            <div class="sale-label sale-top-right">
                                                -{{$item->discount}}%
                                            </div>
                                        @endif
                                        @if($item->status==0)
                                            <div class="new-label new-top-right">free
                                            </div>
                                        @endif
                                        <center>
                                            <div class="product-image-area">
                                                <a class="product-image" title="{{$item->title}}"
                                                   href="{{url('course/'.$item->id.'/'.$item->slug)}}">
                                                    <img src="{{url('')}}/{{$item->thumbnail}}"
                                                         class="img-responsive"
                                                         alt="product-image"/>
                                                </a>
                                                {{--<div class="hover_fly"><a class="exclusive ajax_add_to_cart_button"--}}
                                                {{--href="{{ url('coursecart/'.$item->id) }}"--}}
                                                {{--title="Đặt hàng">--}}
                                                {{--<div><i class="icon-shopping-cart"></i><span>Đặt hàng</span>--}}
                                                {{--</div>--}}
                                                {{--</a> </div>--}}
                                            </div>
                                            <div class="info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a title=" {{$item->title}}"
                                                                               href="{{url('course/'.$item->id.'/'.$item->slug)}}"> {{$item->title}}</a>
                                                    </div>
                                                    <!--item-title-->
                                                    <div class="item-content">
                                                        {{--<div class="ratings">--}}
                                                        {{--<div class="rating-box">--}}
                                                        {{--<div class="rating"></div>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}

                                                        {{--<p class="special-price"><span--}}

                                                        {{--class="price"> {{number_format($item->cost)}} vnđ</span>--}}
                                                        {{--</p>--}}
                                                        <div class="price-box">


                                                            {{--class="price"> {{number_format($item->cost)}} vnd</span>--}}
                                                            {{--</p>--}}
                                                            @if($item->status==0)
                                                                <p class="old-price"><span
                                                                            class="price-sep">-</span>
                                                                    <span class="price">{{number_format($item->cost)}}
                                                                        vnđ </span></p>
                                                            @else
                                                                @if($item->discount>0)
                                                                    <p class="special-price">
                                                                    <span class="price">
                                                                        {{number_format($item->cost *(1-$item->discount/100))}}
                                                                    </span>
                                                                    </p>
                                                                    <p class="old-price"><span
                                                                                class="price-sep">-</span>
                                                                        <span class="price">{{number_format($item->cost)}}
                                                                            vnđ </span></p>
                                                                @else
                                                                    <p class="special-price">
                                                                    <span class="price">
                                                                        {{number_format($item->cost)}} vnđ
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
                                                    <a href=" {{url('course/'.$item->id.'/'.$item->slug)}}">
                                                        <div class=" actions">
                                                            <button type="button" title="Đặt hàng"
                                                                    class="button btn-cart">
                                                                <span>Học Thử Miễn phí</span>
                                                            </button>
                                                        </div>
                                                    </a>
                                                @else
                                                    <a href="{{ url('coursecart/'.$item->id) }}">
                                                        <div class="actions">
                                                            <button type="button" title="Đặt hàng"
                                                                    class="button btn-cart">
                                                                <span>Thêm vào giỏ hàng</span>
                                                            </button>
                                                        </div>
                                                    </a>
                                                @endif
                                                <div class="clearfix"></div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                        @endforeach


                    </div>
                    {{--@include('partials.admin.pagination')--}}
                    <div style="clear: both">
                        <div class="pani">
                            <ul class="pagination pull-right">
                                <li>
                                    {!! $course->links() !!}
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
                    @include('client.partials.category')
                    <div class="block block-layered-nav">
                        <div class="block-title">Mua ngay</div>
                        {{--<div class="block-content">--}}
                        {{--<p class="block-subtitle">Tùy chọn</p>--}}
                        {{--<dl id="narrow-by-list">--}}
                        {{--<dt class="odd">Đơn giá</dt>--}}
                        {{--<dd class="odd">--}}
                        {{--<ol>--}}
                        {{--<li><a href="#"><span class="price">$0.00</span> - <span--}}
                        {{--class="price">$99.99</span></a> (6)--}}
                        {{--</li>--}}
                        {{--<li><a href="#"><span class="price">$100.00</span> and above</a> (6)</li>--}}
                        {{--</ol>--}}
                        {{--</dd>--}}

                        {{--</dl>--}}
                        {{--</div>--}}
                    </div>

                </aside>
            </div>
        </div>
    </div>
@endsection




