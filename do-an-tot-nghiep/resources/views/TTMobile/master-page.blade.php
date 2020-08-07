<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>TTmobile</title>
    <script src="{{ asset('ttmobile/js/defer_plus.js') }}" type="text/javascript"></script>
    <script>
        deferscript( "{{ asset('ttmobile/js/polyfill.js') }}", 'polyfill-js', 1)
    </script>
    <link rel="icon" href="" type="image/x-icon" />
    <link href="{{ asset('ttmobile/css/bootstrap.scss.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ttmobile/css/plugin.scss.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ttmobile/css/base.scss.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ttmobile/css/ant-mobile.scss.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- header -->
    @include("TTMobile.Components.header")
    <!-- end-header -->

    <!-- MAIN CONTENT -->
    @yield('main-content')

   

    <!-- footer -->
    @include("TTMobile.Components.footer")
    <!-- end-footer -->

    <script src="{{ asset('ttmobile/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/option-selectors.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/api.jquery.js?4') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/owl.carousel.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('ttmobile/js/appear.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/cs.script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/main.js') }}" type="text/javascript"></script>
</body>

</html>