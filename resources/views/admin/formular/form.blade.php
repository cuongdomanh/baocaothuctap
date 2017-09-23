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
    <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Ảnh<span class="required"> * </span></label>
        <div class="col-md-4">
           @if( isset($formular) )
            <p>
               <img src="{{ url('uploads/formular/'.$formular->image) }}" width="50"/> 
            </p>
           @endif
             
            {!! Form::file('image', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('image', '<span id="image-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Thể loại &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!!
                      Form::select('type',
                       [
                         '0' => '0'
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
            <a href="{{ url('admin/formular') }}" class="btn default">Hủy</a>
        </div>
    </div>
</div>



