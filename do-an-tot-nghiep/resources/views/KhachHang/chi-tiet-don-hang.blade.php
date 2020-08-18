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
                                    <h4 class="mb-3 header-title">Thông tin đơn hàng</h4>
                                    @foreach ($donHangCuaKhach as $ds)
                                    @foreach ($ds->donHang as $item)
                                    <div class="form-row col-md-12">
                                        <h5><strong>Đơn hàng:</strong>&nbsp;{{ $item->id }}</h5>
                                        <div class="form-row col-md-12">
                                            <p><strong>Ngày mua:</strong>&nbsp;{{ $item->created_at->format('d/m/Y') }}</p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <p><strong>Tổng tiền:</strong>&nbsp;<span class="text-danger my-4 text-center" data-plugin="counterup">{{ number_format($item->tong_tien)}}</span> VND</p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <p><strong>Hình thức thanh toán:</strong>&nbsp;@if($item->hinh_thuc_thanh_toan===0)
                                                <span class="badge badge-primary">Ship COD</span>
                                                @else
                                                <span class="badge badge-success">Chuyển khoản</span>
                                                @endif</p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <p><strong>Trạng thái:</strong>&nbsp;
                                                @if ($item->trang_thai === 0)
                                                <span class="badge badge-danger">Đã hủy / Tạm xóa</span>
                                                @elseif ($item->trang_thai === 1)
                                                <span class="badge badge-info">Chờ xác nhận</span>
                                                @elseif ($item->trang_thai === 2)
                                                <span class="badge badge-primary">Đã xác nhận</span>
                                                @else
                                                <span class="badge badge-success">Hoàn thành</span>
                                                @endif
                                            </p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group col-md-12">
                                        <a href="{{ route('khach-hang.danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="la la-list-ul"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3 header-title">Thông tin khách hàng</h4>
                                            <div class="form-group col-md-12">
                                                <p><strong>Mã ID:</strong>&nbsp;{{ $ds->id}}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Tên khách hàng:</strong>&nbsp;{{ $ds->ten_khach_hang}}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Giới tính:</strong>&nbsp;{{ $ds->gioi_tinh}}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>SĐT:</strong>&nbsp;{{ $ds->sdt}}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Email:</strong>&nbsp;{{ $ds->email}}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Địa chỉ:</strong>&nbsp;{{ $ds->dia_chi}}</p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><strong>Ghi chú:</strong>&nbsp;{{ $ds->ghi_chu}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </form>
    </div>
</div>
{{-- end --}}
</form>
</div> <!-- end card-->
</div>
<!-- end col -->
</div>
@endsection