@extends('layouts.admin')

@section('title') Smartbook | Quản lý phòng thi @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
            <a href="{{ url('admin/room') }}">Phòng thi</a>
        </li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Phòng
        {{--<small>manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')

            <div class="clearfix">
                @permission('room-create')
                <a href="{{ url('admin/room/create') }}" class="btn green"> Thêm mới <i class="fa fa-plus"></i></a>
                @endpermission
            </div>

            {!! Form::open(['method' => 'GET', 'url' => 'admin/room']) !!}
            @include('partials.admin.search_form')
            {!! Form::close() !!}

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách phòng </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th> #</th>
                            <th> Mã phòng</th>
                            <th> tên phòng</th>
                            {{--<th> Slug </th>--}}
                            <th> Thời gian bắt đầu </th>
                            <th> Thời gian kết thúc </th>
                            <th> Kịch hoạt</th>
                            <th> Ngày tạo</th>
                            <th width="160"> Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $key => $item)
                            <tr>
                                <td> {{ $key + 1  }} </td>
                                <td> {{ $item->id }} </td>
                                <td> {{ $item->title }} </td>
                                {{--<td> {{ $item->slug }} </td>--}}
                                <td> {{ $item->start_time}} </td>
                                <td> {{ $item->end_time  }} </td>
                                <td>
                                    @if($item->status==1)
                                        miễn phí
                                    @else
                                        <span style="color: red">mất phí </span>
                                    @endif
                                </td>
                                <td> {{ $item->created_at->format('d-M-Y') }} </td>
                                <td>
                                    <a href="{{ url('admin/test/' . $item->id."_r") }}" class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-edit"></i> bài thi
                                    </a>
                                    {!! Form::open(['method' => 'DELETE', 'url' => ['admin/room', $item->id]]) !!}                     @permission('room-delete')
                                    <button type="submit" class="btn btn-sm btn-outline red pull-right" onclick="return confirm('Bạn chắc chắn muốn xóa?');">

                                        <i class="fa fa-remove"></i> Xóa
                                    </button>

                                    @endpermission
                                    {!! Form::close() !!}
                                    @permission('room-edit')
                                    <a href="{{ url('admin/room/' . $item->id . '/edit') }}" class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>
                                    @endpermission
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('partials.admin.pagination')
@endsection





