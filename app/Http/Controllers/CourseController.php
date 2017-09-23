<?php

namespace App\Http\Controllers;

use App\UploadBatch;
use App\User;
use App\Test;
use Carbon\Carbon;
use App\Video;
use App\Course;
use App\course_video;
use Illuminate\Http\Request;
use App\course_comment;
use Cart;
use App\Tag;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    function __construct()
    {
        $keyword = '';
        view()->share(['keyword' => $keyword]);
    }

    public function index($id = null)
    {
        $course = Course::where('is_deleted', false)->orderBy('id','DESC')->paginate(12);

        if (isset($id)) {
            $course = Course::where('is_deleted', false)
                             ->where('categories_id', $id)
                             ->orderBy('id','DESC')->paginate(12);
        }
        return view('client.course.course', ['course' => $course]);
    }

    public function courseCart(Request $request, $id)
    {
        $coursecart = Course::where('is_deleted', 0)
            ->where('id', $id)->first();

        Cart::add(['id' => $id, 'name' => $coursecart->title, 'qty' => 1, 'price' => $coursecart->cost * (1 - $coursecart->discount / 100),
            'options' => ['thumbnail' => $coursecart->thumbnail, 'type' => 'course', 'slug' => $coursecart->slug]
        ]);

        return redirect()->back();
    }

    public function detailCourse(Request $request, $id)
    {
        $download = DB::table('upload_batch')->get();
        $time = Carbon::parse('2 days ago')->toFormattedDateString();
        $course = Course::where('is_deleted', false)
            ->find($id);
        $courseInvolves = Course::where('is_deleted', false)
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'DESC')
            ->limit(5)->get();

        if (isset($request->email) && isset($request->name)) {
            $comment = new course_comment();
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->url = $request->urlId;
            $comment->courses_id = $id;
            $comment->content = $request->comment;
            $comment->status = 1;
            $comment->parent_id = 0;
            $comment->save();
        }
        $tag = Tag::where('is_deleted', false)->get();
        $tags = null;
        foreach ($tag as $item) {
            if (!empty($item['course'][0])) {
                $tags[] = $item;
                continue;
            }

        }
        $video = $test = null;
        if(isset($course['video'][0])) {
            foreach ($course->video as $key => $item) {
                $video[$item->folder->title][$item->id] = $item;
            }
        }
        if(isset($course['video'][0])) {
            foreach ($course->batch as $key => $item) {
                foreach ($item->test as $key2 => $item2) {
                    $test[$item->title][$item->id] = $item2;
                }
            }
        }
        $comments = course_comment::where('is_deleted', false)
            ->where('courses_id', $id)->limit(10)->get();

        return view('client.course.detailCourse', ['course' => $course, 'tag' => $tags, 'courseInvolves' => $courseInvolves, 'comments' => $comments, 'time' => $time, 'video' => $video, 'test' => $test,'download'=>$download]);
    }

    public function courseTag($id)
    {
        $tag = Tag::where('is_deleted', false)->where('id', $id)->first();
        return view('client.tag.tag', ['courseTag' => $tag]);
    }

}



