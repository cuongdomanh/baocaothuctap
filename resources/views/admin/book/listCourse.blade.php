@extends('layouts.admin')

@section('title') Smartbook | Quản lý sách @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
            <a href="{{ url('admin') }}">ma</a>
        </li>
    </ul>
@endsection
@section('js')
    <script type="text/javascript" src="{{ url('js/controller.js') }}"></script>
@endsection

@section('content')
    <div id="detailModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    {{--KHU VUC TRUYEN AJAX--}}
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                </div>
            </div>
        </div>
    </div>
    <h3 class="page-title">Sách
        <small>Quản lý</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')
            {{--@permission('book-create')--}}

            {{--<div class="clearfix">--}}
                {{--<a href="{{ url('admin/book/create') }}" class="btn green"> Tạo mới sách <i--}}
                            {{--class="fa fa-plus"></i></a>--}}
            {{--</div>--}}
            {{--@endpermission--}}
            {{--{!! Form::open(['method' => 'GET', 'url' => 'admin/book']) !!}--}}
            {{--@include('partials.admin.search_form')--}}
            {{--{!! Form::close() !!}--}}
            <div class="form-actions noborder">
               <a href="{{url('admin/book')}}"> <button type="submit" class="btn blue">book </button>  </a>

            </div>
            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách sách</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th>stt</th>
                            <th>mã </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                               <td>{{$item->encode}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('partials.admin.pagination')
@endsection


