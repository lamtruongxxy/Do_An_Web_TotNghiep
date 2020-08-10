<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <form action="#" method="#" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2 header-title">Thông tin tài khoản</h4>
                                    <div class="form-group col-md-12">
                                        <strong>ID:</strong>&nbsp;{{ $chiTietTaiKhoan->id }}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p><strong>Tên tài khoản:</strong>&nbsp;{{ $chiTietTaiKhoan->ten_tai_khoan }}</p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <strong>Ngày cấp:</strong>&nbsp;{{ $chiTietTaiKhoan->created_at }}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <strong>Ngày cập nhật:</strong>&nbsp;{{ $chiTietTaiKhoan->updated_at }}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <strong>Trạng thái:</strong>&nbsp;
                                        @if ($chiTietTaiKhoan->trang_thai === 1)
                                        <span class="badge badge-danger">ADMIN</span>
                                        @else
                                        <span class="badge badge-info">USERS</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-2 header-title">Thông tin cá nhân</h4>
                                            <div class="form-group col-md-12">
                                            <p><strong>Họ tên:</strong>&nbsp;{{ $chiTietTaiKhoan->ho_ten }}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                            <p><strong>Email:</strong>&nbsp;{{ $chiTietTaiKhoan->email }}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                            <p><strong>Sdt:</strong>&nbsp;{{ $chiTietTaiKhoan->sdt }}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                            <p><strong>Địa chỉ:</strong>&nbsp;{{ $chiTietTaiKhoan->dia_chi }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group col-md-12">
                                                <a href="{{ route('admin-danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="la la-list-ul"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</form>
</div> <!-- end card-->
</div>
<!-- end col -->
</div>
@endsection