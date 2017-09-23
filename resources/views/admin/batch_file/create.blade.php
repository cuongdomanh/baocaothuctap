@extends('layouts.admin')

@section('title') Smartbook | Quản lý ảnh @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/batch_file') }}">file tài liệu</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/batch_file/create') }}">Thêm mới</a></li>

    </ul>
@endsection

@section('content')
    <h3 class="page-title">Thêm mới
        <small>&nbsp;batch_file manager</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                {!! Form::open(['method' => 'POST', 'url' => 'admin/batch_file','files' => true, 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                @include('admin.batch_file.form')
                {!! Form::close() !!}
                <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection



