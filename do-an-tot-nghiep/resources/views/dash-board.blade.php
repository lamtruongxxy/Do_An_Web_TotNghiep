@extends('master-page')
@section('js')
<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/libs/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
@endsection()
@section('main-content')
<!-- end page title -->
<div class="row">
    <div class="col-xl-3">
        <div class="card-box">
            <div class="row">
                <div class="col-2">
                    <div class="avatar-sm bg-light rounded">
                        <i class="far fa-user avatar-title font-22 text-info"></i>
                    </div>
                </div>
                <div class="col-10">
                    <div class="text-right">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $tongKhachHang }}</span></h3>
                        <p class="text-muted mb-1 text-truncate">Tổng khách hàng</p>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card-box">
            <div class="row">
                <div class="col-2">
                    <div class="avatar-sm bg-light rounded">
                        <i class="far fa-money-bill-alt avatar-title font-22 text-success"></i>
                    </div>
                </div>
                <div class="col-10">
                    <div class="text-right">
                        <h3 class="text-dark my-1"><span>{{ $doanhThu }}</span></h3>
                        <p class="text-muted mb-1 text-truncate">Tổng doanh thu</p>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div>
    <div class="col-xl-5">
        <div class="card-box">
            <div class="row">
                <div class="col-2">
                    <div class="avatar-sm bg-light rounded">
                        <i class="fas fa-box avatar-title font-22 text-warning"></i>
                    </div>
                </div>
                <div class="col-9">
                    <div class="text-right">
                        <h3 class="text-dark my-0"><span data-plugin="counterup">{{ $tongSPDaBan}}</span></h3>
                        <p class="text-muted mb-0 text-truncate">Sản phẩm đã bán</p>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark my-0"><span data-plugin="counterup">{{ $tongKho }}</span></h3>
                        <p class="text-muted mb-0 text-truncate">Sản phẩm còn trong kho</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card-box">
            <div class="row">
                <div class="col-2">
                    <div class="avatar-sm bg-light rounded">
                        <i class="icon-bubbles avatar-title font-22 text-danger"></i>
                    </div>
                </div>
                <div class="col-9">
                    <div class="text-right">
                        <h3 class="text-dark my-0"><span data-plugin="counterup">3000000</span></h3>
                        <p class="text-muted mb-0 text-truncate">Bình luận</p>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark my-0"><span data-plugin="counterup">499</span></h3>
                        <p class="text-muted mb-0 text-truncate">Bình luận đã ẩn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card-box">
            <div class="row">
                <div class="col-2">
                    <div class="avatar-sm bg-light rounded">
                        <i class="fas fa-money-check-alt avatar-title font-22 text-dark"></i>
                    </div>
                </div>
                <div class="col-9">
                    <div class="text-right">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $donHangThanhCong }}</span></h3>
                        <p class="text-muted mb-1 text-truncate">Đơn hàng đã hoàn thành</p>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <h6>Đơn hoàn thành
                    <span class="float-right">{{ $tiLeDonHangThanhCong }}%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: {{ $tiLeDonHangThanhCong }}% ">
                    </div>
                </div>
            </div>
            <div class="mt-0">
                <h6>Đơn chờ xác nhận
                    <span class="float-right">{{ $tiLeDonChoXacNhan }}%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="badge badge-info" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: {{ $tiLeDonChoXacNhan }}% ">
                    </div>
                </div>
            </div>
            <div class="mt-0">
                <h6>Đơn đã xác nhận
                    <span class="float-right">{{ $tiLeDonDaXacNhan }}%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="badge badge-primary" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: {{ $tiLeDonDaXacNhan  }}% ">
                    </div>
                </div>
            </div>
            <div class="mt-0">
                <h6>Đơn tạm đã hủy / tạm xóa
                    <span class="float-right">{{ $tiLeDonDaDaHuy }}%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="badge badge-danger" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: {{ $tiLeDonDaDaHuy }}% ">
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div>
</div>
<div class="row">
    <div class="col-xl-12">

        <div class="card-box">
            <h4 class="header-title mb-3">Lịch sử đơn hàng hôm nay</h4>
            <div class="table-responsive">
                <table class="table table-centered table-borderless table-hover table-nowrap mb-0" id="ls-mua-credit">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-top-0">ID</th>
                            <th class="border-top-0">Khách hàng</th>
                            <th class="border-top-0">Tổng tiền</th>
                            <th class="border-top-0">Thanh toán</th>
                            <th class="border-top-0">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $dsDonHang as $ds)
                        <tr>
                            <td>{{ $ds->id }}</td>
                            <td>{{ $ds->khachHang->ten_khach_hang }}</td>
                            <td>{{ $ds->tong_tien }}</td>

                            @if($ds->hinh_thuc_thanh_toan == 0)
                            <td><span class="badge badge-primary">Ship COD</span></td>
                            @else
                            <td><span class="badge badge-success">Tại cửa hàng</span></td>
                            @endif

                            @if ($ds->trang_thai === 0)
                            <td><span class="badge badge-danger">Đã hủy / Tạm xóa</span></td>
                            @elseif ($ds->trang_thai === 1)
                            <td><span class="badge badge-info">Chờ xác nhận</span></td>
                            @elseif ($ds->trang_thai === 2)
                            <td><span class="badge badge-primary">Đã xác nhận</span></td>
                            @else
                            <td><span class="badge badge-success">Hoàn thành</span></td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end table-responsive -->
        </div> <!-- end card-box-->
    </div>
</div>
@endsection