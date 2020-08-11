@extends('master-page')

@section('main-content')
<div class="row" id="app">
    <div class="col-lg-12">
        <form action="{{ route('san-pham.update-sp', ['id' => $sanPham->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @include('Request/errors')
                            @include('Request/complete')
                            <h4 class="mb-3 header-title">Cập nhật thông tin sản phẩm</h4>
                            <div class="form-group col-md-12">
                                <label>ID</label>
                                <input type="text" class="form-control" name="id" disabled value="{{ $sanPham->id}}">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Nhà sản xuất</label>
                                <select class="form-control" name="nha_san_xuat_id">
                                    @foreach ($dsNhaSanXuat as $nhasx)
                                    <option value="{{ $nhasx->id }}">{{ $nhasx->ten_nha_sx}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Loại</label>
                                <select class="form-control" name="loai_san_pham_id">
                                    @foreach ($dsLoaiSanPham as $loaisp)
                                    <option value="{{ $loaisp->id }}">{{ $loaisp->ten_loai_sp }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="ten_sp" value="{{ $sanPham->ten_sp}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Giá sản phẩm</label>
                                <input type="number" class="form-control" name="gia_sp" value="{{ $sanPham->gia_sp}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Giá khuyến mãi</label>
                                <input type="number" class="form-control" name="gia_khuyen_mai" value="{{ $sanPham->gia_khuyen_mai}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Số lượng</label>
                                <input type="number" class="form-control" name="so_luong_ton_kho" value="{{ $sanPham->so_luong_ton_kho}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Chế độ bảo hành</label>
                                <input type="text" class="form-control" name="che_do_bao_hanh" value="{{ $sanPham->che_do_bao_hanh }}">
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value='{{ $sanPham->trang_thai }}' class="custom-control-input" name="trang_thai" id="customCheck1" @if ($sanPham->trang_thai
                                === 1) {{ 'checked'}}@endif>
                                <label class="custom-control-label" for="customCheck1">Hiện</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3 header-title">Mô tả sản phẩm</h4>
                            <textarea class="form-control" id="mo_ta_sp" name="mo_ta_sp" rows="2">{{ $sanPham->mo_ta_sp}}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-group col-md-12">
                <div class="card">
                    <div class="card-body">
                        <button type="sumit" class="btn btn-success waves-effect waves-light">
                            <span class="btn-label"><i class="mdi mdi-pen-minus"></i></span>Cập nhật
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> <!-- end card-->
@endsection