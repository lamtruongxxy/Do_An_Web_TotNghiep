<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-12">
        @include('Components.errors')
        <div class="card">
            <div class="card-body">
                <h4>Cập Nhật Nhà Sản Xuất</h4>
                <form action="{{ route('nha-san-xuat.update', ['id' => $nhaSanXuat->id]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" disabled id="id" name="id" value="{{ $nhaSanXuat->id }}">
                    </div>
                    <div class="form-group">
                        <label for="ten_nha_sx">Tên Nhà Sản Xuất</label>
                        <input type="text" class="form-control" id="ten_nha_sx" name="ten_nha_sx"
                            value="{{$nhaSanXuat->ten_nha_sx}}">
                    </div>

                    <div class="form-group">
                        <label for="ghi_chu">Thông Tin Ghi Chú</label>
                        <input type="text" class="form-control" id="ghi_chu" name="logo_nha_sx"
                            value="{{$nhaSanXuat->ghi_chu}}">
                    </div>
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" value='{{ $nhaSanXuat->trang_thai }}' class="custom-control-input" name="trang_thai"  id="customCheck1" @if ($nhaSanXuat->trang_thai
                        === 1) {{ 'checked'}}@endif>
                        <label class="custom-control-label" for="customCheck1">Hiện</label>
                    </div><br />
                    <button type="sumit" class="btn btn-success waves-effect waves-light">
                        <span class="btn-label"><i class="mdi mdi-pen-minus"></i></span>Cập nhật
                    </button>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection
