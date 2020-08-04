<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        @include('Request.errors')
        <div class="card">
            <div class="card-body">
                <h4>Cập nhật thông số</h4>
                <form action="{{ route('thong-so.update', ['id' => $thongSo->id]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <br />
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" disabled id="id" name="id" value="{{ $thongSo->id }}">
                    </div>
                    <div class="form-group">
                        <label for="id">Tên thông số</label>
                        <input type="text" class="form-control" id="ten_thong_so" name="ten_thong_so" value="{{ $thongSo->ten_thong_so }}">
                    </div>
                    <div class="form-group">
                        <label for="id">Đơn vị</label>
                        <input type="text" class="form-control" id="don_vi" name="don_vi" value="{{ $thongSo->don_vi }}">
                    </div>
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
@endsection