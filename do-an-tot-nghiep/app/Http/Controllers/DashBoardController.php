<?php

namespace App\Http\Controllers;

use App\BinhLuan;
use App\ChiTietDonHang;
use App\DonHang;
use App\KhachHang;
use App\SanPham;
use Illuminate\Support\Carbon;
use App\Utilities\FormatPrice;

class DashBoardController extends Controller
{
    public function index()
    {
        // $tongNguoiChoi = NguoiChoi::count();
        $tongKhachHang = KhachHang::count();
        $doanhThu = DonHang::where('trang_thai',3)->sum('tong_tien');

        $donHangThanhCong = DonHang::where('trang_thai',3)->count();
        $TongDonDang = DonHang::count();

        $tiLeDonHangThanhCong = round(($donHangThanhCong / $TongDonDang *100),2);

        $tiLeDonDaDaHuy = round( ( DonHang::where('trang_thai',0)->count()  / $TongDonDang *100) ,2);

        $tiLeDonChoXacNhan = round( ( DonHang::where('trang_thai',1)->count()  / $TongDonDang *100) ,2);

        $tiLeDonDaXacNhan = round( ( DonHang::where('trang_thai',2)->count()  / $TongDonDang *100) ,2);

        $tongSPDaBan = ChiTietDonHang::join('don_hang','chi_tiet_don_hang.don_hang_id' , '=', 'don_hang.id')
        ->where('don_hang.trang_thai',3)
        ->sum('chi_tiet_don_hang.so_luong');

        $tongKho = SanPham::sum('so_luong_ton_kho');
        // $tiLeSPDaBan = round( ( $tongSPDaBan / $tongKho *100) ,2 );
        // $tiLeSPConTrongKho = round((($tongKho - $tongSPDaBan) / $tongKho)*100,2);

        $dsDonHang = DonHang::whereDate('created_at',Carbon::today())->get();
        $binhLuan = BinhLuan::whereDate('created_at',Carbon::today())->get();
        $tongBinhLuan = BinhLuan::count();
        $binhLuanBiAn = BinhLuan::where('trang_thai',0)->count();

        return view('dash-board',compact('tongKhachHang','doanhThu','donHangThanhCong','tiLeDonHangThanhCong',
        'TongDonDang','tiLeDonChoXacNhan','tiLeDonDaXacNhan','tiLeDonDaDaHuy','tongSPDaBan','tongKho','tongSPDaBan','dsDonHang',
        'binhLuan','tongBinhLuan','binhLuanBiAn'));
    }
}