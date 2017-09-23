@extends('client.layouts.index')
@section('content')
        <div class="container">
            @include('client.user.myacount')
            <section class="col-sm-9 ">
                <div class="user_C">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Chờ xác nhận </a></li>
                    {{--<li><a data-toggle="tab" href="#menu1">Chờ gửi hàng<oánoánoán/a></li>  oán--}}
                    <li><a data-toggle="tab" href="#menu2">Đã thanh toán </a></li>
                    {{--<li><a data-toggle="tab" href="#menu3">Đã hủoány </a></li>--}}
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        @if(isset($user['order'][0]))
                        @foreach($user->order as $item)
                            @if($item->status==0)

                                @foreach($item->orderdetail as $oItem)
                                    @if(!empty($oItem->book_id) )
                                        @if($oItem->book->is_deleted==0)
                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col-sm-2">
                                                    <img src="{{url('uploads/books/'.$oItem->book->thumbnail)}}" alt="" style="width: 90%;height: auto">
                                                </div>
                                                <div class='col-sm-10'>
                                                    <p style="font-size: 18px">
                                                        {!! $oItem->book->title !!}
                                                    </p>
                                                    <a href="{{url('book/'.$oItem->book->id.'/'.$oItem->book->slug)}}">
                                                        <span style="float:right"><button>Xem chi tiết </button></span>
                                                    </a>
                                                    {{--<div style="cl"></div>--}}
                                                    <p> {!! $oItem->book->description !!}</p>
                                                    <i>date: {{$oItem->book->created_at}}</i>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                    @if(!empty($oItem->batch_id) )
                                        @if($oItem->batch->is_deleted==0)
                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col-sm-2">
                                                    <img src="{{url($oItem->batch->thumbnail)}}" alt="" style="width: 90%;height: auto">
                                                </div>
                                                <div class='col-sm-10'>
                                                    <p style="font-size: 18px">
                                                        {!! $oItem->batch->title !!}
                                                    </p>
                                                    <a href="{{url('batch/'.$oItem->batch->id.'/'.$oItem->batch->slug)}}"><span style="float:right"><button>xem chi tiet</button></span></a>
                                                    <p> {!! $oItem->batch->description !!}</p>
                                                    <i>date: {{$oItem->batch->created_at}}</i>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                    @if(!empty($oItem->course_id) )
                                        @if($oItem->course->is_deleted==0)
                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col-sm-2">
                                                    <img src="{{url($oItem->course->thumbnail)}}" alt="" style="width: 90%;height: auto">
                                                </div>
                                                <div class='col-sm-10'>
                                                    <p style="font-size: 18px">
                                                        {!! $oItem->course->title !!}
                                                    </p>
                                                    <a href="{{url('course/'.$oItem->course->id.'/'.$oItem->course->slug)}}"> <span style="float:right"><button>Xem chi tiết</button></span></a>
                                                    <p> {!! $oItem->course->user->name!!}</p>
                                                    <i>Ngày: {{$oItem->course->	created_at}}</i>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                            @endif
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        @if(isset($user['order'][0]))
                        @foreach($user->order as $item)
                            @if($item->status==2)
                                @foreach($item->orderdetail as $oItem)
                                    @if(!empty($oItem->book_id) )
                                        @if($oItem->book->is_deleted==0)
                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col-sm-2">
                                                    <img src="{{url('uploads/books/'.$oItem->book->thumbnail)}}" alt="" style="width: 90%;height: auto">
                                                </div>
                                                <div class='col-sm-10'>
                                                    <p style="font-size: 18px">
                                                        {!! $oItem->book->title !!}
                                                    </p>
                                                    <a href="{{url('book/'.$oItem->book->id.'/'.$oItem->book->slug)}}">
                                                        <span style="float:right"><button>Xem chi tiết</button></span>
                                                    </a>
                                                    {{--<div style="cl"></div>--}}
                                                    <p> {!! $oItem->book->description !!}</p>
                                                    <i>date: {{$oItem->book->created_at}}</i>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                    @if(!empty($oItem->batch_id) )
                                        @if($oItem->batch->is_deleted==0)
                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col-sm-2">
                                                    <img src="{{url($oItem->batch->thumbnail)}}" alt="" style="width: 90%;height: auto">
                                                </div>
                                                <div class='col-sm-10'>
                                                    <p style="font-size: 18px">
                                                        {!! $oItem->batch->title !!}
                                                    </p>
                                                    <a href="{{url('batch/'.$oItem->batch->id.'/'.$oItem->batch->slug)}}"><span style="float:right"><button>xem chi tiet</button></span></a>
                                                    <p> {!! $oItem->batch->description !!}</p>
                                                    <i>date: {{$oItem->batch->created_at}}</i>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                    @if(!empty($oItem->course_id) )
                                        @if($oItem->course->is_deleted==0)
                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col-sm-2">
                                                    <img src="{{url($oItem->course->thumbnail)}}" alt="" style="width: 90%;height: auto">
                                                </div>
                                                <div class='col-sm-10'>
                                                    <p style="font-size: 18px">
                                                        {!! $oItem->course->title !!}
                                                    </p>
                                                    <a href="{{url('course/'.$oItem->course->id.'/'.$oItem->course->slug)}}"> <span style="float:right"><button>Xem chi tiết</button></span></a>
                                                    <p> giảng viên :{!! $oItem->course->user->name !!}</p>
                                                    <i>date: {{$oItem->course->	created_at}}</i>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                         @endif
                    </div>
                </div>
                </div>
            </section>
        </div>
@endsection



