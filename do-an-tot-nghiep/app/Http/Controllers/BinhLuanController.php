<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\BinhLuan;
use App\SanPham;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsBinhLuan = BinhLuan::with('sanPham')->get();
        $dsSanPham = SanPham::all();
        //dd($dsBinhLuan);
        return view('BinhLuan/ds-binhluan', compact('dsBinhLuan'));
    }

    public function getData()
    {
        $dsBinhLuan = BinhLuan::with('sanPham')->get();
        //$dsSanPham = SanPham::with('nhaSanXuat')->get();
        return Datatables()->of($dsBinhLuan)
            ->addColumn('action', function ($data) {
                return view('BinhLuan.create-action', compact('data'));
            })
            ->addColumn('trang_thai', function ($data) {
                return view("BinhLuan.trang-thai", compact('data'));
            })
            ->rawColumns(['action', 'trang_thai'])
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $dsbinhLuan = BinhLuan::findOrFail($id);
        //$dsbinhLuan = BinhLuan::findOrFail($id);
        // dd($dsbinhLuan);
        return view('BinhLuan/view-detail-binhluan', compact('dsbinhLuan'));
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
        $exist = array_key_exists('trang_thai', $request->all()); //kiem tra trang thai
        $data = [
            'trang_thai'    => $exist
        ];
        $ketQua = BinhLuan::find($id)->update($data);
        if ($ketQua) {
            return redirect()->route('binh-luan.danh-sach')->with('msg', 'Cập nhật bình luận thành công');
        }
        return back()->withErrors('Cập nhật bình luận thất bại')->withInput();
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        //dd($id);
        $ketQua = BinhLuan::find($id)->delete();
        if ($ketQua) {
            return redirect()->route('binh-luan.danh-sach')->with('msg', 'Xóa bình luận thành công');
        }
        return back()->withErrors('Cập nhật bình luận thất bại')->withInput();
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
