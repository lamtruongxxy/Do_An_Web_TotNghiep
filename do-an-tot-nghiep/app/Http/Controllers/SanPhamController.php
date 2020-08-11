<?php

namespace App\Http\Controllers;

use App\BinhLuan;
use App\ChiTietDonHang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\SanPham;
use App\LoaiSanPham;
use App\NhaSanXuat;
use App\ThongSo;
use App\HinhAnhSanPham;
use App\ChiTietThongSo;
use App\Http\Requests\SanPhamRequest;

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
        $dsSanPham = SanPham::with('loaiSanPham', 'nhaSanXuat')->get();
        //$dsSanPham = SanPham::with('nhaSanXuat')->get();
        return Datatables()->of($dsSanPham)
            ->addColumn('action', function ($data) {
                return view('SanPham.create-action', compact('data'));
            })
            ->addColumn('trang_thai', function ($data) {
                return view("SanPham.trang-thai", compact('data'));
            })
            ->rawColumns(['action, trang_thai'])
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
    public function store(SanPhamRequest $request)
    {
        $dsHinhAnh = $this->uploadHinh($request->file('sp_hinh_anh'));
        $sanPham = [
            'nha_san_xuat_id' => (int)$request->nha_san_xuat_id,
            'ten_sp' => $request->ten_sp,
            'gia_sp'  => (int)$request->gia_sp,
            'so_luong_ton_kho' => (int)$request->so_luong_ton_kho,
            'loai_san_pham_id'   => (int)$request->loai_san_pham_id,
            'che_do_bao_hanh' => $request->che_do_bao_hanh,
            'mo_ta_sp' => $request->mo_ta_sp,
            'trang_thai'    => 0,
            'gia_khuyen_mai'    => (int)$request->gia_khuyen_mai
        ];
        $sanPhamThem = SanPham::create($sanPham);
        foreach ($dsHinhAnh as $hinhAnh) {
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
            foreach ($dsThongSo as $idThongSo => $value) {
                ChiTietThongSo::create([
                    'san_pham_id'   => $sanPhamThem->id,
                    'thong_so_id'   => $idThongSo,
                    'gia_tri'       => $value,
                    'trang_thai'    => 1
                ]);
            }
        }
        if ($sanPhamThem) {
            return redirect()->route('san-pham.create')
                ->with('thong-bao', 'Thêm sản phẩm thành công');
        }
    }

    public function uploadHinh(array $dsHinhAnh): array
    {
        $newPathImg = [];
        foreach ($dsHinhAnh as $img) {
            $type_img = $img->getClientOriginalExtension();
            $date = Carbon::now('Asia/Ho_Chi_Minh')->format('dmyHis');
            $new_img = $date . rand() . '-san-pham.' . $type_img;
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
    public function editSP($id)
    {
        $sanPham = SanPham::findOrFail($id);
        $dsNhaSanXuat = NhaSanXuat::all();
        $dsLoaiSanPham = LoaiSanPham::all();
        return view('SanPham/update-sanpham', compact('sanPham', 'dsNhaSanXuat', 'dsLoaiSanPham'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSP(SanPhamRequest $request, $id)
    {
        $exist = array_key_exists('trang_thai', $request->all());
        $data = [
            'nha_san_xuat_id' => $request->nha_san_xuat_id,
            'ten_sp'   => $request->ten_sp,
            'mo_ta_sp' => $request->mo_ta_sp,
            'gia_sp'   => $request->gia_sp,
            'gia_khuyen_mai' => $request->gia_khuyen_mai,
            'so_luong_ton_kho'   => $request->so_luong_ton_kho,
            'loai_san_pham_id' =>  $request->loai_san_pham_id,
            'che_do_bao_hanh'   =>  $request->che_do_bao_hanh,
            'trang_thai' => $exist,
        ];
        $ketQua = SanPham::find($id)->update($data);
        if ($ketQua) {
            return redirect()->route('san-pham.danh-sach')->with('thong-bao', 'Cập nhật thông tin thành công');
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
    public function chiTietThongSo($id)
    {
        $thongTinSP = SanPham::findOrFail($id);
        $tenThongSo = ChiTietThongSo::with('thongSo')->where('san_pham_id', $id)->get();
        $hinhAnh = HinhAnhSanPham::where('san_pham_id', $id)->get();
        return view('SanPham.chi-tiet-thong-so-sp', compact('thongTinSP', 'tenThongSo', 'hinhAnh'));

        // $chiTiet = DonHang::findOrFail($id);
        // $chiTietDonHang = ChiTietDonHang::with('sanPham')->where('don_hang_id',$id)->get();

        // return view('DonHang.chi-tiet-don-hang', compact('chiTiet','chiTietDonHang'));
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $ketQua = SanPham::find($id)->delete();
        $ketQuaXoaBinhLuan = BinhLuan::where('san_pham_id', $id)->delete();
        $ketQuaXoaHinhAnh = HinhAnhSanPham::where('san_pham_id', $id)->delete();
        $ketQuaXoaCTTS = ChiTietThongSo::where('san_pham_id', $id)->delete();
        $ketQuaXoaCTDH = ChiTietDonHang::where('san_pham_id', $id)->delete();

        if ($ketQua) {
            return redirect()->route('san-pham.danh-sach')->with('thong-bao', 'Xóa sản phẩm thành công');
        }
        return back()->withErrors('Xóa sản phẩm thất bại')->withInput();
    }
}
