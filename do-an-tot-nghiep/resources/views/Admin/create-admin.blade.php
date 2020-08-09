<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-12">
        @include('Request.errors')
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới ADMIN</h4>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="ten_tai_khoan" name="ten_tai_khoan" placeholder="Tên tài khoản">
                    </div>
                    <div class="form-group">
                        <input type="password" id="mat_khau" name="mat_khau" class="form-mat_khau" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ho_ten" name="ho_ten" placeholder="Họ tên">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="sdt" name="sdt" placeholder="SDT">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="dia_chi" name="dia_chi" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fe-check-square"></i></button>
                        <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fas fa-redo"></i></button>
                        <a href="{{ route('admin-danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="la la-list-ul"></i></a>
                    </div>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection