@extends('layouts.admin')

@section('title') Smartbook | Quản lý đáp án tệp đề thi @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection



@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
        <a href="{{ url('admin/answerbatch') }}">Đáp án tệp đề thi</a><i class="fa fa-circle"></i>
        </li>
        <li><a href="{{ url('admin/answerbatch/create')}}">Thêm mới</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">
        Thêm mới
        {{--<small>answer batch manager</small>--}}
    </h3>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                     {!! Form::open(['method' => 'POST', 'url' => 'admin/answerbatch', 
                      'files' => true, 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                    @include('admin.answerbatch.form')
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection



