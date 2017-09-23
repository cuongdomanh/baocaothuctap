@extends('layouts.admin')

@section('title') Smartbook | Quản lý đơn vị @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/unit') }}">Đơn vị</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/unit/'.$unit->id.'/edit') }}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Sửa đổi "<b>{{ $unit->title }}</b>"
        {{--<small> Unit manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    {!! Form::model($unit, ['method' => 'PATCH', 'url' => ['admin/unit', $unit->id], 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                        @include('admin.unit.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@endsection


