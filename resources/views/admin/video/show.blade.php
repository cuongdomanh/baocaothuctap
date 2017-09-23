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
                        <td style="width:15%"> Tiêu đề</td>
                        <td style="width:50%">
                            <a>{{$video->title}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Slug</td>
                        <td style="width:50%">
                            <a>{{$video->slug}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Đường dẫn</td>
                        <td style="width:50%">
                            <a>{{$video->url}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Ảnh</td>
                        <td style="width:50%">
                            <a><img src="{{url($video->thumbnail)}}" alt="" style="width:100px;height:auto"></a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Loại video</td>
                        <td style="width:50%">
                            <a> {{ $video->type }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Kích thước </td>
                        <td style="width:50%">
                            <a>{{ $video->size }}</a>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:15%"> Server</td>
                        <td style="width:50%">
                            <a>{{ $video->server }}</a>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:15%"> Kích hoạt</td>
                        <td style="width:50%">
                            <a>{{($video->status==1)?'Đã kích hoạt':'Chưa kích hoạt'}}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



