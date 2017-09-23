<?php

namespace App\Http\Controllers;

use Cart;
use Session;
use Illuminate\Http\Request;
use App\Book;
use App\Order;
use App\OrderDetail;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $keyword = '';
        view()->share(['keyword' => $keyword]);
    }

    public function index()
    {
        $i = 0;
        $ship = 0;
        $totalamount = floatval(str_replace(',', '', Cart::subtotal()));
        foreach (Cart::content() as $item) {
            if ($item->options->type == 'book') {
                $i += $item->qty;
            }
        }
        if ($i == 1 && $totalamount < 500000) {
            $ship = 45000;
        }
        if ($i == 2 && $totalamount < 500000) {
            $ship = 60000;
        }
        if ($i > 2 && $totalamount < 500000) {
            $ship = 60000 + ($i - 2) * 10000;
        }
        if ($totalamount >= 500000) {
            $ship = 0;
        }

        $bookRandom = Book::where('is_deleted', false)->where('quantity', '>', '0')->inRandomOrder()->limit(4)->get();

        return view('client.pages.cart', ['bookRandom' => $bookRandom, 'ship' => $ship]);
    }

//    public function wishListView()
//    {
//        return view('client.cart.wishList');
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        $kt = 0;
//        if ($request->qty >= 1) {
//            foreach (Cart::content() as $item) {
//                if ($item->id == $id) {
//                    $kt = 1;
//                    Cart::update($item->rowId, ['qty' => $request->qty]);
//                    break;
//                }
//            }
//            if ($kt == 0) {
//
//                return redirect('addcart/' . $id);
//            }
//
//            return redirect()->back();
//        } else {
//            return redirect()->back();
//        }
//    }

    public function destroyitem($id)
    {
        foreach (Cart::content() as $item) {
            if ($item->id == $id) {
                Cart::remove($item->rowId);
                break;
            }
        }
        return redirect()->back();
    }

    public function destroyall()
    {
        Cart::destroy();
        return redirect()->back();
    }

    public function destroycheckout()
    {
        Cart::destroy();
        return redirect('/');
    }
}




