<div class="side-nav-categories">
    <div class="block-title"> Thể loại</div>
    <div class="box-content box-category">
        <ul>
            @foreach(Menu::getAll() as $item)
                <li class="active">
                    @if($item->type==0)
                        <a href="{{url('book')}}"> <span class="icon-book"> {{$item->title}}</span> </a>
                        {{--<span class="subDropdown plus "></span>--}}
                    @endif
                    @if($item->type==1)
                        <a href="{{url('course')}}"> {{$item->title}} </a>
                        {{--<span class="subDropdown"></span>--}}
                    @endif
                    @if($item->type==2)
                        <a href="{{url('batch')}}"> {{$item->title}} </a>
                        {{--<span class="subDropdown plus "></span>--}}
                    @endif
                    @if($item->type==3)
                        <a href="{{url('room')}}"> {{$item->title}} </a>
                        {{--<span class="subDropdown plus "></span>--}}
                    @endif
                    <ul class="level0_415">
                        @foreach($item->child as $childItem)
                            <li>
                                @if($childItem->type==0)
                                    <a href="{{url('book/'.$childItem->id)}}"> <span class="icon-book"> {{$childItem->title}}</span> </a>
                                    {{--<span class="subDropdown plus "></span>--}}
                                @endif
                                @if($childItem->type==1)
                                    <a href="{{url('course/'.$childItem->id)}}"> {{$childItem->title}} </a>
                                    {{--<span class="subDropdown"></span>--}}
                                @endif
                                @if($childItem->type==2)
                                    <a href="{{url('batch/'.$childItem->id)}}"> {{$childItem->title}} </a>
                                    {{--<span class="subDropdown plus "></span>--}}
                                @endif
                                    @if($childItem->type==3)
                                        <a href="{{url('room/'.$childItem->id)}}"> {{$childItem->title}} </a>
                                        {{--<span class="subDropdown plus "></span>--}}
                                    @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</div>

{{--CART--}}
<div class="block block-cart">
    <div class="block-title ">Giỏ hàng</div>
    <div class="block-content">
        <div class="summary">
            <p class="amount">Có <a href="{{ url('cart/') }}">{{Cart::content()->count()}}
                    sản phẩm</a> trong giỏ hàng.</p>
            <p class="subtotal"><span class="label">Tổng tiền:</span> <span
                        class="price">{{number_format(floatval(str_replace(',', '', Cart::subtotal())))}} VNĐ</span></p>
        </div>
        <div class="ajax-checkout">
            <a type="button" title="Checkout" class="button button-checkout" href="{{url('cart')}}">
                <span>Thanh toán</span></a>
        </div>
        <p class="block-subtitle">Đã thêm gần đây </p>
        <ul>
            @foreach(Cart::content() as $item)
                @if($item->options->type == 'book')
                    <li class="item"><a class="product-image" title="{{$item->name}}"
                                        href="{{ url('book/' . $item->id.'/'.$item->options->slug) }}">
                            <img width="80" alt="Fisher-Price Bubble Mower"
                                 src="{{url('uploads/books/')}}/{{$item->options->thumbnail}}">
                        </a>
                        <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item"
                                                   href="#">
                                    <span class="icon"></span> Remove </a></div>
                            <p class="product-name"><a
                                        href="{{ url('book/' . $item->id.'/'.$item->options->slug) }}">{{$item->name}}</a>
                            </p>
                            <strong>{{$item->qty}}</strong> x <span class="price">{{number_format($item->price)}}
                                VNĐ</span></div>
                    </li>
                @elseif($item->options->type == 'course')
                    <li class="item"><a class="product-image" title="{{$item->name}}"
                                        href="{{ url('course/' . $item->id.'/'.$item->options->slug) }}">
                            <img width="80" alt="{{$item->name}}"
                                 src="{{url('')}}/{{$item->options->thumbnail}}">
                        </a>
                        <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item"
                                                   href="#">
                                    <span class="icon"></span> Remove </a></div>
                            <p class="product-name"><a
                                        href="{{ url('course/' . $item->id.'/'.$item->options->slug) }}">{{$item->name}}</a>
                            </p>
                            <strong>{{$item->qty}}</strong> x <span class="price">{{number_format($item->price)}}
                                VNĐ</span></div>
                    </li>
                @elseif($item->options->type == 'batch')
                    <li class="item"><a class="product-image" title="{{$item->name}}"
                                        href="{{ url('batch/' . $item->id.'/'.$item->options->slug) }}">
                            <img width="80" alt="{{$item->name}}"
                                 src="{{url('')}}/{{$item->options->thumbnail}}">
                        </a>
                        <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item"
                                                   href="#">
                                    <span class="icon"></span> Remove </a></div>
                            <p class="product-name"><a
                                        href="{{ url('batch/' . $item->id.'/'.$item->options->slug) }}">{{$item->name}}</a>
                            </p>
                            <strong>{{$item->qty}}</strong> x <span class="price">{{number_format($item->price)}}
                                VNĐ</span></div>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>



