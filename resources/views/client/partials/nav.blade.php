<nav>
    <div class="container">
        <div class="nav-inner">
            <div class="logo-small"><a class="logo" title="Magento Commerce" href="{{url('/')}}"><img
                            alt="smartbook" src="{{asset('uploads/images/logo.jpg')}}"></a></div>
            <!-- mobile-menu -->
            <div class="hidden-desktop" id="mobile-menu">
                <ul class="navmenu">
                    <li>
                        <div class="menutop">
                            <div class="toggle"><span class="icon-bar"></span> <span class="icon-bar"></span> <span
                                        class="icon-bar"></span></div>
                            <h2>Menu</h2>
                        </div>
                        <ul class="submenu">
                            <li>
                                <ul class="topnav">
                                    <li class="level0 nav-6 level-top first parent">
                                        <a class="level-top" href="/">
                                            <span>TRANG CHỦ</span>
                                        </a>
                                    </li>
                                    @foreach(Menu::getAll() as $item)
                                        <li class="level0 nav-7 level-top parent">
                                            @if($item->type==0)
                                                <a href="{{url('book')}}"> {{$item->title}}</span> </a>
                                            @endif
                                            @if($item->type==1)
                                                <a href="{{url('course')}}"> {{$item->title}} </a>
                                            @endif
                                            @if($item->type==2)
                                                <a href="{{url('batch')}}"> {{$item->title}} </a>
                                                {{--<span class="subDropdown plus "></span>--}}
                                            @endif
                                            @if($item->type==3)
                                                <a href="{{url('room')}}"> {{$item->title}} </a>
                                                {{--<span class="subDropdown plus "></span>--}}
                                            @endif
                                            {{--<ul class="level0">--}}
                                            {{--<li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>--}}

                                            {{--</ul>--}}
                                            <ul class="level0">
                                                @foreach($item->child as $childItem)

                                                    <li class="level1 nav-2-2 parent">
                                                        @if($childItem->type==0)
                                                            <a href="{{url('book/'.$childItem->id)}}"> <span
                                                                        class="icon-book"> {{$childItem->title}}</span>
                                                            </a>
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
                                    <li class="level0 nav-10 level-top">
                                        <a href="{{url('about')}}"><span>Liên hệ</span> </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--navmenu-->
            </div>

            <!--End mobile-menu -->
            <ul id="nav" class="hidden-xs">
                <li id="nav-home" class="level0 parent drop-menu"><a href="{{url('/')}}"
                                                                     class="active"><span>Trang chủ</span> </a>
                </li>

                @foreach(Menu::getAll() as $item)
                    <li class="level0 parent drop-menu">
                        {{--<a--}}
                        {{--href="{{url('book')}}"><span>Sách</span>--}}
                        {{--</a>--}}
                        @if($item->type==0)
                            <a href="{{url('book')}}"> {{$item->title}}</span> </a>
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
                    </li>
                @endforeach
                <li id="nav-home" class="level0 parent drop-menu"><a href="{{url('about')}}"><span>Liên hệ</span> </a>
                </li>
                {{--<li class="level0 parent drop-menu"><a href="introduction"><span>Giới thiệu</span> </a>--}}
                {{--<ul class="level1" style="display: none;">--}}
                {{--<li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>--}}
                {{--<li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>--}}
                {{--<li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>--}}
                {{--<ul class="level2">--}}
                {{--<li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>--}}
                {{--<li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>--}}
                {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
</nav>



