<div class="form-body">
    @include('partials.admin.alert')
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        &nbsp;
        Đã xảy ra lỗi. Vui lòng kiểm tra lại.
    </div>
    <div class="alert alert-success display-hide">
        <button class="close" data-close="alert"></button>
        &nbsp;
        Chúc mừng!
    </div>

    <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Người tạo<span class="required"> * </span></label>
        <div class="col-md-8">
            {{--{!! Form::select('user_id', $user) !!}--}}
            {{Auth::user()->name}}
            <input type="hidden" name="user_id" value="{{Auth::id()}}">
            {!! $errors->first('user_id', '<span id="test_id-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <input type="hidden" name="batchOrRoom" value="{{$id}}">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tiêu đề <span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('total_score') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tổng điểm<span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::number('total_score', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('total_score', '<span id="total_score-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('work_time') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Thời gian làm bài (phút)<span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::number('work_time', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('work_time', '<span id="total_score-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    @if(isset($batch))
        @if(isset($batch_id))
            <input type="hidden" name="batch_id" value="{{$batch_id}}">
        @endif
        <div class="form-group">
            <label class="control-label col-md-3">Nhóm đề&nbsp;&nbsp;&nbsp;&nbsp</label>
            <div class="col-md-9">
                <div class="checkbox-list margin-top-10">
                    <div class="scroll" style="height: 100px;overflow-y: scroll ; width:90%">
                        <table width="80%">
                            @foreach($batch as $key=>$item)
                                @if($key % 2==0)
                                    <tr>
                                        @endif
                                        <td>
                                            {!! Form::checkbox('batch[]', $item->id,(isset($batchTest[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
                                        </td>
                                        <td>{{$item->title}}</td>
                                        @if($key %2==1)
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(isset($room))
        @if(isset($room_id))
            <input type="hidden" name="room_id" value="{{$room_id}}">
        @endif
        <div class="form-group">
            <label class="control-label col-md-3">Phòng Thi &nbsp;&nbsp;&nbsp;&nbsp</label>
            <div class="col-md-9">
                <div class="checkbox-list margin-top-10">
                    <div class="scroll" style="height: 100px;overflow-y: scroll ; width:90%">
                        <table width="80%">
                            @foreach($room as $key=>$item)
                                @if($key % 2==0)
                                    <tr>
                                        @endif
                                        <td>
                                            {!! Form::checkbox('room[]', $item->id,(isset($roomTest[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
                                        </td>
                                        <td>{{$item->title}}</td>
                                        @if($key %2==1)
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="form-group {{ $errors->has('upload_batch') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tải lên tệp đề thi </label>
        <div class="col-md-4">
            @if(isset($test->manyFile))
                @foreach($test->manyFile as $ts)
                    <div style="position: relative; width: 100px; height: auto; float: right">

                        <a href="{{url('admin/deletefile/'.$ts->id)}}"
                           style="display: block; width: 20px; padding-bottom:4px; height: 25px; border-radius: 20px; position: absolute; top: 0; right: 0; float: right"
                           onclick="return confirm('Bạn chắc muốn xóa file ?');"> xóa
                        </a>
                    </div>
                    <p style="padding:10px;">{{$ts->name}}</p>
                @endforeach
            @endif
            {!! Form::file('upload_batch[]', array('multiple'=>true)) !!}
            {!! $errors->first('upload_batch', '<span id="upload_batch-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3">kich hoạt &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('status', null, (isset($test->status) && $test->status == 1) ? true : false, ['class' => 'margin-top-10']) !!}
                </label>
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Lưu', ['class' => 'btn green']) !!}

        </div>
    </div>
</div>



