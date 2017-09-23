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
    <input type="hidden" name="test_id" value="{{$id_test}}">
    <input type="hidden" name="idBatchOrRoom" value="{{$idBatchOrRoom}}">
    <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Nội Dung <span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::textarea('content', null, ['class' => 'form-control ckeditor ']) !!}
            {!! $errors->first('content', '<span id="content-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('explain') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Giải Thích Câu Hỏi <span class="required"> * </span></label>
        <div class="col-md-8">
            {!! Form::textarea('explain', null, ['class' => 'form-control ckeditor ']) !!}
            {!! $errors->first('explain', '<span id="content-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <!-- BEGIN EXTRAS PORTLET-->
    <div class="portlet-body form">
        @for($i=0 ;$i<$numberAnswer ;$i++)
            @if($i%2==0)
                <div class="row">
                    @endif
                    <div class="col-md-12 ">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet light bordered">
                            <div class="showReporting">
                                <div class="flip">Câu {{$i+1}}</div>
                                <div class="panela">
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <div class="col-md-2 ">
                                                    <select name="showQuestion[{{$i}}]" id="">
                                                        <option value="0" {{(isset($showQuestion[$i]) && $showQuestion[$i]==0)? "selected":""}}>
                                                            hàng dọc
                                                        </option>
                                                        <option value="1" {{(isset($showQuestion[$i]) && $showQuestion[$i]==1)? "selected":""}}>
                                                            2 hàng
                                                        </option>
                                                        <option value="2" {{(isset($showQuestion[$i]) && $showQuestion[$i]==2)? "selected":""}}>
                                                            hàng ngang
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder=""
                                                           class="form-control"
                                                           name="answerbatch[{{$i}}]"
                                                           value="{{(isset($answerbatch[$i]))?$answerbatch[$i] :"câu"}}">
                                                    {{--{!! Form::text("answerbatch[$i]", null, ['class' => 'form-control', 'data-required' => '1']) !!}--}}
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="number" class="form-control" name="sub_score[{{$i}}]"
                                                           placeholder="Điểm"
                                                           value="{{(isset($answercore[$i]))?$answercore[$i] :""}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-1  control-label">
                                                    <label for="optionsRadios[{{$i}}][0]">
                                                        A
                                                    </label>
                                                    <input type="radio" name="answerCorrect[{{$i}}]"
                                                           id="optionsRadios[{{$i}}][0]"
                                                           value="0" {{( isset($isCorrect[$i][0]) && $isCorrect[$i][0]==1) ? "checked" : "" }} >
                                                </div>
                                                <div class="col-md-10">
                                        <textarea class="wysihtml5 form-control" rows="6" name="answer[{{$i}}][]">
                                            {{(isset($answer[$i][0]))? $answer[$i][0] :""}}
                                        </textarea>
                                                    <input type="file" name="image[{{$i}}][0][]" multiple>
                                                </div>

                                                <div class="col-md-1">
                                                    @if(isset($foml[$i][0]))
                                                        @foreach($foml[$i][0] as $item)
                                                            <div style="position: relative; width: 50px; height: auto; float: left">
                                                                <a href="{{url('admin/questionFormular/'.$item->id)}}"
                                                                   style="color: #000; display: block; width: 20px; padding-bottom:4px; height: 25px; border-radius: 20px; position: absolute; top: 0; right: 0"
                                                                   onclick="return confirm('Bạn chắc muốn xóa ảnh ?');">
                                                                    X
                                                                </a>
                                                                <img src="{{url($item->image)}}" alt=""
                                                                     style="width:100% ; border: 1px solid #0b94ea; margin-bottom: 1px">

                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-1 control-label">
                                                    <label for="optionsRadios[{{$i}}][1]">B</label>
                                                    <input type="radio" name="answerCorrect[{{$i}}]"
                                                           id="optionsRadios[{{$i}}][1]"
                                                           value="1" {{( isset($isCorrect[$i][1]) && $isCorrect[$i][1]==1) ? "checked" : "" }}>
                                                </div>
                                                <div class="col-md-10">
                                        <textarea class="wysihtml5 form-control" rows="5" name="answer[{{$i}}][]">
                                            {{(isset($answer[$i][1]))? $answer[$i][1] :""}}
                                        </textarea>
                                                    <input type="file" name="image[{{$i}}][1][]" multiple>
                                                </div>
                                                <div class="col-md-1">
                                                    @if(isset($foml[$i][1]))
                                                        @foreach($foml[$i][1] as $item)
                                                            <div style="position: relative; width: 100px; height: auto; float: left">
                                                                <a href="{{url('admin/questionFormular/'.$item->id)}}"
                                                                   style="color: #000; display: block; width: 20px; padding-bottom:4px; height: 25px; border-radius: 20px; position: absolute; top: 0; right: 0"
                                                                   onclick="return confirm('Bạn chắc muốn xóa ảnh ?');">
                                                                    X
                                                                </a>
                                                                <img src="{{url($item->image)}}" alt=""
                                                                     style="width:100% ; border: 1px solid #0b94ea; margin-bottom: 1px">

                                                            </div>

                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-1 control-label">
                                                    <label for="optionsRadios[{{$i}}][2]">C</label>
                                                    <input type="radio" name="answerCorrect[{{$i}}]"
                                                           id="optionsRadios[{{$i}}][2]"
                                                           value="2" {{( isset($isCorrect[$i][2]) && $isCorrect[$i][2]==1) ? "checked" : "" }}>
                                                </div>
                                                <div class="col-sm-10">
                                        <textarea class="wysihtml5 form-control" rows="5" cols="10"
                                                  name="answer[{{$i}}][]">
                                            {{(isset($answer[$i][2]))? $answer[$i][2] :""}}
                                        </textarea>
                                                    <input type="file" name="image[{{$i}}][2][]" multiple>
                                                </div>
                                                <div class="col-md-1">
                                                    @if(isset($foml[$i][2]))
                                                        @foreach($foml[$i][2] as $item)
                                                            <div style="position: relative; width: 100px; height: auto; float: left">
                                                                <a href="{{url('admin/questionFormular/'.$item->id)}}"
                                                                   style="color: #000; display: block; width: 20px; padding-bottom:4px; height: 25px; border-radius: 20px; position: absolute; top: 0; right: 0"
                                                                   onclick="return confirm('Bạn chắc muốn xóa ảnh ?');">
                                                                    X
                                                                </a>
                                                                <img src="{{url($item->image)}}" alt=""
                                                                     style="width:100% ; border: 1px solid #0b94ea; margin-bottom: 1px">

                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-1 control-label">
                                                    <label for="optionsRadios[{{$i}}][3]">D</label>
                                                    <input type="radio" name="answerCorrect[{{$i}}]"
                                                           id="optionsRadios[{{$i}}][3]"
                                                           value="3" {{(isset($isCorrect[$i][3]) && $isCorrect[$i][3]==1) ? "checked" : "" }}>
                                                </div>
                                                <div class="col-md-10">
                                        <textarea class="wysihtml5 form-control" rows="5" name="answer[{{$i}}][]">
                                             {{(isset($answer[$i][3]))? $answer[$i][3] :""}}
                                        </textarea>
                                                    <input type="file" name="image[{{$i}}][3][]" multiple>
                                                </div>
                                                <div class="col-md-1">
                                                    @if(isset($foml[$i][3]))
                                                        @foreach($foml[$i][3] as $item)
                                                            <div style="position: relative; width: 100px; height: auto; float: left">
                                                                <a href="{{url('admin/questionFormular/'.$item->id)}}"
                                                                   style="color: #000; display: block; width: 20px; padding-bottom:4px; height: 25px; border-radius: 20px; position: absolute; top: 0; right: 0"
                                                                   onclick="return confirm('Bạn chắc muốn xóa ảnh ?');">
                                                                    X
                                                                </a>
                                                                <img src="{{url($item->image)}}" alt=""
                                                                     style="width:100% ; border: 1px solid #0b94ea; margin-bottom: 1px">

                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($i%2==1)
                </div>
            @endif
        @endfor
    </div>

    <div class="form-group {{ $errors->has('score') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Điểm <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::text('score', null, ['class' => 'form-control', 'data-required' => '1']) !!}
            {!! $errors->first('score', '<span id="score-error" class="help-block help-block-error">:message</span>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('images') ? 'has-error' : ''}}">
        <label class="control-label col-md-3">Ảnh <span class="required"> * </span></label>
        <div class="col-md-4">
            {!! Form::file('images[]', array('multiple'=>true)) !!}
            {!! $errors->first('images', '<span id="score-error" class="help-block help-block-error">:message</span>') !!}
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
                         '0' => 'Chưa kích hoạt',
                         '1' => 'Đã kích hoạt'
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
            <a href="{{ url('admin/batch') }}" class="btn default">Hủy</a>
        </div>
    </div>
</div>


