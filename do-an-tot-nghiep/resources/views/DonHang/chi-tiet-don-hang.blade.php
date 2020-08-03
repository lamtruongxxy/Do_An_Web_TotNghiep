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
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2 header-title">Chi tiết hóa đơn</h4>
                                    
                                    <div class="form-row col-md-12">
                                        <p><strong>Sẩn phẩm :</strong>&nbsp;I PHONE 5</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p><strong>Số lượng :</strong>&nbsp;x3</p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <p><strong>Đơn giá :</strong>&nbsp;{{ $chiTietDonHang }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group col-md-12">
                                            <p><strong>Tổng tiền :</strong>&nbsp;<span class="btn btn-danger btn-rounded waves-effect waves-light" data-plugin="counterup">{{ $chiTiet->tong_tien }}</span>&nbsp;<strong>VNĐ</strong></p>
                                            @if ($chiTiet->trang_thai === 0)
                                            <strong>Phương thức thanh toán:</strong>&nbsp;<span class="badge badge-primary">Ship COD</span></p>
                                            @else
                                            <strong>Phương thức thanh toán:</strong>&nbsp;<span class="badge badge-success">Tại cửa hàng</span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group col-md-12">
                                            <h4 class="mb-1 header-title">Ghi chú</h4>
                                            <input type="text" class="form-control" disabled id="ghi_chu" name="ghi_chu" value="{{ $chiTiet->ghi_chu }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <strong>Trạng thái: </strong>&nbsp;
                                            @if ($chiTiet->trang_thai === 0)
                                            <span class="badge badge-danger">Đã hủy / Tạm xóa</span>
                                            @elseif ($chiTiet->trang_thai === 1)
                                            <span class="badge badge-primary">Chờ xác nhận</span>
                                            @elseif ($chiTiet->trang_thai === 2)
                                            <span class="badge badge-info">Đã xác nhận</span>
                                            @else
                                            <span class="badge badge-success">Hoàn thành</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-1 header-title">Thông tin khách hàng</h4>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">ID</label>
                                                <input type="text" class="form-control" disabled id="ten_khach_hang" name="ten_khach_hang" value="{{ $chiTiet->khachHang->id }}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">Tên khách hàng</label>
                                                <input type="text" class="form-control" disabled id="ten_khach_hang" name="ten_khach_hang" value="{{ $chiTiet->khachHang->ten_khach_hang }}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="id">Địa chỉ</label>
                                                <textarea type="text" class="form-control" disabled id="dia_chi" rows="2" name="dia_chi">"{{ $chiTiet->khachHang->dia_chi }}"</textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">SĐT</label>
                                                <input type="text" class="form-control" disabled id="sdt" name="sdt" value="{{ $chiTiet->khachHang->sdt }}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">Email</label>
                                                <input type="text" class="form-control" disabled id="email" name="email" value="{{ $chiTiet->khachHang->email }}">
                                            </div>
                                            <div class="form-group col-md-12">
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
    <div class="form-group col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('don-hang.danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="fas fa-fast-backward"></i></a>
            </div>
        </div>
    </div>
</div>
</form>
</div> <!-- end card-->
</div>
<!-- end col -->
</div>
@endsection