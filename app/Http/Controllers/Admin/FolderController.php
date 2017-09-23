<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Folder;
use Session;
class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Folder::where('is_deleted', false);
        if($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where('title', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.folder.list', compact('list'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $folderParent=Folder::where('is_deleted', false)
//                      ->where('parent_id', 0)
//                      ->get();

        return view('admin.folder.create', compact('folderParent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required'
        ]);
        $requestData=$request->all();
        $requestData['slug']=Helper::slug($request['title']);
        $requestData['parent_id']=1;
        $requestData['status']=(isset($request['status']))? true : false ;
        Folder::create($requestData);
        Session::flash('success','Thêm mới thành công');

        return redirect('admin/folder');

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
        $folder=Folder::where('is_deleted',false)
                        ->where('id',$id)
                        ->first();
        $folderParent=Folder::where('is_deleted', false)
                        ->where('parent_id', 0)
                        ->get();
        return view('admin.folder.edit',['folder'=>$folder,'folderParent'=>$folderParent]);
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
        $this->validate($request,[
            'title' => 'required'
        ]);
        $folder=Folder::findOrFail($id);
        $requestData=$request->all();
        $requestData['slug']=Helper::slug($requestData['title']);
        $requestData['parent_id']=1;
        $requestData['status']=(isset($request['status'])) ? true : false;
        $folder->update($requestData);
        Session::flash('success','Cập nhật thành công');

        return redirect('admin/folder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $folder = Folder::findOrFail($id);
        $folder->is_deleted=1;
        $folder->save();
        Session::flash('success', 'Xóa "'.$folder->title.'" thành công');

        return redirect('/admin/folder');
    }
}






