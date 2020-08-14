@extends("TTMobile.master-page")

@section('main-content')
<div class="space10">&nbsp;</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Chi Tiết Đơn Hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{route('index')}}">Home</a> / <span>Chi Tiết Đơn hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row" style="font-size: 15px">
        <div class="col-lg-12">
            <form action="#" method="#" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="font-size: 20px; font-weight:bold">Thông Tin Sản Phẩm:</div>
                                        <div class="space20">&nbsp;</div>
                                        @foreach ($chiTietDonHang as $donhang)
                                        <div>
                                            <p><strong>{{ $donhang->sanPham->ten_sp}} | Số
                                                    lượng: x {{ $donhang->so_luong}} | Đơn giá:
                                                    {{ number_format($donhang->don_gia)}} đ</p>
                                            <div class="space10">&nbsp;</div>
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                    <p><strong>Ngày lập: &nbsp;</strong>{{ $chiTiet->created_at->format('d/m/Y') }}</p>
                                    <div class="space10">&nbsp;</div>   
                                    @if ($chiTiet->hinh_thuc_thanh_toan === 0)
                                    <p><strong>Phương thức thanh toán: </strong>&nbsp;<span
                                            class="badge badge-primary" style="background-color: blue"  >Ship COD</span></p>
                                            <div class="space10">&nbsp;</div>
                                    @else
                                    <p><strong>Hình thức thanh toán: </strong>&nbsp;<span
                                            class="badge badge-success" style="background-color: blue" >Chuyển khoản</span></p>
                                            <div class="space10">&nbsp;</div>
                                    @endif
                                    <strong>Trạng thái: </strong>&nbsp;
                                    @if ($chiTiet->trang_thai === 0)
                                    <span class="badge badge-danger" style="background-color: blue">Đã hủy</span>
                                    <div class="space10">&nbsp;</div>
                                    @elseif ($chiTiet->trang_thai === 1)
                                    <span class="badge badge-info" style="background-color: blue" >Chờ xác nhận</span>
                                    <div class="space10">&nbsp;</div>
                                    @elseif ($chiTiet->trang_thai === 2)
                                    <span class="badge badge-primary" style="background-color: blue" >Đã xác nhận</span>
                                    <div class="space10">&nbsp;</div>
                                    @else
                                    <span class="badge badge-success" style="background-color: blue" >Hoàn thành</span>
                                
                                    @endif
                                    <p>Ghi chú: {{ $chiTiet->ghi_chu }}
                                    <div class="space20">&nbsp;</div>
                                    <h5><strong>Tổng tiền :&nbsp;<span class="text-danger my-4 text-center" style="color:red" data-plugin="counterup">{{ number_format($chiTiet->tong_tien) }}</span>&nbsp;VNĐ</strong>
                                    </h5>
                                    <br />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div style="font-size: 20px; font-weight:bold">Thông Tin Khách hàng:</div>
                                                <div class="space20">&nbsp;</div>
                                                <div class="form-group col-md-12">
                                                    <p><strong>Tên khách
                                                            hàng:</strong>&nbsp;{{ $chiTiet->khachHang->ten_khach_hang }}
                                                    </p>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <p><strong>Giới
                                                            tính:</strong>&nbsp;{{ $chiTiet->khachHang->gioi_tinh }}</p>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <p><strong>SĐT:</strong>&nbsp;{{ $chiTiet->khachHang->sdt }}</p>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <p><strong>Email:</strong>&nbsp;{{ $chiTiet->khachHang->email }}</p>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <p><strong>Địa chỉ:</strong>&nbsp;{{ $chiTiet->khachHang->dia_chi }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group col-md-12">
                                                    <p><strong>Ghi chú: </strong>{{ $chiTiet->ghi_chu }}
                                                    </p>
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
</div>
<!-- end row-->
</div> <!-- .container -->
@endsection
