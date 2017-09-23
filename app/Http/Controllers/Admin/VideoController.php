<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Folder;
use App\Helpers\Helper;
use App\UploadBatch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Session;
use App\course_video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $list = Video::where('is_deleted', false);
        // if ($request->has('keyword')) {
        //     $keyword = $request->get('keyword');
        //     $list    = $list->where('title', 'like', "%$keyword%");
        // }
        // $list = $list->orderBy('id', 'DESC')->paginate(10);

        // return view('admin.video.list', compact('list'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $course_id = null;
        if (isset($id)) {
            $course_id = $id;
        }

        $folder = Folder::where('is_deleted', false)->where('parent_id', '!=', 0)->orderBy('updated_at', 'DESC')->get();

        $course = Course::where('is_deleted', false)->get();

//        $videoParent=Video::where('is_deleted',false)->where('parent_id',0)->get();
        return view('admin.video.create', ['folder' => $folder, 'course' => $course, 'course_id' => $course_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'folder_id'=>'required',
//            'thumbnail' => 'required|mimes:jpeg,bmp,png',
             'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $requestData = $request->all();
        $requestData['slug'] = Helper::slug($request['title']);
        $requestData['status'] = (isset($request['status'])) ? true : false;
        $requestData['course_id'] = $request->course_id;

        if ($request->hasFile('video')) {
            $name = md5($request->file('video')->getClientOriginalName()) . '.' . $request->file('video')->getClientOriginalExtension();
            $public_path = public_path('uploads/videos');
            $requestData['size'] = $request->file('video')->getSize();
            $requestData['type'] = $request->file('video')->getMimeType();
            $requestData['url'] = 'uploads/videos/' . $name;
            $move = $request->file('video')->move($public_path, $name);
            $video = Video::create($requestData);
            if ($request->hasFile('upload_file')) {
                $files = $request->file('upload_file');
                foreach ($files as $file) {
                    $name = md5(($file->getClientOriginalName() . date('Y-m-d H:i:s'))) . '.' . $file->getClientOriginalExtension();
                    $requestData['video_id'] = $video->id;
                    $requestData['url'] = 'uploads/video/' . $name;
                    $requestData['name'] = $file->getClientOriginalName();
                    $requestData['size'] = number_format($file->getSize() / 1024, 1) . ' Kb';
                    $file->move('uploads/video/', $name);
                    UploadBatch::create($requestData);
                }
            }
            Session::flash('success', 'Thêm mới thành công');
        } else {
            Session::flash('error', 'Thêm mới không thành công');
        }

        return redirect('admin/course/detail/' . $request->course_id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        return view('admin.video.show', compact('video'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id11111111
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id1)
    {
        $video = Video::findOrFail($id);

        $folder = Folder::where('is_deleted', false)
            ->where('parent_id', '!=', 0)
            ->get();
        $course = Course::where('is_deleted', false)
            ->get();
        // $courseVideo = course_video::where('video_id', $id)->get();
        // $courseV     = null;
        $course_id = $id1;
        // if (isset($id)) {
        //     $course_id = $id;
        // }
        // foreach ($courseVideo as $item) {
        //     $courseV[$item->course_id] = $item->course_id;
        // }
        return view('admin.video.edit', ['video' => $video, 'folder' => $folder, 'course' => $course,
            'course_id' => $course_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $requestData = $request->all();
        $requestData['slug'] = Helper::slug($request['title']);
        $requestData['status'] = (isset($request['status'])) ? true : false;
        $requestData['course_id'] = $request->course_id;
        if ($request->hasFile('video')) {
            if (file_exists($video->url)) {
                unlink($video->url);
            }
            $name = md5($request->file('video')->getClientOriginalName()) . '.' . $request->file('video')->getClientOriginalExtension();
            $public_path = public_path('uploads/videos');
            $requestData['size'] = $request->file('video')->getSize();
            $requestData['type'] = $request->file('video')->getMimeType();
            $requestData['url'] = 'uploads/videos/' . $name;
            $move = $request->file('video')->move($public_path, $name);
        }
        if ($request->hasFile('upload_file')) {
            $files = $request->file('upload_file');
            foreach ($files as $file) {
                $name = md5(($file->getClientOriginalName() . date('Y-m-d H:i:s'))) . '.' . $file->getClientOriginalExtension();
                $requestData['video_id'] = $video->id;
                $requestData['url'] = 'uploads/video/' . $name;
                $requestData['name'] = $file->getClientOriginalName();
                $requestData['size'] = number_format($file->getSize() / 1024, 1) . ' Kb';
                $file->move('uploads/video/', $name);

                UploadBatch::create($requestData);
            }
        }
        $video->update($requestData);
        Session::flash('success', 'Cập nhật thành công');


        return redirect('admin/course/detail/' . $request->course_id);
//        if ($request->hasFile('thumbnail')) {
//            unlink($video->thumbnail);
//            $name_image        = md5($request->file('thumbnail')->getClientOriginalName()) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
//            $public_path_image = public_path('uploads/images');
//            $video->thumbnail  = 'uploads/images/' . $name_image;
//            $move              = $request->file('thumbnail')->move($public_path_image, $name_image);
//
//        }
        //chon khoa hocj
        // $courseVideo = course_video::where('video_id', $video->id)->get();
        // foreach ($courseVideo as $item) {
        //     $item->delete();
        // }
        // if (!empty($request->course)) {
        //     foreach ($request->course as $course) {
        //         $courseVideo            = new course_video();
        //         $courseVideo->video_id  = $video->id;
        //         $courseVideo->course_id = $course;
        //         $courseVideo->save();
        //     }
        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id1)
    {
        $video = Video::findOrFail($id);
        $video->is_deleted = 1;
        $video->save();
        Session::flash('success', 'Xóa "' . $video->title . '" thành công');

        return redirect('admin/course/detail/' . $id1);
    }

    public function detailVideo(Request $request, $id)
    {
        $id = $id;
        $list = Video::where('is_deleted', false)->where('course_id', $id)->paginate(10);

        return view('admin.video.list', compact('list', 'id'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }



}





