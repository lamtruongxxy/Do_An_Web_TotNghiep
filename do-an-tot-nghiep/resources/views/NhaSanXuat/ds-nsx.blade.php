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
<!-- truy vấn database thông qua api database -->
<script>
    $(document).ready(function () {
        $('#product-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('nha-san-xuat.lay-danh-sach') }}",
            order: [],
            columns: [{
                data: 'id',
                name: 'ID Loại'
            }, {
                data: 'ten_nha_sx',
                name: 'Tên nhà sản xuất'
            }, {
                data: 'ghi_chu',
                name: 'Logo nhà sản xuất'
            }, {
                data: 'trang_thai',
                name: 'Trạng thái'
            }, {
                data: 'action',
                name: 'action'
            }],
            drawCallback: function () {
                $(document).on('click', '.delete-nhasx', function (e) {
                    const confirm = window.confirm("Bạn có chắc muốn xóa?");
                    e.preventDefault();
                    const th = $(this);
                    if (confirm) {
                        th.parent().submit();
                    }
                })
            }
        })
    })

</script>
@endsection
@section('main-content')
<div class="row">
    <div class="col-12">
        @include('Request.errors')
        @include('Request.complete')
        <div class="card">
            <div class="card-body">
                <h4>Nhà Sản Xuất</h4>
                <a href="{{ route('nha-san-xuat.create') }}" class="btn btn-primary waves-effect waves-light">
                    <span class="btn-label"><i class="fe-plus-circle"></i>
                    </span>Thêm mới</a>
                <p></p>
                <table id="product-table" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên nhà sản xuất</th>
                            <th>Ghi Chú</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên nhà sản xuất</th>
                            <th>Ghi Chú</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </tfoot>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

@endsection
