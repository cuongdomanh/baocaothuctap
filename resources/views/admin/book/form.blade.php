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

    <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Giá <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('price', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('price', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('discount') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Giảm giá </label>
        <div class="col-md-4">
            {!! Form::text('discount', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('discount', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Đánh Giá Nhanh<span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::textarea('description', null, ['class' => 'form-control ckeditor ']) !!}
            {!! $errors->first('description', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Ảnh bìa <span class="required"> * </span></label>
        <div class="col-md-4">
            @if(isset($book))
                <img src="{{url('uploads/books/')}}/{{$book->thumbnail}}" alt="" WIDTH="100"/>
            @endif
            {!! Form::file('thumbnail', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('thumbnail', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('images') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Ảnh </label>
        <div class="col-md-4">
            @if(isset($book))
                @foreach($book->image as $img)
                    <div style="position: relative; width: 100px; height: auto; float: left">
                        <a href="{{url('admin/deleteimage/'.$img->id)}}"
                           style="color: #000; display: block; width: 20px; padding-bottom:4px; height: 25px; border-radius: 20px; position: absolute; top: 0; right: 0"
                           onclick="return confirm('Bạn chắc muốn xóa ảnh ?');"> X
                        </a>
                        <img src="{{url('/'.$img->url)}}" width="100px" height="120px"
                             style="padding:10px;"/>
                    </div>
                @endforeach
            @endif
            {!! Form::file('images[]', array('multiple'=>true)) !!}
            {!! $errors->first('images', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Nội dung<span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::textarea('content', null, ['class' => 'form-control ckeditor ']) !!}
            {!! $errors->first('content', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Số lượng <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('quantity', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('quantity', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
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
                                        {!! Form::checkbox('course[]', $item->id,(isset($bookcourse[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
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
                        @if($item->parent_id>0)
                            <option value="{{$item->id}}" {{ (isset($book) &&  $book->categories_id == $item->id ) ?  "selected":""}}>{{$item->title}}</option>
                        @endif
                    @endforeach
                </select>
            @endif
            {!! $errors->first('category', '<span id="book-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('publish_date') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Ngày phát hành <span class="required"> * </span></label>
        <div class="col-md-4">
            <label>
                {!! Form::date('publish_date', null, ['class' => 'form-control', 'data-required' => '1'])!!}
            </label>
            {!! $errors->first('publish_date', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>

    {{--<div class="form-group {{ $errors->has('reprint') ? 'has-error' : ''}}">--}}
        {{--<label class="control-label col-md-3">Tái bản <span class="required"> * </span></label>--}}
        {{--<div class="col-md-4">--}}
            {{--{!! Form::text('reprint', null, ['class' => 'form-control', 'data-required' => '1']) !!}--}}
            {{--{!! $errors->first('reprint', '<span id="description-error" class="help-block help-block-error">:message</span>') !!}--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="form-group {{ $errors->has('unit') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Đơn vị <span class="required"> * </span></label>
        <div class="col-md-4">
            {{--{!! Form::select('unit', $unit) !!}--}}
            @if(isset($unit))
                <select name="unit" id="">
                    @foreach($unit as $item)
                        <option value="{{$item->id}}" {{ (isset($book) &&  $book->unit_id    == $item->id ) ?  "selected":""}}>{{$item->title}}</option>
                    @endforeach
                </select>
            @endif
            {!! $errors->first('unit', '<span id="book-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group">

        {{--<label class="control-label col-md-3">Thẻ&nbsp;&nbsp;&nbsp;&nbsp</label>--}}

        <label class="control-label col-md-3">Tác giả &nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-9">
            <div class="checkbox-list margin-top-10">
                <div class="scroll" style="height: 100px;overflow-y: scroll ; width:90%">
                <table style="width: 99%; ">
                    @foreach($author as $key=>$item)
                        @if($key %3==0)
                            <tr style="padding-bottom:10px; max-width:50px">
                                @endif
                                <td>
                                    {!! Form::checkbox('author[]', $item->id,(isset($authorBook[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
                                </td>
                                <td>{{$item->name}}</td>

                                @if($key %3==2)
                            </tr>
                        @endif

                    @endforeach
                </table>
              </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">Thẻ&nbsp;&nbsp;&nbsp;&nbsp</label>
        <div class="col-md-9">
            <div class="checkbox-list margin-top-10">
                <div class="scroll" style="height: 100px;overflow-y: scroll ; width:90%">
                <table width="99%">
                    @foreach($tag as $key=>$item)

                        @if($key % 3==0)
                            <tr>
                                @endif
                                <td>
                                    {!! Form::checkbox('tag[]', $item->id,(isset($bookTag[$item->id]))?true:false, ['class' => 'margin-top-10']) !!}
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
    <div class="form-group">
        <label class="control-label col-md-3">Is Top Book&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('is_top', '1', (isset($book->is_top) && $book->is_top == 1) ? true : false, ['class' => 'margin-top-10']) !!}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3">Is Hot Book&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('is_hot', '1', (isset($book->is_hot) && $book->is_hot == 1) ? true : false, ['class' => 'margin-top-10']) !!}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3">Is Best Book&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('is_best', '1', (isset($book->is_best) && $book->is_best == 1) ? true : false, ['class' => 'margin-top-10']) !!}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3">Tình trạng&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-md-4">
            <div class="checkbox-list margin-top-10">
                <label>
                    {!! Form::checkbox('status', '1', (isset($book->status) && $book->status == 0) ? false : true, ['class' => 'margin-top-10']) !!}
                </label>
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Lưu', ['class' => 'btn green']) !!}

            <a href="{{ url('admin/book') }}" class="btn default">Hủy</a>

        </div>
    </div>
</div>





