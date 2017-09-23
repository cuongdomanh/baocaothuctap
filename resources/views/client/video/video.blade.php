@extends('client.layouts.index')
@section('content')
    <div class="container">

        <div class="col-md-9" style="min-height: 1000px; margin-top:10px;">
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Xảy ra lỗi!</strong>{{$errors->first()}}
                </div>
            @endif
            <h1>{{(isset($video))?$video->title:$course->title}} </h1>
            <hr>
            @if(isset($video))
                <div class="video_course">
                    <video controls>
                        <source src="{{url($video->url)}}" type="video/mp4">
                        <source src="{{url($video->url)}}" type="video/ogg">
                    </video>
                </div>
                <p class="content">
                    {!! $video->content !!}
                </p>
            @else
                <div class="video_course">
                    <video controls>
                        <source src="{{url($course->url_video)}}" type="video/mp4">
                        <source src="{{url($course->url_video)}}" type="video/ogg">
                    </video>
                </div>
                <div class="video_course">
                    {!! $course->description !!}
                </div>
            @endif
        </div>
        <div class="col-md-3" style="min-height: 1000px; ">
            <table class="table table-hover" style="margin-top: 48px">
                <thead>
                <tr>
                    <th style="font-size:19px">video của khóa hoc</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($video1))
                    <?php $k = 0;?>
                    @foreach($video1 as $key=>$item)
                        <?php $k++?>
                        <tr onclick="videoslide({{$k}})">
                            <td style="color:#1DC116; font-size:18px; " id="videoslide">
                                {{$key}}
                            </td>
                        </tr>
                        @foreach($item as $key2=>$value)
                            <tr class="videopanel{{$k}}">
                                <td>
                                    <span class="glyphicon glyphicon-facetime-video" style="color:red ;font-size:20px">

                                    </span>
                                    <a href="{{url('video/'.$course->id.'/'.$key2)}}">{{$value}}</a>

                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                @else
                    <tr>
                        <td>video của khóa học chưa câp nhật</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="font-size:19px">các đề thi</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($test))
                    <?php $k1 = 0 ?>
                    @foreach($test as $key=>$item)
                        <?php $k1++?>
                        <tr onclick="testslide({{$k1}})">
                            <td style="font-size:18px; color:#1DC116">
                                {{$key}}
                            </td>
                        </tr>
                        @foreach($item as $key2=>$item2)
                            <tr class="testpnal{{$k1}}">
                                <td><span class="glyphicon glyphicon-education"
                                          style="font-size:18px ; color:blue"></span>
                                    @if($course->status==0)
                                        <a href="{{url('usertest/'.$key2.'-b/'.$item2->id .'/'.$item2->slug )}}">{{$item2->title}}</a>
                                    @else

                                        <a href="{{url('usertest/'.$key2.'-b/'.$item2->id .'/'.$item2->slug )}}">
                                            {{$item2->title}}
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                @else
                    <tr>
                        <td> tệp đề thi của khóa học đang được cập nhập</td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>
    </div>
@endsection


