@extends('layouts.admin')

@section('title') Smartbook | Quản lý phòng thi @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/room') }}">PhÒng thi</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/room/'.$room->id. '/edit')}}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">
        Sửa đổi "<b>{{ $room->title }}</b>"
        {{--<small>room manager</small>--}}
    </h3>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                {!! Form::model($room, ['method' => 'PATCH', 'url' => ['admin/room', $room->id], 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                @include('admin.room.form')
                {!! Form::close() !!}
                <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>


@endsection




