<div class="form-body">
    @include('partials.admin.alert')
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        &nbsp;
        &nbsp;Bạn có một số lỗi biểu mẫu. Vui lòng kiểm tra bên dưới
    </div>
    <div class="alert alert-success display-hide">
        <button class="close" data-close="alert"></button>
        &nbsp;
        Xác nhận mẫu của bạn đã thành công!
    </div>

    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tiêu đề <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    @if(isset($book_id))
        <input type="hidden" name="book_id" value="{{$book_id}}">
    @endif
    @if(isset($course_id))
        <input type="hidden" name="course_id" value="{{$course_id}}">
    @endif
    <div>
       <center>
        <button type="button" class="btn btn-default btn-sm" id="booktag">
            <span class="glyphicon glyphicon-tag"></span> Sách
        </button>
        <button type="button" class="btn btn-default btn-sm" id="coursetag">
            <span class="glyphicon glyphicon-tag"></span> Khóa học
        </button>
       </center>
    </div>
    <div class="form-group" id="booktagcheckbox">
        <label class="control-label col-md-3">Sách&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-9">
            <div class="checkbox-list margin-top-10">

                <table width="80%">
                    @foreach($book as $key=>$item)
                        <?php
                        if(isset($book_id) &&$item->id==$book_id){
                            continue;
                        }
                        ?>
                        @if($key % 3==0)
                            <tr>
                                @endif
                                <td>
                                    {!! Form::checkbox('book[]', $item->id,(isset($bookTag[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
                                </td>

                                <td>{{$item->title}}</td>

                                @if($key %3==2)
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="form-group" id="coursetagcheckbox">
        <label class="control-label col-md-3">Khóa học&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-9">
            <div class="checkbox-list margin-top-10">

                <table width="80%">
                    @foreach($course as $key=>$item)
                        <?php
                        if(isset($course_id) && $item->id==$course_id){
                            continue;
                        }
                        ?>
                        @if($key % 3==0)
                            <tr>
                                @endif
                                <td>
                                    {!! Form::checkbox('course[]', $item->id,(isset($courseTag[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
                                </td>
                                <td>{{$item->title}}</td>



                                @if($key %3==2)
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Tình trạng&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('status', '1', (isset($tag->status) && $tag->status == 0) ? false : true, ['class' => 'margin-top-10']) !!}
                </label>
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Lưu', ['class' => 'btn green']) !!}
            {{--@permission('user-list')--}}
            {{--<a href="{{ url('admin/role') }}" class="btn default">Cancel</a>--}}
            {{--@endpermission--}}
        </div>
    </div>
</div>


