<?php

namespace App\Http\Controllers\Admin;

use App\Slide;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Slide::where('is_deleted', false);
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where('title', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.slide.list', ['list' => $list])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
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
            'description' => 'required',
            'images' => 'required',
        ]);

        if ($request->hasFile('images')) {
            $requestData = $request->all();
            $requestData['status'] = isset($requestData['status']) ? true : false;
            $file = $request->file('images');
            $fileName = $file->getClientOriginalName();
            $avatar = md5(($fileName) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
            while (file_exists("uploads/slides/" . $avatar)) {
                $avatar = str_random(4) . "_" . $fileName;
            }
            $requestData['image'] = $avatar;
            $file->move(public_path('uploads/slides/'), $avatar);
            Slide::create($requestData);

        }

        return redirect('admin/slide');

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
        $slide = Slide::where('is_deleted', '0')->where('id', $id)->first();
        return view('admin.slide.edit', ['slide' => $slide]);
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
        $slide = Slide::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $requestData = $request->all();
        $requestData['status'] = isset($requestData['status']) ? true : false;
        if ($request->hasFile('images')) {
            if (file_exists('uploads/slides/' . $slide->image)) {
                unlink('uploads/slides/' . $slide->image);
            }
            $file = $request->file('images');
            $fileName = $file->getClientOriginalName();
            $avatar = md5($fileName) . '.' . $file->getClientOriginalExtension();
            while (file_exists("uploads/slides/" . $avatar)) {
                $avatar = str_random(4) . "_" . $fileName;
            }
            $requestData['image'] = $avatar;
            $file->move(public_path('uploads/slides/'), $avatar);
        }
        $slide->update($requestData);

        Session::flash('success', 'Cập nhật thành công');
        return redirect('admin/slide');
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
        $slide = Slide::findOrFail($id);
        $slide->is_deleted = 1;
        $slide->save();
        Session::flash('success', 'Xóa"' . $slide->title . '" thành công');

        return redirect('/admin/slide');
    }
}
