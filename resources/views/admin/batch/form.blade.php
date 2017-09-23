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
            {!! $errors->first('user_id', '<span id="user_id-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tiêu đề <span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Upload ảnh<span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::file('thumbnail', ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('cost', '<span id="cost-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Đơn giá <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('price', null, ['class' => 'form-control', 'data-required' => '1','id'=>'cprice']) !!}
            {!! $errors->first('price', '<span id="price-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('discount') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Giảm giá <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('discount', null, ['class' => 'form-control', 'data-required' => '1','id'=>'cdiscount']) !!}
            {!! $errors->first('discount', '<span id="discount-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    {{--<div class="form-group {{ $errors->has('keyBatch') ? 'has-error' : ''}}">--}}
        {{--<label class="control-label col-md-3">Mã xác nhận <span class="required"> * </span></label>--}}
        {{--<div class="col-md-8">--}}
            {{--{!! Form::text('keyBatch',(isset($batch->keyBatch->key))? $batch->keyBatch->key :"" , ['class' => 'form-control', 'data-required' => '1']) !!}--}}
            {{--{!! $errors->first('keyBatch', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group {{ $errors->has('countview') ? 'has-error' : ''}}">
        <label class="control-label col-md-3"> Số lần tham gia test<span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::number('countview',(isset($batch->countview))? $batch->countview :"" , ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('countview', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Khóa học&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-9">
            <div class="checkbox-list margin-top-10">
                <div class="scroll" style="height: 100px;overflow-y: scroll ; width:90%">
                    <table width="80%">
                        @foreach($course as $key => $item)
                            @if($key %3==0)
                                <tr style="padding-bottom:10px;">
                                    @endif
                                    <td>
                                        {!! Form::checkbox('course[]', $item->id,(isset($batchcourse[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
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

    <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Thể loại <span class="required"> * </span></label>
        <div class="col-md-4">
            {{--{!! Form::select('category', $category, null) !!}--}}
            @if(isset($category))
                <select name="category" id="">
                    @foreach($category as $item)
                        <option value="{{$item->id}}"{{ (isset($batch) &&  $batch->categories_id == $item->id ) ?  "selected":""}}>
                            {{$item->title}}
                        </option>
                    @endforeach
                </select>
            @endif
            {!! $errors->first('category', '<span id="book-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    @if(isset($test[1]))

        <div class="form-group">
            <label class="control-label col-md-3">Bài kiểm tra &nbsp;&nbsp;&nbsp;&nbsp</label>
            <div class="col-md-9">
                <div class="checkbox-list margin-top-10">
                    <div class="scroll" style="height: 100px;overflow-y: scroll ; width:90%">
                        <table width="80%">
                            @foreach($test as $key => $item)
                                @if($key %3==0)
                                    <tr style="padding-bottom:10px;">
                                        @endif
                                        <td>
                                            {!! Form::checkbox('test[]', $item->id,(isset($batchTest[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
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
    @endif
    <div class="form-group">
        <label class="control-label col-md-3">thể loại đề thi &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!!
                      Form::select('status',
                       [
                         '0' => 'tệp đề thi mất phí',
                         '1' => 'tệp đề thi miễn phí',

                       ],null,['id'=>'btstatus'])
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
            <a href="{{ url('admin/batch') }}" class="btn default">Hủy</a>
        </div>
    </div>
</div>




