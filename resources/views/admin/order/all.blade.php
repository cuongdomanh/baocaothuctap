@extends('layouts.admin')

@section('title') Smartbook | Quản lý thanh toán @endsection

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li><a href="{{ url('admin') }}">Trang chủ</a><i class="fa fa-circle"></i></li>
        <li>
            <a href="{{ url('admin/order/all') }}">Thanh toán</a>
        </li>
    </ul>
@endsection
@section('content')
    <h3 class="page-title">Thanh toán
        {{--<small>Quản lý</small>--}}
    </h3>
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.alert')

            {!! Form::open(['method' => 'GET', 'url' => 'admin/order/all']) !!}
            @include('partials.admin.search_form')
            {!! Form::close() !!}
            {{--<a href="{{url('admin/order/book')}}">--}}
            {{--<button type="button" class="btn btn-success" style="float: right;margin-top: -32px;">--}}
            {{--<span class="glyphicon glyphicon-share-alt"></span> Sách</button>--}}
            {{--</a>--}}
            <select name="" id=""  class="form-control" style="width:130px;float: right ;margin-top: -32px;" onchange="location = this.value;">
                <option value="0">Lựa chọn</option>
                <option value="admin/order/all">Tất cả</option>
                <option value="admin/order/book">Sách</option>
                <option value="admin/order/course">Khóa học</option>
                <option value="admin/order/batch">Tệp đề</option>
                <option value="admin/order/room">Phòng Thi</option>
            </select>

            <div class="portlet box green margin-top-10">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Danh sách thanh toán</div>
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
                            <th> Tên</th>
                            <th> Địa chỉ</th>
                            <th> Số điện thoại</th>
                            <th> Email</th>
                            <th> Chi phí</th>
                            {{--<th> Tax</th>--}}
                            <th> Giảm giá</th>
                            <th> Kích hoạt</th>
                            <th width="160"> Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $key => $item)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td> {{ $item->receive_name }} </td>
                                <td> {{ $item->receive_address }} </td>
                                <td> {{ $item->receive_phone }}</td>
                                <td> {{ $item->receive_email }} </td>
                                <td> {{ $item->total_amount }} </td>
                                {{--<td> {{ $item->tax }}</td>--}}
                                <td> {{ $item->discount }} %</td>
                                <td>
                                    @if($item->status==0)
                                        <span style="color: red;">Chờ xác nhận</span>
                                    @elseif($item->status==1)
                                        <span style="color: green">Chờ gửi hàng</span>
                                    @elseif($item->status==2)
                                        <span style="color:black ">Đã mua</span>
                                    @elseif($item->status==3)
                                        <span style="color:blue">Đã hủy</span>
                                    @endif
                                </td>
                                <td>
                                    @permission('pay-edit')
                                    <a href="{{ url('admin/order/' . $item->id . '/edit') }}"
                                       class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>
                                    @endpermission
                                    <a href="{{ url('admin/order/' . $item->id) }}"
                                       class="btn btn-sm btn-outline dark pull-right">
                                        <i class="fa fa-eye"></i> Xem
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


