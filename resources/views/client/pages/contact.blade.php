@extends('client.layouts.index')

@section('content')
    <div class="home">
        <div id="t3-mainbody" class="container t3-mainbody">
            <div class="row">
                <div id="t3-content" class="t3-content col-xs-12">
                    <div class="contact">
                        @include('partials.admin.alert')
                        <div class="row plain-style">
                            <div class="col-sm-6 contact-information">
                                <div class="inner">
                                    <form action="{{ url('lien-he') }}" method="post">
                                        <div class="box-contact">
                                            {{--<form method="POST" action="http://smartbook.vn/lien-he" accept-charset="UTF-8" id="contact-form" class="form-validate form-horizontal">--}}
                                            {{--<input name="_token" type="hidden" value="t2uivlo4HalKAmQZgsrWKlWnw0DvIB8vsaBCO0bd">--}}
                                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                            <div class="page-header"><h2 class="theH3">LIÊN HỆ VỚI CHÚNG TÔI</h2></div>
                                            <div class="contact-miscinfo">
                                                <span class="contact-misc">Điền đầy đủ các thông tin dưới đây để được giải quyết nhanh nhất.</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <br>
                                                    <label for="name" class="required control-label">Họ tên<span
                                                                class="star">&nbsp;*</span></label>
                                                    <input class="form-control" placeholder="Họ tên" name="name"
                                                           type="text">
                                                    <span class="text-danger"></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <br>
                                                    <label for="phone" class="required control-label">Số điện thoại<span
                                                                class="star">&nbsp;*</span></label>
                                                    <input class="form-control" placeholder="Số điện thoại" name="phone"
                                                           type="text">
                                                    <span class="text-danger"></span>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="subject" class="required control-label">Chủ đề<span
                                                                class="star">&nbsp;*</span></label>
                                                    <input class="form-control" placeholder="Chủ đề" name="subject"
                                                           type="text">
                                                    <span class="text-danger"></span>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {{--<div class="col-md-3 col-sm-12">--}}
                                                {{--<label for="issue_id" class="control-label">Liên quan đến</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-9 col-sm-12">--}}
                                                {{--<select class="form-control" name="issue_id"><option value="1">Không có chủ đề liên quan.</option><option value="2">Hướng dẫn cho người mới.</option><option value="3">Đơn hàng sách.</option><option value="4">Đăng ký và tham gia khóa học.</option><option value="5">Thi online.</option><option value="6">Tài khoản và bảo mật.</option><option value="7">Đăng ký cộng tác viên.</option><option value="8">Vấn đề khác.</option></select>--}}
                                                {{--<span class="text-danger"></span>--}}
                                                {{--</div>--}}
                                            </div>
                                            <div class="form-group contact-mes">
                                                <div class="col-sm-12">
                                                    <label for="content" class="required control-label">Nội dung<span
                                                                class="star">&nbsp;*</span></label>
                                                    <textarea class="form-control" rows="10"
                                                              placeholder="Nội dung liên hệ" name="content1"
                                                              cols="50"></textarea>
                                                    <span class="text-danger"></span>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="text-right" style="padding-right: 14px;">
                                                    {{--<button class="btn btn-primary validate" type="submit">Gửi đi</button>--}}
                                                    <button type="submit" title="Submit" class="button submit"><span> Gửi đi </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6 contact-information">
                                <div class="inner">
                                    <div class="box-contact">
                                        <div class="page-header"><h2 class="theH3">SMARTBOOK</h2></div>
                                        <div class="contact-miscinfo">
                                            <span class="contact-misc">Chúng tôi rất sẵn lòng giải đáp mọi thắc mắc của học viên, các bạn học sinh và thầy cô giáo. Mọi đóng góp của các bạn sẽ giúp Smartbook nâng cao chất lượng để phục vụ tốt hơn.</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-contact col-sm-7 col-md-6">
                                            <h3 class="theH3">Thông tin liên hệ</h3> <br>
                                            <ul>
                                                <li><i class="glyphicon glyphicon-send" style="color: #00A6AD"></i> Ngõ
                                                    157 Chùa Láng, Đống Đa, Hà Nội
                                                </li>
                                                <br>
                                                <li><i class="glyphicon glyphicon-earphone" style="color: #00A6AD"></i>
                                                    01645514664
                                                </li>
                                                <br>
                                                <li><i class="glyphicon glyphicon-envelope" style="color: #00A6AD"></i>
                                                    smarbook.dev@gmail.com
                                                </li>
                                                <br>
                                            </ul>
                                        </div>
                                        <div class="box-contact col-sm-5 col-md-6">
                                            <h3 class="theH3">Liên kết</h3><br>
                                            <div class="contact-links">
                                                <ul class="nav nav-stacked">
                                                    <a href="https://www.facebook.com/SmartbookCongdong/"
                                                       class="icon-facebook"
                                                       style="color: #00A6AD"> Facebook</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

