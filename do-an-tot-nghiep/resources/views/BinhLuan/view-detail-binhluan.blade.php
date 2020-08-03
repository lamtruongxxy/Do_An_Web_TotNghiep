<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        @include('Components.errors')
        <div class="card">
            <div class="card-body">
                <h4>Thông Tin Bình Luận</h4>
                <form action="{{ route('binh-luan.update', ['id' => $dsbinhLuan->id]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <br />
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" disabled id="id" name="id" value="{{ $dsbinhLuan->id }}">
                    </div>
                    <div class="form-group">
                        <label for="san_pham_id">Sản Phẩm ID</label>
                        <input type="text" class="form-control" disabled id="san_pham_id" name="san_pham_id" value="{{ $dsbinhLuan->san_pham_id }}">
                    </div>
                    <div class="form-group">
                        <label for="ten_sp">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" disabled id="ten_sp" name="ten_sp" value="{{ $dsbinhLuan->sanPham->ten_sp }}">
                    </div>
                    <div class="form-group">
                        <label for="nguoi_binh_luan">Người Bình Luận</label>
                        <input type="text" class="form-control" disabled id="nguoi_binh_luan" name="nguoi_binh_luan" value="{{ $dsbinhLuan->nguoi_binh_luan }}">
                    </div>
                    <div class="form-group">
                        <label for="noi_dung_bl">Nội Dung Bình Luận</label>
                        <input type="text" class="form-control" disabled id="noi_dung_bl" name="noi_dung_bl" value="{{ $dsbinhLuan->noi_dung_bl }}">
                    </div>
                    <div class="form-group">
                        <label for="sdt_nguoi_bl">SDT</label>
                        <input type="text" class="form-control" disabled id="sdt_nguoi_bl" name="sdt_nguoi_bl" value="{{ $dsbinhLuan->sdt_nguoi_bl }}">
                    </div>
                    <div class="form-group">
                        <label for="created_at">Ngày Bình Luận</label>
                        <input type="text" class="form-control" disabled id="created_at" name="created_at" value="{{ $dsbinhLuan->created_at }}">
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value='{{ $dsbinhLuan->trang_thai }}' class="custom-control-input" name="trang_thai"  id="customCheck1" @if ($dsbinhLuan->trang_thai
                            === 1) {{ 'checked'}}@endif>
                            <label class="custom-control-label" for="customCheck1">Hiện</label>
                        </div><br />
                    <div class="form-group">
                        <button type="sumit" class="btn btn-success waves-effect waves-light">
                            <span class="btn-label"><i class="mdi mdi-pen-minus"></i></span>Cập nhật
                        </button>
                    </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div>
<!-- end col -->
</div>
{{ $dsbinhLuan}}
@endsection