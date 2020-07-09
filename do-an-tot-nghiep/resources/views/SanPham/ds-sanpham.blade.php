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
                                <h3>Danh sach san pham</h3>
                                <p class="text-muted font-13 mb-4">
                                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                    function:
                                    <code>$().DataTable();</code>.
                                </p>

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
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
@endsection