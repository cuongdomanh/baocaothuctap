@extends('layouts.admin')

@section('title') Smartbook | Quản lý đánh giá @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
            <a href="{{ url('admin/comment/batch') }}">Đánh giá</a>
        </li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Đánh giá
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')

            {!! Form::open(['method' => 'GET', 'url' => 'admin/contact']) !!}
            @include('partials.admin.search_form')
            {!! Form::close() !!}
            <select name="" id="" class="form-control input-small input-inline pull-right"
                    onchange="location = this.value;">
                <option value="0">Lựa chọn</option>
                <option value="admin/comment/book">Sách</option>
                <option value="admin/comment/course">Khóa học</option>
                <option value="admin/comment/batch">Câu hỏi</option>
            </select>
            <br>
            <br>
            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách</div>
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
                            <th> Question</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Content</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $key => $item)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td><a href="{{$item->url}}">{!!$item->question_id  !!}</a></td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->email }} </td>
                                <td> {{ $item->content }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @include('partials.admin.pagination')
            </div>
        </div>
    </div>
@endsection



