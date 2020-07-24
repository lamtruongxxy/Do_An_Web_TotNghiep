<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @include('Request/errors')
                @include('Request/complete')
                <h4 class="mb-3 header-title">Thêm mới khách hàng</h4>
                <form action="{{ route('khach-hang.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-2.5">
                            <input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang" placeholder="Tên khách hàng">
                        </div>
                        <div class="form-group col-md-4">
                            <textarea class="form-control" id="dia_chi" name="dia_chi" rows="1" placeholder="Địa chỉ"></textarea>
                        </div>
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" id="sdt" name="sdt" placeholder="SDT">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fe-check-square"></i></button>
                            <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fas fa-redo"></i></button>
                            <a href="{{ route('khach-hang.danh-sach') }}" class="btn btn-primary waves-effect waves-light"><i class="la la-list-ul"></i></a>
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