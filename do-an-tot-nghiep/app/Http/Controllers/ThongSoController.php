<?php

namespace App\Http\Controllers;

use App\ChiTietThongSo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ThongSoRequest;
use App\Http\Requests\ThongSoUpdateRequest;
use App\ThongSo;

class ThongSoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ThongSo.ds-thongso');
    }

    public function getData() // test load data
    {
        $dsThongSo = ThongSo::all();  // truy cập model lấy data danh sách
        return Datatables()->of($dsThongSo)
            ->addColumn('action', function ($data) {
                return view('ThongSo.create-action', compact('data'));
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
        return view('ThongSo.create-thongso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThongSoRequest $request)
    {
        $loaiSp = new ThongSo();
        $loaiSp->ten_thong_so = $request->ten_thong_so;
        $loaiSp->don_vi = $request->don_vi;
        $loaiSp->trang_thai = 1;
        $loaiSp->save();
        return redirect()->route('thong-so.create')
            ->with('thong-bao', 'Thêm thông số thành công');
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
    public function delete(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $ketQua = ThongSo::find($id)->delete();
        $ketQuaChiTietThongSo = ChiTietThongSo::where('thong_so_id', $id)->delete();
        if ($ketQua) {
            return redirect()->route('thong-so.danh-sach')->with('thong-bao', 'Xóa thông số thành công');
        }
        return back()->withErrors('Cập nhật thông số thất bại')->withInput();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thongSo = ThongSo::findOrFail($id);
        return view('ThongSo/update-thongso', compact('thongSo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThongSoUpdateRequest $request, $id)
    {
        $data = [
            'ten_thong_so' => $request->ten_thong_so,
            'don_vi'   => $request->don_vi,
        ];
        $ketQua = ThongSo::find($id)->update($data);
        if ($ketQua) {
            return redirect()->route('thong-so.danh-sach')->with('thong-bao', 'Cập nhật thông số thành công');
        }
        return back()->withErrors('Cập nhật thông số thất bại')->withInput();
        // $trang_thai = $exist
        // dd($data);
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
