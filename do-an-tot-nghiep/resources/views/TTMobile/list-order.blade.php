@extends("TTMobile.master-page")

@section('main-content')
<div class="space10">&nbsp;</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đơn hàng của bạn</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{route('index')}}">Home</a> / <span>Đơn hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<hr>
<div class="space30">&nbsp;</div>
<div class="container">
    <div class="row" style="font-size: 14px">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <table id="don_hang" class="table dt-responsive nowrap">
                        <thead>
                            <tr style="background:#f6f6f6">
                                <th>Mã Đơn Hàng</th>
                                <th>Ngày Đặt</th>
                                <th>Tổng tiền</th>
                                <th>Thanh Toán</th>
                                <th>Ghi Chú</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        {{-- sử dụng foreach lồng mảng hai chiều --}}
                        @foreach ($dsDonHang as $ds)
                        @foreach ($ds->donHang as $item)
                        <tbody>
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->created_at->format('d/m/Y')}}</td>
                                <td>{{number_format($item->tong_tien)}} VND</td>
                                <td style="color: blue"> @if($item->hinh_thuc_thanh_toan===0) Ship COD @else Chuyển Khoản @endif</td>
                                <td>{{$item->ghi_chu}}</td>
                                <td style="color: orange">@if($item->trang_thai===0) Đã Hủy @elseif($item->trang_thai===1) Chờ Xác Nhận @elseif($item->trang_thai===2) Đã Xác Nhận @else Hoàn Thành @endif</td>
                                <td><a href="{{ route('order-details',$item->id) }}" style="color: royalblue">Xem Chi Tiết</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                        @endforeach
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Ngày Đặt</th>
                                <th>Tổng tiền</th>
                                <th>Thanh Toán</th>
                                <th>Ghi Chú</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="space30">&nbsp;</div>
                   
                </div> <!-- end card body-->
            </div> <!-- end card -->
 
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div> <!-- .container -->
@endsection
