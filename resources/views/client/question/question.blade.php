@extends('client.layouts.index')
@section('content')

    <div class="container">
        <center><h1> Đề Thi Online</h1></center>
        <div class="row" style="min-height: 1000px">
            <div class="col-md-9" style="min-height: 1000px ;">
                @if(isset($batch_id))
                    {!! Form::open(['method'=>'post','url'=>['usertest',$batch_id."-b",$test->id,$test->slug]    ,'id'=>'cbtnsubmit' ]) !!}
                    <input type="hidden" name="batch_id" value="{{$batch_id}}">
                @endif
                @if(isset($room_id))
                    {!! Form::open(['method'=>'post','url'=>['usertest',$room_id."-r",$test->id,$test->slug]    ,'id'=>'cbtnsubmit' ]) !!}
                    <input type="hidden" name="room_id" value="{{$room_id}}">
                @endif
                @if(isset($test->question))
                    <?php $i = 1;?>
                    @foreach($test->question as $key=>$item)

                        {{--lấy giá trị question để khong bị mất --}}
                        <input type="hidden" id="question" name="questionPost[]" value="{{$item->id}}">
                        <div class="question">
                            <h4 style="border-bottom: 1px solid green ; color: green">
                                Câu Hỏi:({{$item->score}}đ):&nbsp;
                            </h4>

                            <div style="clear:both"></div>
                            @if(isset($item->formular[0]['question_id']))
                                @if(count($item->formular)<2)
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5>{!! $item->content !!}</h5>
                                        </div>
                                        <div class="col-md-3">
                                            @foreach($item->formular as $fmlarItem)
                                                <div><img src="{{url($fmlarItem->image)}}" alt=""
                                                          style="width: 100%; max-height: 200px;"></div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="title">
                                        <h4>{!! $item->content !!} </h4>
                                        {{--<img src="" alt="" style="width: 100% ;height: 100px">--}}
                                        <div class="row">
                                            @foreach($item->formular as $fmlarItem)
                                                <div class="col-md-3">
                                                    <div>
                                                        <img src="{{url($fmlarItem->image)}}"
                                                             alt="" style="width: 100%; max-height: 200px;">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="title">
                                    <h4>{!! $item->content !!} </h4>
                                </div>
                            @endif
                            <div class="answer">
                                @foreach($item->answerbatch as $key1=>$asBItem)

                                    <div class="answer-items" id="{{$asBItem->id}}">
                                        <ol type="A"
                                        <?php
                                            if ($asBItem->status == 0) {
                                                echo "class='full'";
                                            }
                                            if ($asBItem->status == 1) {
                                                echo " class = 'half' ";
                                            }
                                            ?>
                                        >
                                            {{--lấy giá trị batch không bị mất vị trí khi random--}}
                                            <input type="hidden" name="answerBatchPost[{{$item->id}}][]" value="{{$asBItem->id}}">
                                            @if(isset($answerRight[$asBItem->id]))
                                                <p style="font-size: 18px;color:#1d943b">câu {{$i++}}:
                                                    <span style="float: right;">
                                                        {{ ($answerRight[$asBItem->id]->answerbatch->sub_score!=0) ?
                                                        $answerRight[$asBItem->id]->answerbatch->sub_score."đ" : "" }}
                                                    </span>
                                                </p>

                                            @else
                                                <p style="font-size: 18px;margin-left: -10px;">câu {{$i++}}:</p>


                                            @endif
                                            <input type="hidden" value="{{$asBItem->id}}" name="asB[]">
                                            @foreach($asBItem->answer as $key2=>$asItem)
                                                <li>
                                                    <input type="radio"
                                                           name="answer[{{$item->id}}][{{$asBItem->id}}]"
                                                           id="answer{{$item->id}}{{$key2}}" value="{{$asItem->id}}"
                                                           {{(!empty($allAnswerRight[$asBItem->id])&&
                                                            $allAnswerRight[$asBItem->id]->id==$asItem->id)? 'checked':'' }}
                                                           style="padding:10px">
                                                    {{--lấy giá trị answer để gửi về khi radom không bị mất vị trí --}}
                                                    <input type="hidden" name="answerPost[{{$item->id}}][{{$asBItem->id}}][]" value="{{$asItem->id}}">
                                                    @if(!empty($allAnswerRight[$asBItem->id]) &&
                                                    $allAnswerRight[$asBItem->id]->id==$asItem->id)
                                                        <span style="color:red">
                                                                    {!! htmlspecialchars_decode($asItem->content) !!}
                                                            </span>
                                                    @else

                                                        @if(isset($asItem->formular[0]))
                                                            <table style="width: 40%">
                                                                <tr>
                                                                    <td style="margin-top:30px">
                                                                        {!! htmlspecialchars_decode($asItem->content) !!}
                                                                        &nbsp;&nbsp;&nbsp;
                                                                    </td>
                                                                    <td>
                                                                        @foreach($asItem->formular as $imgItem)
                                                                            <img src="{{url($imgItem->image)}}"
                                                                                 alt=""
                                                                                 style="max-width: 100px; max-height: 100px">
                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                            {!! htmlspecialchars_decode($asItem->content) !!}
                                                        @endif

                                                    @endif
                                                </li>
                                            @endforeach
                                            {{--</table>--}}
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>

                                @endforeach
                            </div>
                            <br>
                            @if(isset($allAnswerRight))
                            <button type="button" class="btn btn-warning btn-sm show-report-form pull-right"
                                    data-id="{{ $item->id }}">
                                Đánh giá
                            </button>
                            @endif
                            <br>
                            @if(isset($allAnswerRight))
                                <div class="detailAnswer">{!! $item->explain!!}</div>
                                <div class="clear"></div>
                                <br>
                                <div class="showReporting">

                                    {{--@if(isset($item['batchComment'][0]))--}}
                                    <div class="flip">Bấm vào xem bình luận</div>
                                    <div class="panela" id="questionComment-{{ $item->id }}">
                                        @foreach ($item->batchComment as $key => $itemReport)
                                            <div class="review">
                                                <h5><a href="javascript: void(0)">{{$itemReport->email}}</a></h5>
                                                <small>Đánh giá bởi
                                                    <span>{{$itemReport->name}} </span>lúc {{$itemReport->created_at}}
                                                </small>
                                                <div class="review-txt"> {{$itemReport->content}}</div>
                                                <hr>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{--@endif--}}

                                </div>
                            @endif
                        </div>

                        <br>

                    @endforeach
                @endif
                <button type="submit" id="cbtnsubmit" class="btn btn-success btn-lg"
                        style="float:right; margin-top:10px" onclick="return confirm('Bạn chắc muốn nộp bài ?');">Gửi
                    bài
                </button>
                {!! Form::close() !!}
            </div>
            <div class="col-md-3 " style=" min-height: 1000px">
                @if(isset($_SESSION['TIMER']))
                    <div class="clockquestion">
                        <span class="glyphicon glyphicon-time h3">  </span>
                        <span class="hours"></span>
                        <span>:</span>
                        <span class="mins"></span>
                        <span>:</span>
                        <span class="secs"></span>
                        <audio id="myAudio">
                            <source src="{{url('uploads/audio.mp3')}}" type="audio/ogg">
                            <source src="{{url('uploads/audio.mp3')}}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                @endif
                <div class="block block-progress">
                    <div class="block-title ">Bảng xếp hạng</div>
                    @if(isset($_SESSION['TIMER']))
                        <script type="text/javascript">
                            var TimeLimit = new Date('<?php echo date('r', $_SESSION['TIMER']) ?>');
                            function countdownto() {
                                var date = Math.round((TimeLimit - new Date()) / 1000);
                                var hours = Math.floor(date / 3600);
                                date = date - (hours * 3600);
                                var mins = Math.floor(date / 60);
                                date = date - (mins * 60);
                                var secs = date;
                                if (hours < 10) hours = '0' + hours;
                                if (mins < 10) mins = '0' + mins;
                                if (secs < 10) secs = '0' + secs;
                                if (hours < 1 && mins == 10 && secs < 1) {
                                    var x = document.getElementById("myAudio");
                                    x.play();
                                }
                                if (hours == 0 && mins == 0 && secs == 0) {
                                    $('#cbtnsubmit').submit();
                                }

                                $('.hours').html(hours);
                                $('.mins').html(mins);
                                $('.secs').html(secs);
                                setTimeout("countdownto()", 1000);
                            }
                            countdownto();
                        </script>
                    @endif
                    <div class="block-content">
                        @if(isset($totalCorse))
                            <h5>Tổng số điểm của bạn là : <span class="h4" style="color:red">{{$totalCorse}} đ</span>
                            </h5>
                        @endif
                        <table width="100%">
                            @if(isset($rank))
                                @foreach($rank as $key=>$item)
                                    @foreach($item as $key2=>$item2)
                                        <tr>
                                            <td width="30px">
                                                @if(isset($item2['thumbnai']))
                                                    <img src="{{url($item2['thumbnai'])}}" alt=""
                                                         style="width: 30px; height: auto">
                                                @else
                                                    <img src="{{url('')}}" alt="" style="width: 30px; height: auto">
                                                @endif

                                            </td>

                                            <td>
                                                <h5>&nbsp;&nbsp;{{$item2['name']}}</h5>
                                            </td>
                                            <td>
                                                <p>{{$key}}</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
                <div class="block block-progress">
                    <div class="block-title ">Tài liệu</div>
                    <div class="block-content">
                        @foreach($test->manyFile as $doc)
                            <a href="{{url('/'.$doc->url)}}" download="">
                                <button type="button" class="btn btn-primary"><i
                                            class="glyphicon glyphicon-book"></i>{{$doc->name}}</button>
                            </a> &nbsp;
                        @endforeach
                    </div>
                </div>
                <div class="block block-progress my-sticky-element">
                    @if(isset($allAnswerRight))
                        <div class="block-title ">Kết quả</div>
                        <div class="block-content">
                            <div>
                                <h3>Kết quả:
                                    <small class="h3 text-success green">Trượt</small>
                                </h3>
                                <hr>
                                {{--<div class="col-sm-6">--}}
                                <h6>ĐIỂM CAO NHẤT:
                                    <small class="h4 text-success green">{{$maxScore}}</small>
                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <small class="h5 text-success green"><span
                                                class="text-danger glyphicon glyphicon-remove-circle"> SAI</span>&nbsp;
                                    </small>
                                </h6>

                                <h6>ĐIỂM CỦA BẠN :
                                    <small class="h4 text-success green">{{$totalCorse}} đ</small>

                                    &nbsp;&nbsp;
                                    <small class="h5 text-success green"><span
                                                class="text-primary glyphicon glyphicon-ok-circle"> ĐÚNG</span>
                                    </small>
                                </h6>
                                <h6>THỨ HẠNG:

                                    <small class="h4 text-success green">{{$currenLoc}}/{{$maxLocation}}</small>

                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <small class="h5 text-success green"><span
                                                class="text-success glyphicon glyphicon-ok-circle"> ĐÁP_ÁN</span>
                                    </small>
                                </h6>
                                <div class="row"></div>
                                <hr>
                                <h5>PHẦN TRẢ LỜI:

                                    <small class="h4 text-success green">{{$numberAnswerRight}}
                                        /{{count($allAnswerRight)}}</small>
                                </h5>
                                <hr>
                                <?php $k = 0?>
                                <div class="scroll" style="height: 200px;overflow-y: scroll">
                                    <table>
                                        @if(isset($test->question))
                                            <?php $j=1?>
                                            @foreach($test->question as $key=>$item)

                                                @foreach($item->answerbatch as $key2=>$item2)
                                                    <?php $k++; ?>
                                                    <tr>
                                                        <td width="40px"><a href="#{{$item2->id}}">câu {{$j++}}</a>
                                                        </td>
                                                        @foreach($item2->answer as $key3=>$item3)
                                                            <td>
                                                                @if(isset($allAnswerRight[$item2->id]->id)
                                                                &&$allAnswerRight[$item2->id]->id==$item3->id
                                                                && isset($answerUser[$item->id][$item2->id])
                                                                 && $answerUser[$item->id][$item2->id]==$item3->id)
                                                                    <span class="text-success glyphicon glyphicon-ok-circle"
                                                                          style="font-size:30px">
                                                                      </span>&nbsp;&nbsp;
                                                                @elseif(isset($answerUser[$item->id][$item2->id])
                                                             && $answerUser[$item->id][$item2->id]==$item3->id
                                                             &&isset($allAnswerRight[$item2->id]->id)
                                                            &&$allAnswerRight[$item2->id]->id!=$item3->id
                                                             )
                                                                    <span class="text-danger glyphicon glyphicon-remove-circle"
                                                                          style="font-size:25px"></span>&nbsp;
                                                                @elseif(isset($allAnswerRight[$item2->id]->id)
                                                                   &&$allAnswerRight[$item2->id]->id==$item3->id )
                                                                    <span class="text-primary glyphicon glyphicon-ok-circle"
                                                                          style="font-size:25px"></span>&nbsp;&nbsp;
                                                                @else
                                                                    @if($key3==0)
                                                                        <img src="{{url('images/a.jpg')}}" class="h3"
                                                                             style="width:50%;border-radius: 50%; margin-top: 0px">
                                                                        &nbsp;&nbsp;
                                                                    @endif
                                                                    @if($key3==1)
                                                                        <img src="{{url('images/b.jpg')}}" class="h3"
                                                                             style="width:50%;border-radius: 50%; margin-top: 0px">
                                                                        &nbsp;&nbsp;
                                                                    @endif
                                                                    @if($key3==2)
                                                                        <img src="{{url('images/c.jpg')}}" class="h3"
                                                                             style="width:50%;border-radius: 50%; margin-top: 0px">
                                                                        &nbsp;&nbsp;
                                                                    @endif
                                                                    @if($key3 ==3)
                                                                        <img src="{{url('images/d.jpg')}}" class="h3"
                                                                             style="width:50%;border-radius: 50%; margin-top: 0px">
                                                                        &nbsp;&nbsp;
                                                                    @endif
                                                                @endif
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div id="reportModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Đánh giá</h4>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['method' => "POST",
                                'url' => 'question/reporting',
                                'id' => 'questionReporting',
                                'class' => "form"
                                ]) !!}
                                <?php
                                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                ?>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="answerId" id="answerId"/>
                                    <input type="hidden" class="form-control" name="urlId" id="urlId"
                                           value="{{$actual_link}}"/>
                                    <textarea class="form-control" id="exampleTextarea" name="reportContent" rows="3"
                                              placeholder="Nhập nội dung đánh giá của bạn"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Gửi</button>
                                {!! Form::close() !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // SCROLL CHUOT
        var $cache = $('.my-sticky-element');
        var vTop = $cache.offset().top - parseFloat($cache.css('margin-top').replace(/auto/, 0));
        $(window).scroll(function () {
            var y = $(this).scrollTop();

            if (y >= vTop) {
                $cache.addClass('stuck');
            } else {
                $cache.removeClass('stuck');
            }
        });
    </script>
@endsection






