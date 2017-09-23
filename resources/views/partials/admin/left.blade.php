<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler"></div>  
            </li>
            <li class="sidebar-search-wrapper">
                <form class="sidebar-search  " action="" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm..." style="color: yellow">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <?php $currentPath = Route::getCurrentRoute()->getName(); ?>

            <li class="nav-item start" style="background: #32c5d2">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title" style="color: yellow; font-weight: 500;">Trang chủ</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                             <ul class="sub-menu">
                          @foreach(Module::dashboard() as $da)    
                                 <li class="nav-item">
                                    <a href="{{ $da['url'] }}" class="nav-link ">
                                        <i class="{{ $da['icon'] }}"></i>
                                        <span class="title1">{{ $da['title'] }}</span> 
                                         @if(starts_with($currentPath, 'admin.'.$da['slug'])) <span class="selected"></span> @endif 
                                    </a>
                                </li>
                          @endforeach  
                       </ul>              
            </li>

             <li class="nav-item  ">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="glyphicon glyphicon-list-alt"></i>
                             <span class="title">Quản lý khóa học</span>
                             <span class="arrow"></span>
                        </a>
                  
                        <ul class="sub-menu">
                          @foreach(Module::course() as $co)    
                                 <li class="nav-item">
                                    <a href="{{ $co['url'] }}" class="nav-link ">
                                        <i class="{{ $co['icon'] }}"></i>
                                        <span class="title1">{{ $co['title'] }}</span> 
                                         @if(starts_with($currentPath, 'admin.'.$co['slug'])) <span class="selected"></span> @endif 
                                    </a>
                                </li>
                          @endforeach  
                       </ul>              
             </li>

             <li class="nav-item  ">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="glyphicon glyphicon-align-justify"></i>
                             <span class="title">Quản lý sách</span>
                             <span class="arrow"></span>
                        </a>
                  
                        <ul class="sub-menu">
                          @foreach(Module::book() as $bk)    
                                 <li class="nav-item">
                                    <a href="{{ $bk['url'] }}" class="nav-link ">
                                        <i class="{{ $bk['icon'] }}"></i>
                                        <span class="title1">{{ $bk['title'] }}</span> 
                                         @if(starts_with($currentPath, 'admin.'.$bk['slug'])) <span class="selected"></span> @endif 
                                    </a>
                                </li>
                          @endforeach  
                       </ul>              
             </li>

            <li class="nav-item  ">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="glyphicon glyphicon-user"></i>
                             <span class="title">Quản lý người dùng</span>
                             <span class="arrow"></span>
                        </a>
                  
                        <ul class="sub-menu">
                          @foreach(Module::user() as $us)    
                                 <li class="nav-item">
                                    <a href="{{ $us['url'] }}" class="nav-link ">
                                        <i class="{{ $us['icon'] }}"></i>
                                        <span class="title1">{{ $us['title'] }}</span> 
                                         @if(starts_with($currentPath, 'admin.'.$us['slug'])) <span class="selected"></span> @endif 
                                    </a>
                                </li>
                          @endforeach  
                       </ul>              
             </li>

            {{--<li class="nav-item  ">--}}
                        {{--<a href="#" class="nav-link nav-toggle">--}}
                            {{--<i class="glyphicon glyphicon-folder-close"></i>--}}
                             {{--<span class="title">Manager folder</span>--}}
                             {{--<span class="arrow"></span>--}}
                        {{--</a>--}}
                  {{----}}
                        {{--<ul class="sub-menu">--}}
                          {{--@foreach(Module::folder() as $fd)    --}}
                                 {{--<li class="nav-item">--}}
                                    {{--<a href="{{ $fd['url'] }}" class="nav-link ">--}}
                                        {{--<i class="{{ $fd['icon'] }}"></i>--}}
                                        {{--<span class="title1">{{ $fd['title'] }}</span> --}}
                                         {{--@if(starts_with($currentPath, 'admin.'.$fd['slug'])) <span class="selected"></span> @endif --}}
                                    {{--</a>--}}
                                {{--</li>--}}
                          {{--@endforeach  --}}
                       {{--</ul>              --}}
             {{--</li>--}}
            <li class="nav-item  ">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="glyphicon glyphicon-file"></i>
                             <span class="title">Quản lý đề thi</span>
                             <span class="arrow"></span>
                        </a>
                  
                        <ul class="sub-menu">
                          @foreach(Module::exam() as $ex)    
                                 <li class="nav-item">
                                    <a href="{{ $ex['url'] }}" class="nav-link ">
                                        <i class="{{ $ex['icon'] }}"></i>
                                        <span class="title1">{{ $ex['title'] }}</span> 
                                         @if(starts_with($currentPath, 'admin.'.$ex['slug'])) <span class="selected"></span> @endif 
                                    </a>
                                </li>
                          @endforeach  
                       </ul>              
            </li>
            
            <li class="nav-item  ">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="glyphicon glyphicon-inbox"></i>
                             <span class="title">Quản lý phòng thi</span>
                             <span class="arrow"></span>
                        </a>
                  
                        <ul class="sub-menu">
                          @foreach(Module::room() as $rm)    
                                 <li class="nav-item">
                                    <a href="{{ $rm['url'] }}" class="nav-link ">
                                        <i class="{{ $rm['icon'] }}"></i>
                                        <span class="title1">{{ $rm['title'] }}</span> 
                                         @if(starts_with($currentPath, 'admin.'.$rm['slug'])) <span class="selected"></span> @endif 
                                    </a>
                                </li>
                          @endforeach  
                       </ul>              
            </li>

            <li class="nav-item  ">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="glyphicon glyphicon-earphone"></i>
                             <span class="title">Quản lý thanh toán</span>
                             <span class="arrow"></span>
                        </a>
                  
                        <ul class="sub-menu">
                          @foreach(Module::order() as $od)    
                                 <li class="nav-item">
                                    <a href="{{ $od['url'] }}" class="nav-link ">
                                        <i class="{{ $od['icon'] }}"></i>
                                        <span class="title1">{{ $od['title'] }}</span> 
                                         @if(starts_with($currentPath, 'admin.'.$od['slug'])) <span class="selected"></span> @endif 
                                    </a>
                                </li>
                          @endforeach  
                       </ul>              
            </li>
            <li class="nav-item  ">
                <a href="#" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-envelope"></i>
                    <span class="title">Quản lý hộp thư</span>
                    <span class="arrow"></span>
                </a>

                <ul class="sub-menu">
                    @foreach(Module::contact() as $ct)
                        <li class="nav-item">
                            <a href="{{ $ct['url'] }}" class="nav-link ">
                                <i class="{{ $ct['icon'] }}"></i>
                                <span class="title1">{{ $ct['title'] }}</span>
                                @if(starts_with($currentPath, 'admin.'.$ct['slug'])) <span class="selected"></span> @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>

            <li class="nav-item  ">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="glyphicon glyphicon-pause"></i>
                             <span class="title">Quản lý nội dung</span>
                             <span class="arrow"></span>
                        </a>
                  
                        <ul class="sub-menu">
                          @foreach(Module::content() as $ct)    
                                 <li class="nav-item">
                                    <a href="{{ $ct['url'] }}" class="nav-link ">
                                        <i class="{{ $ct['icon'] }}"></i>
                                        <span class="title1">{{ $ct['title'] }}</span> 
                                         @if(starts_with($currentPath, 'admin.'.$ct['slug'])) <span class="selected"></span> @endif 
                                    </a>
                                </li>
                          @endforeach  
                       </ul>              
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
