@extends('master-page')

@section('main-content')
<div class="row" id="app">
    <div class="col-lg-12">
        <form action="{{ route('san-pham.update-thong-so', ['id' => $sanPham->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @include('Request/errors')
                            @include('Request/complete')
                            <h4 class="mb-3 header-title">Cập nhật thông số sản phẩm</h4>
                            <div class="form-group col-md-12">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="ten_sp" disabled value="{{ $sanPham->ten_sp }}">
                            </div>
                            @foreach ( $thongSo as $ts )
                            <div class="form-group col-md-12">
                                <label>{{ $ts->thongSo->ten_thong_so }} "{{ $ts->thongSo->don_vi }}" </label>
                                <input type="text" class="form-control" name="thong_so_values[]" value="{{ $ts->gia_tri }}">
                            </div>
                            @endforeach
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