@extends('client.layouts.index')
@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="home"><a href="{{'/'}}" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                    <li class=""><a href="{{'course'}}" title="Go to Home Page">Khóa học<span>&mdash;›</span></a></li>
                    <li class="category13"><strong> {{$course->title}} </strong></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="row">
                    <div class="product-view">
                        <div class="product-essential">
                            <form action="#" method="post" id="product_addtocart_form">
                                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                <div class="product-img-box col-lg-7 col-sm-7 col-xs-12">
                                    <div class="video_course">
                                        @if(!empty($course->url_video))
                                            <video controls="">
                                                <source src=" {!! $course->url_video !!}" type="video/mp4">
                                                <source src=" {!! $course->url_video !!}" type="video/ogg">
                                            </video>
                                        @else

                                            <img src="{{url($course->thumbnail)}}" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="product-shop col-lg-5 col-sm-5 col-xs-12">
                                    <div class="product-name">
                                        <h2>{{$course->title}}</h2>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating"></div>
                                        </div>

                                    </div>
                                    <p>Thể loại :
                                        @foreach($course->tag as $item)
                                            <b><i><a href="{{url('course/tag/'.$item->id)}}">{{$item->title}}</a></i></b>
                                        @endforeach
                                    </p>
                                    <p><b>Giảng viên : </b> <i>{{$course->user->name}}</i></p>
                                    <p class="availability in-stock">
                                        Cấp chứng nhận hoàn thành
                                    </p>
                                    <p>Số lượng video : {{count($course->video)}}</p>
                                    <p>Số lượng tệp đề thi : {{count($course->batch)}}</p>
                                    <div class="price-block">
                                        <div class="price-box">
                                            @if($course->discount>0)
                                                <p class="old-price">
                                                    <span class="price-label">Đơn giá:</span>
                                                    <span class="price"> {{number_format($course->cost)}} VNĐ</span>
                                                </p>
                                                <p class="special-price"><span class="price-label">Giá đặc biệt</span>
                                                    <span class="price"> {{number_format($course->cost * (1-$course->discount/100))}}
                                                        VNĐ</span>
                                                </p>
                                            @else
                                                <p class="special-price"><span class="price-label">Giá đặc biệt</span>
                                                    <span class="price"> {{number_format($course->cost)}} VNĐ</span></p>
                                            @endif
                                        </div>
                                    </div>
                                    @if($course->status==0)
                                        <div class="add-to-box">
                                            <div class="add-to-cart">

                                                <button onClick="productAddToCartForm.submit(this)"
                                                        class="button btn-cart" title="Đặt hàng" type="button">
                                                    <span><i class="icon-basket"></i> Tham gia khóa học </span>
                                                </button>

                                            </div>
                                        </div>
                                    @else
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <a href="{{url('coursecart/'.$course->id)}}">
                                                    <button onClick="productAddToCartForm.submit(this)"
                                                            class="button btn-cart" title="Đặt hàng" type="button">
                                                        <span><i class="icon-basket"></i> Tham gia khóa học </span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
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
                            </form>
                        </div>
                        <div class="product-collateral">
                            <div class="col-sm-12 wow bounceInUp animated">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"><a href="#product_tabs_description" data-toggle="tab"> Thông tin
                                            khóa học </a></li>
                                    <li><a href="#product_tabs_tags" data-toggle="tab">Thẻ Tag</a></li>
                                    <li><a href="#reviews_tabs" data-toggle="tab">Đánh giá</a></li>
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="product_tabs_description">
                                        <div class="std">
                                            <p>{!! $course->content !!}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product_tabs_tags" style="margin-bottom: 20px;">
                                        @if(isset($tag))
                                            @foreach($tag as $item)
                                                <a href="{{url('course/tag/'.$item->id)}}">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <span class="glyphicon glyphicon-tag"
                                                              style="color:#181b1a">{{$item->title}}</span>
                                                    </button>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="tab-pane fade" id="reviews_tabs">
                                        <div class="box-collateral box-reviews" id="customer-reviews">
                                            <div class="box-reviews1">
                                                <div class="form-add">
                                                    {!! Form::open(['method'=>'post','url'=>['course',$course->id,$course->slug]])!!}
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
                                                            <label class="required"
                                                                   for="nickname_field">Tên<em>*</em></label>
                                                            <div class="input-box">
                                                                <input type="text" class="input-text required-entry"
                                                                       id="nickname_field" name="name">
                                                            </div>
                                                        </div>
                                                        <div>

                                                            <label class="required" for="nickname_field">Email<em>*</em></label>
                                                            <div class="input-box">
                                                                <input type="text" class="input-text required-entry"
                                                                       id="nickname_field" name="email">
                                                            </div>

                                                        </div>
                                                        <div>
                                                            <ul>
                                                                <li>
                                                                    <label class="label-wide"
                                                                           for="review_field">Cảm nhận<em>*</em></label>
                                                                    <div class="input-box">
                                                                        <textarea class="required-entry" rows="3"
                                                                                  cols="5" id="review_field"
                                                                                  name="comment"></textarea>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="buttons-set">
                                                                <button class="button submit" title="Submit Review"
                                                                        type="submit"><span>Gửi đánh giá</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
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
                                                                            {{$comment->name}}
                                                                        </h6>
                                                                        <small>Đánh giá
                                                                            on {{$comment->created_at}}</small>
                                                                        <div class="review-txt">
                                                                            {{$comment->content}}
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        @endif

                                                    </ul>
                                                </div>
                                                <div class="actions"><a class="button view-all"
                                                                        id="revies-button"><span><span>Xem tất cả</span></span></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div>

                                        <table class="table table-hover" style="margin-top: 48px">
                                            <thead>
                                            <tr>
                                                <th>Các đề thi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($test))
                                                <?php $k1 = 0 ?>
                                                @foreach($test as $key=>$item)
                                                    <?php $k1++?>
                                                    <tr onclick="testslide({{$k1}})">
                                                        <td style="font-size:18px; color:#1DC116">
                                                            {{$key}} ( có {{count($item)}} đề thi )
                                                        </td>
                                                    </tr>
                                                    @foreach($item as $key2=>$item2)
                                                        <tr class="testpnal{{$k1}}">
                                                            <td>
                                                                <span class="glyphicon glyphicon-education"
                                                                      style="width: 30px ; margin-right:30px; color:blue"></span>
                                                                @if($course->status==0)
                                                                    <a href="{{url('usertest/'.$key2.'-b/'.$item2->id .'/'.$item2->slug )}}">{{$item2->title}}</a>
                                                                @else
                                                                    {{$item2->title}}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>Tệp đề thi của khóa học đang được cập nhập</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th style="font-size:19px">Video của khóa hoc</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($video))
                                                <?php $k = 0;?>
                                                @foreach($video as $key=>$item)
                                                    <?php $k++;
                                                    ?>
                                                    <tr onclick="videoslide({{$k}})">
                                                        <td style="color:#1DC116; font-size:18px; "
                                                            id="videoslide">{{$key}}</td>
                                                    </tr>
                                                    @foreach($item as $key2=>$item2)
                                                        <tr class="videopanel{{$k}}">
                                                            <td>
                                                                <span class="glyphicon glyphicon-facetime-video"
                                                                      style="color:red ;margin-right:30px;font-size:20px"></span>
                                                                @if($course->status==0)
                                                                    <a href="{{url('video/'.$course->id.'/'.$key2)}}">{{$item2->title}}</a>
                                                                @else
                                                                    {{$item2->title}}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @foreach($item2->uploadbatch as $doc)
                                                                        <a href="{{url('/'.$doc->url)}}" download=""><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-book"></i>{{$doc->name}}</button></a> &nbsp;
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>Video của khóa học chưa cập nhật</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <h4 style="padding-left:20px">Thông tin giảng viên </h4>
                                        <hr>
                                        <div class="col-sm-2">
                                            @if(!empty($course->user->thumbnai))
                                                <img src="{{url($course->user->thumbnai)}}" alt=""
                                                     style="width:100% ; height:auto">
                                            @else
                                                <img src="{{url('uploads/avatar/default_avatar.png')}}" alt=""
                                                     style="width:100% ; height:auto">
                                            @endif
                                        </div>
                                        <div class="col-sm-10">
                                            {!! $course->user->info !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="box-additional">
                                            <div class="related-pro wow bounceInUp animated">
                                                <div class="slider-items-products">
                                                    <div class="new_title center">
                                                        <h2>Khóa học liên quan </h2>
                                                    </div>
                                                    <div id="related-products-slider"
                                                         class="product-flexslider hidden-buttons">
                                                        <div class="slider-items slider-width-col4">
                                                        @foreach($courseInvolves as $cI)
                                                            <!-- Item -->
                                                            {{--<div class="item">--}}
                                                            {{--<div class="col-item">--}}
                                                            {{--<center>--}}
                                                            {{--<div class="new-label new-top-right">New--}}
                                                            {{--</div>--}}
                                                            {{--@if($cI->discount>0)--}}
                                                            {{--<div class="sale-label sale-top-right">--}}
                                                            {{---{{$cI->discount}}%--}}
                                                            {{--</div>--}}
                                                            {{--@endif--}}
                                                            {{--<div class="product-image-area">--}}

                                                            {{--<a class="product-image"--}}
                                                            {{--title="{{$course->title}}"--}}
                                                            {{--href="{{url('course/'.$cI->id.'/'.$cI->slug)}}">--}}
                                                            {{--<img src="{{url('')}}/{{$cI->thumbnail}}"--}}
                                                            {{--class="img-responsive"--}}
                                                            {{--alt="a" style="height:219px;"--}}
                                                            {{--align="middle"/>--}}
                                                            {{--</a>--}}
                                                            {{--<div class="hover_fly"><a--}}
                                                            {{--class="exclusive ajax_add_to_cart_button"--}}
                                                            {{--href="{{ url('coursecart/'.$course->id) }}"--}}
                                                            {{--title="Đặt hàng">--}}
                                                            {{--<div>--}}
                                                            {{--<i class="icon-shopping-cart"></i><span>Đặt hàng</span>--}}
                                                            {{--</div>--}}
                                                            {{--</a>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="info">--}}
                                                            {{--<div class="info-inner">--}}
                                                            {{--<div class="item-title"><a--}}
                                                            {{--href="{{url('course/'.$cI->id.'/'.$cI->slug)}}"--}}
                                                            {{--title=" {{$cI->title}}"> {{$cI->title}}</a>--}}
                                                            {{--</div>--}}
                                                            {{--<!--item-title-->--}}
                                                            {{--<div class="item-content">--}}
                                                            {{--<div class="ratings">--}}
                                                            {{--<div class="rating-box">--}}
                                                            {{--<div class="rating"></div>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="price-box">--}}

                                                            {{--<p class="special-price"><span--}}
                                                            {{--class="price">{{number_format($cI->cost)}}vnđ--}}
                                                            {{--</span></p>--}}
                                                            {{--@if($cI->discount>0)--}}
                                                            {{--<p class="special-price"><span--}}
                                                            {{--class="price"> {{number_format($cI->cost *(1-$cI->discount/100))}} </span>--}}
                                                            {{--</p>--}}
                                                            {{--<p class="old-price"><span class="price-sep">-</span>--}}
                                                            {{--<span class="price">{{number_format($cI->cost)}} vnđ </span></p>--}}
                                                            {{--@endif--}}

                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<!--item-content-->--}}
                                                            {{--</div>--}}
                                                            {{--<!--info-inner-->--}}
                                                            {{--<a href="{{ url('coursecart/'.$course->id) }}">--}}
                                                            {{--<div class="actions">--}}
                                                            {{--<button type="button" title="Đặt hàng" class="button btn-cart">--}}
                                                            {{--<span>Thêm vào giỏ hàng</span></button>--}}
                                                            {{--</div>--}}
                                                            {{--</a>--}}
                                                            {{--<div class="clearfix"></div>--}}
                                                            {{--</div>--}}
                                                            {{--</center>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            <!-- End Item -->
                                                                <div class="item">
                                                                    <div class="col-item">
                                                                        @if($cI->discount>0)
                                                                            <div class="sale-label sale-top-right">
                                                                                -{{$cI->discount}}%
                                                                            </div>
                                                                        @endif
                                                                        <div class="product-image-area"><a
                                                                                    class="product-image"
                                                                                    title="{{$cI->title}}"
                                                                                    href="{{url('course/'.$cI->id.'/'.$cI->slug)}}">
                                                                                <img src="{{url('')}}/{{$cI->thumbnail}}"
                                                                                     style="width: 60%; margin: auto"
                                                                                     class="img-responsive" alt="a"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="info-inner">
                                                                                <div class="item-title"><a
                                                                                            title=" Sample Product"
                                                                                            href="{{url('course/'.$cI->id.'/'.$cI->slug)}}"> {{$cI->title}}</a>
                                                                                </div>
                                                                                <!--item-title-->
                                                                                <div class="item-content">
                                                                                    <div class="ratings">
                                                                                        <div class="rating-box">
                                                                                            <div class="rating"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        @if($cI->discount>0)
                                                                                            <p class="special-price">
                                                                                                <span class="price">  </span> {{number_format($cI->cost *(1-$cI->discount/100))}}
                                                                                            </p>
                                                                                            <p class="old-price"><span
                                                                                                        class="price-sep">-</span>
                                                                                                <span class="price"> {{number_format($cI->cost)}}
                                                                                                    vnđ</span></p>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <!--item-content-->
                                                                            </div>
                                                                            <!--info-inner-->
                                                                            <a href="{{ url('coursecart/'.$course->id) }}">
                                                                                <div class="actions">
                                                                                    <button type="button"
                                                                                            title="Đặt hàng"
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

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--@endforeach--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




