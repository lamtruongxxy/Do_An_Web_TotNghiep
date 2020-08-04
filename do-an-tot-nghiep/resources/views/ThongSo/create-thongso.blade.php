<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @include('Request/errors')
                @include('Request/complete')
                <h4 class="mb-3 header-title">Thêm mới thông số</h4>
                <form action="{{ route('thong-so.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" id="ten_thong_so" name="ten_thong_so" placeholder="Tên thông số">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="don_vi" name="don_vi" placeholder="Đơn vị">
                        </div>
                        <div class="form-group col-md-3">
                            <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fe-check-square"></i></button>
                            <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fas fa-redo"></i></button>
                            <a href="{{ route('thong-so.danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="la la-list-ul"></i></a>
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