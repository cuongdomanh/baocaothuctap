
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
                            <p>{{ $question->id }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Bài kiểm tra</td>
                        <td style="width:50%">
                            <p>{{ $question->test->title }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%">Tiêu đề</td>
                        <td style="width:50%">
                            <p>{{ $question->title }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Nội dung</td>
                        <td style="width:50%">
                            <p>{!! $question->content  !!}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Hướng dẫn</td>
                        <td style="width:50%">
                            <p>{!! $question->explain   !!}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Điểm</td>
                        <td style="width:50%">
                            <p>{!! number_format($question->score) !!}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%">Kích hoạt</td>
                        <td style="width:50%">
                            <p>
                                @if($question->status==0)
                                <label style="color: #444"> {{ 'No' }}</label>
                               @else
                                 <label style="color: green"> {{ 'Yes' }}</label>
                               @endif
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Ngày tạo</td>
                        <td style="width:50%">
                            <p>{{ $question->created_at }}</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>












