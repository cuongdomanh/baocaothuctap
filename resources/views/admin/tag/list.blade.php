@extends('layouts.admin')

@section('title') Smartbook | Quản lý thẻ @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
            <a href="{{ url('admin/tag') }}">Thẻ</a>
        </li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Thẻ
        {{--<small>manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')

            <div class="clearfix">
                <a href="{{ url('admin/tag/create') }}" class="btn green"> Thêm mới<i class="fa fa-plus"></i></a>
            </div>

            {!! Form::open(['method' => 'GET', 'url' => 'admin/tag']) !!}
            @include('partials.admin.search_form')
            {!! Form::close() !!}

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách thẻ </div>
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
                            <th> Tiêu đề</th>
                            <th> Tình trạng</th>
                            <th width="160"> Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $key => $item)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td> {{ $item->title }} </td>
                                <td>
                                    @if($item->status==0)
                                        {{'Chưa kích hoạt'}}
                                    @else
                                        {{'Đã kích hoạt'}}
                                    @endif
                                </td>
                                <td>

                                    {!! Form::open(['method' => 'DELETE', 'url' => ['admin/tag', $item->id]]) !!}
                                    <button type="submit" class="btn btn-sm btn-outline red pull-right" onclick="return confirm('Bạn chắc chắn muốn xóa?');">
                                        <i class="fa fa-remove"></i> Xóa
                                    </button>
                                    {!! Form::close() !!}

                                    <a href="{{ url('admin/tag/' . $item->id . '/edit') }}" class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>
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


