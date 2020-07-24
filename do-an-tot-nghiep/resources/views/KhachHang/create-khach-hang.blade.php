<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @include('Request/errors')
                @include('Request/complete')
                <h4 class="mb-3 header-title">Thêm mới loại sản phẩm</h4>
                <form action="{{ route('loai-san-pham.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                            <input type="text" class="form-control" id="inputEmail4" name="ten_loai_sp" placeholder="Tên loại sản phẩm">
                        </div>
                        <div class="form-group col-md-7">
                            <textarea class="form-control" id="example-textarea" name="ghi_chu" rows="1" placeholder="Ghi chú"></textarea>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fe-check-square"></i></button>
                            <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fas fa-redo"></i></button>
                            <a href="{{ route('loai-san-pham.danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="la la-list-ul"></i></a>
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