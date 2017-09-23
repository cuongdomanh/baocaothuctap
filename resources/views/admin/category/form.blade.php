<div class="form-body">
    @include('partials.admin.alert')
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        &nbsp;Bạn có một số lỗi biểu mẫu. Vui lòng kiểm tra bên dưới
    </div>

    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tiêu đề <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Tiêu đề lớn</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <select class="checkbox-list margin-top-10" name="parent_id">
                    <option value="0" selected="selected">Danh mục cha</option>
                    @foreach($categoryParent as $item)
                        <option value="{{ $item->id }}" {{($item->parent_id==$item->id)? 'selected' : ''}}>{{ $item->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Loại &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!!
                      Form::select('type',
                       [
                         '0' => 'Sách',
                         '1' => 'Khóa học ',
                         '2' => 'Tài liệu',
                         '3' => 'Phòng thi ',
                       ])
                     !!}
                </label>
            </div>
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
                        '1' => 'Đã kích hoạt',
                         '0' => 'Chưa kích hoạt'

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
            <a href="{{ url('admin/category') }}" class="btn default">Hủy</a>
        </div>
    </div>
</div>


