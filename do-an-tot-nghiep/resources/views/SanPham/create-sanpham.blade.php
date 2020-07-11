<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('css')
<!-- Summernote css -->
<link href="{{ asset('assets/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<!-- Summernote js -->
<script src="{{ asset('assets/libs/summernote/summernote-bs4.min.js') }}"></script>
<!-- Init js -->
<script src="{{ asset('assets/js/pages/form-summernote.init.js') }}"></script>
@endsection

@section('main-content')
<div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm mới sản phẩm</h4>
                                <form>
                                    <div class="form-group">
                                            <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Mã sản phẩm</label> -->
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Mã sản phẩm">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Nhà sản xuất">
                                        </div>
                                            <!-- </div>
                                            <div class="form-row"> -->
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputPassword4" class="col-form-label">Tên sản phẩm</label> -->
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Tên sản phẩm">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputPassword4" class="col-form-label">Giá sản phẩm</label> -->
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Giá sản phẩm">
                                        </div> 
                                            <!-- </div>
                                            <div class="form-row"> -->
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Số lượng</label> -->
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Số lượng">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Phân loại</label> -->
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phân loại">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <!-- <label for="inputEmail4" class="col-form-label">Chế độ bảo hành</label> -->
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Chế độ bảo hành">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <select type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                                <option>Chọn trạng thái</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="col-form-label">Mô tả sản phẩm</label>
                                            <div id="summernote-editor"></div>
                                            </div>  
                                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="fe-check-square"></i></button>
                                            <button type="reset" class="btn btn-primary waves-effect waves-light"><i class="fe-delete"></i></button>
                                    </div>
                                        </form>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
</div>
@endsection