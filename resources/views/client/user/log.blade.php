@extends('client.layouts.index')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="account-login">
                <fieldset class="col2-set">
                    <legend>Đăng nhập hoặc tạo tài khoản mới </legend>
                    @include('../partials.admin.alert')
                    <div class="col-2 registered-users"><strong>Đăng nhập </strong>
                        <div class="content">
                            {{Form::open(['method'=>'post','url'=>'log'])}}
                            <ul class="form-list">

                                <li>
                                    <label for="email">Email: <span class="required">*</span></label>
                                    <br>
                                    <input type="email" name='email' placeholder=" Nhập địa chỉ email của bạn " class="input-text required-entry" id="email"  required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li>
                                    <label for="pass">Mật khẩu <span class="required">*</span></label>
                                    <br>
                                    <input type="password" placeholder=" Nhập mật khẩu của bạn " title="Password" id="pass" class="input-text required-entry validate-password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </li>

                            </ul>
                            <div class="buttons-set">
                                <button id="send2" name="send" type="submit" class="button login"><span>Đăng nhập</span></button>
                               {{--<a href="{{url('/auth/facebook')}}"><span >Đăng nhập bằng facebook </span></a>--}}
                                <a class="btn btn-social-icon btn-facebook" href="{{url('/auth/facebook')}}">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </div>
                            <div class="form-group">
                            <div class="col-md-8  ">
                                <a class="btn btn-link " href="{{ url('/password/reset') }}">
                                    Quên mật khẩu?
                                </a>
                            </div>
                        </div>
                            {{--<div class="buttons-set">--}}
                                {{----}}
                            {{--</div>--}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-2 registered-users"><strong>Đăng ký tài khoản </strong>
                        <div class="content">
                            {!! Form::open(['method'=>'post', 'url'=>'register',  'files'=>true ]) !!}
                            <ul class="form-list">

                                <li>
                                    <label for="name"><b>Tên</b>: <span class="required">*</span></label>
                                    <br>
                                    <input type="text" name='first_name' placeholder=" Nhập tên của bạn  " class="input-text required-entry" id="name" value="{{ old('first_name') }}" required >
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li>
                                    <label for="lastname"><b>Họ đệm</b>: <span class="required">*</span></label>
                                    <br>
                                    <input type="text" name='last_name' placeholder=" Nhập họ đệm của bạn  " class="input-text required-entry" id="lastname" value="{{ old('last_name') }}" required >
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li>
                                    <label for="lastname"><b>Ảnh đại diện</b>: <span class="required">*</span></label>
                                    <br>
                                    <input type="file" name='thumbnai' id="thumbnai" />
                                    @if ($errors->has('thumbnai'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('thumbnai') }}</strong>
                                    </span>
                                    @endif
                                </li>

                                <li>
                                    <label for="adddress"><b>Địa chỉ</b>: <span class="required">*</span></label>
                                    <br>
                                    <input type="text" name='address' placeholder=" Nhập địa chỉ  của bạn " class="input-text required-entry" id="adddress" value="{{ old('address') }}" required >
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li>
                                    <label for="phone"><b>Điện thoại</b>: <span class="required">*</span></label>
                                    <br>
                                    <input type="text" name='phone' placeholder=" Nhập số điện thoại  " class="input-text required-entry" id="phone" value="{{ old('phone') }}" required >
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li>
                                    <label for="email"> <b>Email</b>: <span class="required">*</span></label>
                                    <br>
                                    <input type="text" name='email' placeholder=" Nhập email của bạn " class="input-text required-entry" id="email" value="{{ old('email') }}" required >
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li>
                                    <label for="pass"><b>Mật khẩu</b> <span class="required">*</span></label>
                                    <br>
                                    <input type="password" placeholder=" Nhập mật khẩu của bạn " value="{{ old('password') }}"
                                        title="Password" id="pass" class="input-text required-entry validate-password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </li>
                                <li>
                                    <label for="pass"><b>Nhập lại mật khẩu </b> <span class="required">*</span></label>
                                    <br>
                                    <input type="password" value="{{ old('password_confirmation') }}" placeholder=" Nhập lại mật khẩu " title="Password" id="pass" class="input-text required-entry validate-password" name="password_confirmation" required>
                                    @if ($errors->has('password2'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password2') }}</strong>
                                    </span>
                                    @endif
                                </li>
                            </ul>
                            <div class="buttons-set">
                                <button id="send2" name="send" type="submit" class="button login"><span>Đăng ký</span></button>
                                </div>
                            {!! Form::close() !!}
                        </div>

                    </div>
                </fieldset>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>
    @endsection




