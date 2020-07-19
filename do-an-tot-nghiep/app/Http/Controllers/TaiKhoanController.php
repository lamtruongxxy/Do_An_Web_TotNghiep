<?php

namespace App\Http\Controllers;

use App\QuanTriVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('master-page');
    }

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

    public function xyLyDangNhap(Request $request)
    {
        //Lay du lieu tu form dang nhap
        $thongTin = $request->only(['ten_tai_khoan', 'password']);
        // if (Auth::attempt([
        //     'ten_tai_khoan' => $thongTin['ten_tai_khoan'],
        //     'password' => $thongTin['password']
        // ])) 
        if (Auth::attempt($thongTin))
        {
            return redirect()->route('admin-dashboard');
        }

        return  'Đăng nhập thất bại';
    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('admin-page');
    }
}
