@extends('master-page')

@section('css')
<!-- Custom styles for this page -->
<link href="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('js')
<!-- Page level plugins -->
<script src="{{ asset ('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset ('js/demo/datatables-demo.js') }}"></script>
@endsection

@section('main-content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách sản phẩm</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to gen</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger </td>
                            <td>System </td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>201</td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection