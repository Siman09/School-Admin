@extends('admin.layout')
@section('content')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <div class="content-wrapper">

                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>DataTables</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Academic Year</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit</h3>
                                    </div>

                                    @if ($academic_year)
                                        <form action="{{ route('admin.academicyear.update') }}" method="get">
                                            Year_id<input type="text" class="form-control"
                                                value="{{ $academic_year->id }}" name="id" id="exampleInputEmail1"
                                                placeholder="Enter academic year">
                                                
                                            Year<input type="text" class="form-control"
                                                value="{{ $academic_year->name }}" name="name1" id="exampleInputEmail1"
                                                placeholder="Enter academic year">
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                                </from>
                                <!-- Add other fields as necessary -->
                            @else
                                <p>No academic year found with the provided ID.</p>
                                @endif

                            </div>


                        </div>

                    </div>

                </section>

            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.2.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>

            <aside class="control-sidebar control-sidebar-dark">

            </aside>

        </div>


        <script src="/admin/plugins/jquery/jquery.min.js"></script>

        <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="/admin/plugins/jszip/jszip.min.js"></script>
        <script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        <script src="/admin/dist/js/adminlte.min2167.js?v=3.2.0"></script>

        <script src="/admin/dist/js/demo.js"></script>

        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>


        </section>

        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

        </div>
    @endsection

</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 05:16:49 GMT -->

</html>
