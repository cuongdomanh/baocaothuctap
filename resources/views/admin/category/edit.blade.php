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
        <li><a href="{{ url('admin/category/'.$category->id. '/edit') }}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Chỉnh sửa "<b>{{ $category->title }}</b>" <small> Quản lý thể loại</small></h3>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    {!! Form::model($category, ['method' => 'PATCH', 'url' => ['admin/category', $category->id], 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                        @include('admin.category.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection



