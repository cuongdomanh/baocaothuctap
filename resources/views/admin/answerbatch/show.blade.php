
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
                            <p>{{ $answerbatch->id }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Tiêu đề</td>
                        <td style="width:50%">
                            <p>{{ $answerbatch->title }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%">Câu hỏi</td>
                        <td style="width:50%">
                            <p>{{ $answerbatch->question->title}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Câu trả lời</td>
                        <td style="width:50%">
                            <p>{{ $answerbatch->sub_score }}</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>







