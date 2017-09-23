@extends('layouts.admin')

@section('title') Smartbook | Quản lý khóa học @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
         <a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i>
        </li>
        <li>
         <a href="{{ url('admin/course') }}">Khóa học</a><i class="fa fa-circle"></i>
        </li>
        <li>
         <a href="{{ url('admin/course/'.$course->id.'/edit')}}">Chỉnh sửa</a></i>
        </li>  
    </ul>
@endsection

@section('content')
    <h3 class="page-title">
        Sửa đổi <b>{{$course->title}}</b>
        {{--<small>course manager</small>--}}
    </h3>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                     {!! Form::model($course,
                     ['method' => 'PATCH', 
                     'url'     => ['admin/course',$course->id],
                     'files'   => true,
                     'id'      => 'form_sample_3', 
                     'class'   => 'form-horizontal']) !!}
                        @include('admin.course.form')
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection

