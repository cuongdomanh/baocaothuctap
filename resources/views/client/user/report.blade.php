@extends('client.layouts.index')
@section('content')
    <div class="container">
        @include('client.user.myacount')
        <section class="col-sm-9  ">
            <div class="user_C">
                <h4 style="color:red">Tham gia các tệp</h4>
                <hr>
                <div class="row">
                    @if(isset($list[0]))
                        @foreach($list as $item)
                            <div class="col-md-4 col-xs-6">
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
                                                <i class="oldprice">{{$item->price}} vnd</i><br>
                                            @else
                                                @if($item->discount>0)
                                                    <i>{{$item->price*(1-$item->discount/100)}} vnd</i>
                                                    <i class="oldprice">{{$item->price}}vnd</i><br>
                                                @else
                                                    <i>{{$item->price}} vnd</i>
                                                @endif
                                            @endif
                                        </p>

                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                                data-target="#myModal"
                                                onclick="batch({{$item->id}})">Bắt đầu học
                                        </button>
                                    </div>
                                </center>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Nhập mã </h4>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['method'=>'post','url'=>['/log']]) !!}
                                <div class="form-group">
                                    <label>Mã tệp đề</label>
                                    <div class="input-icon">
                                        <input type="text" class="form-control" id="msg" name="keyBatch"
                                               placeholder="Mã xác nhận từ email "></div>
                                </div>
                                <input type="hidden" name="idBatch" id="idBatch">
                                <button type="submit" class="btn btn-primary">Gửi</button>
                                {!! Form::close() !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection




