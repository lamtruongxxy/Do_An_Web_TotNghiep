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
                                <button type="button" class="btn btn-primary waves-effect waves-light"><i class="fe-plus-circle"></i></button>
                                <p></p>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Mã sản phẩm</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Thao tac</th>
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
                                            <td>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="far fa-trash-alt"></i></button>    
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                
@endsection