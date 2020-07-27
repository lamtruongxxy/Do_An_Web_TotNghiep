<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        @include('Request.errors')
        <div class="card">
            <div class="card-body">
                <h4>Cập nhật thông tin khách hàng</h4>
                <form action="{{ route('khach-hang.update', ['id' => $khachHang->id]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <br />
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" disabled id="id" name="id" value="{{ $khachHang->id }}">
                    </div>
                    <div class="form-group">
                        <label for="id">Tên khách hàng</label>
                        <input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang" value="{{ $khachHang->ten_khach_hang }}">
                    </div>
                    <div class="form-group">
                        <label for="id">Địa chỉ</label>
                        <textarea type="text" class="form-control" id="dia_chi" rows="1" name="dia_chi">"{{ $khachHang->dia_chi }}"</textarea>
                    </div>
                    <div class="form-group">
                        <label for="id">SDT</label>
                        <input type="text" class="form-control" id="sdt" name="sdt" value="{{ $khachHang->sdt }}">
                    </div>
                    <div class="form-group">
                        <label for="id">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $khachHang->email }}">
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