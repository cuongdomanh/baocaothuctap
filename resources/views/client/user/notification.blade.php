@extends('client.layouts.index')
@section('content')
        <div class="container">
            @include('client.user.myacount')
            <section class="col-sm-9 ">
                <div class="user_C">
                    <h4 style="color:red">Tham gia các bài thi</h4>
                    <hr>
                    {{--@if(Auth::id())--}}
                    @foreach($room as $item)
                        @if(isset($item->test))
                            @foreach($item->test as $item2 )
                                <div class="col-md-4">
                                    <div class="test">
                                        <h4>{{$item2->title}} </h4>
                                        <p><i>Thời gian làm bài : {{$item2->work_time}} phút</i></p>
                                        <p><i>Phòng thi :{{$item->title}}</i></p>
                                        <p> Bắt đầu :{{$item->start_time}} </p>
                                        @if($item->start_time < date("Y-m-d H:i:s") && date("Y-m-d H:i:s") < $item->end_time)
                                            <a href="{{url('usertest/'.$item->id.'-r/'.$item2->id.'/'.$item2->slug)}}">
                                                <button type="submit" class="btn btn-success" style="float: right"
                                                        onclick="">
                                                    Vào thi
                                                </button>
                                            </a>
                                        @else
                                            <button type="submit" class="btn btn-success" style="float: right"
                                                    onclick="">
                                                Đã tham gia
                                            </button>
                                        @endif
                                        <div style="clear: both"></div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </section>
        </div>
@endsection



