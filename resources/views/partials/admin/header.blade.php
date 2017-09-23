<div class="page-header-inner ">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
        <a href="{{'admin/'}}">
            <img src="{{ asset('uploads/images/logo.jpg')}}" width="60%" alt="logo" class="logo-default"/> </a>
        <div class="menu-toggler sidebar-toggler"></div>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
       data-target=".navbar-collapse"> </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">

            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <i class="icon-envelope-open"></i>
                    <span class="badge badge-default"> {{ Helper::contact()->count() }} </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="external">
                        <h3>Bạn có
                            <span class="bold">{{ Helper::contact()->count() }} phản hồi</span> </h3>
                        <a href="{{url('admin/contact')}}">Xem tất cả</a>
                    </li>

                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                            @foreach(Helper::contact() as $ct)
                            <li>
                                <a href="#">
                                                <span class="photo">
                                                    <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg') }}"
                                                         class="img-circle" alt=""> </span>
                                    <span class="subject">
                                                    <span class="from"> {{$ct->name}} </span>
                                                    <span class="time">{{$ct->created_at}} </span>
                                     </span>
                                    {{--<span class="message"> {{$ct->content}}</span>--}}
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </li>

                </ul>
            </li>



            <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <img alt="" class="img-circle" src="{{ url(Auth::user()->thumbnai)}}"/>
                    <span class="username username-hide-on-mobile">
                        {{Auth::user()->name}}
                    </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-default">
                    <li>
                        <p >
                            <i class="icon-user"></i>
                            @foreach(Auth::user()->roles as $item )
                                {{$item->name}}
                            @endforeach
                        </p>
                    </li>

                    <li>
                        <a href="{{url('logout')}}">
                            <i class="icon-key"></i> Log Out
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>

</div>
