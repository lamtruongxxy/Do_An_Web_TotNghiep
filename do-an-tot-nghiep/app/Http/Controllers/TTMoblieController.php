<?php

namespace App\Http\Controllers;

use App\HinhAnhSanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\LoaiSanPham;
use App\NhaSanXuat;
use App\ChiTietThongSo;
use App\BinhLuan;
use App\Cart;
use App\KhachHang;
use App\DonHang;
use App\ChiTietDonHang;
use Session;
class TTMoblieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // San phẩm đang sale lấy đaom 8 dòng
        $sanPhamSale = SanPham::with('hinhAnhSP')->where('trang_thai',1)->where('gia_khuyen_mai','<>',0)->inRandomOrder()->limit(8)->get();;
        //dd($sanPhamSale);
        // Tất cả sản phẩm xắp xếp giảm dần và lấy ra 12 dòng đầu
        $dssanPham = SanPham::with('hinhAnhSP')->where('trang_thai',1)->orderBy('gia_sp', 'desc')->take(12)->get();
        //dd($dssanPham);
        return view('TTMobile/index',compact('sanPhamSale','dssanPham'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        $sanPhamSale = SanPham::with('hinhAnhSP')->where('trang_thai',1)->get();
        // $sanPhamSale = HinhAnhSanPham::join('san_pham', 'hinh_anh_san_pham.san_pham_id', '=', 'san_pham.id')
        //     ->where('san_pham.trang_thai', 1)->where('san_pham.gia_khuyen_mai','<>',0)->first();
            
        return view('TTMobile/test',compact('sanPhamSale'));
    }
    //tất cả  sản phẩm
    public function product()
    {
        $dsnhaSanXuat=NhaSanXuat::all();
        $dsloaiSanPham=LoaiSanPham::all();
        //dd($dsnhaSanXuat);
        $dsSP = SanPham::with('hinhAnhSP')->where('trang_thai',1)->paginate(12);
       // dd($dsSP);
        return view('TTMobile/products',compact('dsSP','dsnhaSanXuat','dsloaiSanPham'));
    }
    //lọc sản phẩm theo nhà sản xuất
    public function products($id)
    {
        //lấy sp với nsx
        $dsSP = SanPham::with('hinhAnhSP')->where('trang_thai',1)->where('nha_san_xuat_id',$id)->paginate(12);
        //dd($dsSP);
        $dsloaiSanPham=LoaiSanPham::all();
        $dsnhaSanXuat=NhaSanXuat::all();
        return view('TTMobile/products',compact('dsSP','dsnhaSanXuat','dsloaiSanPham'));
    }
    //lấy sp với loại sản phẩm
    public function products_type($id)
    {
        
        $dsSP = SanPham::with('hinhAnhSP')->where('trang_thai',1)->where('loai_san_pham_id',$id)->paginate(12);
        //dd($dsSP);
        $dsloaiSanPham=LoaiSanPham::all();
        $dsnhaSanXuat=NhaSanXuat::all();
        return view('TTMobile/products',compact('dsSP','dsnhaSanXuat','dsloaiSanPham'));
    }
    // chi tiet san pham
    public function products_detail($id)
    {
        $thongTinSP = SanPham::findOrFail($id);
        $tenThongSo = ChiTietThongSo::with('thongSo')->where('san_pham_id', $id)->get();
        $hinhAnh = HinhAnhSanPham::where('san_pham_id', $id)->get();
        $binhLuan = BinhLuan::where('san_pham_id',$id)->where('trang_thai',1)->orderBy('created_at', 'desc')->get();
        //dd($binhLuan);
        $sanPhamSale = SanPham::with('hinhAnhSP')->where('trang_thai',1)->where('gia_khuyen_mai','<>',0)->inRandomOrder()->limit(3)->get();;
       // dd( $sanPhamSale);
        return view('TTMobile/product-detail',compact('sanPhamSale','thongTinSP','hinhAnh','tenThongSo','binhLuan'));
    }

    ///them gio hang
    public function getAddtoCart(Request $req,$id){
        $product = SanPham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart( $oldCart);
        $cart ->add ($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    //xoa gio hang
    public function getDeleteCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null; //tao bien old cart de kiem tra xem gio hang co hay khong co ,neu co thi get cart nguoc lai null
        $cart = new Cart( $oldCart); //tao bien cart bang Cart 
        $cart->removeItem($id);        // tro den phuogn thuc xoa di 1 san pham trong model Cart
        if(count($cart->items)>0){      // kiem tra so luong=0 thi remove session di 
            Session::put('cart',$cart);   //put lai gio hang cua minh bang cach tao lai session va put vao gio hang moi
        }
        else{
            Session::forget('cart');      // nguoc lai huy no di
        }
        return redirect()->back();   //sao khi xoa cho return tro ve trang ban dau
    }

    public function getCheckout(Request $req)
    {
        return view('TTMobile/checkout');
    }
    public function postCheckout(Request $req)
    {
        $cart = Session::get('cart');
        //dd( $cart);
        //luu thong tin khach hang truoc
        $khachhang = new KhachHang;
        $khachhang->ten_khach_hang = $req->ten_khach_hang;
        $khachhang->gioi_tinh = $req->gioi_tinh;
        $khachhang->dia_chi = $req->dia_chi;
        $khachhang->sdt = $req->sdt;
        $khachhang->email = $req->email;
        $khachhang->ghi_chu = $req->ghi_chu;
        $khachhang->trang_thai = 1;
        $khachhang->save();
        // sao do moi luu don hang
        $donHang = new DonHang;
        $donHang->khach_hang_id = $khachhang->id;
        $donHang->tong_tien = $cart->totalPrice;
        $donHang->hinh_thuc_thanh_toan = $req->hinh_thuc_thanh_toan;
        $donHang->ghi_chu = $khachhang->ghi_chu;
        $donHang->trang_thai = 1;
        $donHang->save();

        //foreach chi tiet don hang vi chi tiet don hang gom nhieu san pham 
        foreach ($cart->items as $key => $value) {
            $chiTietDonHang = new ChiTietDonHang;
            $chiTietDonHang->don_hang_id = $donHang->id;
            $chiTietDonHang->san_pham_id = $key;
            $chiTietDonHang->so_luong = $value['qty'];
            $chiTietDonHang->don_gia = $value['price']/$value['qty'];
            $chiTietDonHang->trang_thai = 1;
            $chiTietDonHang->save();
        }

        Session::forget('cart');
      
        return redirect()->back()->with('thongbao','Đặt Hàng Thành Công'); // dat thanh con cho quay ve trang dat hang
    }
    //chuc nang tim kiem
    public function getSearch(Request $req){
        $dsSP = SanPham::with('nhaSanXuat')->where('ten_sp','like','%'.$req->key.'%')->paginate(12);
        //dd($dsSP);
        $dsloaiSanPham=LoaiSanPham::all();
        $dsnhaSanXuat=NhaSanXuat::all();
        return view('TTMobile/products',compact('dsSP','dsnhaSanXuat','dsloaiSanPham'));
    }

    //luu comments vao databasse
    public function postComments(Request $req){
        $binhluan = new BinhLuan();
        $binhluan->san_pham_id = $req->san_pham_id;
        $binhluan->nguoi_binh_luan = $req->nguoi_binh_luan;
        $binhluan->sdt_nguoi_bl = $req->sdt_nguoi_bl;
        $binhluan->noi_dung_bl = $req->noi_dung_bl;
        $binhluan->trang_thai = 1;
        $binhluan->save();
        return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
