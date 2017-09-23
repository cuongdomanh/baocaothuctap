@extends('layouts.admin')

@section('title') Smartbook | Quản lý thanh toán @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('/') }}">Trang chủ </a><i class="fa fa-circle"></i></li>
        <li>
            <a href="{{ url('admin/order') }}">Thanh toán</a>
        </li>
    </ul>
@endsection
@section('content')
    <h3 class="page-title">Chi tiết đơn đặt hàng
        {{--<small>manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')

            {!! Form::open(['method' => 'GET', 'url' => 'admin/order']) !!}
            @include('partials.admin.search_form')
            {!! Form::close() !!}

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>*
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th> #</th>
                            <th> Sản phẩm</th>
                            <th id="creater">Số lượng mua</th>
                            <th id="">Số lượng trong kho</th>
                            <th> Tổng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($orderdetail as $key => $item)
                            @if(!empty($item->book_id))
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td> {{ $item->book->title}} </td>
                                    <td>{{$item->number}}</td>
                                    <td>{{$item->book->quantity}}</td>
                                    {{--<td> {{ $item->course->title }} </td>--}}
                                    {{--<td> {{ $item->batch->title }}</td>--}}
                                    <td>
                                        @if( isset($item->book->discount ))
                                            {{ $item->number*($item->book->price*(1-$item->book->discount/100)) }}
                                        @else
                                            {{$item->book->price}}
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(!empty($item->course_id))
                                <script>
                                    $(document).ready(function () {
                                        $("#creater").html("nguoi tao khoa hoc");
                                    });
                                </script>
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->course->title}}</td>
                                    <td>_ _</td>
                                    <td>_ _</td>
                                    <td>
                                        @if( isset($item->course->discount ))
                                            {{($item->course->cost*(1-$item->course->discount/100)) }}
                                        @else
                                            {{$item->course->cost}}
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(!empty($item->batch_id))
                                <script>
                                    $(document).ready(function () {
                                        $("#creater").html("người tạo khóa học");
                                    });
                                </script>
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->batch->title}}</td>
                                    <td>_ _</td>
                                    <td>_ _</td>
                                    <td>
                                        @if( isset($item->batch->discount ))
                                            {{($item->batch->price*(1-$item->batch->discount/100)) }}
                                        @else
                                            {{$item->batch->price}}
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(!empty($item->room_id))
                                <script>
                                    $(document).ready(function () {
                                        $("#creater").html("người tạo khóa học");
                                    });
                                </script>
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->room->title}}</td>
                                    <td>_ _</td>
                                    <td>_ _</td>
                                    <td>
                                        @if( isset($item->room->discount ))
                                            {{($item->room->cost*(1-$item->room->discount/100)) }}
                                        @else
                                            {{$item->room->cost}}
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--@include('partials.admin.pagination')--}}
@endsection


