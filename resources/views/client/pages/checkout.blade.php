@extends('client.layouts.index')

@section('content')
    <body>
    <div class="page">
        <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="row">
                    <section class="col-main col-sm-3 wow bounceInUp animated">
                    </section>
                    <aside class="col-right sidebar col-sm-6 wow bounceInUp animated">
                        <div class="block block-progress">
                            <div class="block-title ">Xác nhận của bạn</div>
                            <div class="block-content">
                                <dl>
                                    <dt class="complete">
                                        <span><h4> Địa chỉ nhận hàng </h4></span>
                                    <dd class="separator">
                                    <dd class="complete">
                                        <address>
                                            Họ tên : {{$list->receive_name}}<br>
                                            Số điện thoại : {{$list->receive_phone}}<br>
                                            Địa chỉ : {{$list->receive_address}}</br>
                                            {{--Email : {{Auth::user()->email}}</br>--}}
                                        </address>
                                    <dd class="separator">
                                    <dd class="complete"><h4>Đơn giá </h4>
                                    <span class="price">Sản phẩm : {{Cart::subtotal()}} VND</span></dd>
                                    <hr>
                                    <dd class="complete"><h3> Tổng tiền </h3>
                                        <span class="price">{{($list->total_amount)}}
                                            VND</span></dd>
                                    <dd class="complete"></dd>
                                    {!! Form::open(['method' => 'DELETE', 'url' => ['destroycheckout', $list->id]]) !!}
                                    <a href="{{url('destroycheckout')}}">
                                        <button type="button" class="button continue">
                                            <span>OK</span></button>
                                    </a>
                                    {{--<button type="submit" class="button btn-cancel"--}}
                                            {{--onclick="return confirm('Bạn chắc chắn muốn xóa?');">--}}
                                        {{--<i class="fa fa-remove"></i> Hủy--}}
                                    {{--</button>--}}
                                    {!! Form::close() !!}
                                </dl>
                            </div>
                        </div>
                    </aside>
                    <section class="col-main col-sm-3 wow bounceInUp animated">
                    </section>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection



