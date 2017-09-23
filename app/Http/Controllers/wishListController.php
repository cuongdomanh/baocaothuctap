<?php

namespace App\Http\Controllers;

use App\User;
use App\user_love;
use Illuminate\Http\Request;
use App\Book;
use Auth;

class wishListController extends Controller
{
    public function store($id)
    {
        if (Auth::user()) {
            $userClickWishlist = user_love::where('user_id', Auth::user()->id)->where('book_id', $id)->first();
            if (empty($userClickWishlist)) {
                $book           = Book::where('is_deleted', false)->where('id', $id)->first();
                $book->wishlist = $book->wishlist + 1;
                $book->save();

                $userLove          = new user_love();
                $userLove->user_id = Auth::user()->id;
                $userLove->book_id = $id;

                $userLove->save();
            }
        } else {
            $book           = Book::where('is_deleted', false)->where('id', $id)->first();
            $book->wishlist = $book->wishlist + 1;
            $book->save();
        }

        return redirect()->back();
    }

    public function wishList()
    {
        if (Auth::user()) {
            $id       = Auth::user()->id;
            $wishlist = User::where('is_deleted', false)->where('id', $id)->first();
            return view('client.cart.wishList', ['wishlist' => $wishlist]);
        }
        return redirect()->back();
    }
    public function destroy($id){
        $book=user_love::where('book_id',$id)->where('user_id',Auth::user()->id)->delete();
        return redirect()->back();
    }
}





