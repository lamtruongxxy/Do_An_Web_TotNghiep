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
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>
    var app = new Vue({
        el: "#app",
        data: {
            elImg: 1
        },
        methods: {
            addElImgs: function () {
                this.elImg += 1;
            }
        }
    });

</script>
@endsection
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <form action="{{ route('san-pham.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3 header-title">Thông tin sản phẩm</h4>
                                    <div class="form-group col-md-12">
                                        <!-- <label for="inputEmail4" class="col-form-label">Phân loại</label> -->
                                        <select class="form-control" name="loaisp" placeholder="Nhà sản xuất">
                                            <option value="0">Nhà sản xuất</option>
                                            <option value="nha_san_xuat1">Samsung</option>
                                            <option value="nha_san_xuat2">Apple</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <!-- <label for="inputEmail4" class="col-form-label">Phân loại</label> -->
                                        <select class="form-control" name="loaisp" placeholder="Loại sản phẩm">
                                            <option value="loai_sp1">Loại sản phẩm 1</option>
                                            <option value="loai_sp2">Loại sản phẩm 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <!-- <label for="inputPassword4" class="col-form-label">Tên sản phẩm</label> -->
                                        <input type="text" class="form-control" name="tensp" placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <!-- <label for="inputPassword4" class="col-form-label">Giá sản phẩm</label> -->
                                        <input type="number" class="form-control" name="giasp"
                                            placeholder="Giá sản phẩm">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <!-- <label for="inputPassword4" class="col-form-label">Giá khuyến mãi</label> -->
                                        <input type="number" class="form-control" name="giasp"
                                            placeholder="Giá Khuyến Mãi">
                                    </div>
                                    <!-- </div>
                                                            <div class="form-row"> -->
                                    <div class="form-group col-md-12">
                                        <!-- <label for="inputEmail4" class="col-form-label">Số lượng</label> -->
                                        <input type="number" class="form-control" name="soluongtonkho"
                                            placeholder="Số lượng">
                                    </div>
                                   
                                    <div class="form-group col-md-12">
                                        <!-- <label for="inputEmail4" class="col-form-label">Chế độ bảo hành</label> -->
                                        <input type="text" class="form-control" name="chedobaohanh"
                                            placeholder="Chế độ bảo hành">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3 header-title">Thông số sản phẩm</h4>
                                            <div class="form-group col-md-12">
                                                <!-- <label for="inputPassword4" class="col-form-label">Tên sản phẩm</label> -->
                                                <input type="text" class="form-control" name="tensp"
                                                    placeholder="Tên sản phẩm">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="button" v-on:click="addElImgs"
                                                    class="btn btn-primary waves-effect waves-light"><i
                                                        class="fe-check-square"></i> Thêm
                                                    thông số</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3 header-title">Hình ảnh sản phẩm</h4>
                                            <div class="form-group col-md-12" v-for="n in elImg">
                                                <!-- <label for="inputEmail4" class="col-form-label">Số lượng</label> -->
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="inputGroupFile04" name="sp_hinh_anh[]">
                                                        <label class="custom-file-label" for="inputGroupFile04">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                {{-- <input type="file" class="custom-file-input" name="sp_hinh_anh[]"> --}}
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="button" v-on:click="addElImgs"
                                                    class="btn btn-primary waves-effect waves-light"><i
                                                        class="fe-check-square"></i> Thêm
                                                    hình ảnh</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="form-group col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3 header-title">Mô tả sản phẩm</h4>
                            <div id="summernote-editor"></div>
                        </div>
                    </div>

                </div>
                <div class="form-group col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fe-check-square"></i>
                                Thêm</button>

                        </div>
                    </div>
                </div>
            </div>
            
        </form>

    </div> <!-- end card-->
</div>
<!-- end col -->
</div>
@endsection


{{-- <div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title">Thêm mới sản phẩm</h4>
        <div id="app">

            <form action="{{ route('san-pham.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-row">
    <div class="col-md-12">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group col-md-12">
                    <!-- <label for="inputEmail4" class="col-form-label">Mã sản phẩm</label> -->
                    <input type="text" class="form-control" name="masp" placeholder="Mã sản phẩm">
                </div>
                <div class="form-group col-md-12">
                    <!-- <label for="inputEmail4" class="col-form-label">Nhà sản xuất</label> -->
                    <input type="text" class="form-control" name="manhasanxuat" placeholder="Nhà sản xuất">
                </div>
                <!-- </div>
                                                        <div class="form-row"> -->
                <div class="form-group col-md-12">
                    <!-- <label for="inputPassword4" class="col-form-label">Tên sản phẩm</label> -->
                    <input type="text" class="form-control" name="tensp" placeholder="Tên sản phẩm">
                </div>
                <div class="form-group col-md-12">
                    <!-- <label for="inputPassword4" class="col-form-label">Giá sản phẩm</label> -->
                    <input type="number" class="form-control" name="giasp" placeholder="Giá sản phẩm">
                </div>
                <!-- </div>
                                                        <div class="form-row"> -->
                <div class="form-group col-md-12">
                    <!-- <label for="inputEmail4" class="col-form-label">Số lượng</label> -->
                    <input type="number" class="form-control" name="soluongtonkho" placeholder="Số lượng">
                </div>
                <div class="form-group col-md-12">
                    <!-- <label for="inputEmail4" class="col-form-label">Phân loại</label> -->
                    <select class="form-control" name="loaisp" placeholder="Loại sản phẩm">
                        <option value="loai_sp1">Loại sản phẩm 1</option>
                        <option value="loai_sp2">Loại sản phẩm 2</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <!-- <label for="inputEmail4" class="col-form-label">Chế độ bảo hành</label> -->
                    <input type="text" class="form-control" name="chedobaohanh" placeholder="Chế độ bảo hành">
                </div>
                <div class="form-group col-md-12" v-for="n in elImg">
                    <!-- <label for="inputEmail4" class="col-form-label">Số lượng</label> -->
                    <input type="file" class="form-control" name="sp_hinh_anh[]">
                </div>
            </div>
        </div>

    </div>
    <div class="form-group col-md-12">
        <label for="inputEmail4" class="col-form-label">Mô tả sản phẩm</label>
        <div id="summernote-editor"></div>
    </div>
</div>
<button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fe-check-square"></i> Thêm</button>
<button type="button" v-on:click="addElImgs" class="btn btn-primary waves-effect waves-light"><i
        class="fe-check-square"></i> Thêm
    hình ảnh</button>
</form>
</div>

</div>
</div> <!-- end card-body--> --}}
