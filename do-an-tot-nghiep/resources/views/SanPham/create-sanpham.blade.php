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
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
<script>
    var app = new Vue({
        el: "#app",
        data: {
            dsThongSo: [],
            dsThongSoAdded: [],
            imgEl: 1
        },
        methods: {
            addThongSo: function(thongSo) {
                const indexThongSo = this.findIndexThongSo(thongSo.id);
                this.dsThongSoAdded.push(thongSo);
                this.dsThongSo.splice(indexThongSo, 1);
            },
            findIndexThongSo: function(id) {
                return this.dsThongSo.findIndex(function(item) {
                    return item.id === id;
                })
            },
            addImgEl: function() {
                this.imgEl += 1
            }
        },
        mounted() {
            var t = this;
            axios.get('http://localhost:8000/admin/san-pham/lay-thong-so')
                .then(function(data) {
                    t.dsThongSo = data.data
                })
                .catch(function(error) {
                    console.log("error", error)
                })
        }
    })

</script>
@endsection
@section('main-content')
<div class="row" id="app">
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
                                        <select class="form-control" name="nha_san_xuat_id" placeholder="Nhà sản xuất">
                                            @foreach ($dsNhaSanXuat as $nhasx)
                                                <option value="{{ $nhasx->id }}">{{ $nhasx->ten_nha_sx}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <!-- <label for="inputEmail4" class="col-form-label">Phân loại</label> -->
                                        <select class="form-control" name="loai_san_pham_id" placeholder="Loại sản phẩm">
                                            @foreach ($dsLoaiSanPham as $loaisp)
                                        <option value="{{ $loaisp->id }}">{{ $loaisp->ten_loai_sp }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="ten_sp" placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="number" class="form-control" name="gia_sp"
                                            placeholder="Giá sản phẩm">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="number" class="form-control" name="so_luong_ton_kho"
                                            placeholder="Số lượng">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="che_do_bao_hanh"
                                            placeholder="Chế độ bảo hành">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="gia_khuyen_mai"
                                            placeholder="Giá khuyến mãi">
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

                                            <div class="form-group col-md-12" v-for="thongSo in dsThongSoAdded">
                                                <input type="text" class="form-control" name="thong_so_values[]"
                                                    :placeholder="thongSo.ten_thong_so">
                                                <input type="hidden" :value="thongSo.id" class="form-control" name="thong_so_ids[]">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false"> Thêm thông số<i
                                                        class="mdi mdi-chevron-down"></i> </button>
                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 106px, 0px);">
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        v-for="thongSo in dsThongSo"
                                                        v-on:click="addThongSo(thongSo)">
                                                        @{{ thongSo.ten_thong_so }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3 header-title">Hình ảnh sản phẩm</h4>
                                            <div class="form-group col-md-12" v-for="n in imgEl">
                                                <!-- <label for="inputEmail4" class="col-form-label">Số lượng</label> -->
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="inputGroupFile04" name="sp_hinh_anh[]">
                                                        <label class="custom-file-label" for="inputGroupFile04">Hình ảnh</label>
                                                    </div>
                                                </div>
                                                {{-- <input type="file" class="custom-file-input" name="sp_hinh_anh[]"> --}}
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary waves-effect waves-light"
                                                    v-on:click="addImgEl">
                                                    <i class="fe-check-square"></i> Thêm hình ảnh
                                                </button>
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
                            <button type="submit" class="btn btn-primary waves-effect waves-light"><i
                                    class="fe-check-square"></i>
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
