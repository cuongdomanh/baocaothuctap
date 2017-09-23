<div class='col-sm-3'>
    <div class="profile-sidebar">
        <!-- PORTLET MAIN -->
        <div class="portlet light profile-sidebar-portlet ">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
                @if(!empty(Auth::user()->thumbnai) && empty(Auth::user()->facebook_id ))
                    <img src="{{url('uploads/user/'.Auth::user()->thumbnai)}}" class="img-responsive" alt=""></div>
            @elseif(isset(Auth::user()->facebook_id))
                <img src="{{ Auth::user()->thumbnai }}" class="img-responsive" alt=""></div>
        @else
            <img src="{{url('img/avata/default_avatar.png')}}" class="img-responsive" alt=""></div>
@endif
<!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
        <div class="profile-usertitle-name"> {{Auth::user()->name}}</div>
        {{--<div class="profile-usertitle-job"> {{Auth::user()->email}} </div>--}}
    </div>
    <!-- END SIDEBAR USER TITLE -->
    <!-- SIDEBAR BUTTONS -->
    <div class="profile-userbuttons">
        {{--<button type="button" class="btn btn-circle green btn-sm">Ví : {{Auth::user()->coin}} VNĐ</button>--}}
    </div>
    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
        <ul class="nav">
            <li class="active">
                <a href="{{url('acount')}}">
                    <i class="glyphicon glyphicon-shopping-cart text-primary"></i> Đơn hàng </a>
            </li>
            <li>
                @if(Auth::user()->facebook_id == "")
                    <a href="{{url('acount/coin/')}}">
                        <i class="glyphicon glyphicon-user text-primary"></i> Thông tin cá nhân </a>
                @endif
            </li>
            <li>
                <a href="{{url('acount/discount/')}}">
                    <i class="glyphicon glyphicon-piggy-bank text-primary"></i> Khuyến mãi </a>
            </li>
            <li>
                <a href="{{url('acount/notification/')}}">
                    <i class="glyphicon glyphicon-bullhorn text-primary"></i> Phòng thi </a>
            </li>
            <li>
                <a href="{{url('acount/report/')}}">
                    <i class="glyphicon glyphicon-education text-primary"></i> Bài thi </a>
            </li>
            <li>
                <a href="{{url('acount/examCourse/')}}">
                    <i class="glyphicon glyphicon-blackboard text-primary"></i> Khóa học</a>
            </li>
            <li>
                <a href="{{url('acount/bookCourse/')}}">
                    <i class="glyphicon glyphicon-blackboard text-primary"></i> Khóa học theo sách</a>
            </li>
        </ul>
    </div>
    <!-- END MENU -->
</div>
</div>
</div>




