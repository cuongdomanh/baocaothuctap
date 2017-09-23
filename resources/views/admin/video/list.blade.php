@extends('layouts.admin')

@section('title') Smartbook | Quản lý video @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
            <a href="{{ url('admin/video') }}">Video</a>
        </li>
    </ul>
@endsection
@section('js')
    <script type="text/javascript" src="{{ url('js/videoshow.js') }}"></script>
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
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <h3 class="page-title">Video
        {{--<small>manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')

            <div class="clearfix">
                <a href="{{ url('admin/course/video/'.$id) }}" class="btn green"> Thêm mới <i class="fa fa-plus"></i></a>
            </div>

           <!--  {!! Form::open(['method' => 'GET', 'url' => 'admin/video']) !!}
            @include('partials.admin.search_form')
            {!! Form::close() !!} -->

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách</div>
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
                            <th>Khóa học</th>
                            <th> Tiêu đề</th>
                            <th> Ảnh </th>
                            <th> Thể loại </th>
                            {{--<th> Kích thước</th>--}}
                            <th> Server </th>
                            <th> Kích hoạt</th>
                            <th> Ngày tạo</th>
                            <th width="160"> Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $key=>$item)
                            <tr>

                                <td> {{ $key + 1 }} </td>
                                <td>
                                    {{ $item->course->title }}
                                </td>
                                <td> {{ $item->title }} </td>
                                <td> {{ $item->slug }} </td>
                                {{--<td><img src="{{url($item->thumbnail)}}" alt="" style="width:100px;height:auto"> </td>--}}
                                <td> {{ $item->type }} </td>
                                {{--<td> {{ $item->size }} </td>--}}
                                <td> {{ $item->server }} </td>
                                <td>
                                    @if($item->status==0)
                                        Chưa kích hoạt
                                    @else
                                        Đã kích hoạt
                                    @endif
                                </td>
                                <td> {{ $item->created_at }} </td>
                                <td>

                                    {!! Form::open(['method' => 'DELETE',
                                     'url' => ['admin/video', $item->id, $id ],
                                     'files'=>true]) !!}
                                    <button type="submit" class="btn btn-sm btn-outline red pull-right" onclick="return confirm('Bạn chắc chắn muốn xóa?');">
                                        <i class="fa fa-remove"></i> Xóa
                                    </button>
                                    {!! Form::close() !!}

                                    <a href="{{ url('admin/video/' . $item->id .'/'.$id. '/edit') }}" class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>
                                    <button onclick="showDetail('admin/video/{{$item->id}}')" class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-edit"></i> Xem
                                    </button>
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


