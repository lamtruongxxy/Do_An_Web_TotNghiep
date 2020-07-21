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
                    data: 'nha_san_xuat_id',
                    name: 'Nhà sản xuất'
                }, {
                    data: 'so_luong_ton_kho',
                    name: 'Số lượng tồn kho'
                }, {
                    data: 'gia_sp',
                    name: 'Giá sản phẩm'
                }, {
                    data: 'trang_thai',
                    name: 'Trạng thái'
                }, {
                    data: 'che_do_bao_hanh',
                    name: 'Chế độ bảo hành'
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
                                <h4>Danh sách sản phẩm</h4>
                                <a href="{{ route('san-pham.create') }}" class="btn btn-primary waves-effect waves-light"><i class="fe-plus-circle"></i></a>
                                <p></p>
                                <table id="product-table" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Mô tả sản phẩm</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Nhà Sản Xuất</th>
                                            <th>Số lượng tồn kho</th>
                                            <th>Giá sản phẩm</th>
                                            <th>Trạng thái</th>
                                            <th>Chế độ bảo hành</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>                              
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
@endsection