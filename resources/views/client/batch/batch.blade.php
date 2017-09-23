@extends('client.layouts.index')

@section('content')

        <div class="breadcrumbs">
                <div class="container">
                        <div class="row">
                                <ul>
                                        <li class="home"><a href="{{'/'}}" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                                        <li class=""><a href="{{'batch'}}" title="Go to Home Page"><strong>Tài liệu</strong></a></li>
                                    </ul>
                            </div>
                    </div>
            </div>
    <div class="container">
        <h3 class="title"> Thư viện đề thi </h3>
        <select name="" id=""  class="form-control" style="width:170px;float: right ;margin-top: -32px;" onchange="location = this.value;">
            <option value="">lựa chọn đề thi </option>
            <option value="batch">tất cả các  đề thi </option>
            @foreach($category as $cItem)
                <option value="batch/{{$cItem->id}}">{{$cItem->title}}</option>
            @endforeach
        </select>
        <hr>
        <div class="batch">
            <div class="row">
                @foreach($batch as $item)
                    <div class="col-md-3 col-xs-6">
                        <center>
                            <div class="batch_test">
                                <div class="image">
                                    <a href="{{url('batch/'.$item->id.'/'.$item->slug)}}">
                                        <img src="{{url($item->thumbnail)}}" alt="">
                                    </a>
                                </div>
                                <a href="{{url('batch/'.$item->id.'/'.$item->slug)}}">
                                    <p>{{$item->title}}</p>
                                </a>
                                <p>
                                    @if($item->status==1)
                                        <i class="oldprice">{{number_format($item->price)}} VNĐ</i><br>
                                    @else
                                        @if($item->discount>0)
                                            <i>{{number_format($item->price*(1-$item->discount/100))}} VNĐ</i>
                                            <i class="oldprice">{{number_format($item->price)}} VNĐ</i><br>
                                        @else
                                            <i>{{$item->price}} VNĐ</i>
                                        @endif
                                    @endif
                                </p>
                                @if($item->status==1)
                                    <button type="button" class="btn btn-primary">Tệp đề miễn phí</button>
{{-->>>>>>>  edit client and myaccount--}}
                                @else
                                    <a href="{{url('batchcart/'.$item->id)}}">
                                        <button type="button" class="btn btn-primary">Thêm vào giỏ hàng</button>
                                    </a>
                                @endif

                            </div>
                        </center>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection





