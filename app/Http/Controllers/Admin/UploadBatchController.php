<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UploadBatch;
use App\Test;
use Session;

class UploadBatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = UploadBatch::where('is_deleted', false);
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where('name', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.batch_file.list', ['list' => $list])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $test = UploadBatch::where('is_deleted', '0')->orderBy('id','DESC')->get();
        return view('admin.batch_file.create', ['test' => $test]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required',
        ]);
        $requestData = $request->all();
        if ($request->hasFile('url')) {
            $file = $request->file('url');
            $fileName = $file->getClientOriginalName();

            $avatar = md5(($fileName) . date('Y-m-d H:i:s')). '.' . $file->getClientOriginalExtension();
            while (file_exists("uploads/batch_file/" . $avatar)) {
                $avatar = str_random(4) . "_" . $fileName;
            }
            $requestData['name'] = $avatar;
            $requestData['url'] = 'uploads/batch_file/' . $avatar;
            $requestData['size'] = number_format($file->getSize() / 1024, 1) . ' Kb';
            $requestData['test_id'] = $request->test;
            $requestData['status'] = isset($requestData['status']) ? true : false;
            $requestData['is_deleted'] = 0;
            $file->move(public_path('uploads/batch_file/'), $avatar);
            UploadBatch::create($requestData);
            Session::flash('Chúc mừng', 'Thêm mới thành công');
        }
        return redirect('admin/batch_file');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::where('is_deleted', '0')->orderBy('id','DESC')->get();
//        $image = Image::findOrFail($id);
        $file = UploadBatch::where('is_deleted', '0')
            ->where('id', $id)
            ->first();

        return view('admin.batch_file.edit', ['file' => $file, 'test' => $test]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro = UploadBatch::findOrFail($id);
        $requestData = $request->all();
        $requestData['is_deleted'] = 0;
        $requestData['test_id'] = $request->test;
        $pro->status = $request->status;
        $requestData['status'] = isset($requestData['status']) ? true : false;

        if ($request->hasFile('url')) {
            unlink($pro->url);
            $file = $request->file('url');
            $fileName = $file->getClientOriginalName();
            $avatar = md5(($fileName) . date('Y-m-d H:i:s')). '.' . $file->getClientOriginalExtension();
            while (file_exists("uploads/batch_file/" . $avatar)) {
                $avatar = str_random(4) . "_" . $fileName;
            }
            $requestData['name'] = $avatar;
            $requestData['url'] = 'uploads/batch_file/' . $avatar;
            $requestData['format'] = $file->getClientOriginalExtension();
            $requestData['size'] = number_format($file->getSize() / 1024, 1) . ' Kb';
            $requestData['type'] = $file->getMimeType();

            $file->move(public_path('uploads/batch_file/'), $avatar);
        }
        $pro->update($requestData);

        Session::flash('success', 'Cập nhật thành công');

        return redirect('admin/batch_file');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = UploadBatch::findOrFail($id);
        $image->is_deleted = 1;
        $image->save();
        Session::flash('success', 'Xóa "' . $image->name . '" thành công');

        return redirect('/admin/batch_file');
    }

    public function deletedoc($id)
    {
        $doc = UploadBatch::findOrFail($id);
        unlink('' . $doc->url);
        $doc->is_deleted = 1;
        $doc->save();

        Session::flash('success', 'Xóa ảnh thành công');
        return redirect()->back();
    }
}
