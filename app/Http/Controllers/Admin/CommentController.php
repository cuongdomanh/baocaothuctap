<?php

namespace App\Http\Controllers\Admin;

use App\batch_comment;
use App\book_comment;
use App\course_comment;
use App\QuestionComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use PhpParser\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function batch(Request $request)
    {
        $keyword = '';
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = batch_comment::orderBy('id', 'DESC')
                ->where(function ($query) use ($keyword) {
                    $query->orwhere('user_id', 'like', "%$keyword%");

                })
                ->paginate(5);
        } else {

            $list = batch_comment::orderBy('id')
                ->paginate(5);
        }

        return view('admin.comment.batch', ['list' => $list, 'keyword' => $keyword])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function book(Request $request)
    {
        $keyword = '';
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = book_comment::orderBy('id', 'DESC')
                ->where(function ($query) use ($keyword) {
                    $query->orwhere('user_id', 'like', "%$keyword%");

                })
                ->paginate(5);
        } else {
            $list = book_comment::orderBy('id')
                ->paginate(5);
        }

        return view('admin.comment.book', ['list' => $list, 'keyword' => $keyword])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function course(Request $request)
    {
        $keyword = '';
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = course_comment::orderBy('id', 'DESC')
                ->where(function ($query) use ($keyword) {
                    $query->orwhere('user_id', 'like', "%$keyword%");

                })
                ->paginate(5);
        } else {
            $list = course_comment::orderBy('id')
                ->paginate(5);
        }

        return view('admin.comment.course', ['list' => $list, 'keyword' => $keyword])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $comment = QuestionComment::findOrFail($id);
        return view('admin.comment.edit', ['comment' => $comment]);
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
        $comment = QuestionComment::findOrFail($id);
        $comment->status = $request->status;
        $comment->save();
        Session::flash('success', 'Cập nhật thành công!');

        return redirect('admin/comment');
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
        //
    }
}
