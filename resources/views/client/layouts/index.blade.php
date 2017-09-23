<!DOCTYPE html>
<html lang="en">
<head>

    @include('client.partials.metadata')

    <script>
        var APP_URL = '{{url('/')}}';
    </script>
</head>
<body class="cms-index-index cms-home layout-boxed">
<div class="page">
    <!-- Header -->
@include('client.partials.header')
<!-- end header -->

    <!-- Navbar -->
@include('client.partials.nav')
<!-- end nav -->

    <!-- Slider -->


    <!-- end Slider -->

@yield('content')

<!-- Latest Blog -->

    {{--@include('client.partials.blog')--}}


    @include('client.partials.footer')

</div>

@include('client.partials.js_lib')
</body>
</html>



