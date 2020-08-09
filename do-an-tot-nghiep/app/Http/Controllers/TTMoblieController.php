<?php

namespace App\Http\Controllers;

use App\HinhAnhSanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;

class TTMoblieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // San phẩm đang sale
        $sanPhamSale = SanPham::with('hinhAnhSP')->where('trang_thai',1)->where('gia_khuyen_mai','<>',0)->get();

        // Tất cả sản phẩm
        $sanPham = SanPham::with('hinhAnhSP')->where('trang_thai',1)->get();
        return view('TTMobile/index',compact('sanPhamSale','sanPham'));
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
    public function products()
    {
    
        return view('TTMobile/products');
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
