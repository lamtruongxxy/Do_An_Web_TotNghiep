<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('main-content')
<div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm mới nhà sản xuất</h4>
                                <form>
                                    <div class="form-group">
                                            <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Mã sản phẩm</label> -->
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Mã nhà sản xuất">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Tên nhà sản xuất">
                                        </div>
                                            <!-- </div>
                                            <div class="form-row"> -->
                                        <div class="form-group col-md-2">
                                                <input type="text" class="form-control" id="example-textarea" rows="1" placeholder="LoGo nhà sản xuất"></textarea>
                                        </div>
                                            <div class="form-group col-md-2">
                                            <select type="password" class="form-control" id="exampleInputPassword1" >
                                                <option>Chọn trạng thái</option>
                                                <option>True</option>
                                                <option>False</option>
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