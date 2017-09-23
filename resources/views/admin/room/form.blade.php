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
        <label class="control-label col-md-3">Người tạo  <span class="required"> * </span></label>
        <div class="col-md-4">
            {{Auth::user()->name}}
            <input type="hidden" name="user_id"value="{{Auth::id()}}">
            {!! $errors->first('user_id', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('id_room') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Mã phòng <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('id_room', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('id_room', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tên <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('title', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('start_time') ? 'has-error' : ''}}">
        <label class="control-label col-md-3"> Thời gian bắt đầu<span class="required"> * </span></label>
        <div class="col-md-4">
            <input type="datetime-local" name="start_time" class="form-control" data-required="1"
                   value="{{(isset($room->start_time))?$room->start_time :""}}">
            {!! $errors->first('start_time', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('end_time') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Thời gian kết thúc <span class="required"> * </span></label>
        <div class="col-md-4">
            <input type="datetime-local" name="end_time" class="form-control" data-required="1"
                   value="{{(isset($room->end_time))?$room->end_time :""}}">
            {!! $errors->first('end_time', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Phí Phòng Thi <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::number('cost', null, ['class' => 'form-control', 'data-required' => '1' , 'min'=>0]) !!}
            {!! $errors->first('cost', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    {{--@if(isset($test[1]))--}}

    {{--<div class="form-group">--}}
    {{--<label class="control-label col-md-3">Bài kiểm tra &nbsp;&nbsp;&nbsp;&nbsp</label>--}}
    {{--<div class="col-md-9">--}}
    {{--<div class="checkbox-list margin-top-10">--}}
    {{--<table width="80%">--}}
    {{--@foreach($test as $key => $item)--}}
    {{--@if($key %3==0)--}}
    {{--<tr style="padding-bottom:10px;">--}}
    {{--@endif--}}
    {{--<td>--}}
    {{--{!! Form::checkbox('test[]', $item->id,(isset($batchTest[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}--}}
    {{--</td>--}}
    {{--<td>{{$item->title}}</td>--}}

    {{--@if($key %3==2)--}}
    {{--</tr>--}}
    {{--@endif--}}

    {{--@endforeach--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endif
    <div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Phí Thi </label>
        <div class="col-md-4">
            {!! Form::number('cost', null, ['class' => 'form-control', 'data-required' => '1' ,'min'=>0]) !!}
            {!! $errors->first('cost', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
--}}
    <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Danh Mục Phòng Thi <span class="required"> * </span></label>
        <div class="col-md-4">
            {{--{!! Form::select('category', $category, null) !!}--}}
            @if(isset($category))
                <select name="categories_id" id="">
                    @foreach($category as $item)
                        @if($item->parent_id>0)
                            <option value="{{$item->id}}" {{ (isset($room) &&  $room->categories_id == $item->id ) ?  "selected":""}}>{{$item->title}}</option>
                        @endif
                    @endforeach
                </select>
            @endif
            {!! $errors->first('category', '<span id="book-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    {{--@if(isset($test[0]))--}}
        {{--<div class="form-group">--}}
            {{--<label class="control-label col-md-3">Các bài thi &nbsp;&nbsp;&nbsp;&nbsp</label>--}}
            {{--<div class="col-md-9">--}}
                {{--<div class="checkbox-list margin-top-10">--}}

                    {{--<table width="80%">--}}
                        {{--@foreach($test as $key=>$item)--}}
                            {{--@if($key %3==0)--}}
                                {{--<tr style="padding-bottom:10px;">--}}
                                    {{--@endif--}}
                                    {{--<td>--}}
                                        {{--{!! Form::radio('test[]', $item->id,(isset($roomTest[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}--}}
                                    {{--</td>--}}
                                    {{--<td>{{$item->title}}</td>--}}
                                    {{--@if($key %3==2)--}}
                                {{--</tr>--}}
                            {{--@endif--}}
                        {{--@endforeach--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endif--}}
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
        </div>
    </div>
</div>



