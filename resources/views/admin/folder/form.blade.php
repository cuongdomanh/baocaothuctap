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
        <label class="control-label col-md-3">Tên tệp <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    {{--<div class="form-group ">--}}
        {{--<label class="control-label col-md-3">Tệp cha<span class="required"> * </span></label>--}}
        {{--<div class="col-md-4">--}}
            {{--<select name="parent_id" id="">--}}
                {{--<option value="0">Tệp cha</option>--}}
            {{--@if(isset($folderParent))--}}
                {{--@foreach($folderParent as $item)--}}
                        {{--<option value="{{$item->id}}"--}}
                                {{--{{(isset($folder) && ($folder->id==$item->id && $folder->parent_id!=0))? "selected":"" }}--}}
                                {{--{{(isset($folder) && ($folder->id==$item->id && $folder->parent_id==0))? "hidden":"" }}>--}}
                                {{--{{$item->title}}--}}
                        {{--</option>--}}
                {{--@endforeach--}}
            {{--@endif--}}
            {{--{!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}--}}
            {{--</select>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group">
        <label class="control-label col-md-3">Kích hoạt&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('status', '1', (isset($folder->status) && $folder->status == 0) ? false : true, ['class' => 'margin-top-10']) !!}
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


