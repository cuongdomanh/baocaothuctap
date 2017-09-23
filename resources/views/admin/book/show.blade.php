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
                            <p>{{$book->title}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Giá</td>
                        <td style="width:50%">
                            <p>{{$book->price}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Giảm giá</td>
                        <td style="width:50%">
                            <p>{{$book->discount}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Nội dung</td>
                        <td style="width:50%">
                            <p>{!!$book->description !!}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Ảnh bìa</td>
                        <td style="width:50%">
                            <img src="{{url('uploads/books')}}/{{$book->thumbnail}}" alt="" WIDTH="100"/>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Nội dung</td>
                        <td style="width:50%">
                            <p>{!!  $book->content!!}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Số lượng</td>
                        <td style="width:50%">
                            <p>{{$book->quantity}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Số trang</td>
                        <td style="width:50%">
                            <p>{{$book->pages}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Kích thước</td>
                        <td style="width:50%">
                            <p>{{$book->size}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Thể loại</td>
                        <td style="width:50%">
                            <p>{{$book->categories_id}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Ngày phát hành</td>
                        <td style="width:50%">
                            <p>{{$book->publish_date}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Tái bản</td>
                        <td style="width:50%">
                            <p>{{$book->reprint}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Đơn vị</td>
                        <td style="width:50%">
                            <p>{{$book->unit_id}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Tình trạng</td>
                        <td style="width:50%">
                            <p>{{$book->status}}</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



