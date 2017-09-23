
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
                            <p>{{ $answer->id }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Tiêu đề</td>
                        <td style="width:50%">
                            <p>{{ $answer->title }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Nội dung</td>
                        <td style="width:50%">
                            <p>{!! htmlspecialchars_decode($answer->content) !!}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Đáp án đúng</td>
                        <td style="width:50%">
                            <p>{{ $answer->is_correct }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%">Câu trả lời</td>
                        <td style="width:50%">
                            <p>{{ $answer->answerbatch->title }}</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



