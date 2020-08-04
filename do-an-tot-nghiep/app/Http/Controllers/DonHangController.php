<?php

namespace App\Http\Controllers;

use App\DonHang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KhachHang;
use App\ChiTietDonHang;
class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsDonHang = DonHang::with('khachHang')->get();
        $dsKhachHang = KhachHang::all();
        return view('DonHang.ds-donhang', compact('dsKhachHang'));
    }

    public function getData()
    {
        $dsDonHang = DonHang::with('khachHang')->get();

        return Datatables()->of($dsDonHang)
            ->addColumn('action', function ($data) {
                return view('DonHang.create-action', compact('data'));
            })
            ->addColumn('trang_thai', function ($data) {
                return view("DonHang.trang-thai", compact('data'));
            })
            ->addColumn('hinh_thuc_thanh_toan', function ($data) {
                return view("DonHang.hinh-thuc-thanh-toan", compact('data'));
            })
            ->rawColumns(['action, trang_thai, hinh_thuc_thanh_toan'])
            ->make(true);
    }
    public function chiTietDonHang($id)
    {
        $chiTiet = DonHang::findOrFail($id);
        $chiTietDonHang = ChiTietDonHang::with('sanPham')->where('don_hang_id',$id)->get();
        // $chiTietDonHang = ChiTietDonHang::join('don_hang','chi_tiet_don_hang.don_hang_id' , '=', 'don_hang.id')
        // ->where('chi_tiet_don_hang.don_hang_id',$id)->get();
        return view('DonHang.chi-tiet-don-hang', compact('chiTiet','chiTietDonHang'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    public function delete(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $ketQua = DonHang::find($id)->delete();
        $ketQuaXoaCTDH = ChiTietDonHang::where('don_hang_id', $id)->delete();
        if ($ketQua) {
            return redirect()->route('don-hang.danh-sach')->with('msg', 'Xóa đơn hàng thành công');
        }
        return back()->withErrors('Xóa đơn hàng thất bại')->withInput();
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
