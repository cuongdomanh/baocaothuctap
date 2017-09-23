<?php

namespace App\Http\Controllers;

use App\Course;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($idcourse,$id=null){

        $course=Course::where('is_deleted',false)->where('id',$idcourse)->first();
//        if(isset($id)) {
        $video = Video::where('is_deleted', false)->where('id', $id)->first();
//        }
        $video1=$test=null;
        foreach($course->video as $key=>$item){
            $video1[$item->folder->title][$item->id]=$item->title;
        }
        foreach($course->batch as $key=>$item){
            if(isset($item['test'][0])) {
                foreach ($item->test as $key2 => $item2) {
                    $test[ $item->title ][$item->id] = $item2;
                }
            }
        }

        return view('client.video.video',['video'=>$video,'course'=>$course,'video1'=>$video1,'test'=>$test]);
    }
}



