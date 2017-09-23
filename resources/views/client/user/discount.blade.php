@extends('client.layouts.index')
@section('content')
        <div class="container">
            @include('client.user.myacount')
            <section class="col-sm-9 ">
                <div class="user_C">
                <h4 style="color:red">Hàng giảm giá </h4>
                <hr>
                @foreach($book as $item)
                    <div class="row" style="margin-bottom: 30px">
                        <div class="col-sm-2">
                            <img src="{{url('uploads/books/'.$item->thumbnail)}}" alt="" style="width: 100%;height: auto">
                        </div>
                        <div class="col-sm-10">
                            <a href="{{url('book/'.$item->id.'/'.$item->slug)}}"><span style="float: right">  <button type="button" class="btn btn-success">Xem chi tiết</button></span></a>
                            <p style="font-size: 18px">{!! $item->title !!}</p>

                            <p>{!! $item->description !!}</p>
                            <p>Giảm giá : {{ $item->discount }}%</p>
                            <i>Cập nhật ngày :{{$item->created_at}}</i>
                        </div>
                    </div>
                @endforeach
                @foreach($course as $item)
                    <div class="row" style="margin-bottom: 30px">
                        <div class="col-sm-2">
                            <img src="{{url($item->thumbnail)}}" alt="" style="width: 100%;height: auto">
                        </div>
                        <div class="col-sm-10">
                            <a href="{{url('course/'.$item->id.'/'.$item->slug)}}"><span  style="float: right">  <button type="button" class="btn btn-success">Xem chi tiết</button></span></a>
                            <p style="font-size: 18px">{!! $item->title !!}</p>

                            <p>Giảng viên: {!! $item->user->name !!}</p>
                            <p>Giảm giá : {{ $item->discount }}%</p>
                            <i>Cập nhật ngày : {{$item->created_at}}</i>
                        </div>
                    </div>
                @endforeach
                {{--@foreach($batch as $item)--}}
                    {{--<div class="row" style="margin-bottom: 30px">--}}
                        {{--<div class="col-sm-2">--}}
                            {{--<img src="{{url($item->thumbnail)}}" alt="" style="width: 100%;height: auto">--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<a href="{{url('batch/'.$item->id.'/'.$item->slug)}}"><span  style="float: right">  <button type="button" class="btn btn-success">xem chi t</button></span></a>--}}
                            {{--<p style="font-size: 18px">{!! $item->title !!}</p>--}}

                            {{--<p>{!! $item->description !!}</p>--}}
                            {{--<p>giảm giá : {{ $item->discount }}%</p>--}}
                            {{--<i>update{{$item->created_at}}</i>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
                </div>
            </section>
        </div>
@endsection



