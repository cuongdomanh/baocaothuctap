@extends('layouts.admin')

@section('title') Smartbook | Quản lý sách @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/book') }}">Sách</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/book/'.$book->id. '/edit') }}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Chỉnh sửa "<b>{{ $book->title }}</b>"
        <small> Quản lý sách</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    {!! Form::model($book, ['method' => 'PATCH', 'url' => ['admin/book', $book->id],'files' => true, 'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                    @include('admin.book.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


