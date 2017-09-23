<header class="header-container">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Header Language -->
                <div class="col-xs-6">
                    <div class="welcome-msg hidden-xs">CSKH: 01645514664</div>
                    <div class="welcome-msg hidden-xs">Địa chỉ: 157 Chùa Láng - Đống Đa</div>
                </div>
                <div class="col-xs-6">

                    <!-- Header Top Links -->
                    <div class="toplinks">
                        <div class="links">
                            @if(Auth::check())
                                {{--<div><a title="Thông báo" href="{{url('/')}}">--}}
                                {{--<span class="icon-bell" style="font-size: 15px;">--}}
                                {{--<span style="color: yellow">(1)</span>--}}
                                {{--</span>--}}
                                {{--</a>--}}
                                {{--</div>--}}
                                <div class="myaccount"><a title="My Account" href="{{url('acount/')}}"><span
                                                class="hidden-xs">{{Auth::user()->name}}</span></a>
                                </div>
                                <div class="login"><a title="Login" href="{{url('logout')}}"><span
                                                class="hidden-xs">Đăng xuất</span></a></div>
                                {{--<div>--}}
                                {{--<ul id="nav" class="hidden-xs" style="float: right;">--}}
                                {{--<li class="level0 parent drop-menu"><a href="#" style="padding: 1px 16px;"><span style="color: yellow;line-height: 5px; ">Thông báo(1)</span> </a>--}}
                                {{--<ul class="level1" style="display: none;">--}}
                                {{--<li class="level1 first"><a href="#"><span>Grid</span></a></li>--}}
                                {{--<li class="level1 nav-10-2"> <a href="#"> <span>List</span> </a> </li>--}}
                                {{--</ul>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="myaccount"><a title="My Account" href="{{url('acount/'.Auth::user()->id)}}" style="padding: 1px 16px;"><span class="hidden-xs">{{Auth::user()->name}}</span></a></div>--}}
                                {{--<div class="login"><a title="Logout" href="{{url('logout')}}" style="padding: 1px 16px;"><span class="hidden-xs">Đăng xuất</span> </a>--}}
                                {{--</div>--}}
                                {{--<ul id="nav" class="hidden-xs">--}}
                            @else

                                <div><a title="Login" href="{{url('log')}}">
                                        <span class="glyphicon glyphicon-user" style="font-size: 15px;"> </span>
                                        Đăng Nhập
                                    </a>
                                </div>

                            @endif
                        </div>
                    </div>
                    <!-- End Header Top Links -->
                </div>
            </div>
        </div>
    </div>
    <div class="header container">
        <div class="row">
            <div class="col-lg-2 col-sm-3 col-md-2">
                <!-- Header Logo -->
                <a class="logo" title="Magento Commerce" href="{{url('/')}}"><img alt="smartbook" class="img-responsive"
                                                                                  src="{{asset('uploads/images/logo.jpg')}}"></a>
                <!-- End Header Logo -->
            </div>
            <div class="col-lg-8 col-sm-6 col-md-8">
                <!-- Search-col -->
                <div class="search-box">
                    <form action="search" method="GET" id="search_mini_form" name="Categories">
                        <input type="text" placeholder="Tìm kiếm tại đây..." value="" maxlength="70" class=""
                               name="keyword" id="search">
                        <button id="submit-button" class="search-btn-bg"><span>Tìm kiếm</span></button>
                    </form>
                </div>
                <!-- End Search-col -->
            </div>
            <!-- Top Cart -->
            <div class="col-lg-2 col-sm-3 col-md-2">
                <div class="top-cart-contain">
                    <div class="mini-cart">
                        <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a
                                    href="#"> <i class="glyphicon glyphicon-shopping-cart"></i>
                                <div class="cart-box">
                                    <span class="title">Giỏ hàng</span>
                                    <span id="cart-total">{{Cart::content()->count()}} SP</span></div>
                            </a></div>
                        <div>
                            <div class="top-cart-content arrow_box">
                                <div class="block-subtitle">Đã thêm gần đây</div>
                                <ul id="cart-sidebar" class="mini-products-list">
                                    @foreach(Cart::content() as $item)
                                        @if($item->options->type == 'book')
                                            <li class="item even"><a class="product-image"
                                                                     href="{{ url('book/' . $item->id.'/'.$item->options->slug) }}"

                                                                     title="{{$item->name}}"><img
                                                            alt="{{$item->title}}"
                                                            src="{{url('uploads/books/')}}/{{$item->options->thumbnail}}"
                                                            width="80"></a>
                                                <div class="detail-item">
                                                    <div class="product-details"><a
                                                                href="{{url('destroyitem/'.$item->id)}}"
                                                                title="Remove This Item"
                                                                onclick="return confirm('Bạn chắc chắn muốn xóa ?');"
                                                                class="glyphicon glyphicon-remove">

                                                            &nbsp;</a>
                                                        <p class="product-name"><a
                                                                    href="{{ url('book/' . $item->id.'/'.$item->options->slug) }}"
                                                                    title="{{$item->name}}">{{$item->name}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="product-details-bottom"><span
                                                                class="price">{{number_format($item->price)}} VNĐ</span>
                                                        <span class="title-desc">Số lượng:</span>
                                                        <strong>{{$item->qty}}</strong></div>
                                                </div>
                                            </li>
                                        @elseif($item->options->type == 'course')
                                            <li class="item even"><a class="product-image"
                                                                     href="{{ url('course/' . $item->id.'/'.$item->options->slug) }}"

                                                                     title="{{$item->name}}"><img
                                                            alt="{{$item->name}}"
                                                            src="{{url('')}}/{{$item->options->thumbnail}}"
                                                            width="80"></a>
                                                <div class="detail-item">
                                                    <div class="product-details"><a
                                                                href="{{url('destroyitem/'.$item->id)}}"
                                                                title="Remove This Item"
                                                                onclick="return confirm('Bạn chắc chắn muốn xóa ?');"
                                                                class="glyphicon glyphicon-remove">

                                                            &nbsp;</a>
                                                        <p class="product-name"><a
                                                                    href="{{ url('course/' . $item->id.'/'.$item->options->slug) }}"
                                                                    title="{{$item->name}}">{{$item->name}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="product-details-bottom"><span
                                                                class="price">{{number_format($item->price)}} VNĐ</span>
                                                        <span class="title-desc">Số lượng:</span>
                                                        <strong>{{$item->qty}}</strong></div>
                                                </div>
                                            </li>
                                        @elseif($item->options->type == 'batch')
                                            <li class="item even"><a class="product-image"
                                                                     href="{{ url('batch/' . $item->id.'/'.$item->options->slug) }}"

                                                                     title="{{$item->name}}"><img
                                                            alt="{{$item->title}}"
                                                            src="{{url('')}}/{{$item->options->thumbnail}}"
                                                            width="80"></a>
                                                <div class="detail-item">
                                                    <div class="product-details"><a
                                                                href="{{url('destroyitem/'.$item->id)}}"
                                                                title="Remove This Item"
                                                                onclick="return confirm('Bạn chắc chắn muốn xóa ?');"
                                                                class="glyphicon glyphicon-remove">

                                                            &nbsp;</a>
                                                        <p class="product-name"><a
                                                                    href="{{ url('batch/' . $item->id.'/'.$item->options->slug) }}"
                                                                    title="{{$item->name}}">{{$item->name}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="product-details-bottom"><span
                                                                class="price">{{number_format($item->price)}} VNĐ</span>
                                                        <span class="title-desc">Số lượng:</span>
                                                        <strong>{{$item->qty}}</strong></div>
                                                </div>
                                            </li>
                                        @else
                                            <li class="item even"><a class="product-image"
                                                                     href="{{ url('room/') }}"
                                                                     title="{{$item->name}}"><img
                                                            alt="{{$item->title}}"
                                                            src="{{url('')}}/uploads/room/exam.png"
                                                            width="80"></a>
                                                <div class="detail-item">
                                                    <div class="product-details"><a
                                                                href="{{url('destroyitem/'.$item->id)}}"
                                                                title="Remove This Item"
                                                                onclick="return confirm('Bạn chắc chắn muốn xóa ?');"
                                                                class="glyphicon glyphicon-remove">
                                                            &nbsp;</a>
                                                        <p class="product-name"><a
                                                                    href="{{ url('room/' ) }}"
                                                                    title="{{$item->name}}">{{$item->name}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="product-details-bottom"><span
                                                                class="price">{{number_format($item->price)}} VNĐ</span>
                                                        <span class="title-desc">Số lượng:</span>
                                                        <strong>{{$item->qty}}</strong></div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                </ul>
                                <div class="top-subtotal">Tổng tiền: <span
                                            class="price"> {{number_format(floatval(str_replace(',', '', Cart::subtotal())))}}
                                        VNĐ</span></div>
                                <div class="actions">
                                    {{--<button class="btn-checkout" type="button"><span>Checkout</span></button>--}}
                                    <a class="view-cart" type="button" href="{{url('cart')}}">
                                        <span>Thanh toán</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ajaxconfig_info"><a href="#/"></a>
                        <input value="" type="hidden">
                        <input id="enable_module" value="1" type="hidden">
                        <input class="effect_to_cart" value="1" type="hidden">
                        <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                    </div>
                </div>
                <br>
            </div>
            <!-- End Top Cart -->
        </div>
    </div>
</header>




