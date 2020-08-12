<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KhachHangRequest;
use App\Http\Requests\KhachHangUpDateRequest;
use Carbon\Carbon;
use App\KhachHang;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsKhachHang = KhachHang::all();
        return view('KhachHang/ds-khachhang', compact('dsKhachHang'));
    }

    public function getData()
    {
        $dsKhachHang = KhachHang::all();
        return Datatables()->of($dsKhachHang)->addColumn('action', function ($data) {
            return view('KhachHang.create-action', compact('data'));
        })
            ->rawColumns(['action'])
            ->make(true);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_page()
    {
        return view('KhachHang/create-khach-hang');
    }

    public function store(KhachHangRequest $request)
    {
        $khachHang = new KhachHang();

        $khachHang->ten_khach_hang = $request->ten_khach_hang;
        $khachHang->gioi_tinh = $request->gioi_tinh;
        $khachHang->dia_chi = $request->dia_chi;
        $khachHang->sdt = $request->sdt;
        $khachHang->email = $request->email;
        $khachHang->ghi_chu = $request->ghi_chu;
        $khachHang->trang_thai = 1;

        $khachHang->save();
        return redirect()->route('khach-hang.create')
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
    public function edit($id)
    {
        $khachHang = KhachHang::findOrFail($id);
        return view('KhachHang/update-khachhang', compact('khachHang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KhachHangUpDateRequest $request, $id)
    {
        $data = [
            'ten_khach_hang' => $request->ten_khach_hang,
            'gioi_tinh' => $request->gioi_tinh,
            'dia_chi'   => $request->dia_chi,
            'sdt' => $request->sdt,
            'email'   => $request->email,
            'ghi_chu' => $request->ghi_chu,
        ];
        $ketQua = KhachHang::find($id)->update($data);
        if ($ketQua) {
            return redirect()->route('khach-hang.danh-sach')->with('thong-bao', 'Cập nhật thông tin khách hàng thành công');
        }
        return back()->withErrors('Cập nhật thất bại');
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
