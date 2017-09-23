<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/assets/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    @yield('css')
    <script type="text/javascript">
        window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token() ]); ?>;
        var APP_URL = "{!! url('/') !!}/";
    </script>
</head>
<body>
    <div id="wrapper">
        <div id="header" class="header
            @if(isset($topPage) && !$topPage)
                play-header
            @else
                home-header
            @endif ">
            @yield('header')
        </div>
        @yield('content')
        {{--<div id="bottom">Created With Love <img src="{{ asset('img/icon_footer_heart.png') }}" alt="heart"> By SONIK</div>--}}
    </div>

    {{--<a href="javascript:void(0)" id="scrollUp">--}}
        {{--<i class="fa fa-arrow-up"></i>--}}
    {{--</a>--}}

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/playing-ringtones.js') }}"></script>
    <script src="{{ asset('js/split-ringtones.js') }}"></script>
    <script src="{{ asset('js/items-playing.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    @yield('js')
</body>
</html>


