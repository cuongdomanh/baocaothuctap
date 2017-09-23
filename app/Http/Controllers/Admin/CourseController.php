<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Batch;
use App\course_tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\User;
use SebastianBergmann\Diff\Diff;
use Session;
use Helper;
use App\course_batch;
use App\Tag;
use App\Category;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->hasRole('admin')){
            $list     = Course::where('is_deleted', '0');
        }
        else{
            $list     = Course::where('is_deleted', '0')->where('user_id',Auth::id());
        }
        $category = User::where('is_deleted', '0');

        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list    = $list->where(
                function ($query) use ($keyword) {
                    $query->orwhere('title', 'like', "%$keyword%")
                        ->orwhere('cost', 'like', "%$keyword%");
                }
            );
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.course.list', compact('list', 'user'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('is_deleted', '0')->where('active_role',1)->pluck('name', 'id');
        $batch=Batch::where('is_deleted',false)->orderBy('id','DESC')->get();
        $tag      = Tag::where('is_deleted', false)->orderBy('id','DESC')->get();
        $category=Category::where('is_deleted',false)->where('type','1')->orderBy('id','DESC')->get();
        return view('admin.course.create', ['user' => $user,'batch'=>$batch,'tag'=>$tag,'category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'cost' => 'required',
            'thumbnail' => 'required|mimes:jpeg,bmp,png',
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        if ($request->hasFile('thumbnail')) {

            $requestData = $request->all();
            $file        = $request->file('thumbnail');
            $name        = md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/course/', $name);
            $requestData['thumbnail'] = 'uploads/course/' . $name;
            $requestData['slug']      = Helper::slug($requestData['title']);
            $requestData['categories_id'] = $request->category;
            $requestData['user_id'] = Auth::id();
            if ($request->hasFile('video') ) {
                $name = md5(($request->file('video')->getClientOriginalName()) . date('Y-m-d H:i:s')).'.' . $request->file('video')->getClientOriginalExtension();
                $public_path = public_path('uploads/videos');
                $requestData['url_video'] = 'uploads/videos/' . $name;
                $move = $request->file('video')->move($public_path, $name);
            }
                $course=Course::create($requestData);
            Session::flash('Chúc mừng', 'Thêm mới thành công');
            if($request->has('batch_id')){
                $batchcourse          = new course_batch();
                $batchcourse->course_id = $course->id;
                $batchcourse->batch_id =$request->batch_id;
                $batchcourse->save();
            }
            if($request->has('batch')){

                foreach ($request->batch as $key=>$item) {
                    $batchcourse          = new course_batch();
                    $batchcourse->course_id = $course->id;
                    $batchcourse->batch_id =$item;
                    $batchcourse->save();
                }
            }
            if ($request->has('tag')) {
                foreach ($request->tag as $key => $item) {
                    $courseTag          = new course_tag();
                    $courseTag->tag_id  = $item;
                    $courseTag->course_id = $course->id;
                    $courseTag->save();
                }
            }

        }

        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::where('is_deleted', '0')->first();

        return view('admin.course.show', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $user   = User::where('is_deleted', '0')->where('active_role',1)->pluck('name', 'id');
        $batch=Batch::where('is_deleted',false)->orderBy('id','DESC')->get();
        $batchcourse=course_batch::where('course_id',$id)->get();
        $courseT= $batchT=null;
        foreach($batchcourse as $item){
            $batchT[$item->batch_id]=$item->batch_id;
        }
        $tag    =Tag::where('is_deleted',false)->orderBy('id','DESC')->get();

        $courseTag=course_tag::where('course_id',$id)->get();
        foreach($courseTag as $item){
            $courseT[$item->tag_id]=$item->tag_id;
        }
        $category=Category::where('is_deleted',false)->where('type','1')->orderBy('id','DESC')->get();
        return view('admin.course.edit', ['user' => $user, 'course' => $course,'batchcourse'=>$batchT,'batch'=>$batch,'courseTag'=>$courseT,'tag'=>$tag,'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
//            'description' => 'required',
            'content' => 'required',
            'cost' => 'required',
//            'category'=>'required'
//            'discount' => 'required'
        ]);
        $requestData         = $request->all();
        if ($request->hasFile('thumbnail')) {
            if(file_exists($course->thumbnail)){
                unlink($course->thumbnail);
            }
            $file = $request->file('thumbnail');
            $name = md5(($file->getClientOriginalName()) .date('Y-m-d H:i:s')). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/course/'), $name);
            $requestData['thumbnail'] = 'uploads/course/' . $name;
        }
        if ($request->hasFile('video')) {
            if(file_exists($course->url_video)){  
                unlink($course->url_video);
            }
            $name        = md5($request->file('video')->getClientOriginalName()) . '.' . $request->file('video')->getClientOriginalExtension();
            $public_path = public_path('uploads/videos');
            $course->url_video = 'uploads/videos/' . $name;
            $move        = $request->file('video')->move($public_path, $name);
        }
        $requestData['categories_id'] = $request->category;
        $requestData['slug'] = Helper::slug($requestData['title']);
        $course->update($requestData);
        $batchcourse=course_batch::where('course_id',$course->id)->get();
        foreach ($batchcourse as $item){
            $item->delete();
        }
        if($request->has('batch')){
            
            foreach ($request->batch as $key=>$item) {
                $batchcourse=new course_batch();
                $batchcourse->course_id  = $id;
                $batchcourse->batch_id = $item;
                $batchcourse->save();
            }
        }
        $courseTag=course_tag::where('course_id',$id)->get();
        foreach($courseTag as $item){
            $item->delete();
        }
        if ($request->has('tag')) {
           
            foreach ($request->tag as $key => $item) {
                $courseTag           = new course_tag();
                $courseTag->tag_id  = $item;
                $courseTag->course_id = $course->id;
                $courseTag->save();
            }
        }

        Session::flash('success', 'Cập nhật"' . $course->title . '" thành công');

        return redirect('admin/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course             = Course::findOrFail($id);
        $course->is_deleted = 1;
        $course->save();
        Session::flash('success', 'Xóa"' . $course->name . '" thành công');

        return redirect('admin/course');
    }
}























