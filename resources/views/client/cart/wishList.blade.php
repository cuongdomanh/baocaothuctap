@extends('client.layouts.index')
@section('content')

    <div class="main-container col2-right-layout">
        <div class="main container">

            <div class="row">
                <section class="col-main col-sm-9 wow bounceInUp animated">
                    <div class="my-account">
                        <div class="page-title">
                            <h2>Danh sách yêu thích </h2>
                        </div>
                        <div class="my-wishlist">
                            <div class="table-responsive">

                                    <fieldset>

                                        <table id="wishlist-table" class="clean-table linearize-table data-table">
                                            <thead>
                                            <tr class="first last">
                                                <th class="customer-wishlist-item-image"></th>
                                                <th class="customer-wishlist-item-info">Mô tả</th>
                                                <th class="customer-wishlist-item-price">Đơn giá</th>
                                                <th class="customer-wishlist-item-cart">Thêm vào giỏ hàng</th>

                                                <th class="customer-wishlist-item-remove">Xóa</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($wishlist->book as $cart)

                                                <tr id="item_31" class="first odd">
                                                    <td class="wishlist-cell0 customer-wishlist-item-image">
                                                        <a title="Sample Product" href="http://ow.ly/XqzNo" class="product-image">
                                                            <img width="150" alt="Sample Product" src="{{url('uploads/books/'.$cart->thumbnail)}}">
                                                        </a>
                                                    </td>
                                                    <td class="wishlist-cell1 customer-wishlist-item-info">
                                                        <h3 class="product-name">
                                                            <b><a title="Sample Product" href="{{url('book/'.$cart->id.'/'.$cart->slug)}}">{{$cart->title}}</a></b>
                                                        </h3>
                                                        <div class="description std">
                                                            <div class="inner">{!! $cart->description !!}</div>
                                                        </div>
                                                    </td>
                                                    <td data-rwd-label="Price" class="wishlist-cell3 customer-wishlist-item-price">
                                                        <div class="cart-cell">
                                                            <div class="price-box">
                                                            <span id="product-price-39" class="regular-price">
                                                                @if($cart->discount>0)
                                                                <span class="price">{{$cart->price*(1-$cart->discount/100)}} vnđ</span>
                                                                    @else
                                                                    <span class="price">{{$cart->price}} vnđ</span>
                                                                @endif
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="wishlist-cell4 customer-wishlist-item-cart">
                                                        <div class="cart-cell">

                                                            <button class="button btn-cart"  title="Add to Cart" type="submit">
                                                                <span><span>Thêm vào giỏ hàng</span></span>
                                                            </button>

                                                        </div>

                                                    </td>

                                                    <td class="wishlist-cell5 customer-wishlist-item-remove last">
                                                        {!! Form::open(['method'=>'delete' , 'url'=>['wishlist',$cart->id]]) !!}
                                                        <button class="remove-item" title="Clear Cart" type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa?')">
                                                           Xóa
                                                        </button>
                                                        {!! Form::close() !!}

                                                    </td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>

                                    </fieldset>

                            </div>
                        </div>
                        <div class="buttons-set">
                            <p class="back-link"><a href="#/customer/account/"><small>« </small>Quay lại</a></p>
                        </div>
                    </div>
                </section>
                <aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
                    <div class="block block-account">
                        <div class="block-title">My Account</div>
                        <div class="block-content">
                            <ul>
                                <li><a href="dashboard.html">Account Dashboard</a></li>
                                <li><a href="#customer/account/edit/">Account Information</a></li>
                                <li><a href="#customer/address/">Address Book</a></li>
                                <li><a href="#sales/order/history/">My Orders</a></li>
                                <li><a href="#sales/billing_agreement/">Billing Agreements</a></li>
                                <li><a href="#sales/recurring_profile/">Recurring Profiles</a></li>
                                <li><a href="#review/customer/">My Product Reviews</a></li>
                                <li><a href="#tag/customer/">My Tags</a></li>
                                <li class="current"><a href="#wishlist/">My Wishlist</a></li>
                                <li><a href="#downloadable/customer/products/">My Downloadable</a></li>
                                <li class="last"><a href="#newsletter/manage/">Newsletter Subscriptions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="block block-compare">
                        <div class="block-title ">Compare Products (2)</div>
                        <div class="block-content">
                            <ol id="compare-items">
                                <li class="item odd">
                                    <input type="hidden" value="2173" class="compare-item-id">
                                    <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Polyester Wrapped Cushions</a> </li>
                                <li class="item last even">
                                    <input type="hidden" value="2174" class="compare-item-id">
                                    <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a> </li>
                            </ol>
                            <div class="ajax-checkout">
                                <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                                <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection


