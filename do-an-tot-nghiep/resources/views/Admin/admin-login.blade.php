<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin-TTmobile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Admin-TTmobile</div>
            <div class="card-body">
                @include('Request/errors')
                <form action="{{ route('admin-xu-ly-dang-nhap') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="ten_tai_khoan" name="ten_tai_khoan" class="form-control" placeholder="Tên tài khoản" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Đăng nhập</button>
                </form>
                <div class="text-center">
                    <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a> -->
                    <!-- <a class="d-block small" href="{{ route('admin-page') }}">Quên mật khẩu</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset ('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
</body>

</html>