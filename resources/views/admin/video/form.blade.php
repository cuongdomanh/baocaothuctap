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

    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tiêu đề <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('video') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Upload video <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::file('video',['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('video', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    {{--<div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">--}}
        {{--<label class="control-label col-md-3">thumbnail <span class="required"> * </span></label>--}}
        {{--<div class="col-md-4">--}}
            {{--{!! Form::file('thumbnail',['class' => 'form-control', 'data-required' => '1']) !!}--}}
            {{--{!! $errors->first('thumbnail', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Nội dung<span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::textarea('content', null, ['class' => 'form-control ckeditor ']) !!}
            <script>
                CKEDITOR.config.filebrowserImageUploadUrl = '{!! url('image').'?_token='.csrf_token() !!}';
            </script>
            {!! $errors->first('content', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('server') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Server <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('server', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('server', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group ">
        <label class="control-label col-md-3">Thuộc thể loại <span class="required"> * </span></label>
        <div class="col-md-4">
            <select name="folder_id" id="">
                @if(isset($folder))
                    @foreach($folder as $item)
                        <option value="{{$item->id}}"{{(isset($video) && ($video->folder_id==$item->id ))? "selected":"" }}>
                            {{$item->title}}
                        </option>
                    @endforeach
                @endif
                {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
            </select>
        </div>
    </div>
    
    {{--<div class="form-group {{ $errors->has('upload_file') ? 'has-error' : ''}}">--}}
        {{--<label class="control-label col-md-3">Upload file <span class="required"> * </span></label>--}}
        {{--<div class="col-md-4">--}}
            {{--{!! Form::file('upload_file',['class' => 'form-control', 'data-required' => '1']) !!}--}}
            {{--{!! $errors->first('upload_file', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group {{ $errors->has('upload_file') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tài liệu đính kèm </label>
        <div class="col-md-4">
            @if(isset($video))
                @foreach($video->uploadbatch as $doc)
                    <div style="position: relative; width: 100px; height: auto; float: left">
                        <a href="{{url('admin/deletedoc/'.$doc->id)}}"
                           style="color: #000; display: block; width: 20px; padding-bottom:4px; height: 25px; border-radius: 20px; position: absolute; top: 0; right: 0"
                           onclick="return confirm('Bạn chắc muốn xóa file ?');"> X
                        </a>
                        {{$doc->name}}
                    </div>
                @endforeach
            @endif
            {!! Form::file('upload_file[]', array('multiple'=>true)) !!}
            {!! $errors->first('upload_file', '<span id="upload_file-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
   <!-- @if(isset($course_id)) -->
        <input type="hidden" name="course_id" value="{{$course_id}}">
   <!-- @endif -->
        <!-- <div class="form-group">
            <label class="control-label col-md-3">Khóa học&nbsp;&nbsp;&nbsp;&nbsp</label>
            <div class="col-md-9">
                <div class="checkbox-list margin-top-10">
                    <table style="width: 80%; ">
                    @foreach($course as $key=>$item)
                        <?php
                                if($item->id==$course_id){
                                    continue;
                                }
                        ?>
                           @if($key %3==0)
                               <tr style="padding-bottom:10px;">
                               @endif
                                   <td>
                                       {!! Form::checkbox('course[]', $item->id,(isset($courseVideo[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
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
 -->
    <div class="form-group">
        <label class="control-label col-md-3">Kích hoạt&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('status', '1', (isset($video->status) && $video->status == 0) ? false : true, ['class' => 'margin-top-10']) !!}
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


