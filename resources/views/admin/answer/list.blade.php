@extends('layouts.admin')

@section('title') Smartbook | Quản lý đáp án @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
         <a href="{{ url('admin/answer') }}">Đáp án</a>
        </li>
    </ul>
@endsection

@section('js')
    <script type="text/javascript" src="{{ url('js/answerdetail.js') }}"></script>
@endsection

@section('content')

    <div id="detailModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Hiển thị chi tiết câu trả lời</h4>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                </div>
            </div>
        </div>
    </div>

    <h3 class="page-title">Đáp án</h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')
            {{--@permission('test-create')--}}
                {{--<div class="clearfix">--}}
                    {{--<a href="{{ url('admin/answer/create') }}" class="btn green"> Tạo mới đáp án <i class="fa fa-plus"></i></a>--}}
                {{--</div>--}}
            {{--@endpermission--}}
            {!! Form::open(['method' => 'GET', 'url' => 'admin/answer']) !!}
                @include('partials.admin.search_form')
            {!! Form::close() !!}

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách đáp án </div>
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
                                <th> #</th>
                                <th> Tiêu đề</th>
                                <th> Nội dung</th>
                                <th> Đáp án đúng</th>
                                <th> Câu trả lời </th>
                                <th width="160"> Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key => $item)
                                <tr>
                                    <td> {{ $key + $list->firstItem() }} </td>
                                    <td> {{ $item->title }} </td>
                                    <td>{!! htmlspecialchars_decode($item->content) !!}</td>
                                    <td><?php
                                        if($item->is_correct==1){
                                            echo "<span style='color:red'>Đúng</span>";
                                        }
                                        else{
                                            echo "sai ";
                                        }

                                        ?>
                                    </td>
                                    <td> {{ $item->answerbatch->title }} </td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'url' => ['admin/answer', $item->id]]) !!}
                                        @permission('test-delete')

                                        <button type="submit" class="btn btn-sm btn-outline red pull-right" onclick="return confirm('Bạn chắc chắn muốn xóa?');">
                                            <i class="fa fa-remove"></i> Xóa
                                        </button>
                                        @endpermission
                                        {!! Form::close() !!}
                                        @permission('test-edit')
                                        <a href="{{ url('admin/answer/' . $item->id . '/edit') }}" class="btn btn-sm btn-outline dark pull-right">
                                             <i class="fa fa-edit"></i> Sửa
                                        </a>
                                        @endpermission
                                            {{--<a href="javascript:void(0);" --}}
                                             {{--onclick="showDetail({{ $item->id }})"  --}}
                                             {{--class="btn btn-sm btn-outline dark pull-right">--}}
                                             {{--<i class="fa fa-eye" --}}
                                             {{--style="color:blue;"></i> Xem--}}
                                            {{--</a>--}}
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


