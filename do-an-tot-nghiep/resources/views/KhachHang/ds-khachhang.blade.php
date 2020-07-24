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
    $('#customers-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('khach-hang.lay-danh-sach') }}",
        order: [],
        columns: [{
            data: 'id',
            name:'ID khách hàng'
        },{
            data: 'ten_khach_hang',
            name:'Tên khách hàng'
        }, {
            data: 'dia_chi',
            name:'Địa chỉ'
        }, {
            data: 'sdt',
            name:'SDT'
        },  {
            data: 'email',
            name:'Email'
        }, {
            data: 'trang_thai',
            name:'Trạng Thái'
        }, {
            data: 'action',
            name: 'action'
        }]
    })

</script>
@endsection

@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Danh sách khách hàng</h4>
                <a href="{{ route('loai-san-pham.create') }}" class="btn btn-primary waves-effect waves-light">
                    <span class="btn-label"><i class="fe-plus-circle"></i>
                    </span>Thêm mới</a>
                <p></p>
                <table id="customers-table" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Khách Hàng</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Email</th>
                            <th>Trạng Thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection