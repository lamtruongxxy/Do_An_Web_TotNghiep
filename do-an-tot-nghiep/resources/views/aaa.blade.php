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
            <div class="mt-0">
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
    <div class="col-xl-6">
        <div class="card-box">
            <div class="row">
                <div class="col-2">
                    <div class="avatar-sm bg-light rounded">
                        <i class="fas fa-box avatar-title font-22 text-warning"></i>
                    </div>
                </div>
                <div class="col-9">
                    <div class="text-right">
                        <h4 class="text-dark my-1"><span data-plugin="counterup">{{ $tongSPDaBan}}</span></h4>
                        <p class="text-muted mb-1 text-truncate">Sản phẩm đã bán</p>
                    </div>
                    <div class="text-right">
                        <h4 class="text-dark my-1"><span data-plugin="counterup">{{ $tongKho - $tongSPDaBan}}</span></h4>
                        <p class="text-muted mb-1 text-truncate">Sản phẩm còn trong kho</p>
                    </div>
                </div>
            </div>
            <!-- <div class="mt-0">
                <h6>Sản phẩm đã bán
                    <span class="float-right">{{ $tiLeSPDaBan }}%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: {{ $tiLeSPDaBan }}% ">
                    </div>
                </div>
            </div>
            <div class="mt-0">
                <h6>Sẩn phẩm còn trong kho:
                    <span class="float-right">{{ $tiLeSPConTrongKho }} %</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="badge badge-danger" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: {{ $tiLeSPConTrongKho }}% ">
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
    <!-- <div class="col-xl-4">
        <div class="card-box">
            <div class="row">
                <div class="col-2">
                    <div class="avatar-sm bg-light rounded">
                        <i class="fas fa-box avatar-title font-22 text-warning"></i>
                    </div>
                </div>
                <div class="col-10">
                    <div class="text-right">
                        <h3 class="text-dark my-0"><span>11111</span></h3>
                        <p class="text-muted mb-0 text-truncate">Tổng sản phẩm đã bán</p>
                    </div>
                </div>
            </div>
        </div> 
    </div> -->