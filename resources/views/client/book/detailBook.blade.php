@extends('client.layouts.index')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="home"><a href="{{'/'}}" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                    <li class=""><a href="{{'book'}}" title="Go to Home Page">Sách</a><span>&mdash;›</span></li>
                    <li class="category13"><strong> {{$book->title}} </strong></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end breadcrumbs -->
    <!-- main-container -->

    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="row">
                    <div class="product-view">
                        <div class="product-essential">
                            <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                            <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                                <ul class="moreview" id="moreview">
                                    <li class="moreview_thumb thumb_1 moreview_thumb_active">
                                        <img class="moreview_thumb_image"
                                             src="{{url('uploads/books/'.$book->thumbnail)}}" alt="thumbnail">
                                        <img class="moreview_source_image"
                                             src="{{url('uploads/books/'.$book->thumbnail)}}" alt="">
                                        <span class="roll-over">Di chuyển để xem</span>
                                        <img class="zoomImg" src="{{url('uploads/books/'.$book->thumbnail)}}"
                                             alt="thumbnail">
                                    </li>
                                    @foreach($book->image as $image)
                                        <li class="moreview_thumb thumb_1  ">
                                            <img class="moreview_thumb_image" src="{{url($image->url)}}"
                                                 alt="thumbnail">
                                            <img class="moreview_source_image" src="{{url($image->url)}}" alt="">
                                            <span class="roll-over">Di chuyển để xem</span>
                                            <img class="zoomImg" src="{{url($image->url)}}" alt="thumbnail">
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="moreview-control">
                                    <a href="javascript:void(0)" class="moreview-prev"></a>
                                    <a href="javascript:void(0)" class="moreview-next"></a>
                                </div>
                            </div>
                            <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                                <div class="product-name">
                                    <h1>{{$book->title}}</h1>
                                </div>
                                <p class="availability in-stock">Tình trạng :
                                    @if($book->quantity>0)
                                        <span>Còn {{$book->quantity}} cuốn</span>
                                    @else
                                        <span>Hết hàng</span>
                                    @endif
                                </p>
                                <p>Thể loại :

                                    @foreach($book->tag as  $item )
                                        <b><i><a href="{{url('book/tag/'.$item->id)}}">{{$item->title}}</a> &nbsp;
                                                &nbsp;</i></b>
                                    @endforeach
                                </p>
                                <p>Tác giả :
                                    @foreach($book->author as $item)
                                        @if($item->status==1)
                                            <a href="{{url('book/author/'.$item->id)}}"> <i>{{$item->name}} </i></a>
                                            &nbsp; &nbsp;
                                        @endif
                                    @endforeach
                                </p>
                                <p>Số trang :
                                    <i>{{$book->pages}} trang </i>
                                </p>
                                <div class="price-block">

                                    <div class="price-box">
                                        @if($book->discount>0)
                                            <p class="old-price"><span class="price-label">Đơn giá:</span> <span
                                                        class="price"> {{number_format($book->price)}} VNĐ</span></p>
                                            <p class="special-price"><span class="price-label">Giá đặc biệt</span>
                                                <span class="price"> {{number_format($book->price * (1-$book->discount/100))}}
                                                    VNĐ</span></p>
                                        @else
                                            <p class="special-price"><span class="price-label">Giá đặc biệt</span>
                                                <span class="price"> {{number_format($book->price)}} VNĐ</span></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="short-description">
                                    <h2>Đánh giá nhanh</h2>
                                    <p>{!! $book->description !!}</p>
                                </div>
                                <div class="add-to-box">
                                    <div class="add-to-cart">
                                        {!! Form::open(['method'=>'GET','url'=>'addcart/'.$book->id]) !!}
                                        <label for="qty">Số lượng:</label>
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                        class="reduced items-count" type="button">
                                                    <i class="icon-minus">&nbsp;</i>
                                                </button>
                                                <input type="number" class="input-text qty" title="Qty" value="1"
                                                       maxlength="12" id="qty" name="qty" min="1"
                                                       max="{{$book->quantity}}">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                        class="increase items-count" type="button">
                                                    <i class="icon-plus">&nbsp;</i>
                                                </button>
                                            </div>
                                        </div>
                                        <button class="button btn-cart"
                                                title="Đặt hàng" type="submit">
                                            <span><i class="icon-basket"></i> Đặt hàng</span>
                                        </button>

                                        {!! Form::close() !!}
                                    </div>
                                </div>


                                {{--<div class="social">--}}
                                {{--<ul>--}}
                                {{--<li class="fb"><a href="#"></a></li>--}}
                                {{--<li class="tw"><a href="#"></a></li>--}}
                                {{--<li class="googleplus"><a href="#"></a></li>--}}
                                {{--<li class="rss"><a href="#"></a></li>--}}
                                {{--<li class="pintrest"><a href="#"></a></li>--}}
                                {{--<li class="linkedin"><a href="#"></a></li>--}}
                                {{--<li class="youtube"><a href="#"></a></li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="product-collateral">
                            <div class="col-sm-12 wow bounceInUp animated">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"><a href="#product_tabs_description" data-toggle="tab"> Thông tin
                                            sách </a></li>
                                    <li><a href="#product_tabs_tags" data-toggle="tab">Thẻ tag</a></li>
                                    <li><a href="#reviews_tabs" data-toggle="tab">Đánh giá</a></li>
                                    {{--<li><a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a></li>--}}
                                    {{--<li><a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a></li>--}}
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="product_tabs_description">
                                        <div class="std">
                                            <p>{!! $book->content !!}</p>
                                        </div>
                                    </div>
                                    {{--<div class="tab-pane fade" id="product_tabs_tags">--}}
                                    <div class="tab-pane fade" id="product_tabs_tags" style="margin-bottom: 20px;">
                                        @if(isset($tag))
                                            @foreach($tag as $item)
                                                <a href="{{url('book/tag/'.$item->id)}}">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <span class="glyphicon glyphicon-tag"
                                                              style="color:#181b1a">{{$item->title}}</span>
                                                    </button>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                    {{--</div>--}}
                                    <div class="tab-pane fade" id="reviews_tabs">
                                        <div class="box-collateral box-reviews" id="customer-reviews">
                                            <div class="box-reviews1">
                                                <div class="form-add">
                                                    {!! Form::open(['method'=>'post','url'=>['book',$book->id,$book->slug]])!!}
                                                    <h3>Hãy viết đánh giá của bạn</h3>
                                                    <fieldset>
                                                        <h4>Đánh giá sản phẩm <em class="required">*</em>
                                                        </h4>
                                                        <span id="input-message-box"></span>

                                                        <input type="hidden" value="" class="validate-rating"
                                                               name="validate_rating">
                                                        <?php
                                                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                        ?>
                                                        <input type="hidden" class="form-control" name="urlId" id="urlId" value="{{$actual_link}}"/>
                                                        <div>
                                                            <label class="required" for="nickname_field">Email<em>
                                                                    * </em></label>
                                                            <div class="input-box">
                                                                <input type="text" class="input-text required-entry"
                                                                       id="nickname_field" name="email">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <ul>
                                                                <li>
                                                                    <label class="label-wide" for="review_field">Đánh
                                                                        giá<em> * </em></label>
                                                                    <div class="input-box">
                                                                        <textarea class="required-entry" rows="3"
                                                                                  cols="5" id="review_field"
                                                                                  name="comment"></textarea>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="buttons-set">
                                                                <button class="button submit" title="Submit Review"
                                                                        type="submit"><span>Gửi đánh giá</span></button>
                                                            </div>

                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div id="fb-root"></div>
                                                <script>(function (d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id)) return;
                                                        js = d.createElement(s);
                                                        js.id = id;
                                                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }(document, 'script', 'facebook-jssdk'));</script>
                                                <div class="fb-comments"
                                                     data-href="{{url('book/'.$book->id.'/'.$book->slug)}}"
                                                     data-numposts="5"></div>

                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                        <div class="box-reviews2">
                                            <h3>Khách hàng đánh giá</h3>
                                            <div class="box visible">
                                                <ul>
                                                    @if(isset($comments))
                                                        @foreach($comments as $comment)
                                                            <li>
                                                                <div class="review">
                                                                    <h6>
                                                                        {{$comment->email}}
                                                                    </h6>
                                                                    <small>Ngày{{$comment->created_at}}</small>
                                                                    <div class="review-txt">
                                                                        {{$comment->content}}
                                                                    </div>
                                                                    @foreach($repComments as $item)
                                                                        @if($comment->id == $item->comment_id)
                                                                            <div style="padding-left:15px">
                                                                                <h6>
                                                                                    {{$item->email}}
                                                                                </h6>
                                                                                <small>
                                                                                    Ngày {{$item->created_at}}</small>
                                                                                <div class="review-txt">
                                                                                    {{$item->content}}
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach

                                                                </div>
                                                            </li>

                                                        @endforeach
                                                    @endif

                                                </ul>
                                            </div>
                                            {{--<div class="actions"><a class="button view-all"--}}
                                            {{--id="revies-button"><span><span>Xem tất cả</span></span></a>--}}
                                            {{--</div>--}}
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="box-additional">
                                <div class="related-pro wow bounceInUp animated">
                                    <div class="slider-items-products">
                                        <div class="new_title center">
                                            <h2>Sách liên quan</h2>
                                        </div>
                                        <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4">
                                            @if(!empty($bookInvolve[0]))
                                                @foreach($bookInvolve as $bI)
                                                    <!-- Item -->
                                                        <div class="item">
                                                            <div class="col-item">

                                                                <div class="new-label new-top-right">New</div>
                                                                @if($bI->discount>0)
                                                                    <div class="sale-label sale-top-right">
                                                                        -{{$bI->discount}}%
                                                                    </div>
                                                                @endif
                                                                @if($bI->quantity<1)
                                                                    <div class="new-label new-top-right">hết</div>
                                                                @endif
                                                                <center>
                                                                    <div class="product-image-area">
                                                                        <a class="product-image" title="{{$bI->title}}"
                                                                           href="{{url('book/'.$bI->id.'/'.$bI->slug)}}">

                                                                            <img src="{{url('uploads/books/'.$bI->thumbnail)}}"
                                                                                 class="img-responsive" alt="a"
                                                                                 style="height:219px;"/>

                                                                        </a>
                                                                        {{--<div class="hover_fly"><a--}}
                                                                        {{--class="exclusive ajax_add_to_cart_button"--}}
                                                                        {{--href="{{ url('addcart/'.$bI->id) }}"--}}
                                                                        {{--title="Đặt hàng">--}}
                                                                        {{--<div>--}}
                                                                        {{--<i class="icon-shopping-cart"></i><span>Đặt hàng</span>--}}
                                                                        {{--</div>--}}
                                                                        {{--</a>--}}
                                                                        {{--</div>--}}
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inner">
                                                                            <div class="item-title"><a
                                                                                        href="{{url('book/'.$bI->id.'/'.$bI->slug)}}"
                                                                                        title=" {{$bI->title}}"> {{$bI->title}}</a>
                                                                            </div>
                                                                            <!--item-title-->
                                                                            <div class="item-content">
                                                                                {{--<div class="ratings">--}}
                                                                                {{--<div class="rating-box">--}}
                                                                                {{--<div class="rating"></div>--}}
                                                                                {{--</div>--}}
                                                                                {{--</div>--}}
                                                                                <div class="price-box">
                                                                                    @if($bI->discount>0)
                                                                                        <p class="special-price"><span
                                                                                                    class="price"> {{number_format($bI->price * (1- $bI->discount/100))}} </span>
                                                                                        </p>
                                                                                        <p class="old-price"><span
                                                                                                    class="price-sep">-</span>
                                                                                            <span
                                                                                                    class="price">{{number_format($bI->price)}}
                                                                                                vnđ </span></p>
                                                                                    @endif
                                                                                </div>
                                                                                {{--<div class="price-box">--}}

                                                                                {{--<p class="special-price"><span--}}
                                                                                {{--class="price"> {{number_format($bI->price)}}--}}
                                                                                {{--VNĐ</span></p>--}}

                                                                                {{--</div>--}}
                                                                            </div>
                                                                            <!--item-content-->
                                                                        </div>
                                                                        <!--info-inner-->
                                                                        <a href="{{ url('addcart/'.$bI->id) }}">
                                                                            <div class="actions">
                                                                                <button type="button" title="Đặt hàng"
                                                                                        class="button btn-cart">
                                                                                    <span>Thêm vào giỏ hàng</span>
                                                                                </button>
                                                                            </div>
                                                                        </a>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </center>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                    @endforeach

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upsell-pro wow bounceInUp animated">
                                    <div class="slider-items-products">
                                        <div class="new_title center">
                                            <h2>Bộ sách mới </h2>
                                        </div>
                                        <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4">
                                            @foreach($bookNew as $bN)
                                                <!-- Item -->
                                                    <div class="item">
                                                        <div class="col-item">

                                                            <div class="new-label new-top-right">Mới</div>

                                                            @if($bN->discount>0)
                                                                <div class="sale-label sale-top-right">
                                                                    -{{$bN->discount}}%
                                                                </div>
                                                            @endif
                                                            @if($bN->quantity == 0)
                                                                <div class="sale-label sale-top-right">Hết</div>
                                                            @endif
                                                            <center>
                                                                <div class="product-image-area">
                                                                    <a class="product-image" title="{{$bN->title}}"
                                                                       href="{{url('book/'.$bN->id.'/'.$bN->slug)}}">
                                                                        <img src="{{url('uploads/books/'.$bN->thumbnail)}}"
                                                                             class="img-responsive"
                                                                             style="height: 219px" alt="a"/>
                                                                    </a>
                                                                    {{--<div class="hover_fly">--}}
                                                                    {{--<a class="exclusive ajax_add_to_cart_button"--}}
                                                                    {{--href="{{ url('addcart/'.$bN->id) }}"--}}
                                                                    {{--title="Đặt hàng">--}}
                                                                    {{--<div>--}}
                                                                    {{--<i class="icon-shopping-cart"></i><span>Đặt hàng</span>--}}
                                                                    {{--</div>--}}
                                                                    {{--</a>--}}
                                                                    {{--</div>--}}
                                                                </div>

                                                                <div class="info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title"><a
                                                                                    href="{{url('book/'.$bN->id.'/'.$bN->slug)}}"
                                                                                    title=" {{$bN->title}}"> {{$bN->title}} </a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="item-content">

                                                                        {{--<div class="price-box">--}}

                                                                        {{--<p class="special-price"><span--}}
                                                                        {{--class="price"> {{number_format($bI->price)}}--}}
                                                                        {{--VNĐ</span></p>--}}

                                                                        {{--</div>--}}
                                                                        <div class="price-box">
                                                                            @if($bN->discount>0)
                                                                                <p class="special-price"><span
                                                                                            class="price"> {{number_format($bN->price * (1- $bN->discount/100))}} </span>
                                                                                </p>
                                                                                <p class="old-price"><span
                                                                                            class="price-sep">-</span>
                                                                                    <span
                                                                                            class="price">{{number_format($bN->price)}}
                                                                                        vnđ </span></p>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                    <a href="{{ url('addcart/'.$bN->id) }}">
                                                                        <div class="actions">
                                                                            <button type="button" title="Đặt hàng"
                                                                                    class="button btn-cart">
                                                                                <span>Thêm vào giỏ hàng</span></button>
                                                                        </div>
                                                                    </a>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </center>
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
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection




