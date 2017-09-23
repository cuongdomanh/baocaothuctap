@extends('layouts.admin')

@section('title') Smartbook | Quản lý sách @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
            <a href="{{ url('admin/book') }}">Sách</a>
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
            @permission('book-create')

            <div class="clearfix">
                <a href="{{ url('admin/book/create') }}" class="btn green"> Tạo mới sách <i
                            class="fa fa-plus"></i></a>
            </div>
            @endpermission
            {!! Form::open(['method' => 'GET', 'url' => 'admin/book']) !!}
            @include('partials.admin.search_form')
            {!! Form::close() !!}

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
                            <th> #</th>
                            <th> Tiêu đề</th>
                            <th> Ảnh bìa</th>
                            <th> Giá (VNĐ)</th>
                            <th> Số lượng</th>
                            <th> mã khóa học đính kèm </th>
                            {{--<th> Kích thước</th>--}}
                            <th> Tác giả </th>
                            <th> Thẻ </th>
                            <th width="100"> Ngày phát hành</th>
                            {{--<th width="40"> Top</th>--}}
                            {{--<th width="40"> Hot</th>--}}
                            {{--<th width="40"> Best</th>--}}

                            <th width="220"> Hoạt động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $key => $item)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td> {{ $item->title }} </td>
                                <td>
                                    <img src="{{url('uploads/books/')}}/{{$item->thumbnail}}" alt="" WIDTH="100"/>
                                </td>
                                <td> {{ $item->price }}</td>
                                <td> {{( $item->quantity>0)? $item->quantity:"hết hàng" }} </td>
                                <td><a href="{{url('admin/book/course/'.$item->id)}}">khóa học </a> </td>

                                <td><a href="{{url('admin/book/author/'.$item->id)}}">Tác giả</a></td>
                                <td><a href="{{url('admin/book/tag/'.$item->id)}}">Thẻ</a></td>
                                <td> {{ $item->publish_date }}</td>


                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'url' => ['admin/book', $item->id]]) !!}

                                    @permission('book-delete')

                                    <button type="submit" class="btn btn-sm btn-outline red pull-right"
                                            onclick="return confirm('Bạn chắc chắn muốn xóa ?');">
                                        <i class="fa fa-remove"></i> Xóa
                                    </button>
                                    @endpermission

                                    {!! Form::close() !!}
                                    @permission('book-edit')
                                    <a href="{{ url('admin/book/' . $item->id . '/edit') }}"
                                       class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>
                                    @endpermission
                                    <a href="javascript:void(0);" onclick="showDetail('admin/book/{{$item->id }}')"
                                       class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-eye"></i>Xem
                                    </a>
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


