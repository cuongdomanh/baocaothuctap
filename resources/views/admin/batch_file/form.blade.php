<div class="form-body">
    @include('partials.admin.alert')
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        &nbsp;Đã xảy ra lỗi.Vui lòng kiểm tra lại.
    </div>

    <div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">file upload <span class="required"> * </span></label>
        <div class="col-md-4">
            @if(isset($file))
                <img src="{{url('uploads/batch_files/')}}/{{$file->url}}" alt="" WIDTH="100"/>
            @endif
            {!! Form::file('url', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('url', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('test') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">File <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::select('test', $test) !!}
            @if(isset($test))
                <select name="test" id="">
                    @foreach($test as $item)
                        <option value="{{$item->id}}" {{ (isset($file) &&  $file->test_id == $item->id ) ?  "selected":""}}>{{$item->title}}</option>
                    @endforeach
                </select>
            @endif
            {!! $errors->first('test', '<span id="test-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3">Kích hoạt&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('status', '1', (isset($file->status) && $file->status == 0) ? false : true, ['class' => 'margin-top-10']) !!}
                </label>
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Lưu', ['class' => 'btn green']) !!}
            @permission('user-list')
            <a href="{{ url('admin/batch_file') }}" class="btn default">Hủy</a>
            @endpermission
        </div>
    </div>

</div>


