@extends('layouts.admin')

@section('title') Smartbook | Quản lý slide @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/slide') }}">Slide</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/slide/'.$slide->id. '/edit') }}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Chỉnh sửa "<b>{{ $slide->title }}</b>"
        <small> Quản lý slide</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    {!! Form::model($slide, ['method' => 'PATCH', 'url' => ['admin/slide', $slide->id],'files' => true, 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                    @include('admin.slide.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


