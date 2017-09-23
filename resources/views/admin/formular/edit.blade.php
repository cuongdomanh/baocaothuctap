@extends('layouts.admin')

@section('title') Smartbook | Quản lý công thức @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/formular') }}">Công thức</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/formular'. $formular->id. '/edit') }}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Sửa đổi "<b>{{ $formular->title }}</b>"
        {{--<small> Formular manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    {!! Form::model($formular, ['method' => 'PATCH', 'url' => ['admin/formular', $formular->id], 'id' => 'form_sample_3', 'files'=> 'true', 'class' => 'form-horizontal']) !!}
                        @include('admin.formular.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


