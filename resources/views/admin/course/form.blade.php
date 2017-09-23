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
        <label class="control-label col-md-3">Người tạo <span class="required"> * </span></label>
        <div class="col-md-4">
            {{--{!! Form::select('user_id', $user) !!}--}}
            {{Auth::user()->name}}
            {!! $errors->first('user', '<span id="user-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tiêu đề <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    {{--<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">--}}
        {{--<label class="control-label col-md-3">Mô tả<span class="required"> * </span></label>--}}
        {{--<div class="col-md-8">--}}
            {{--{!! Form::textarea('description', null, ['class' => 'form-control ckeditor ']) !!}--}}
            {{--{!! $errors->first('description', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Nội dung <span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::textarea('content', null, ['class' => 'form-control ckeditor ']) !!}
            {!! $errors->first('content', '<span id="content-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('video') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Video giới thiệu <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::file('video',['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('video', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Upload ảnh<span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::file('thumbnail', ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('cost', '<span id="cost-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Đơn giá <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('cost', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('cost', '<span id="cost-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('discount') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Giảm giá<span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::number('discount', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {{--<script>--}}
            {{--CKEDITOR.replace( 'discount', {--}}
            {{--extraPlugins: 'imageuploader'--}}
            {{--});--}}
            {{--</script>--}}
            {!! $errors->first('discount', '<span id="discount-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    {{--@if(isset($batch_id))--}}
    {{--<input type="hidden" name="batch_id" value="{{$batch_id}}">--}}
    {{--@else--}}
    <div class="form-group">
        <label class="control-label col-md-3">Tệp đề miễn phí &nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-9">
            <div class="checkbox-list margin-top-10">
                    <div class="scroll" style="height: 150px;overflow-y: scroll ; width:90%">
                    <table width="98%">
                        @foreach($batch as $key=>$item)
                           @if($item->status==1)
                            @if($key % 3==0)
                                <tr>
                                    @endif
                                    <td>
                                        {!! Form::checkbox('batch[]', $item->id,
                                        (isset($batchcourse[$item->id]))?true:false,
                                         ['class' => 'margin-top-10']) !!}
                                    </td>
                                    <td>{{$item->title}}</td>
                                    @if($key %3==2)
                                </tr>
                            @endif
                            @endif
                        @endforeach
                    </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Tệp đề thu phí &nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-9">
            <div class="checkbox-list margin-top-10">
                <div class="scroll" style="height: 150px;overflow-y: scroll ; width:90%">
                <table width="98%">
                    @foreach($batch as $key=>$item)
                        @if($item->status==0)
                        @if($key % 3==0)
                            <tr>
                                @endif
                                <td >
                                    {!! Form::checkbox('batch[]', $item->id,
                                    (isset($batchcourse[$item->id]))?true:false,
                                     ['class' => 'margin-top-10']) !!}
                                </td>
                                <td >{{$item->title}}</td>



                                @if($key %3==2)
                            </tr>
                        @endif
                        @endif
                    @endforeach
                </table>
                    </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Tag&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-9">
            <div class="checkbox-list margin-top-10">
                <div class="scroll" style="height: 100px;overflow-y: scroll ; width:90%">
                    <table  width="98%" >
                        @foreach($tag as $key=>$item)
                            @if($key % 3==0)
                                <tr>
                                    @endif
                                    <td>
                                        {!! Form::checkbox('tag[]', $item->id,(isset($courseTag[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
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
    </div>
    {{--@endif--}}

    <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Thể loại <span class="required"> * </span></label>
        <div class="col-md-4">
            {{--{!! Form::select('category', $category, null) !!}--}}
            @if(isset($category))
                <select name="category" id="">
                    @foreach($category as $item)
                        @if($item->parent_id>0 && $item->type==1)
                            <option value="{{$item->id}}"{{ (isset($course) &&  $course->categories_id == $item->id ) ?  "selected":""}}>
                                {{$item->title}}
                            </option>
                        @endif
                    @endforeach
                </select>
            @endif
            {!! $errors->first('category', '<span id="book-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Kích hoạt &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!!
                      Form::select('status',
                       [
                         '0' => 'không thu phí',
                         '1' => 'mất phí ',
                       ])
                     !!}
                </label>
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Lưu', ['class' => 'btn green']) !!}
            <a href="{{ url('admin/course') }}" class="btn default">Hủy</a>
        </div>
    </div>
</div>


