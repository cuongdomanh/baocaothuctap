@extends('client.layouts.index')

@section('content')
    <body>
    <div class="page">
        <div class="main-container col2-left-layout">
            <div class="main container">
                <div class="row">
                    <section class="col-main wow bounceInUp animated">
                        <br>
                        @if(isset($bookTag))
                            <div class="category-title">
                                <h1> Thể loại {{$bookTag->title}}</h1>
                            </div>
                            <div class="category-products">
                                <ul class="products-grid">
                                    <br>
                                    @foreach($bookTag->book as $item)
                                        <div class="col-sm-3">
                                            <div class="item">
                                                <div class="col-item">
                                                    <div class="new-label new-top-right">Mới</div>
                                                    @if($item->discount>0)
                                                        <div class="sale-label sale-top-right">-{{$item->discount}}%
                                                        </div>
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
                                                            <div class="item-title">
                                                                <a title=" {{$item->title}}"
                                                                   href="{{url('book/'.$item->id.'/'.$item->slug)}}"> {{$item->title}}</a>
                                                            </div>
                                                            <!--item-title-->
                                                            <div class="item-content">
                                                                @if($item->discount>0)
                                                                    <p class="special-price"><span class="price"
                                                                                                   id="product-price-902"> {{number_format($item->price*(1-$item->discount/100))}}
                                                                            VNĐ </span>
                                                                    </p>
                                                                    <p class="old-price"><span class="price-sep"></span>
                                                                        <span
                                                                                class="price"> {{number_format($item->price)}}
                                                                            VNĐ </span></p>
                                                                @endif
                                                            </div>
                                                            <!--item-content-->
                                                        </div>
                                                        @if($item->quantity == 0)
                                                            <div class="actions">
                                                                <button type="button" title="Đặt hàng"
                                                                        class="button btn-danger">
                                                                    <span>Hết hàng</span>
                                                                </button>
                                                            </div>
                                                        @else
                                                            <a href="{{ url('addcart/'.$item->id) }}">
                                                                <div class="actions">
                                                                    <button type="button" title="Đặt hàng"
                                                                            class="button btn-cart">
                                                                        <span>Thêm vào giỏ hàng</span>
                                                                    </button>
                                                                </div>
                                                            </a>
                                                    @endif
                                                    <!--info-inner-->

                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <!-- End Item -->
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(isset($courseTag))
                            <div class="category-title">
                                <h1> Thể loại {{$courseTag->title}}</h1>
                            </div>
                            <div class="category-products">
                                <ul class="products-grid">

                                    <br>
                                    @foreach($courseTag->course as $item)
                                        <div class="col-sm-3">
                                            <div class="item">
                                                <div class="col-item">
                                                    <div class="new-label new-top-right">Mới</div>
                                                    @if($item->status==0)
                                                        <div class="new-label new-top-right">Free</div>
                                                    @else
                                                        @if($item->discount>0)
                                                            <div class="sale-label sale-top-right">-{{$item->discount}}
                                                                %
                                                            </div>
                                                        @endif
                                                    @endif
                                                    <center>
                                                        <div class="product-image-area"><a class="{{$item->title}}"
                                                                                           title="{{$item->title}}"
                                                                                           href="{{url('course/'.$item->id.'/'.$item->slug)}}">
                                                                <img
                                                                        src="{{url('')}}/{{$item->thumbnail}}"
                                                                        class="img-responsive"
                                                                        alt="product-image"/> </a>
                                                        </div>
                                                    </center>
                                                    <div class="info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title=" {{$item->title}}"
                                                                   href="{{url('course/'.$item->id.'/'.$item->slug)}}"> {{$item->title}}</a>
                                                            </div>
                                                            <!--item-title-->
                                                            <div class="item-content">
                                                                @if($item->status==0)
                                                                    <p class="old-price"><span class="price-sep"></span>
                                                                        <span class="price"> {{number_format($item->cost)}}
                                                                            VNĐ </span></p>
                                                                @else
                                                                    @if($item->discount>0)
                                                                        <p class="special-price"><span class="price"
                                                                                                       id="product-price-902"> {{number_format($item->cost*(1-$item->discount/100))}}
                                                                                VNĐ</span>
                                                                        </p>
                                                                        <p class="old-price"><span
                                                                                    class="price-sep"></span>
                                                                            <span class="price"> {{number_format($item->cost)}}
                                                                                VNĐ </span></p>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                            <!--item-content-->
                                                        </div>
                                                        @if($item->status==0)
                                                            <a href="{{url('course/'.$item->id.'/'.$item->slug)}}">
                                                                <div class="actions">
                                                                    <button type="button" title="Đặt hàng"
                                                                            class="button btn-cart">
                                                                        <span>Khóa học miễn phí</span>
                                                                    </button>
                                                                </div>
                                                            </a>
                                                        @else
                                                            <a href="{{ url('addcart/'.$item->id) }}">
                                                                <div class="actions">
                                                                    <button type="button" title="Đặt hàng"
                                                                            class="button btn-cart">
                                                                        <span>Thêm vào giỏ hàng</span>
                                                                    </button>
                                                                </div>
                                                            </a>
                                                    @endif
                                                    <!--info-inner-->
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <!-- End Item -->
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection




