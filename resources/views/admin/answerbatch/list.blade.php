@extends('layouts.admin')

@section('title') Smartbook | Quản lý đáp án tệp đề thi @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
         <a href="{{ url('admin/answerbatch') }}">Đáp án tệp đề</a>
        </li>
    </ul>
@endsection

@section('js')   
    <script type="text/javascript" src="{{ url('js/answerbatchdetail.js') }}"></script>
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
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                </div>
            </div>
        </div>
    </div>

    <h3 class="page-title">Câu trả lời

    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')
            {{--@permission('test-create')--}}
                {{--<div class="clearfix">--}}
                    {{--<a href="{{ url('admin/answerbatch/create') }}" class="btn green"> Thêm mới<i class="fa fa-plus"></i></a>--}}
                {{--</div>--}}
            {{--@endpermission--}}
            {{--{!! Form::open(['method' => 'GET', 'url' => 'admin/answerbatch']) !!}--}}
                {{--@include('partials.admin.search_form')--}}
            {{--{!! Form::close() !!}--}}

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>List Answer Batch </div>
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

                                <th> Tiêu đề</th>

                                <th>Câu trả lời</th>
                                <th> Tổng điểm </th>
                                <th width="160"> Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list->answerbatch as $key => $item)
                                <tr>
                                    {{--<td> {{ $key + $list->firstItem() }} </td>--}}
                                    <td> {{ $item->title }} </td>
                                    {{--<td>{{$item->question->title}}</td>--}}
                                    {{--<td><a href="{{url('admin/anwserbatch/anwser/'.$item->id)}}">Câu trả lời</a></td>--}}
                                    <td>
                                        <?php
                                        foreach($item->answer as $item2){
                                             echo htmlspecialchars_decode($item2->content)."_";
                                            if($item2->is_correct==1){
                                                echo "<span style='color:red'>(đúng)</span>"."<br>";
                                            }else{
                                                echo "<span style='color:blue'>(sai)</span>"."<br>";
                                            }
                                        }
                                            ?>
                                    </td>
                                    <td> {{ $item->sub_score }} </td>
                                    <td>
                                        <a href="{{ url('admin/question/' . $list->test->id .'/'.$idBatchOrRoom ) }}" class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-edit"></i> question
                                        </a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => ['admin/answerbatch', $item->id]]) !!}
                                        @permission('test-delete')

                                        <button type="submit" class="btn btn-sm btn-outline red pull-right" onclick="return confirm('Bạn chắc chắn muốn xóa?');">
                                            <i class="fa fa-remove"></i> Xóa
                                        </button>
                                        @endpermission
                                        {!! Form::close() !!}
                                        {{--@permission('test-edit')--}}
                                            {{--<a href="{{ url('admin/answerbatch/' . $item->id . '/edit') }}" class="btn btn-sm btn-outline dark pull-right">--}}
                                                {{--<i class="fa fa-edit"></i> Sửa--}}
                                            {{--</a>--}}
                                        {{--@endpermission--}}
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
@endsection




