@extends('layouts.admin')

@section('title') Smartbook | Quản lý thanh toán @endsection

@section('css')
    @include('partials.admin.css_of_form')
@endsection

@section('js')
    @include('partials.admin.js_of_form')
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/order') }}">Đặt hàng</a><i class="fa fa-circle"></i></li>
        <li><a href="{{ url('admin/order'. $order->id. '/edit') }}">Chỉnh sửa</a></li>
    </ul>
@endsection

@section('content')
    <h3 class="page-title">Sửa đổi "<b>{{ $order->receive_name }}</b>"
        {{--<small> Book manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                {{--@include('partials.admin.portlet_title')--}}
                <div class="portlet-body">
                    {!! Form::model($order, ['method' => 'PATCH', 'url' => ['admin/order', $order->id],'id' => 'form_sample_3', 'class' => 'form-horizontal']) !!}
                    @include('admin.order.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


