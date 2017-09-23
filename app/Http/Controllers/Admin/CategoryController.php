<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;
use Helper;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Category::where('is_deleted', false);
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list    = $list->where('title', 'like', "%$keyword%");
        }
        $list = $list->orderBy('parent_id', 'ASC')->paginate(10);
        $array=null;
        foreach ($list as $item) {
            if ($item->parent_id == 0) {
                $array[$item->id] = $item->title;
            }
        }
        return view('admin.category.list', ['list' => $list,'array'=>$array])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryParent = Category::where('is_deleted', false)->where('parent_id', 0)->orderBy('id','DESC')->get();

        return view('admin.category.create', ['categoryParent' => $categoryParent]);

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
        ]);
        $category             = new Category;
        $category->title      = $request->title;
        $category->slug       = Helper::slug($request->title);
        $category->parent_id  = $request->parent_id;
        $category->status     = $request->status;
        $category->type       = $request->type;
        $category->is_deleted = 0;
        $category->save();
        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/category');
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
        $category           = Category::where('id', $id)
            ->where('is_deleted', '0')
            ->first();
//        $categoryEditParent = Category::where('is_deleted', false)->where('parent_id', 0)->get();
        $categoryParent     = Category::where('is_deleted', false)
                                       ->where('parent_id', 0)->orderBy('id','DESC')->get();


        return view('admin.category.edit', ['category' => $category, 'categoryParent' => $categoryParent, ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
        ]);
        $category->title      = $request->title;
        $category->slug       = Helper::slug($request->title);
        $category->parent_id  = $request->parent_id;
        $category->status     = $request->status;
//       ype $category->type       = $request->type;
        $category->is_deleted = 0;
        $category->save();

        Session::flash('success', 'Cập nhật "' . $category->title . '" thành công');

        return redirect('admin/category');
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
        $category             = Category::findOrFail($id);
        $category->is_deleted = 1;
        $category->save();
        Session::flash('success', 'Xóa "' . $category->title . '" thành công');

        return redirect('/admin/category');
    }
}













