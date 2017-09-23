@extends('layouts.admin')

@section('title') Smartbook | Quản lý đáp án tệp đề thi @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
        <a href="{{ url('admin/answerbatch') }}">Đáp án tệp đề</a><i class="fa fa-circle"></i>
        </li>
        <li><a href="{{ url('admin/answer/'.$answerbatch->id. '/edit')}}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">
        Sửa đáp án {{ $answerbatch->title }}
        {{--<small>answer batch manager</small>--}}
    </h3>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                     {!! Form::model($answerbatch ,
                     ['method' => 'PATCH', 
                     'url' => ['admin/answerbatch' , $answerbatch->id] , 
                      'files' => true, 
                      'id' => 'form_sample_3',
                       'class' => 'form-horizontal']) !!}
                        @include('admin.answerbatch.form')
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection




