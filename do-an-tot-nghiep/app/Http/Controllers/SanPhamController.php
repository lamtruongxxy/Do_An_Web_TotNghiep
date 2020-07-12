<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\HinhAnhSP;
use Carbon\Carbon;
class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Danh sach san pham
        // return view('SanPham/ds-sanpham');
        $dsSanPham = SanPham::all();
        return view('SanPham/ds-sanpham',compact('dsSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_page()
    {
        return view('SanPham/create-sanpham');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->file('sp_hinh_anh'));
        $dsHinhAnh = $this->uploadHinh($request->file('sp_hinh_anh'));
        $sanPham = [
            'masp' => $request->ma_sp,
            'manhasanxuat' => $request->nha_sx,
            'tensp' => $request->ten_sp,
            'giasp'  => $request->gia_sp,
            'soluongtonkho' => $request->so_luong,
            'loaisp'   => $request->loai_sp,
            'chedobaohanh' => $request->che_do_bh,
            'motasp' => 'abc',
            'trangthai'    => 1
        ];
        // $idSanPham = SanPham::create($sanPham);
        // foreach($dsHinhAnh as $hinhAnh) {
        //     HinhAnhSP::create([
        //         'mahinhanh' => 
        //     ]);
        // }
        
    }

    public function uploadHinh(array $dsHinhAnh) : array
    {
        $newPathImg = [];
        foreach($dsHinhAnh as $img) {
            $type_img = $img->getClientOriginalExtension();
            $date = Carbon::now('Asia/Ho_Chi_Minh')->format('dmyHis');
            $new_img = $date. rand() .'-san-pham.' .$type_img;
            $img->storeAs('public/san-pham', $new_img);
            $newPathImg[] = $new_img;
        }
        return $newPathImg;
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
    public function aedit($id)
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
