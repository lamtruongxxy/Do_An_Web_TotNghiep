@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        @include('Components.errors')
        <div class="card">
            <div class="card-body">
                <h4>Thông tin đơn hàng</h4>
                <form action="{{ route('don-hang.update', ['id' => $donHang->id]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <br />
                    <div class="form-group">
                        <label for="id">ID đơn hàng</label>
                        <input type="text" class="form-control" disabled id="id" name="id" value="{{ $donHang->id }}">
                    </div>
                    <div class="form-group">
                        <label for="san_pham_id">Ngày lập</label>
                        <input type="text" class="form-control" disabled id="ten_khach_hang" name="ten_khach_hang" value="{{ $donHang->created_at }}">
                    </div>
                    <div class="form-group">
                        <label for="noi_dung_bl">Ghi chú</label>
                        <input type="text" class="form-control" disabled id="ghi_chu" name="ghi_chu" value="{{ $donHang->ghi_chu }}">
                    </div>
                    <div class="form-group">
                        @if ($donHang->hinh_thuc_thanh_toan === 0)
                        <label>Phương thức thanh toán: </strong>&nbsp;<span class="badge badge-primary">Ship COD</span></label>
                        @else
                        <label>Hình thức thanh toán: </strong>&nbsp;<span class="badge badge-success">Chuyển khoản</span></label>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        @if ($donHang->trang_thai === 0)
                        <span class="badge badge-danger">Đã hủy / Tạm xóa</span>
                        @elseif ($donHang->trang_thai === 1)
                        <span class="badge badge-info">Chờ xác nhận</span>
                        @elseif ($donHang->trang_thai === 2)
                        <span class="badge badge-primary">Đã xác nhận</span>
                        @else
                        <span class="badge badge-success">Hoàn thành</span>
                        @endif
                        <select class="form-control" id="trang_thai" name="trang_thai" placeholder="Trạng thái">
                            <option value="0">Đã hủy / Tạm xóa</option>
                            <option value="1">Chờ xác nhận</option>
                            <option value="2">Đã xác nhận</option>
                            <option value="3">Hoàn thành</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="sumit" class="btn btn-success waves-effect waves-light">
                            <span class="btn-label"><i class="mdi mdi-pen-minus"></i></span>Cập nhật
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection