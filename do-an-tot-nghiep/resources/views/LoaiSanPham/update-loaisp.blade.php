<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-12">
        @include('Components.errors')
        <div class="card">
            <div class="card-body">
                <h4>Cập Nhật Loại Sản Phẩm</h4>
                <form action="{{ route('loai-san-pham.update', ['id' => $loaiSP->id]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" disabled id="id" name="id" value="{{ $loaiSP->id }}">
                    </div>
                    <div class="form-group">
                        <label for="ten_loai_sp">Loại Sản Phẩm</label>
                        <input type="text" class="form-control" id="ten_loai_sp" name="ten_loai_sp"
                            value="{{$loaiSP->ten_loai_sp}}">
                    </div>

                    <div class="form-group">
                        <label for="ghi_chu">Ghi Chú </label>
                        <input type="text" class="form-control" id="ghi_chu" name="ghi_chu"
                            value="{{$loaiSP->ghi_chu}}">
                    </div>
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" value='{{ $loaiSP->trang_thai }}' class="custom-control-input" name="trang_thai"  id="customCheck1" @if ($loaiSP->trang_thai
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
