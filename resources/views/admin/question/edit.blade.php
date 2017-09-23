@extends('layouts.admin')

@section('title') Smartbook | Quản lý câu hỏi @endsection

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
        <a href="{{ url('admin/question') }}">Câu hỏi</a><i class="fa fa-circle"></i>
        </li>
        <li><a href="{{ url('admin/question/'.$question->id. '/edit')}}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">
        Sửa đổi  {{ $question->title }}
        {{--<small>question manager</small>--}}
    </h3>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                     {!! Form::model($question ,
                     ['method' => 'PATCH', 
                     'url' => ['admin/question', $question->id] , 
                      'files' => true, 
                      'id' => 'form_sample_3',
                      'files'=>true,
                       'class' => 'form-horizontal']) !!}
                        @include('admin.question.form')
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection



