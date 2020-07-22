<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\LoaiSanPhamRequest;
use Carbon\Carbon;
use App\LoaiSanPham;

class LoaiSPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLoaiSanPham = LoaiSanPham::all(); // truy cập model lấy data danh sách
        //dd($dsLoaiSanPham);
        return view('LoaiSanPham/ds-loaisp', compact('dsLoaiSanPham'));
    }
    public function getData() // test load data
    {
        $dsLoaiSanPham = LoaiSanPham::all();  // truy cập model lấy data danh sách
        return Datatables()->of($dsLoaiSanPham)->addColumn('action', function ($data) {
            return view('LoaiSanPham.create-action', compact($data));
        })
            ->rawColumns(['action'])
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_page()
    {
        return view('LoaiSanPham/create-loaisp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoaiSanPhamRequest $request)
    {
        $loaiSp = new LoaiSanPham();
        $loaiSp->ten_loai_sp = $request->ten_loai_sp;
        $loaiSp->ghi_chu = $request->ghi_chu;
        $loaiSp->trang_thai = 1;
        $loaiSp->save();
        return redirect()->route('loai-san-pham.create')
            ->with('thong-bao', 'Thêm thành công');
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
    public function on_off($id)
    {
        $loaiSp = LoaiSanPham::find($id);
        
        if ($loaiSp->trang_thai == 1) {
            $loaiSp->trang_thai = 0;
        } else if ($loaiSp->trang_thai == 0)
            $loaiSp->trang_thai = 1;
        return redirect()->route('loai-san-pham.danh-sach');
    }
}
