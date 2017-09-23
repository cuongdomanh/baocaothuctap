<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Course;
use App\Book;
use App\subcribe;
use App\Video;
use App\Category;
use Carbon\Carbon;
use Cart;
use Session;
use App\Slide;
use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;

//use Spatie\Newsletter\NewsletterFacade as Newsletter;
//use Newsletter;
class HomeController extends Controller
{
    function __construct()
    {
        $keyword = '';
        view()->share(['keyword' => $keyword]);
    }

    public function index()
    {
        $keyword = '';
        $time = 100;
        $newBook = Book::where('is_deleted', false)->orderBy('created_at', 'desc')->where('quantity', '>', '0')->limit(10)->get();
        $hotBook = Book::where('is_deleted', false)->where('is_hot', true)->orderBy('created_at', 'desc')->where('quantity', '>', '0')->limit(10)->get();
        $bestBook = Book::where('is_deleted', false)->where('is_best', true)->orderBy('created_at', 'desc')->where('quantity', '>', '0')->limit(10)->get();
        $topBook = Book::where('is_deleted', false)->where('is_top', true)->orderBy('created_at', 'desc')->where('quantity', '>', '0')->limit(10)->get();
        $discountBook = Book::where('is_deleted', false)->orderBy('discount')->where('quantity', '>', '0')->limit(10)->get();
        $latest = Course::where('is_deleted', false)->orderBy('created_at', 'DESC')->limit(10)->get();
        $maxSale = Course::where('is_deleted', false)->orderBy('discount', 'DESC')->limit(10)->get();
        $latestBatch = Batch::where('is_deleted', false)->orderBy('created_at', 'DESC')->limit(10)->get();
        $slideleft = Slide::where('is_deleted', false)->where('type', 0)->orderBy('created_at', 'DESC')->limit(4)->get();
        $slideright = Slide::where('is_deleted', false)->where('type', 1)->orderBy('created_at', 'DESC')->first();
        $banner1 = Slide::where('is_deleted', false)->where('type', 2)->orderBy('created_at', 'DESC')->first();
        $banner2 = Slide::where('is_deleted', false)->where('type', 3)->orderBy('created_at', 'DESC')->first();

        return view('client.pages.home', ['newBook' => $newBook, 'time' => $time, 'hotBook' => $hotBook,
            'bestBook' => $bestBook, 'topBook' => $topBook, 'discountBook' => $discountBook, 'latest' => $latest,
            'maxSale' => $maxSale, 'keyword' => $keyword, 'latestBatch' => $latestBatch,
            'slideleft' => $slideleft, 'slideright' => $slideright, 'banner1' => $banner1, 'banner2' => $banner2,

        ]);
    }

    public function search(Request $request)
    {
        $keyword = '';

        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $book = Book::where('is_deleted', false)->where('title', 'like', "%$keyword%")->limit(10)->get();
            $course = Course::where('is_deleted', false)->where('title', 'like', "%$keyword%")->limit(10)->get();
        } else {
            $book = Book::where('is_deleted', false)->limit(10)->get();
            $course = Course::where('is_deleted', false)->limit(10)->get();

        }

        return view('client.pages.search', ['book' => $book, 'course' => $course, 'keyword' => $keyword]);
    }


    public function about()
    {
//        return view('client.pages.about');
        return view('client.pages.contact');
    }

    public function introduction()
    {
//        return view('client.pages.about');
        return view('client.pages.introduction');
    }

    public function subcribe(Request $request)
    {
        $sub = new subcribe();
        $sub->email = $request->email;
        $sub->save();
        return redirect()->back();
    }
}








