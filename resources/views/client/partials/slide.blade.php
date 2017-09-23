<div id="magik-slideshow" class="magik-slideshow">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-8 wow bounceInUp animated">
                <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                    <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                        <ul>
                            @foreach($slideleft as $item)
                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                                    data-thumb='{{url('uploads/slides/')}}/{{$item->image}}'><img
                                            src='{{url('uploads/slides/')}}/{{$item->image}}'
                                            data-bgposition='left top'
                                            data-bgfit='cover'
                                            data-bgrepeat='no-repeat' alt="banner"/>
                                    {{--<div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45' data-y='30'--}}
                                    {{--data-endspeed='500' data-speed='500' data-start='1100'--}}
                                    {{--data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'--}}
                                    {{--data-elementdelay='0.1' data-endelementdelay='0.1'--}}
                                    {{--style='z-index:2; white-space:nowrap;'>Exclusive of designer--}}
                                    {{--</div>--}}
                                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45' data-y='70'
                                         data-endspeed='500' data-speed='500' data-start='1300'
                                         data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:3; white-space:nowrap;color: royalblue'>{{$item->title}}
                                    </div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-x='45' data-y='360'
                                         data-endspeed='500' data-speed='500' data-start='1500'
                                         data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:4; white-space:nowrap;'><a href='{{$item->link}}'
                                                                                   class="view-more">View
                                            More</a></div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-x='45' data-y='130'
                                         data-endspeed='500' data-speed='500' data-start='1500'
                                         data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:4; white-space:nowrap;'>{!! $item->description !!}
                                    </div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-x='45' data-y='400'
                                         data-endspeed='500' data-speed='500' data-start='1500'
                                         data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                         style='z-index:4; white-space:nowrap;font-size:11px'>Địa chỉ: số 157 Chùa Láng
                                        - Đống Đa - Hà Nội.
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>
            <aside class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp animated">
                <div class="RHS-banner">
                    <div class="add"><a href="{{$slideright->link}}"><img alt="banner-img"
                                                                          src="{{url('uploads/slides/')}}/{{$slideright->image}}"
                                                                          height="458px" width="100%"></a>
                        <div class="overlay"><a class="info" href="#">SIÊU KHUYẾN MÃI</a></div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>



