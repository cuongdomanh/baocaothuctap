@extends('client.layouts.index')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="home"><a href="{{'/'}}" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                    <li class=""><a href="{{'batch'}}" title="Go to Home Page">Tài liệu</a><span>&mdash;›</span></li>
                    <li class="category13"><strong>đề thi</strong></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="min-height: 1000px">
            <h1 style="margin-bottom: 35px">
                <center>Đề thi online</center>
            </h1>
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Xảy ra lỗi!</strong>{{$errors->first()}}
                </div>
            @endif
            @if(isset($batch['test'][0]))
                @foreach($batch->test as $item)
                    <div class="col-md-4">
                        <div class="test">
                            <h3>{{$item->title}}
                           <small style="color: red; float:right"> {{(isset($rank[$item->id]))? $rank[$item->id]."đ":""}}  </small>
                            </h3>
                            <p><i>Thời gian làm bài : {{$item->work_time}} phút </i></p>
                            <p><i>Tổng điểm : {{$item->total_score}} điểm </i></p>
                            @if($batch->status==1)
                                @if(Auth::check())
                                    <a href="{{url('usertest/'.$batch->id.'-b/'.$item->id.'/'.$item->slug)}}">
                                        <button type="submit" class="btn btn-success" style="float: right">Làm bài
                                        </button>
                                    </a>
                                @else
                                    <a href="{{url('/log')}}">
                                        <button type="submit" class="btn btn-success" style="float: right">làm bài
                                        </button>

                                    </a>
                                @endif

                            @else
                                @if($kt==1)
                                    <a href="{{url('usertest/'.$batch->id.'-b/'.$item->id.'/'.$item->slug)}}">
                                        <button type="submit" class="btn btn-success" style="float: right">
                                            {{(isset($rank[$item->id]))? "làm lại ":"làm bài"}}
                                        </button>
                                    </a>
                                @else
                                    <button type="submit" class="btn btn-success" style="float: right" disabled>
                                        làm bài
                                    </button>
                                @endif
                                <div style="clear: both"></div>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection






