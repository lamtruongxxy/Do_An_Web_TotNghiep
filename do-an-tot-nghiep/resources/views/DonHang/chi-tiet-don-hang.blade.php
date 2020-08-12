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
                                    <h4 class="mb-3 header-title">Chi tiết hóa đơn</h4>
                                    @foreach ($chiTietDonHang as $donhang)
                                    <div class="form-row col-md-12">
                                        <p><strong>Sẩn phẩm:</strong>&nbsp;{{ $donhang->sanPham->ten_sp}}</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p><strong>Số lượng:</strong>&nbsp;x{{ $donhang->so_luong}}</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p><strong>Đơn giá:</strong>&nbsp;
                                            {{ $donhang->don_gia}}
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group col-md-12">
                                        <h5><strong>Tổng tiền :&nbsp;<span class="text-danger my-4 text-center" data-plugin="counterup">{{ $chiTiet->tong_tien }}</span>&nbsp;VNĐ</strong></h5>
                                        </br>
                                        <p><strong>Ngày lập: &nbsp;</strong>{{ $chiTiet->created_at }}</p>
                                        @if ($chiTiet->hinh_thuc_thanh_toan === 0)
                                        <p><strong>Phương thức thanh toán: </strong>&nbsp;<span class="badge badge-primary">Ship COD</span></p>
                                        @else
                                        <p><strong>Hình thức thanh toán: </strong>&nbsp;<span class="badge badge-success">Chuyển khoản</span></p>
                                        @endif
                                        <strong>Trạng thái: </strong>&nbsp;
                                        @if ($chiTiet->trang_thai === 0)
                                        <span class="badge badge-danger">Đã hủy / Tạm xóa</span>
                                        @elseif ($chiTiet->trang_thai === 1)
                                        <span class="badge badge-info">Chờ xác nhận</span>
                                        @elseif ($chiTiet->trang_thai === 2)
                                        <span class="badge badge-primary">Đã xác nhận</span>
                                        @else
                                        <span class="badge badge-success">Hoàn thành</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group col-md-12">
                                        <a href="{{ route('don-hang.danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="la la-list-ul"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3 header-title">Thông tin khách hàng</h4>
                                            <div class="form-group col-md-12">
                                                <p><strong>Mã ID:</strong>&nbsp;{{ $chiTiet->khachHang->id }}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Tên khách hàng:</strong>&nbsp;{{ $chiTiet->khachHang->ten_khach_hang }}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Giới tính:</strong>&nbsp;{{ $chiTiet->khachHang->gioi_tinh }}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>SĐT:</strong>&nbsp;{{ $chiTiet->khachHang->sdt }}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Email:</strong>&nbsp;{{ $chiTiet->khachHang->email }}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Địa chỉ:</strong>&nbsp;{{ $chiTiet->khachHang->dia_chi }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group col-md-12">
                                                <p><strong>Ghi chú đơn hàng</strong></br>{{ $chiTiet->ghi_chu }}</p>
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