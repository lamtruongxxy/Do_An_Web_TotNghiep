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
<!-- truy van database -->
<script>
    $(document).ready(function () {
        $('#comment-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('binh-luan.lay-danh-sach') }}",
            order: [],
            columns: [{
                data: 'id',
                name: 'ID Bình Luận'
            }, {
                data: 'san_pham.ten_sp',
                name: 'Tên Sản Phẩm'
            }, {
                data: 'nguoi_binh_luan',
                name: 'Người Bình Luận'
            }, {
                data: 'noi_dung_bl',
                name: 'Nội Dung'
            }, {
                data: 'sdt_nguoi_bl',
                name: 'SDT Người Bình Luận'
            }, {
                data: 'created_at',
                name: 'Ngày Bình Luận'
            }, {
                data: 'trang_thai',
                name: 'Trạng Thái'
            }, {
                data: 'action',
                name: 'action'
            }],
            drawCallback: function () {
                $(document).on('click', '.delete-binhluan', function (e) {
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
        @include('Components.errors')
        <div class="card">
            <div class="card-body">
                <h4>Danh Sách Bình Luận</h4>
                <p></p>
                <table id="comment-table" class="table dt-responsive nowrap">
                    <thead>
                        <th>ID</th>      
                        <th>Tên Sản Phẩm</th>
                        <th>Người Bình Luận</th>
                        <th>Nội Dung Bình Luận</th>
                        <th>SDT</th>
                        <th>Ngày Bình Luận</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Người Bình Luận</th>
                            <th>Nội Dung Bình Luận</th>
                            <th>SDT</th>
                            <th>Ngày Bình Luận</th>
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
