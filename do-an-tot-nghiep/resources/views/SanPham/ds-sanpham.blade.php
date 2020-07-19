@extends('master-page')

@section('css')
<!-- Custom styles for this page -->
<link href="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endsection


@section('js')
<!-- Page level plugins -->
<script src="{{ asset ('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('san-pham.lay-danh-sach') }}",
        order: [],
        columns: [{
            data: 'id',
            name:'ID Sản phẩm'
        },{
            data: 'ten_sp',
            name:'Tên sản phẩm'
        }, {
            data: 'mo_ta_sp',
            name:'Mô tả sản phẩm'
        }, {
            data: 'loai_san_pham.ten_loai_sp',
            name: 'Loại sản phẩm'
        }, {
            data: 'action',
            name: 'action'
        }]
    })

</script>
@endsection

@section('main-content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h6 mb-2 text-gray-800">Home / Sản phẩm / Danh sách sản phẩm</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                            <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="card-header py-3">
            <a href="#" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Thêm mới</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="product-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Mô tả sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Hành động</th>
                            </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Mô tả sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Hành động</th>
                            </tr>
                        </tr>
                    </tfoot>
                    {{-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>a </td>
                            <td>b</td>
                            <td>c</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>$320</td>
                            <td>
                                <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="text"><i class="far fa-edit"></i>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="text"><i class="far fa-trash-alt"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
</div>
{{-- <div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                            <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="widget-body-toolbar margin-top-10 form-horizontal">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-md-8 control-label">Nhóm sản phẩm</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="ProductGroupId" name="ProductGroupId">
                                                <option value="0">Toàn bộ danh mục</option>
                                                @foreach ($dsLoaiSanPham as $loaiSanPham)
                                                    <option value="{{ $loaiSanPham->id }}">{{ $loaiSanPham->ten_loai_sp }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-md-8 control-label">Nhà sản xuất</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="ProductTag" name="ProductTag">
                                                <option value="0">----------Tất cả----------</option>
                                                @foreach ($dsNhaSanXuat as $nhaSanXuat)
                                                    <option value="{{ $nhaSanXuat->id }}">{{ $nhaSanXuat->ten_nha_sx }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="product-table" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Mô tả sản phẩm</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                </table>

                            </div>
                        </div>
                        

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- end container -->
</div> --}}
@endsection
