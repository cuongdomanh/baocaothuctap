@extends('layouts.admin')

@section('title') Smartbook | Quản lý khóa học @endsection

@section('css')
   
@endsection

@section('js')
   
    <script type="text/javascript" src="{{ url('js/coursedetail.js') }}"></script>
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li><a href="{{url('admin/course') }}">Khóa học</a></li>
    </ul>
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

    <h3 class="page-title">
        Khóa học
        {{--<small>manager</small>--}}
    </h3>


    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')
            @permission('course-create')
            <div class="clearfix">
                <a href="{{ url('admin/course/create') }}" class="btn green"> Thêm mới <i class="fa fa-plus"></i></a>
            </div>
            @endpermission
            {!! Form::open(['method' => 'GET', 'url' => 'admin/course']) !!}
                @include('partials.admin.search_form')
            {!! Form::close() !!}

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                            <tr>
                                <th> #</th>
                                <th> Người tạo</th>
                                <th> Tiêu đề</th>
                                <th> Đơn giá</th>
                                <th> Giảm giá</th>

                                <th>Video</th>
                                <th> Kích hoạt</th>
                                <th> Ngày tạo</th>
                                <th> Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key => $item)
                                <tr>
                                    <td> {{ $item->id }} </td>
                                    {{--<td> {{ $item->user->name }} </td>--}}
                                    <td> {{Auth::user()->name}}</td>
                                    <td> {{ $item->title }} </td>
                                    <td> 
                                    <?= number_format($item->cost)." "."VND"; ?>
                                    </td>

                                    <td> {{$item->discount}} % </td>
                                    {{--<td><a href="{{url('admin/course/tag/0/'.$item->id)}}">tag</a></td>--}}
                                    <td><a href="{{url('admin/course/detail/'.$item->id)}}">video</a></td>
                                    <td>
                                         @if($item->status==0)
                                          <h4 style="color: #444;font-size: 14px;">Không thu phí</h4>
                                         {{--@elseif($item->status==1)--}}
                                          {{--<h4 style="color: blue;">Đang mở</h4>--}}
                                          {{--@elseif($item->status==2)--}}
                                          {{--<h4 style="color: red;">Bị khóa</h4>--}}
                                          @else 
                                          <h4 style="color: green; font-size: 14px;">Mất phí</h4>
                                         @endif
                                    </td>
                                    <td> {{ $item->created_at }}</td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'url' => ['admin/course', $item->id]]) !!}

                                        @permission('course-delete')

                                            <button type="submit" class="btn btn-sm btn-outline red pull-right" onclick="return confirm('Bạn chắc chắn muốn xóa?');">
                                                <i class="fa fa-remove"></i> Xóa
                                            </button>
                                        @endpermission
                                        @permission('course-edit')
                                        <a href="{{ url('admin/course/' . $item->id . '/edit') }}" class="btn btn-sm btn-outline dark pull-right">
                                                <i class="fa fa-edit"></i> Sửa
                                            </a>

                                        @endpermission
                                             <a href="javascript:void(0);" 
                                             onclick="showDetail('admin/course/{{ $item->id }}')"
                                             class="btn btn-sm btn-outline dark pull-right">
                                             <i class="fa fa-eye" 
                                             style="color:blue;"></i> Xem
                                            </a>
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


