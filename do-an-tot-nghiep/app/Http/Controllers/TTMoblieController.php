<?php

namespace App\Http\Controllers;

use App\HinhAnhSanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\LoaiSanPham;
use App\NhaSanXuat;

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
    public function products_type($id)
    {
        //lấy sp với nsx
        $dsSP = SanPham::with('hinhAnhSP')->where('trang_thai',1)->where('loai_san_pham_id',$id)->paginate(12);
        //dd($dsSP);
        $dsloaiSanPham=LoaiSanPham::all();
        $dsnhaSanXuat=NhaSanXuat::all();
        return view('TTMobile/products',compact('dsSP','dsnhaSanXuat','dsloaiSanPham'));
    }
    public function products_detail()
    {
    
        return view('TTMobile/product-detail');
    }
    public function checkout()
    {
        return view('TTMobile/checkout');
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
