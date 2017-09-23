@extends('layouts.admin')

@section('title') Smartbook | Quản lý câu hỏi @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
         <a href="{{ url('admin/question') }}">Câu hỏi</a>
        </li>
    </ul>
@endsection

@section('js')   
    <script type="text/javascript" src="{{ url('js/questiondetail.js') }}"></script>
@endsection

@section('content')

    <div id="detailModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Xem chi tiết</h4>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <h3 class="page-title">Câu hỏi
        {{--<small>manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')
            @permission('test-create')
                <div class="clearfix">
                    {!! Form::open(['method'=>'get','url'=>'admin/question/create/'.$id_test.'/'.$idBatchOrRoom]) !!}
                    <div class="clearfix">
                        <input type="number" name='numberAnswer' min="1" value ="1">
                       <button type="submit" class="btn green">Thêm mới <i class="fa fa-plus"></i></button>
                    </div>

                    {!! Form::close() !!}
                </div>
            @endpermission
            {{--{!! Form::open(['method' => 'GET', 'url' => 'admin/question']) !!}--}}
                {{--@include('partials.admin.search_form')--}}
            {{--{!! Form::close() !!}--}}

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách </div>
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
                                <th> Câu hỏi </th>
                                <th> Hướng dẫn  </th>
                                <th> Điểm</th>
                                <th width="160"> Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key => $item)
                                <tr>
                                    <td>
                                        {!!  htmlspecialchars_decode($item->content)  !!}
                                    </td>
                                    <td> {!! htmlspecialchars_decode ($item->explain)  !!}</td>
                                    <td> {{ $item->score }} </td>
                                    <td>
                                        <a href="{{ url('admin/test/'. $idBatchOrRoom )}}" class="btn btn-sm btn-outline dark pull-right">
                                            <i class="fa fa-edit"></i> Bài Thi
                                        </a>
                                     {!! Form::open(['method' => 'DELETE', 'url' => ['admin/question', $item->id]]) !!}
                                        <a href="{{ url('admin/answerbatch/'.$item->id.'/'.$idBatchOrRoom) }}" class="btn btn-sm btn-outline dark pull-right">
                                            <i class="fa fa-edit"></i> Đáp Án
                                        </a>
                                        @permission('test-delete')
                                         <button type="submit" class="btn btn-sm btn-outline red pull-right" onclick="return confirm('Bạn chắc chắn muốn xóa?');">
                                                <i class="fa fa-remove"></i> Xóa
                                         </button>
                                        @endpermission
                                        @permission('test-edit')
                                           <a href="{{ url('admin/question/' . $item->id .'/'.$id_test.'/'.$idBatchOrRoom. '/edit') }}" class="btn btn-sm btn-outline dark pull-right">
                                                <i class="fa fa-edit"></i> Sửa
                                          </a>
                                        @endpermission
                                        {!! Form::close() !!}
                                    </td>
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




