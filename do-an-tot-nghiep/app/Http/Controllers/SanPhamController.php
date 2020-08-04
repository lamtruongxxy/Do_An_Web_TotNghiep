<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\SanPham;
use App\LoaiSanPham;
use App\NhaSanXuat;
use App\ThongSo;
use App\HinhAnhSanPham;
use App\ChiTietThongSo;
class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsSanPham = SanPham::with('loaiSanPham')->get();
        $dsLoaiSanPham = LoaiSanPham::all();
        $dsSanPham = SanPham::with('nhaSanXuat')->get();
        $dsNhaSanXuat = NhaSanXuat::all();
        //($dsSanPham);
        return view('SanPham.ds-sanpham', compact('dsLoaiSanPham', 'dsNhaSanXuat'));
    }

    public function getData()
    {
        $dsSanPham = SanPham::with('loaiSanPham','nhaSanXuat')->get();
        //$dsSanPham = SanPham::with('nhaSanXuat')->get();
        return Datatables()->of($dsSanPham)->addColumn('action', function($data) {
            return view('SanPham.create-action', compact('data'));
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function create_page()
    {
        $dsNhaSanXuat = NhaSanXuat::all();
        $dsLoaiSanPham = LoaiSanPham::all();
        return view('SanPham/create-sanpham', compact('dsNhaSanXuat', 'dsLoaiSanPham'));
    }

    public function getThongSo()
    {
        $dsThongSo = ThongSo::all();
        return response()->json($dsThongSo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dsHinhAnh = $this->uploadHinh($request->file('sp_hinh_anh'));
        $sanPham = [
            'nha_san_xuat_id' => (int)$request->nha_san_xuat_id,
            'ten_sp' => $request->ten_sp,
            'gia_sp'  => (int)$request->gia_sp,
            'so_luong_ton_kho' => (int)$request->so_luong_ton_kho,
            'loai_san_pham_id'   => (int)$request->loai_san_pham_id,
            'che_do_bao_hanh' => $request->che_do_bao_hanh,
            'mo_ta_sp' => 'abc',
            'trang_thai'    => 1,
            'gia_khuyen_mai'    => (int)$request->gia_khuyen_mai
        ];
        $sanPhamThem = SanPham::create($sanPham);
        foreach($dsHinhAnh as $hinhAnh) {
            HinhAnhSanPham::create([
                'san_pham_id' => $sanPhamThem->id,
                'duong_dan' => $hinhAnh,
                'trang_thai'    => 1
            ]);
        }
        if ($request->thong_so_values && sizeof($request->thong_so_values) > 0) {
            $thongSoValues = array_values($request->thong_so_values);
            $thongSoIds = array_values($request->thong_so_ids);
            $dsThongSo = array_combine($thongSoIds, $thongSoValues);
            foreach($dsThongSo as $idThongSo => $value) {
                ChiTietThongSo::create([
                    'san_pham_id'   => $sanPhamThem->id,
                    'thong_so_id'   => $idThongSo,
                    'gia_tri'       => $value,
                    'trang_thai'    => 1
                ]);
            }
        }
        if ($sanPhamThem) {
            return redirect()->route('san-pham.danh-sach')
            ->with('msg', 'Thêm sản phẩm thành công');
        }

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
