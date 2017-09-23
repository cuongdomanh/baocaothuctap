@extends('layouts.admin')

@section('title') Smartbook | Quản lý Nhóm  Đề Thi @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
         <a href="{{ url('admin/batch') }}">Nhóm Đề Thi</a>
        </li>
    </ul>
@endsection
@section('content')
    <h3 class="page-title">Nhóm Đề Thi
        {{--<small>manager</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')
            @permission('test-create')
                <div class="clearfix">
                    <a href="{{ url('admin/batch/create') }}" class="btn green"> Thêm mới <i class="fa fa-plus"></i></a>
                </div>
            @endpermission
            {!! Form::open(['method' => 'GET', 'url' => 'admin/batch']) !!}
                @include('partials.admin.search_form')
            {!! Form::close() !!}

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
                                <th> #</th>
                                <th> Người tạo</th>
                                <th> Tiêu đề</th>
                                <th>Có bài test</th>
                                <th> Đơn giá (VNĐ)</th>
                                <th> Giảm giá (%)</th>

                                <th>Số lần xem </th>
                                {{--<th>tao test</th>--}}
                                <th> Kích hoạt</th>
                                <th> Ngày tạo </th>
                                <th width="160"> Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key => $item)
                                <tr>
                                    <td> {{ $key + $list->firstItem() }} </td>
                                    {{--<td> {{ $item->user->name}}</td>--}}
                                    <td> {{Auth::user()->name}}</td>
                                    <td> {{ $item->title }} </td>
                                    <td>
                                       @foreach($item['test'] as $testItem)
                                           {{$testItem->id.','}}
                                           @endforeach
                                    </td>
                                    <td>
                                      <?= number_format($item->price);?>
                                    </td>
                                    <td> {{ $item->discount }} </td>
                                    <td>{{$item['keyBatch']['count_view']}}</td>
                                    {{--<td><a href="{{url('admin/batch/test/'.$item->id)}}">test</a></td>--}}
                                    <td>
                                         @if($item->status == 0)
                                           {{'Mất phí'}}
                                         @elseif($item->status==1)
                                          {{'Miễn phí'}}
                                             @else
                                             {{'Tệp đề cho phòng thi '}}
                                         @endif 
                                    </td>
                                    <td> {{ $item->created_at }}</td>
                                    <td>     
                                     {!! Form::open(['method' => 'DELETE', 'url' => ['admin/batch', $item->id]]) !!}

                                        <a href="{{ url('admin/test/' . $item->id.'_b') }}" class="btn btn-sm btn-outline dark pull-right">
                                            <i class="fa fa-edit"></i>Đề Thi
                                        </a>
                                        @permission('test-delete')

                                         <button type="submit" class="btn btn-sm btn-outline red pull-right" onclick="return confirm('Bạn chắc chắn muốn xóa?');">
                                                <i class="fa fa-remove"></i> Xóa
                                         </button>
                                        @endpermission
                                        {!! Form::close() !!}
                                        @permission('test-edit')
                                           <a href="{{ url('admin/batch/' . $item->id . '/edit') }}" class="btn btn-sm btn-outline dark pull-right">
                                                <i class="fa fa-edit"></i> Sửa
                                          </a>
                                        @endpermission
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




