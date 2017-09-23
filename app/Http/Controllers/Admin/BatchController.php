<?php

namespace App\Http\Controllers\Admin;

use App\batch_test;
use App\Course;
use App\course_batch;
use App\key_batch;
use App\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Batch;
use App\Category;
use App\User;
use Helper;
use Session;
use Auth;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->hasRole('admin')){
            $list = Batch::where('is_deleted', '0');
        }
        else {
            $list = Batch::where('is_deleted', '0')->where('user_id',Auth::id());
        }
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where(
                function ($query) use ($keyword) {
                    $query->orwhere('title', 'like', "%$keyword%")
                        ->orwhere('price', 'like', "%$keyword%");
                }
            );
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.batch.list', compact('list'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->name;
//        $user   = User::where('is_deleted', '0')->where('active_role',1)->pluck('name', 'id');
        $test = Test::where('is_deleted', false)->orderBy('id','DESC')->get();
        $course = Course::where('is_deleted', false)->orderBy('id','DESC')->get();
        $category = Category::where('is_deleted', false)->where('parent_id', '>', '0')->where('type', '2')->orderBy('id','DESC')->get();
        return view('admin.batch.create',
            ['user' => $user,
                'test' => $test,
                'course' => $course,
                'category' => $category
            ]);
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
            'title' => 'required|unique:batches',
            'discount' => 'required',
            'price' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $requestData = $request->all();
            $file = $request->file('thumbnail');
            $name = md5(($file) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/batch/'), $name);
            $requestData['thumbnail'] = 'uploads/batch/' . $name;
            $requestData['categories_id'] = $request->category;
            $requestData['slug'] = Helper::slug($requestData['title']);
            $batch = Batch::create($requestData);
            if ($request->has('test')) {
                foreach ($request->test as $key => $item) {
                    $batchTest = new batch_test();
                    $batchTest->test_id = $item;
                    $batchTest->batch_id = $batch->id;
                    $batchTest->save();
                }
            }
            if ($request->has('course')) {
                foreach ($request->course as $key => $item) {
                    $courseBatch = new course_batch();
                    $courseBatch->course_id = $item;
                    $courseBatch->batch_id = $batch->id;
                    $courseBatch->save();
                }
            }
            Session::flash('success', 'Thêm mới thành công');
        }
        Session::flash('error', 'Thêm mới không thành công');

        return redirect('admin/batch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
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
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batch = Batch::findOrFail($id);
        $user = User::where('is_deleted', '0')->where('active_role', 1)->pluck('name', 'id');
        $test = Test::where('is_deleted', false)->orderBy('id','DESC')->get();
        $course = Course::where('is_deleted', false)->orderBy('id','DESC')->get();
        $batchTest = batch_test::where('batch_id', $id)->get();
        $batchT = $batchC = null;
        foreach ($batchTest as $item) {
            $batchT[$item->test_id] = $item->test_id;
        }
        $batchcourse = course_batch::where('batch_id', $id)->get();
        foreach ($batchcourse as $item) {
            $batchC[$item->course_id] = $item->course_id;
        }
        $category = Category::where('is_deleted', false)->where('parent_id', '>', '0')->where('type', '2')->orderBy('id','DESC')->get();

        return view('admin.batch.edit', ['user' => $user,
                'batch' => $batch,
                'test' => $test,
                'batchTest' => $batchT,
                'course' => $course,
                'batchcourse' => $batchC,
                'category' => $category]);
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

        $batch = Batch::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'discount' => 'required',
            'price' => 'required'
        ]);

        $requestData = $request->all();
        if ($request->hasFile('thumbnail')) {
            if (file_exists($batch->thumbnail)) {
                unlink($batch->thumbnail);
            }
            $file = $request->file('thumbnail');
            $name = md5(($file) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/batch/'), $name);
            $requestData['thumbnail'] = 'uploads/batch/' . $name;
        }
        $requestData['categories_id'] = $request->category;
        $requestData['slug'] = Helper::slug($requestData['title']);
        $batch->update($requestData);

        $batchTest = batch_test::where('batch_id', $id)->get();
        foreach ($batchTest as $item) {
            $item->delete();
        }
        if ($request->has('test')) {
            foreach ($request->test as $key => $item) {
                $batchTest = new batch_test();
                $batchTest->test_id = $item;
                $batchTest->batch_id = $batch->id;
                $batchTest->save();
            }
        }

        $batchCourse = course_batch::where('batch_id', $id)->get();
        foreach ($batchCourse as $item) {
            $item->delete();
        }
        if ($request->has('course')) {
            foreach ($request->course as $key => $item) {
                $batchCourse = new course_batch();
                $batchCourse->course_id = $item;
                $batchCourse->batch_id = $batch->id;
                $batchCourse->save();
            }
        }
        Session::flash('success', 'Cập nhật "' . $batch->title . '" thành công');

        return redirect('admin/batch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batch = Batch::findOrFail($id);
        $batch->is_deleted = 1;
        $batch->save();

        Session::flash('success', 'Xóa "' . $batch->title . '" thành công');

        return redirect('admin/batch');
    }
}











