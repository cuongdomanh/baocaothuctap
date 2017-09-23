@extends('client.layouts.index')
@section('content')
    <div class="container">
        @include('client.user.myacount')
        <section class="col-sm-9 ">
            <div class="user_C">
                <div class="portlet light ">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <h3 class="caption-subject font-blue-madison bold uppercase">Thông tin cá nhân</h3>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <!-- PERSONAL INFO TAB -->
                            <div class="tab-pane active" id="tab_1_1">
                                {!! Form::open(
                                     ['method'=>'post',
                                     'url'=>  [ 'acount/updateMenber'] ,
                                     'files'=> true
                                      ]) !!}
                                @if( isset($user) && !empty(Auth::user()->thumbnai) )
                                    <p>
                                        <img src="{{url( 'uploads/user/'.Auth::user()->thumbnai) }}"
                                             width="100"/>
                                    </p>
                                @else
                                    <p>
                                        <img src="{{url('img/avata/default_avatar.png')}}" width="100"/>
                                    </p>
                                @endif
                                <div class="form-group">
                                    <label class="control-label">Ảnh đại diện:</label>
                                    <input type="file" id="thumbnai" name="thumbnai"
                                           class="form-control"/></div>
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="email" id="email" value="{{Auth::user()->email}}"
                                           name="email" disabled="disabled" class="form-control"/></div>
                                <div class="form-group">
                                    <label class="control-label">Tên</label>
                                    <input type="text" id="email"
                                           value="{{Auth::user()->profile->first_name}}"
                                           name="first_name" class="form-control"/></div>
                                <div class="form-group">
                                    <label class="control-label">Số điện thoại</label>
                                    <input type="text" id="pwd"
                                           value="{{Auth::user()->profile->phone}}" name="phone"
                                           class="form-control"/></div>
                                <div class="form-group">
                                    <label class="control-label">Địa chỉ</label>
                                    <input type="text" id="pwd"
                                           value="{{Auth::user()->profile->address }}" name="address"
                                           class="form-control"/></div>
                                <div class="form-group">
                                    <label class="control-label">Mật khẩu cũ</label>
                                    <input type="password" id="pwd" placeholder="Enter password"
                                           name="pwd"
                                           class="form-control"/></div>
                                <div class="form-group">
                                    <label class="control-label">Mật khẩu mới</label>
                                    <input type="text" id="pwd" placeholder="Enter password"
                                           name="pwd"
                                           class="form-control"/></div>
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection




