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

    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tên <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('name', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('name', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    {{--@if(isset($book_id))--}}
        {{--<input type="hidden" name="book_id" value="{{$book_id}}">--}}
    {{--@else--}}
        <div class="form-group">
            <label class="control-label col-md-3">Sách&nbsp;&nbsp;&nbsp;&nbsp</label>
            <div class="col-md-9">
                <div class="checkbox-list margin-top-10">
                    <table style="width: 80%; ">
                        @foreach($book as $key=>$item)
                            @if($key %3==0)
                                <tr style="padding-bottom:10px;">
                                    @endif
                                    <td>
                                        {!! Form::checkbox('book[]', $item->id,(isset($authorBook[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
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
    {{--@endif--}}
    <div class="form-group">
        <label class="control-label col-md-3">Kích hoạt&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('status', '1', (isset($author->status) && $author->status == 0) ? false: true, ['class' => 'margin-top-10']) !!}
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



