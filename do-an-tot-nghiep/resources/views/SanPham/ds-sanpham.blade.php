<!-- dung extends de ke thua master-page -->
@extends('master-page')

@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection

@section('js')
<!-- third party js -->
<script src="{{ asset ('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset ('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset ('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->
<!-- Datatables init -->
<script src="{{ asset ('assets/js/pages/datatables.init.js') }}"></script>
@endsection

@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Danh sách sản phẩm</h4>
                <a href="{{ route('san-pham.create') }}" class="btn btn-primary waves-effect waves-light"><i class="fe-plus-circle"></i></a>
                <p></p>
                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Nhà sản xuất</th>
                            <th>Tên sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Giá bán</th>
                            <th>Số lượng</th>
                            <th>Loại</th>
                            <th>Chế độ bảo hành</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dsSanPham as $sp)
                        <tr>
                            <td>{{ $sp->masp }}</td>
                            <td>{{ $sp->ma_nha_sx }}</td>
                            <td>{{ $sp->ten_sp }}</td>
                            <td>{{ $sp->mo_ta_sp }}</td>
                            <td>{{ $sp->gia_sp }}</td>
                            <td>{{ $sp->so_luong_ton_kho }}</td>
                            <td>{{ $sp->loai_sp }}</td>
                            <td>{{ $sp->che_do_bao_hanh }}</td>
                            <td>{{ $sp->trang_thai }}</td>
                            <td>
                                <a href="#" class="btn btn-primary waves-effect waves-light"><i class="fe-edit"></i></a>
                                <button type="button" class="btn btn-primary waves-effect waves-light"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

@endsection