@extends('client.layouts.index')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="home"><a href="index.html" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span>
                    </li>
                    <li class=""><a href="grid.html" title="Go to Home Page"><strong>Tài liệu</strong></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end breadcrumbs -->
    <!-- Two columns content -->
    <div class="main-container col2-left-layout">
        <div class="main container">
            <div class="row">
                <div class="category-description std">
                    <div class="category-image"><img src="{{asset('client_img/batch.jpg')}}" alt="cat imges "
                                                     title="Sofas ">
                    </div>
                </div>
                <div class="category-title">
                    <h1> Đề thi</h1>
                    <select name="" id="" class="form-control" style="width:150px;float: right ;margin-top: -15px;"
                            onchange="location = this.value;">
                        <option value="">Lựa chọn đề thi</option>
                        <option value="batch">Tất cả các đề thi</option>
                        @foreach($category as $cItem)
                            <option value="batch/{{$cItem->id}}">{{$cItem->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    @foreach($batch as $item)
                        <div class="col-sm-3">
                            <div class="item">
                                <div class="col-item">
                                    @if($item->status==1)
                                        <div class="new-label new-top-right">Free</div>
                                    @else
                                        @if($item->discount>0)
                                            <div class="sale-label sale-top-right">-{{$item->discount}}%</div>
                                        @endif
                                    @endif
                                    <center>
                                        <div class="product-image-area"><a class="{{$item->title}}"
                                                                           title="{{$item->title}}"
                                                                           href="{{url('batch/'.$item->id.'/'.$item->slug)}}">
                                                <img
                                                        src="{{url($item->thumbnail)}}"
                                                        class="img-responsive"
                                                        alt="product-image"/> </a>
                                        </div>
                                    </center>
                                    <div class="info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a title=" {{$item->title}}"
                                                   href="{{url('batch/'.$item->id.'/'.$item->slug)}}"> {{$item->title}}</a>
                                            </div>
                                            <!--item-title-->
                                            <div class="item-content">
                                                @if($item->status==1)
                                                    <p class="old-price"><span class="price-sep"></span>
                                                        <span class="price"> {{number_format($item->price)}}
                                                            VNĐ </span></p>
                                                @else
                                                    @if($item->discount>0)
                                                        <p class="special-price"><span class="price"
                                                                                       id="product-price-902"> {{number_format($item->price*(1-$item->discount/100))}}
                                                                VNĐ</span>
                                                        </p>
                                                        <p class="old-price"><span class="price-sep"></span>
                                                            <span class="price"> {{number_format($item->price)}}
                                                                VNĐ </span></p>
                                                    @endif
                                                @endif
                                            </div>
                                            <!--item-content-->
                                        </div>
                                        @if($item->status==1)
                                            <a href="{{url('batch/'.$item->id.'/'.$item->slug)}}">
                                                <div class="actions">
                                                    <button type="button" title="Đặt hàng"
                                                            class="button btn-cart">
                                                        <span>Tệp đề miễn phí</span>
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
                </div>
            </div>
        </div>
    </div>
@endsection




