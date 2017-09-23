@extends('layouts.admin')

@section('title') Smartbook | Quản lý tệp đề @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/folder') }}">Nhóm video</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/folder/create') }}">Thêm mới</a></li>

    </ul>
@endsection

@section('content')
    <h3 class="page-title">Thêm mới
        {{--<small>&nbsp;folder manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">

                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                {!! Form::open(['method' => 'POST', 'url' => 'admin/folder', 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                @include('admin.folder.form')
                {!! Form::close() !!}
                <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection


