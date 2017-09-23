@extends('layouts.admin')

@section('title') Smartbook | Quản lý tác giả @endsection

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
            <a href="{{ url('admin/author') }}">Tác giả</a><i class="fa fa-circle"></i>
        </li>
        <li><a href="{{ url('admin/author/'.$author->id. '/edit')}}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">
        Sửa"<b>{{ $author->name }}</b>"
        {{--<small>author manager</small>--}}
    </h3>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                {!! Form::model($author, ['method' => 'PATCH', 'url' => ['admin/author', $author->id], 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                @include('admin.author.form')
                {!! Form::close() !!}
                <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
@endsection


