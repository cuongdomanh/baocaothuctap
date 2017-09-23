<div class="form-body">
    @include('partials.admin.alert')
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        &nbsp;Bạn có một số lỗi biểu mẫu. Vui lòng kiểm tra bên dưới
    </div>

    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tiêu đề <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('title', 'câu trả lời', ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('title', '<span id="title-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Nội dung <span class="required"> * </span></label>
        <div class="col-md-8">
             {!! Form::textarea('content', null, ['class' => 'form-control ckeditor ']) !!}
            {!! $errors->first('content', '<span id="content-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('is_correct') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Đáp án đúng  <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::checkbox('is_correct',1,false, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('is_correct', '<span id="is_correct-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
   @if(isset($anwserBatch_id))
        <input type="hidden" name="answer_batch_id" value="{{$anwserBatch_id}}">
       @else
    <div class="form-group {{ $errors->has('answer_batch_id') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Câu trả lời <span class="required"> * </span></label>
        <div class="col-md-4">
            {{--{!! Form::select('answer_batch_id', $answerbatch) !!}--}}
            <select name="answer_batch_id" id="">
                @foreach($answerbatch as $item)
                    <option value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>
            {!! $errors->first('answer_batch_id', '<span id="user-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    @endif
    {{--<div class="form-group {{ $errors->has('images') ? 'has-error' : ''}}">--}}
        {{--<label class="control-label col-md-3">ảnh <span class="required"> * </span></label>--}}
        {{--<div class="col-md-4">--}}
            {{--{!! Form::file('images[]', array('multiple'=>true)) !!}--}}
            {{--{!! $errors->first('images', '<span id="score-error" class="help-block help-block-error">:message</span>') !!}--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Lưu', ['class' => 'btn green']) !!}
                <a href="{{ url('admin/answer') }}" class="btn default">Hủy</a>
        </div>
    </div>
</div>


