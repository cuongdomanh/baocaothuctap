@extends('layouts.admin')

@section('title') Smartbook | Quản lý thể loại @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/category') }}">Danh mục</a><i class="fa fa-circle"></i></li>
         <li><a href="{{ url('admin/category/create') }}">Tạo mới</a></li>
        
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Tạo mới
        {{--<small>&nbsp;Quản lý thể loại</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    {!! Form::open(['method' => 'POST', 'url' => 'admin/category', 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                        @include('admin.category.form')
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection

