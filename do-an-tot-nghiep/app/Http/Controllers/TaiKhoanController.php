<?php

namespace App\Http\Controllers;

use App\QuanTriVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DangNhapRequest;
use App\Http\Requests\TaiKhoanRequest;
use App\TaiKhoan;
use Illuminate\Support\Facades\Hash;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function admin_page()
    {
        return view('Admin/admin-login');
    }

    public function user_index()
    {
        return view('User/user-login');
    }

    public function user_register()
    {
        return view('User/user-register');
    }

    public function index()
    {
        return view('Admin.ds-admin');
    }
    public function getData()
    {
        $dsTaiKhoan = TaiKhoan::all();
        return Datatables()->of($dsTaiKhoan)
            ->addColumn('action', function ($data) {
                return view('Admin.create-action', compact('data'));
            })
            ->addColumn('trang_thai', function ($data) {
                return view("Admin.trang-thai", compact('data'));
            })
            ->rawColumns(['action,trang_thai'])
            ->make(true);
    }
    public function create_page()
    {
        return view('Admin.create-admin');
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
    public function store(TaiKhoanRequest $request)
    {
        $taiKhoan = new TaiKhoan();

        $taiKhoan->ten_tai_khoan = $request->ten_tai_khoan;
        $taiKhoan->mat_khau = Hash::make ($request->mat_khau);
        $taiKhoan->ho_ten = $request->ho_ten;
        $taiKhoan->email = $request->email;
        $taiKhoan->sdt = $request->sdt;
        $taiKhoan->dia_chi = $request->dia_chi;
        $taiKhoan->trang_thai = 0;
        $taiKhoan->anh_dai_dien = 0;
        $taiKhoan->save();

        return redirect()->route('admin-create')
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

    public function xyLyDangNhap(DangNhapRequest $request)
    {
        //Lay du lieu tu form dang nhap
        $thongTin = $request->only(['ten_tai_khoan', 'password']);
        // if (Auth::attempt([
        //     'ten_tai_khoan' => $thongTin['ten_tai_khoan'],
        //     'password' => $thongTin['password']
        // ])) 
        if (Auth::attempt($thongTin)) {
            return redirect()->route('admin-dashboard');
        }
        return  redirect()->back()->withErrors('Sai mật khẩu');
    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('admin-page');
    }
}
