<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\NhaSanXuat;
use App\SanPham;
class NhaSXController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsNhaSanXuat = NhaSanXuat::all();
       // dd($dsNhaSanXuat[1]->trang_thai_format);
        return view('NhaSanXuat/ds-nsx', compact('dsNhaSanXuat'));
    }

    public function getData()
    {
        $dsNhaSanXuat = NhaSanXuat::all();
        return Datatables()->of($dsNhaSanXuat)
        ->addColumn('action', function($data){
            return view('NhaSanXuat.create-action', compact('data'));
        })
        ->addColumn('trang_thai', function ($data) {
            return view("NhaSanXuat.trang-thai", compact('data'));
        })
        ->rawColumns(['action, trang_thai'])
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_page()
    {
        return view('NhaSanXuat/create-nsx');
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
        $nhaSanXuat = NhaSanXuat::findOrFail($id);
        return view('NhaSanxuat/update-nsx', compact('nhaSanXuat'));
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
            'ten_nha_sx' => $request->ten_nha_sx,
            'ghi_chu'   => $request->logo_nha_sx,
            'trang_thai'    => $exist
        ];
        $ketQua = NhaSanXuat::find($id)->update($data);
        if ($ketQua) {
            return redirect()->route('nha-san-xuat.danh-sach')->with('msg', 'Cập nhật nhà sản xuất thành công');
        }
        return back()->withErrors('Cập nhật nhà sản xuất thất bại')->withInput();
        // $trang_thai = $exist
        // dd($data);
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $ketQua = NhaSanXuat::find($id)->delete();
        $ketQuaXoaSanPham = SanPham::where('nha_san_xuat_id', $id)->delete();
        if ($ketQua) {
            return redirect()->route('nha-san-xuat.danh-sach')->with('msg', 'Xóa nhà sản xuất thành công');
        }
        return back()->withErrors('Cập nhật nhà sản xuất thất bại')->withInput();
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
