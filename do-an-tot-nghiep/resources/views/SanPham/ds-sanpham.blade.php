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
{{-- <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h6 mb-2 text-gray-800">Home / Sản phẩm / Danh sách sản phẩm</h1>
    
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
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Loại sản phẩm</th>
                            <th>Nhà sản xuất</th>
                            <th>Mô tả</th>
                            <th>Số lượng tồn kho</th>
                            <th>Chế độ bảo hành</th>
                            <th>Trạng thái</th>
                            <th>Thông số</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Loại sản phẩm</th>
                            <th>Nhà sản xuất</th>
                            <th>Mô tả</th>
                            <th>Số lượng tồn kho</th>
                            <th>Chế độ bảo hành</th>
                            <th>Trạng thái</th>
                            <th>Thông số</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
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
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}
<div class="wrapper">
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
                                            <select class="form-control" id="ProductGroupId" name="ProductGroupId"><option value="0">Toàn bộ danh mục</option>
                                            <option value="220796">Điện thoại</option>
                                            <option value="220804">├──Apple</option>
                                            <option value="220805">├──Nokia</option>
                                            <option value="220803">├──Samsung</option>
                                            <option value="220802">├──Sony</option>
                                            <option value="220797">Máy tính bảng</option>
                                            <option value="220798">Laptop</option>
                                            <option value="220799">Máy để bàn</option>
                                            <option value="220800">Phụ kiện</option>
                                            <option value="220801">Máy cũ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-md-8 control-label">Tag sản phẩm</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="ProductTag" name="ProductTag">
                                                <option value="0">----------Tất cả----------</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="txtKeyword">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default" id="btnSearch">
                                                <i class="fa fa-search"></i> Tìm
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>

                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
 
    </div> <!-- end container -->
</div>
@endsection