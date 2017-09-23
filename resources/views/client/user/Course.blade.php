@extends('client.layouts.index')
@section('content')
    <div class="container">
        @include('client.user.myacount')
        <section class="col-sm-9 ">
            <div class="user_C">
                <h4 style="color:red"> Tham gia các khóa học </h4>
                <hr>
                @foreach($userCourse as $item)
                    <div class="row" style="margin-bottom: 30px">
                        <div class="col-sm-2">
                            <img src="{{$item->thumbnail}}" alt="" style="width: 90%;height: auto">
                        </div>
                        <div class="col-sm-10">
                            <p style="font-size: 18px">
                                {{$item->title}}
                            </p>
                            {{--<a href="{{url('video/'.$item->id)}}">--}}
                            <span style="float:right">
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                        data-target="#myModal"
                                        onclick="course({{$item->id}})">
                                    Tham gia
                                </button>
                            </span>
                            {{--</a>--}}
{{--                            <p>Giảng viên : {{$item->user->name}}</p>--}}
                            <i>{{$item->updated_at}}</i>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                {!! Form::open(['method'=>'post','url'=>['/log']]) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title">Nhập mã khóa học </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Mã khóa học</label>
                        <div class="input-icon">
                            <input type="text" class="form-control" id="msg" name="keyCourse"
                                   placeholder="Mã xác nhận từ email "> </div>
                    </div>
                    <input type="hidden" name="idCourse" id="idCourse">
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection



