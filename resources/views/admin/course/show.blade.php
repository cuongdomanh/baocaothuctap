
<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Chi tiết</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-12">
                <table id="user" class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <td style="width:15%"> ID</td>
                        <td style="width:50%">
                            <p>{{ $course->id }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Người tạo</td>
                        <td style="width:50%">
                            <p>{{ $course->user->name }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%">Tiêu đề</td>
                        <td style="width:50%">
                            <p>{{ $course->title }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Mô tả</td>
                        <td style="width:50%">
                            <p>{!! $course->description  !!} </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Nội dung</td>
                        <td style="width:50%">
                            <p>{!! $course->content !!} </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Đơn giá</td>
                        <td style="width:50%">
                            <p>{!! number_format($course->cost)  !!} </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Giảm giá</td>
                        <td style="width:50%">
                            <p> {{ $course->discount }} </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Kích hoạt</td>
                        <td style="width:50%">
                            <p>
                                 @if($course->status==0)
                                <label style="color: #444"> {{ 'Đang chờ xử lí' }}</label>
                                @elseif($course->status==1)
                                    <label style="color: green"> {{ 'Đang mở' }}</label>
                                @elseif($course->status==2)
                                    <label style="color: red"> {{ 'Bị khóa' }}</label>
                                @else
                                    <label style="color: #000"> {{ 'Đã hoàn thành' }}</label>
                                @endif </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Ngày tạo</td>
                        <td style="width:50%">
                            <p> {{ $course->created_at }} </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>









