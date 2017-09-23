<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\book_author;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;
use Session;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Author::where('is_deleted', false);
        if($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where('name', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(5);
        return view('admin.author.list', compact('list'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
        $book_id=null;
        $book=Book::where('is_deleted',false)->orderBy('id','DESC')->get();
        if(isset($id)){
            $book_id=$id;
        }
        return view('admin.author.create',['book'=>$book,'book_id'=>$book_id]);
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
           'name'=>'required'
        ]);
        $requestData=$request->all();
        $requestData['slug']=Helper::slug($request['name']);
        $requestData['status']=(isset($request['status']))? true :false;
        $author=Author::create($requestData);
        if ($request->has('book_id')) {
            $authorBook            = new book_author();
            $authorBook->author_id  = $author->id;
            $authorBook->book_id = $request->book_id;
            $authorBook->save();
        }
        if (!empty($request->book)) {
            foreach ($request->book as $book) {
                $authorBook            = new book_author();
                $authorBook->author_id  = $author->id;
                $authorBook->book_id = $book;
                $authorBook->save();
            }
        }
        Session::flash('success','Thêm mới thành công');

        return redirect('admin/author');

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
         $author=Author::where('is_deleted',false)
                         ->where('id',$id)
                         ->first();
        $book=Book::where('is_deleted',false)->orderBy('id','DESC')->get();
        $authorBook =book_author::where('author_id', $id)->get();
        foreach ($authorBook as $item) {
            $authorB[$item->book_id] = $item->book_id;
        }
         return view('admin.author.edit',['author'=>$author,'book'=>$book,'authorBook'=>$authorB]);
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
            'name' => 'required'
        ]);
        $author=Author::findOrFail($id);
        $requestData=$request->all();
        $requestData['slug']=Helper::slug($requestData['name']);
        $requestData['status']=(isset($request['status'])) ? true : false;
        $author->update($requestData);
        $authorBook =book_author::where('author_id', $author->id)->get();
        foreach ($authorBook as $item) {
            $item->delete();
        }
        if (!empty($request->book)) {
            
            foreach ($request->book as $book) {
                $authorBook            = new book_author();
                $authorBook->author_id  = $author->id;
                $authorBook->book_id = $book;
                $authorBook->save();
            }
        }
        Session::flash('success','Cập nhật thành công');

        return redirect('admin/author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->is_deleted=1;
        $author->save();
        Session::flash('success', 'Xóa "'.$author->title.'" thành công');

        return redirect('/admin/author');
    }
}




