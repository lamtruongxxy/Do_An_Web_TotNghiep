<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới hình ảnh</h4>
                <form>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Mã sản phẩm">
                            </div>
                            <div class="form-group col-md-3">
                                <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                                <label for="example-fileinput">Upload file ảnh</label>
                                <input type="file" id="example-fileinput" class="form-control-file"
                                    name="hinh_anh_sp[]">
                            </div>
                            <div class="form-group col-md-3">
                                <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                                <label for="example-fileinput">Upload file ảnh</label>
                                <input type="file" id="example-fileinput" class="form-control-file"
                                    name="hinh_anh_sp[]">
                            </div>
                            <div class="form-group col-md-3">
                                <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                                <label for="example-fileinput">Upload file ảnh</label>
                                <input type="file" id="example-fileinput" class="form-control-file"
                                    name="hinh_anh_sp[]">
                            </div>
                            <div class="form-group col-md-3">
                                <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                                <label for="example-fileinput">Upload file ảnh</label>
                                <input type="file" id="example-fileinput" class="form-control-file"
                                    name="hinh_anh_sp[]">
                            </div>
                            <div class="form-group col-md-2">
                                <select type="text" class="form-control" id="exampleInputPassword1">
                                    <option>Ảnh sản phẩm</option>
                                    <option>Ảnh nhà sản xuất</option>
                                    <option>Ảnh đại diện</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <button type="button" class="btn btn-primary waves-effect waves-light"><i
                                        class="fe-check-square"></i></button>
                                <button type="reset" class="btn btn-primary waves-effect waves-light"><i
                                        class="fe-delete"></i></button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end col -->
</div>
@endsection
