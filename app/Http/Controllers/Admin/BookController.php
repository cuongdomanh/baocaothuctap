<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\book_author;
use App\Tag;
use App\Unit;
use App\Book;
use App\Category;
use App\user_course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Helper;
use App\Image;
use App\book_tag;
use App\Course;
use App\course_book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $list = Book::where('is_deleted', false);
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where('title', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.book.list', ['list' => $list])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('is_deleted', false)->where('type',0)->get();
        $unit = Unit::where('is_deleted', false)->orderBy('id','DESC')->get();
        $tag = Tag::where('is_deleted', false)->orderBy('id','DESC')->get();
        $author = Author::where('is_deleted', false)->orderBy('id','DESC')->get();
        $course = Course::where('is_deleted', false)->orderBy('id','DESC')->get();
        return view('admin.book.create', ['category' => $category, 'unit' => $unit, 'tag' => $tag, 'author' => $author,'course'=>$course]);
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
        //
        $this->validate($request, [
            'title' => 'required',
            'unit' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|max:10000',
            'quantity' => 'required|numeric',
            'publish_date' => 'required|date',
            'category'=> 'required',


        ]);
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $avatar = md5($fileName) . '.' . $file->getClientOriginalExtension();
            while (file_exists("uploads/books/" . $avatar)) {
                $avatar = str_random(4) . "_" . $fileName;
            }
            $requestData = $request->all();
            $requestData['slug'] = Helper::slug($requestData['title']);
            $requestData['thumbnail'] = $avatar;
            $requestData['categories_id'] = $request->category;
            $requestData['unit_id'] = $request->unit;
            $requestData['is_top']        = isset($requestData['is_top']) ? true : false;
            $requestData['is_hot']        = isset($requestData['is_hot']) ? true : false;
            $requestData['is_best']       = isset($requestData['is_best']) ? true : false;
            $requestData['is_deleted'] = 0;
//            $requestData['SKU']= 'my own sku';
            $requestData['status'] = isset($requestData['status']) ? true : false;
            $file->move(public_path('uploads/books/'), $avatar);
            Session::flash('Chúc mừng', 'Thêm mới thành công');
            $book = Book::create($requestData);
            if ($request->hasFile('images')) {
                $files = $request->file('images');
                foreach ($files as $file) {
                    $fileName = $file->getClientOriginalName();
                    $avatar = md5(($fileName) .date('Y-m-d H:i:s')). '.' . $file->getClientOriginalExtension();
                    while (file_exists("uploads/images/" . $avatar)) {
                        $avatar = str_random(4) . "_" . $fileName;
                    }
                    $requestData['name'] = $avatar;
                    $requestData['url'] = 'uploads/images/' . $avatar;
                    $requestData['format'] = $file->getClientOriginalExtension();
                    $requestData['size'] = number_format($file->getSize() / 1024, 1) . ' Kb';
                    $requestData['type'] = $file->getMimeType();
                    $requestData['book_id'] = $book->id;
                    $requestData['is_deleted'] = 0;
                    $file->move(public_path('uploads/images/'), $avatar);
                    Image::create($requestData);
                }
            }
            if ($request->has('tag')) {
                foreach ($request->tag as $key => $item) {
                    $bookTag = new book_tag();
                    $bookTag->tag_id = $item;
                    $bookTag->book_id = $book->id;
                    $bookTag->save();
                }
            }
            if (!empty($request->author)) {
                foreach ($request->author as $author) {
                    $authorBook = new book_author();
                    $authorBook->author_id = $author;
                    $authorBook->book_id = $book->id;
                    $authorBook->save();
                }
            }
            if ($request->has('course')) {
                for($i=0; $i<$book->quantity ;$i++) {
                    foreach ($request->course as $key => $item) {
                        $courseBook = new user_course();
                        $courseBook->course_id = $item;
                        $courseBook->book_id = $book->id;
                        $courseBook->encode=str_random(16);
                        $courseBook->save();
                    }
                }
            }
            return redirect('admin/book');
        }
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
        $book = Book::where('id', $id)->first();
        return view('admin.book.show', ['book' => $book]);
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
        $category = Category::where('is_deleted', false)->where('type',0)->orderBy('id','DESC')->get();
        $unit = Unit::where('is_deleted', false)->orderBy('id','DESC')->get();
        $book = Book::where('is_deleted', '0')->where('id', $id)->first();
        $image = Image::where('is_deleted', '0')->where('book_id', $id)->get();
        $tag = Tag::where('is_deleted', false)->orderBy('id','DESC')->get();
        $bookT = $authorB =$bookC= null;
        $bookTag = book_tag::where('book_id', $id)->get();
        $course = Course::where('is_deleted', false)->orderBy('id','DESC')->get();
        $bookcourse = user_course::where('book_id', $id)->get();
        if(isset($bookcourse[0])) {
            foreach ($bookcourse as $item) {
                $bookC[$item->course_id] = $item->course_id;
            }
        }
        
        foreach ($bookTag as $item) {
            $bookT[$item->tag_id] = $item->tag_id;
        }
        $author = Author::where('is_deleted', false)->orderBy('id','DESC')->get();
        $authorBook = book_author::where('book_id', $id)->get();
        foreach ($authorBook as $item) {
            $authorB[$item->author_id] = $item->author_id;
        }
        return view('admin.book.edit', ['category' => $category, 'unit' => $unit, 'book' => $book, 'image' => $image, 'tag' => $tag, 'bookTag' => $bookT, 'authorBook' => $authorB, 'author' => $author,'bookcourse'=>$bookC,'course'=>$course]);
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
        $book = Book::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'unit' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'publish_date' => 'required|date',
            'category'=> 'required',

        ]);
        $requestData = $request->all();
        $requestData['slug'] = Helper::slug($requestData['title']);
        $requestData['categories_id'] = $request->category;
        $requestData['unit_id'] = $request->unit;;
        $requestData['is_top']        = isset($requestData['is_top']) ? true : false;
        $requestData['is_hot']        = isset($requestData['is_hot']) ? true : false;
        $requestData['is_best']       = isset($requestData['is_best']) ? true : false;
        $requestData['status'] = isset($requestData['status']) ? true : false;
        $requestData['is_deleted'] = 0;
        if ($request->hasFile('thumbnail')) {
            if (file_exists('uploads/books/' . $book->thumbnail)) {
                unlink('uploads/books/' . $book->thumbnail);
            }

            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $avatar = md5($fileName) . '.' . $file->getClientOriginalExtension();
            while (file_exists("uploads/books/" . $avatar)) {
                $avatar = str_random(4) . "_" . $fileName;
            }
            $requestData['thumbnail'] = $avatar;
            $file->move(public_path('uploads/books/'), $avatar);
        }
        $book->update($requestData);
        if ($request->hasFile('images')) {
            //xóa ảnh và xoastrong database ;
            $files = $request->file('images');
            foreach ($files as $file) {

                $fileName = $file->getClientOriginalName();
                $avatar = md5(($fileName) .date('Y-m-d H:i:s')). '.' . $file->getClientOriginalExtension();
                while (file_exists("uploads/images/" . $avatar)) {
                    $avatar = str_random(4) . "_" . $fileName;
                }
                $requestData['name'] = $avatar;
                $requestData['url'] = 'uploads/images/' . $avatar;
                $requestData['format'] = $file->getClientOriginalExtension();
                $requestData['size'] = number_format($file->getSize() / 1024, 1) . ' Kb';
                $requestData['type'] = $file->getMimeType();
                $requestData['book_id'] = $book->id;
                $requestData['is_deleted'] = 0;
                $file->move(public_path('uploads/images/'), $avatar);
                Image::create($requestData);
            }
        }
        $bookTag = book_tag::where('book_id', $id)->get();
        foreach ($bookTag as $item) {
            $item->delete();
        }
        if ($request->has('tag')) {

            foreach ($request->tag as $key => $item) {
                $bookTag = new book_tag();
                $bookTag->tag_id = $item;
                $bookTag->book_id = $book->id;
                $bookTag->save();
            }
        }
        $bookCourse = user_course::where('book_id', $id)->get();
        foreach ($bookCourse as $item) {
            $item->delete();
        }
        if ($request->has('course')) {
            for($i=0; $i<$book->quantity ;$i++) {
                foreach ($request->course as $key => $item) {
                    $courseBook = new user_course();
                    $courseBook->course_id = $item;
                    $courseBook->book_id = $book->id;
                    $courseBook->encode=str_random(16);
                    $courseBook->save();
                }
            }
        }
        $authorBook = book_author::where('book_id', $book->id)->get();
        foreach ($authorBook as $item) {
            $item->delete();
        }
        if (!empty($request->author)) {

            foreach ($request->author as $author) {
                $authorBook = new book_author();
                $authorBook->author_id = $author;
                $authorBook->book_id = $book->id;
                $authorBook->save();
            }
        }
        Session::flash('success', 'Cập nhật thành công');
        return redirect('admin/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function codeCourse($id){
        
        $list =user_course::where('book_id',$id)->paginate(20);
        return view('admin.book.listCourse',['list'=>$list]);
    }
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->is_deleted = 1;
        $book->save();
        Session::flash('success', 'Xóa"' . $book->title . '" thành công');

        return redirect('/admin/book');
    }

    public function deleteimage($id)
    {
        $image = Image::findOrFail($id);

        unlink('' . $image->url);
        $image->is_deleted = 1;
        $image->save();

        Session::flash('success', 'Xóa ảnh thành công');
        return redirect()->back();
    }
}
