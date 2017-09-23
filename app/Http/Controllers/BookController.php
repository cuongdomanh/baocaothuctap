<?php

namespace App\Http\Controllers;

use App\Author;
use App\Tag;
use Carbon\Carbon;
use Cart;
use App\Book;
use Illuminate\Http\Request;
use  Symfony\Component\HttpFoundation\Cookie;
use App\book_comment;

class BookController extends Controller
{

    function __construct()
    {
        $keyword = '';
        view()->share(['keyword' => $keyword]);
    }

    public function index(Request $request, $id = null)
    {

        $book = Book::where('is_deleted', false)
                    ->where('quantity', '>', '0')
                    ->orderBy('created_at', 'desc')
                    ->paginate(15);

        if ($request->has('fromPrice') && $request->has('toPrice')) {
            $book = Book::where('is_deleted', false)
                    ->where('price', '>=', $request->fromPrice)
                    ->where('quantity', '>', 0)
                    ->where('price', '<=', $request->toPrice)
                    ->get();
        }

        if (isset($id)) {
            $book = Book::where('is_deleted', false)
                ->where('categories_id', $id)
                ->paginate(15);
        }

        return view('client.book.book', ['hotBook' => $book]);
    }

    public function addcart(Request $request, $id)
    {
        $kt = 0;
        if ($request->has('qty')) {
            foreach (Cart::content() as $item) {
                if ($item->id == $id) {
                    $kt = 1;
                    Cart::update($item->rowId, ['qty' => $request->qty]);
                    break;
                }
            }
            if ($kt == 0) {

                $bookcart = Book::where('is_deleted', 0)
                    ->where('id', $id)->first();

                Cart::add(['id' => $id, 'name' => $bookcart->title, 'qty' => $request->qty, 'price' => $bookcart->price * (1 - $bookcart->discount / 100), 'options' => ['slug' => $bookcart->slug, 'thumbnail' => $bookcart->thumbnail, 'type' => 'book']]);

            }

        } else {
            $bookcart = Book::where('is_deleted', 0)
                ->where('id', $id)->first();

            Cart::add(['id' => $id, 'name' => $bookcart->title, 'qty' => 1, 'price' => $bookcart->price * (1 - $bookcart->discount / 100), 'options' => ['slug' => $bookcart->slug, 'thumbnail' => $bookcart->thumbnail, 'type' => 'book']]);

        }


        return redirect()->back();
    }

    public function detailBook(Request $request, $id)
    {
        $time = Carbon::parse('2 days ago')->toFormattedDateString();
        $book = Book::where('is_deleted', false)->find($id);
        $bookInvolve = Book::where('is_deleted', false)->where('categories_id', $book->categories_id)->where('id', '!=', $id)->where('quantity', '>', 0)->get();

        $bookNew = Book::where('is_deleted', false)->where('quantity', '>', 0)->orderBy('created_at', 'DESC')->limit(10)->get();

        if (isset($request->email)) {

            $comment = new book_comment();
            $comment->email = $request->email;
            $comment->url = $request->urlId;
            $comment->book_id = $id;
            $comment->content = $request->comment;
            $comment->status = 1;
            $comment->comment_id = 0;
            $comment->save();

        }
        $tag = Tag::where('is_deleted', false)->get();
        $tags = null;
        foreach ($tag as $item) {
            if (!empty($item['book'][0])) {
                $tags[] = $item;
                continue;
            }

        }
        $comments = book_comment::where('is_deleted', false)->where('book_id', $id)->limit(10)->get();
        $repComments = book_comment::where('is_deleted', false)->where('comment_id', '!=', 0)->get();
        return view('client.book.detailBook', ['book' => $book,
            'bookInvolve' => $bookInvolve,
            'bookNew' => $bookNew,
            'comments' => $comments,
            'time' => $time,
            'repComments' => $repComments,
            'tag' => $tags
        ]);

    }

    public function bookTag($id)
    {
        $tag = Tag::where('is_deleted', false)->where('id', $id)->first();

        return view('client.tag.tag', ['bookTag' => $tag]);
    }

    public function bookAuthor($id)
    {
        $author = Author::where('is_deleted', false)->where('id', $id)->first();

        return view('client.book.author', ['bookAuthor' => $author]);
    }

}





