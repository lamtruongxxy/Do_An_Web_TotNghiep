<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <form action="#" method="#" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2 header-title">Thông tin sản phẩm</h4>
                                    <div class="form-group col-md-12">
                                        <strong>ID:</strong>&nbsp;{{ $thongTinSP->id }}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p><strong>Tên sản phẩm:</strong>&nbsp;{{ $thongTinSP->ten_sp }}</p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p><strong>Nhà sản xuất:</strong>&nbsp;{{ $thongTinSP->nhaSanXuat->ten_nha_sx }} &nbsp;|&nbsp;<strong> Loại:</strong>&nbsp;{{ $thongTinSP->loaiSanPham->ten_loai_sp }}</p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p><strong>Chế độ bảo hành</strong>&nbsp;{{ $thongTinSP->che_do_bao_hanh }}</p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p><strong>Giá sản phẩm:</strong>&nbsp;{{ $thongTinSP->gia_sp }} &nbsp;|&nbsp;<strong> Giá khuyến mãi:</strong>&nbsp;{{ $thongTinSP->gia_khuyen_mai }}</p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <strong>Trạng thái:</strong>&nbsp;
                                        @if ($thongTinSP->trang_thai == 0)
                                        <span class="badge badge-danger">Ẩn / Tạm xóa</span>
                                        @else
                                        <span class="badge badge-success">Hiện</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        <strong>Ngày tạo:</strong>&nbsp;{{ $thongTinSP->created_at }}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2 header-title">Hình ảnh sản phẩm</h4>
                                    <div class="form-group col-md-12">
                                        <img src="{{asset('storage/app/public/san-pham/0508201002171431784792-san-pham.jpg') }}" width="200" height="250">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-2 header-title">Thông số sản phẩm</h4>
                                            @foreach( $tenThongSo as $tt)
                                            <div class="form-group col-md-12">
                                                <p><strong>{{ $tt->thongSo->ten_thong_so }}:</strong>&nbsp;{{ $tt->gia_tri }}&nbsp;{{ $tt->thongSo->don_vi }}</p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group col-md-12">
                                                <p><strong>Mô tả:</strong>&nbsp;{{ $thongTinSP->mo_ta_sp }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group col-md-12">
                                                <a href="{{ route('san-pham.danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="la la-list-ul"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</form>
</div> <!-- end card-->
</div>
<!-- end col -->
</div>
@endsection