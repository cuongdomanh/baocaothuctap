<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\book_tag;
use App\Course;
use App\course_tag;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Tag::where('is_deleted', false);
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list    = $list->where('title', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);
        return view('admin.tag.list', compact('list'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($bookId = 0, $courseId = 0)
    {    
        $book_id = $course_id = null;
        if ($bookId != 0) {
            $book_id = $bookId;
        }
        if ($courseId != 0) {
            $couse_id = $courseId;
        }

        $book   = Book::where('is_deleted', false)->orderBy('id','DESC')->get();
        $course = Course::where('is_deleted', false)->orderBy('id','DESC')->get();

        return view('admin.tag.create', ['book_id' => $book_id,'course_id'=>$course_id, 'book' => $book, 'course' => $course]);
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
            'title' => 'required'
        ]);
        $requestData           = $request->all();
        $requestData['slug']   = Helper::slug($request['title']);
        $requestData['status'] = (isset($request['status'])) ? true : false;
        $tag                   = Tag::create($requestData);
        if(isset($request->book_id)){
            $bookTag          = new book_tag();
            $bookTag->book_id = $request->book_id;
            $bookTag->tag_id  = $tag->id;
            $bookTag->save();
        }
        if(isset($request->course_id)){
            $courseTag            = new course_tag();
            $courseTag->course_id = $request->course_id;
            $courseTag->tag_id    = $tag->id;
            $courseTag->save();
        }
        if ($request->has('course')) {
            foreach ($request->course as $key => $item) {
                $courseTag            = new course_tag();
                $courseTag->course_id = $item;
                $courseTag->tag_id    = $tag->id;
                $courseTag->save();
            }
        }
        if ($request->has('book')) {
            foreach ($request->book as $key => $item) {
                $bookTag          = new book_tag();
                $bookTag->book_id = $item;
                $bookTag->tag_id  = $tag->id;
                $bookTag->save();
            }
        }
        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/tag');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $tag = Tag::where('is_deleted', false)->where('id', $id)->first();
        $book=Book::where('is_deleted',false)->orderBy('id','DESC')->get();
        $course=Course::where('is_deleted',false)->orderBy('id','DESC')->get();
        $courseT=$bookT=null;
        $bookTag=book_tag::where('tag_id',$id)->get();
        foreach($bookTag as $item){
            $bookT[$item->book_id]=$item->book_id;
        }
        $courseTag=course_tag::where('tag_id',$id)->get();
        foreach($courseTag as $item){
            $courseT[$item->course_id]=$item->course_id;
        }
//        die();
        return view('admin.tag.edit', ['tag' => $tag,'bookTag'=>$bookT,'courseTag'=>$courseT,'book'=>$book,'course'=>$course]);
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
        $this->validate($request, [
            'title' => 'required'
        ]);
        $tag                   = Tag::findOrFail($id);
        $requestData           = $request->all();
        $requestData['slug']   = Helper::slug($requestData['title']);
        $requestData['status'] = (isset($request['status'])) ? true : false;
        $tag->update($requestData);
        $bookTag=book_tag::where('tag_id',$id)->get();
        foreach($bookTag as $item){
            $item->delete();
        }
        if ($request->has('book')) {

            foreach ($request->book as $key => $item) {
                $bookTag           = new book_tag();
                $bookTag->book_id  = $item;
                $bookTag->tag_id = $tag->id;
                $bookTag->save();
            }
        }
        $courseTag=course_tag::where('tag_id',$id)->get();
        foreach($courseTag as $item){
            $item->delete();
        }
        if ($request->has('course')) {

            foreach ($request->course as $key => $item) {
                $courseTag           = new course_tag();
                $courseTag->course_id  = $item;
                $courseTag->tag_id = $tag->id;
                $courseTag->save();
            }
        }
        Session::flash('success', 'Cập nhật thành công');

        return redirect('admin/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag             = Tag::findOrFail($id);
        $tag->is_deleted = 1;
        $tag->save();
        Session::flash('success', 'Xóa "' . $tag->title . '" thành công');

        return redirect('/admin/tag');
    }
}






