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
    @if(isset($question_id))
        <input type="hidden" name="question_id"value="{{$question_id}}">
    @else
    <div class="form-group {{ $errors->has('question_id') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Câu hỏi  <span class="required"> * </span></label>
        <div class="col-md-4">
            {{--{!! Form::select('question_id', $question) !!}--}}
            <select name="question_id" id="">
                @foreach($question as $item)
                    <option value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>
            {!! $errors->first('question_id', '<span id="question_id-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    @endif
    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">HIỂN THỊ THEO<span class="required"> * </span></label>
        <div class="col-md-4">
            <select name="status" id="">
                <option value="0"{{(isset($answerbatch) && $answerbatch->status==0)?'selected':''}}>hiển thị 1 cột</option>
                <option value="1"{{(isset($answerbatch) && $answerbatch->status==1)?'selected':''}}>hiển thị 2 cột</option>
                <option value="2"{{(isset($answerbatch) && $answerbatch->status==2)?'selected':''}}> hiển thị 1 hàng </option>
            </select>
        {!! $errors->first('answer_batch_id', '<span id="user-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
      <div class="form-group {{ $errors->has('sub_score') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Tổng điểm <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('sub_score', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('sub_score', '<span id="sub_score-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Lưu', ['class' => 'btn green']) !!}
                <a href="{{ url('admin/answerbatch') }}" class="btn default">Hủy</a>
        </div>
    </div>
</div>








