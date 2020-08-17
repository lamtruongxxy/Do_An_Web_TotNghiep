<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTmobile</title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('ttmobile/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ttmobile/vendors/colorbox/example3/colorbox.css')}}">
    <link rel="stylesheet" href="{{ asset('ttmobile/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('ttmobile/rs-plugin/css/responsive.css')}}">
    <link rel="stylesheet" title="style" href="{{ asset('ttmobile/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('ttmobile/css/animate.css')}}">
    <link rel="icon" href="{{ asset('ttmobile/images/logo-ico.png')}}" type="image/x-icon">
    <link rel="stylesheet" title="style" href="{{ asset('ttmobile/css/huong-style.css')}}">
    <style>
        .carousel-control.right {
            background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgb(255 255 255 / 0%) 100%);
        }

        .carousel-control.left {
            background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgb(255 255 255 / 0%) 100%);
        }

    </style>
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
    {{-- 
    <script src="{{ asset('ttmobile/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/option-selectors.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/api.jquery.js?4') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/owl.carousel.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('ttmobile/js/appear.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/cs.script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/main.js') }}" type="text/javascript"></script> --}}
    <!-- include js files -->
    <script src="{{ asset('ttmobile/js/jquery.js') }} " type="text/javascript"></script>
    <script src="{{ asset('ttmobile/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js') }} " type="text/javascript">
    </script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('ttmobile/vendors/bxslider/jquery.bxslider.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('ttmobile/vendors/colorbox/jquery.colorbox-min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('ttmobile/vendors/animo/Animo.js') }} " type="text/javascript"></script>
    <script src="{{ asset('ttmobile/vendors/dug/dug.js') }} " type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/scripts.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('ttmobile/rs-plugin/js/jquery.themepunch.tools.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('ttmobile/rs-plugin/js/jquery.themepunch.revolution.min.js') }} " type="text/javascript">
    </script>
    <script src="{{ asset('ttmobile/js/waypoints.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('ttmobile/js/wow.min.js') }} " type="text/javascript"></script>
    <!--customjs-->
    <script src="{{ asset('ttmobile/js/custom2.js') }} " type="text/javascript"></script>
    <script>
        $(document).ready(function ($) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
                    $(".header-bottom").addClass('fixNav')
                } else {
                    $(".header-bottom").removeClass('fixNav')
                }
            })
        })
        jQuery(window).load(function () {

            /*
	 Stop carousel
 */
            $('.carousel').carousel('pause');

        })

    </script>
</body>

</html>
