<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TTmobile-Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logoadmin.ico') }}">
    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    @yield('css')
</head>

<body>
    <!-- Navigation Bar-->
    <header id="topnav">
        <!-- Topbar Start -->
        @include('Components.topbar-start')
        <!-- end Topbar -->
        <!--topbar-menu-->
        @include('Components.topbar-menu')
        <!-- end topbar-menu -->
    </header>
    <!-- main-page-content-->
    <div class="wrapper">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @yield('main-content')
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <!-- Footer Start -->
    @include('Components.footer')
    <!-- end Footer -->

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- App js-->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    @yield('js')
</body>

</html>
