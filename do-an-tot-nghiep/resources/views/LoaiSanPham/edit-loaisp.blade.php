<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm mới loại sản phẩm</h4>
                                <form>
                                    <div class="form-group">
                                            <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Mã sản phẩm</label> -->
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Mã loại sản phẩm">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Tên loại">
                                        </div>
                                            <!-- </div>
                                            <div class="form-row"> -->
                                        <div class="form-group col-md-6">
                                                <textarea class="form-control" id="example-textarea" rows="1" placeholder="Ghi chú"></textarea>
                                            </div>
                                            <div class="form-group col-md-2">
                                            <select type="password" class="form-control" id="exampleInputPassword1" >
                                                <option>Chọn trạng thái</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"><i class="fe-check-square"></i></button>
                                            <button type="reset" class="btn btn-primary waves-effect waves-light"><i class="fe-delete"></i></button>
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