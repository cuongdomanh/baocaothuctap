@extends('client.layouts.index')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="home"><a href="{{'/'}}" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span></li>
                    <li class=""><a href="{{'room'}}" title="Go to Home Page"><strong>Phòng thi</strong></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="min-height: 1000px">
            <h3 class="title"> Phòng thi </h3>
            <select name="" id="" class="form-control" style="width:170px;float: right ;margin-top: -32px;"
                    onchange="location = this.value;">
                <option value="">lựa chọn phòng thi</option>
                <option value="room">tất cả các phòng thi</option>
                @foreach($category as $cItem)
                    <option value="room/{{$cItem->id}}">{{$cItem->title}}</option>
                @endforeach
            </select>
            <hr>

            @foreach($room as $roomItem)
                @foreach($roomItem->test as $item)
                    <div class="col-md-4">
                        <div class="test">
                            {{--{{Form::open(['method'=>'get','url'=>['test',$item->id,$item->slug]])}}--}}
                            <h4>{{$item->title}}</h4>
                            <p><i>Thời gian làm bài : {{$item->work_time}} phút</i></p>
                            <p><i>Phòng thi : {{$roomItem->title}}</i></p>
                            <p> Bắt đầu :{{$roomItem->start_time}} </p>
                            <p class="special-price"> Chi phí :{{$roomItem->cost}} VNĐ</p>
                            {{--<p>   kết thúc :{{$item2->end_time}}</p>--}}
                            {{--<p style="float: left; font-size: 12px">--}}
                                {{--update at : {{$item->created_at}}--}}
                                {{--by {{$item->user->name}}--}}
                            {{--</p>--}}
                            {{--mien phi --}}
                            @if($roomItem->status==1)
                                @if(Auth::id())
                                    @if(isset($array[$roomItem->id][$item->id]) && $array[$roomItem->id][$item->id]==Auth::id())
                                        @if($roomItem->start_time < date("Y-m-d H:i:s") && $roomItem->end_time > date("Y-m-d H:i:s") )
                                            <a href="{{url('usertest/'.$roomItem->id.'-r/'.$item->id.'/'.$item->slug)}}">
                                                <button type="submit" class="btn btn-success" style="float: right"
                                                        onclick="">
                                                    Vào thi
                                                </button>
                                            </a>
                                        @endif
                                        @if($roomItem->start_time > date("Y-m-d H:i:s"))
                                            <button type="submit" class="btn btn-success" style="float: right"
                                                    onclick="">
                                                Đã tham gia
                                            </button>
                                        @endif
                                    @else
                                        <a href="{{url('room/joinTest/'.$item->id.'/'.$roomItem->id)}}">
                                            <button type="submit" class="btn btn-success" style="float: right"
                                                    onclick="">
                                                Tham gia
                                            </button>
                                        </a>
                                    @endif
                                @else
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#myModal">
                                        tham gia
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;
                                                    </button>
                                                    <h4 class="modal-title">Đăng nhập </h4>
                                                </div>
                                                {{--<div class="col-2 registered-users"><strong>đăng nhập </strong>--}}
                                                <div class="content">
                                                    {{Form::open(['method'=>'post','url'=>'log'])}}
                                                    <ul class="form-list">

                                                        <li>
                                                            <label for="email">email:
                                                                <span class="required">*</span>
                                                            </label>
                                                            <br>
                                                            <input type="email" name='username'
                                                                   placeholder=" nhập địa chỉ email của bạn "
                                                                   class="input-text required-entry" id="email"
                                                                   value="{{ old('username') }}" required>
                                                            @if ($errors->has('username'))
                                                                <span class="help-block">
                                                                  <strong>{{ $errors->first('username') }}</strong>
                                                            </span>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            <label for="pass">Password <span
                                                                        class="required">*</span></label>
                                                            <br>
                                                            <input type="password" placeholder=" nhập password của bạn "
                                                                   value="{{ old('password') }}" title="Password"
                                                                   id="pass"
                                                                   class="input-text required-entry validate-password"
                                                                   name="password" required>
                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                            @endif
                                                        </li>

                                                    </ul>
                                                    <div class="buttons-set">
                                                        <button id="send2" name="send" type="submit"
                                                                class="button login">
                                                            <span>đăng nhập</span></button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                                {{--</div>--}}
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @else
                                @if(Auth::id())
                                    @if(isset($array[$roomItem->id][$item->id]) && $array[$roomItem->id][$item->id]==Auth::id())

                                        @if($roomItem->start_time < date("Y-m-d H:i:s") && $roomItem->end_time > date("Y-m-d H:i:s") )
                                            <a href="{{url('usertest/'.$roomItem->id.'-r/'.$item->id.'/'.$item->slug)}}">
                                                <button type="submit" class="btn btn-success" style="float: right"
                                                        onclick="">
                                                    vào thi
                                                </button>
                                            </a>
                                        @endif
                                        @if($roomItem->start_time > date("Y-m-d H:i:s"))
                                            <button type="submit" class="btn btn-success" style="float: right"
                                                    onclick="">
                                                đã tham gia
                                            </button>
                                        @endif

                                    @else
                                        {{--<a href="{{url('room/cart/'.$item->id.'/'.$roomItem->id)}}">--}}
                                        <a href="{{url('room/joinTest/'.$item->id.'/'.$roomItem->id)}}">
                                            <button type="submit" class="btn btn-success" style="float: right"
                                                    onclick="">
                                                mua
                                            </button>
                                        </a>
                                    @endif
                                @endif
                            @endif
                            <div style="clear: both"></div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection

