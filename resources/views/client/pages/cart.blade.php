@extends('client.layouts.index')

@section('content')
    <section class="main-container col1-layout">

        <div class="main container">
            <div class="col-main">
                <div class="cart wow bounceInUp animated">

                    <div class="page-title">
                        <h2>Giỏ hàng</h2>
                    </div>
                    <div class="table-responsive">
                        <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
                        <fieldset>
                            <table class="data-table cart-table" id="shopping-cart-table">
                                <thead>
                                <tr class="first last">
                                    <th rowspan="1">&nbsp;Số</th>
                                    <th rowspan="1"><span class="nobr">Tên sản phẩm</span></th>
                                    <th class="a-center" rowspan="1">Số lượng</th>


                                    <th class="a-center" rowspan="1">Sửa&nbsp;</th>
                                    <th colspan="1" class="a-center"><span class="nobr">Đơn giá</span></th>
                                    <th colspan="1" class="a-center">Thành tiền</th>
                                    <th class="a-center" rowspan="1">Xóa&nbsp;</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr class="first last">
                                    <td class="a-right last" colspan="7">
                                        <a href="{{url('/')}}">
                                            <button class="button btn-continue"
                                                    title="Continue Shopping" type="button"><span><span>Tiếp tục mua hàng</span></span>
                                            </button>
                                        </a>
                                        {{--<button class="button btn-update" title="Update Cart" value="update_qty"--}}
                                        {{--name="update_cart_action" type="submit">--}}
                                        {{--<span><span>Update Cart</span></span></button>--}}
                                        {!!  Form::open(['method'=>'DELETE','url'=>['destroyall']])!!}
                                        <button id="empty_cart_button" class="button btn-empty" title="Clear Cart"
                                                value="empty_cart" name="update_cart_action" type="submit">
                                            <span><span>Xóa giỏ hàng</span></span></button>
                                        {!!  Form::close()!!}
                                    </td>

                                    </td>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach(Cart::content() as $item)
                                    <tr class="first odd">
                                        @if($item->options->type == 'book')
                                            <td class="image"><a class="product-image" title="{{$item->name}}"
                                                                 href="{{ url('book/' . $item->id.'/'.$item->options->slug) }}"><img
                                                            width="75"
                                                            alt="{{$item->name}}"
                                                            src="{{url('uploads/books/')}}/{{$item->options->thumbnail}}"></a>
                                            </td>
                                            <td><h2 class="product-name"><a
                                                            href="{{ url('book/' . $item->id.'/'.$item->options->slug) }}">{{$item->name}}</a>
                                                </h2></td>
                                            {!!  Form::open(['method'=>'GET','url'=>['addcart',$item->id]])!!}
                                            <td class="a-center movewishlist"><input type="number" maxlength="12"
                                                                                     class="input-text qty"
                                                                                     title="Qty" size="4"
                                                                                     value="{{$item->qty}}"
                                                                                     name="qty"></td>
                                            <td class="a-center">
                                                <button type="submit" class="button edit-bnt"></button>
                                            </td>
                                            {!!  Form::close()!!}
                                        @elseif($item->options->type == 'course')
                                            <td class="image"><a class="product-image" title="{{$item->name}}"
                                                                 href="{{ url('course/' . $item->id.'/'.$item->options->slug) }}"><img
                                                            width="75"
                                                            alt="{{$item->name}}"
                                                            src="{{url('')}}/{{$item->options->thumbnail}}"></a>
                                            </td>
                                            <td>
                                                <h2 class="product-name">
                                                    <a href="{{ url('course/' . $item->id.'/'.$item->options->slug) }}">
                                                        {{$item->name}}
                                                    </a>
                                                </h2>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        @elseif($item->options->type == 'batch')
                                            <td class="image"><a class="product-image" title="{{$item->name}}"
                                                                 href="{{ url('batch/' . $item->id.'/'.$item->options->slug) }}"><img
                                                            width="75"
                                                            alt="{{$item->name}}"
                                                            src="{{url('')}}/{{$item->options->thumbnail}}"></a>
                                            </td>

                                            <td><h2 class="product-name"><a
                                                            href="{{ url('batch/' . $item->id.'/'.$item->options->slug) }}">{{$item->name}}</a>
                                                </h2></td>
                                            <td></td>
                                            <td></td>
                                        @else
                                            <td class="image">

                                            </td>
                                            <td>
                                                <h2 class="product-name">
                                                    <a href="{{ url('room/') }}">
                                                        {{$item->name}}
                                                    </a>
                                                </h2>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        @endif

                                        <td class="a-right"><span class="cart-price"> <span class="price">{{number_format($item->price)}}
                                                    VND</span> </span>
                                        </td>
                                        <td class="a-right movewishlist"><span class="cart-price"> <span
                                                        class="price">{{number_format($item->subtotal)}}
                                                    VND</span> </span>
                                        </td>

                                        <td class="a-center last"><a class="button remove-item" title="Remove item"
                                                                     href="{{url('destroyitem/'.$item->id)}}"><span>Xóa</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </div>
                <form method="post" action="{{ url('order') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="cart-collaterals row  wow bounceInUp animated">
                        <div class="col-sm-4">
                            <div class="shipping">
                                <h3>Thông tin của bạn </h3>
                                <div class="shipping-form">
                                    <ul class="form-list">
                                        @if ($errors->any())
                                            <div class="alert alert-warning alert-dismissable fade in">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Xảy ra lỗi!</strong> <span style="color:red">{{$errors->first()}}</span>
                                            </div>
                                        @endif
                                        <li>
                                            <label for="postcode"><span class="required"> * </span>Tên của bạn </label>
                                            <div class="input-box">
                                                <input type="text" name="name" id="first_name" class="input-text">
                                            </div>
                                        </li>
                                        <li>
                                            <label for="postcode"><span class="required"> * </span>Địa chỉ </label>
                                            <div class="input-box">
                                                <input type="text" name="address" id="address" class="input-text">
                                            </div>
                                        </li>
                                        <li>
                                            <label for="postcode"><span class="required"> * </span>Số điện thoại
                                            </label>
                                            <div class="input-box">
                                                <input type="text" name="phone" id="phone" class="input-text">
                                            </div>
                                        </li>
                                        <li>
                                            <label for="postcode"><span class="required"> * </span>Email</label>
                                            <div class="input-box">
                                                <input type="text" name="email" id="email" class="input-text">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            {{--<div class="discount">--}}
                            {{--<h3>Mã giảm giá </h3>--}}
                            {{--<input type="text" value="" name="coupon_code" id="coupon_code"--}}
                            {{--class="input-text fullwidth">--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-sm-4">
                            <div class="totals">
                                <h3>Tổng tiền</h3>
                                <div class="inner">
                                    <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                        <colgroup>
                                            <col>
                                            <col width="1">
                                        </colgroup>
                                        <tfoot>
                                        <tr>
                                            <td class="a-left" colspan="1"> Phí giao hàng</td>
                                            <td class="a-right"><span
                                                        class="price">{{$ship}} VND</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="a-left" colspan="1"><strong>Tổng tiền</strong></td>
                                            <td class="a-right"><strong><span name="subtotal"
                                                                              class="price">{{number_format(floatval(str_replace(',', '', Cart::subtotal()))+$ship)}}
                                                        VND</span></strong>
                                            </td>
                                            <input type="hidden" name="subtotal"
                                                   value="{{(floatval(str_replace(',', '', Cart::subtotal()))+$ship)}}">
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <ul class="checkout">
                                        <li>
                                            <button type="submit" title="Proceed to Checkout"
                                                    class="button btn-proceed-checkout">
                                                <span>Xác nhận đơn hàng</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="crosssel wow bounceInUp animated">
                    <div class="new_title center">
                        <h2>Một số sản phẩm liên quan:</h2>
                    </div>
                    <div class="category-products">
                        <ul id="crosssell-products-list" class="products-grid first odd">
                            @foreach($bookRandom as $item)
                                <li class="item col-md-3 col-sm-4 col-xs-6">
                                    <div class="col-item">

                                        <div class="sale-label sale-top-right">Giảm giá</div>
                                        <div class="product-image-area"><a class="product-image" title="Sample Product"
                                                                           href="{{url('book/'.$item->id.'/'.$item->slug)}}">
                                                <img alt="a"
                                                     class="img-responsive"
                                                     src="{{url('uploads/books/'.$item->thumbnail)}}">
                                            </a>
                                            {{--<div class="hover_fly"><a class="exclusive ajax_add_to_cart_button"--}}
                                            {{--href="{{ url('addcart/'.$item->id) }}"--}}
                                            {{--title="Add to cart">--}}
                                            {{--<div><i class="icon-shopping-cart"></i><span>Thêm vào giỏ hàng</span>--}}
                                            {{--</div>--}}
                                            {{--</a> <a class="quick-view" href="quick_view.html">--}}
                                            {{--<div><i class="icon-eye-open"></i><span>Quick view</span></div>--}}
                                            {{--</a> <a class="add_to_compare" href="compare.html">--}}
                                            {{--<div><i class="icon-random"></i><span>Add to compare</span></div>--}}
                                            {{--</a> <a class="addToWishlist wishlistProd_5"--}}
                                            {{--href="{{url('wishlist/'.$item->id.'/'.$item->slug)}}">--}}
                                            {{--<div><i class="icon-heart"></i><span>Add to Wishlist</span></div>--}}
                                            {{--</a></div>--}}
                                        </div>
                                        <div class="info">
                                            <div class="info-inner">
                                                <div class="item-title"><a title=" Sample Product"
                                                                           href="{{url('book/'.$item->id.'/'.$item->slug)}}"> {{$item->title}} </a>
                                                </div>
                                                <!--item-title-->
                                                <div class="item-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:60%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        @if($item->discount>0)
                                                            <p class="special-price"><span class="price"
                                                                                           id="product-price-902"> {{number_format($item->price*(1-$item->discount/100))}}
                                                                    VND </span>
                                                            </p>
                                                            <p class="old-price"><span class="price-sep">-</span> <span
                                                                        class="price"> {{number_format($item->price)}}
                                                                    VND </span></p>
                                                        @else
                                                            <p class="special-price"><span
                                                                        class="price"> {{number_format($item->price)}} </span>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--item-content-->
                                            </div>
                                            <a href="{{ url('addcart/'.$item->id) }}">
                                                <div class="actions">
                                                    <button type="button" title="Đặt hàng"
                                                            class="button btn-cart">
                                                        <span>Thêm vào giỏ hàng</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <!--info-inner-->

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



