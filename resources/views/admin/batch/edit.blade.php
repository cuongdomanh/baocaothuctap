@extends('layouts.admin')

@section('title') Smartbook | Quản lý tệp đề thi @endsection

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
        <a href="{{ url('admin/batch') }}">Tệp đề</a><i class="fa fa-circle"></i>
        </li>
        <li><a href="{{ url('admin/batch/'.$batch->id. '/edit')}}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">
        Sửa đổi  {{ $batch->title }}
        {{--<small>batch manager</small>--}}
    </h3>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                     {!! Form::model($batch ,
                     ['method' => 'PATCH', 
                     'url' => ['admin/batch' , $batch->id] , 
                      'files' => true, 
                      'id' => 'form_sample_3',
                       'class' => 'form-horizontal']) !!}
                        @include('admin.batch.form')
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection




