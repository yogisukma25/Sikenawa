<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

        <link href="{{ asset('admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" /> 

        <!-- App css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>


    <div class="page-wrapper">


    @yield('content-admin')        

        <!-- end page content -->
        <footer class="footer text-center text-sm-left">
            <div class="boxed-footer">
                &copy; 2019 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
            </div>
        </footer><!--end footer-->
    </div>
    <!-- end page-wrapper -->

 <!-- jQuery  -->
 <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
 <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('admin/assets/js/metisMenu.min.js') }}"></script>
 <script src="{{ asset('admin/assets/js/waves.min.js') }}"></script>
 <script src="{{ asset('admin/assets/js/jquery.slimscroll.min.js') }}"></script>

 <script src="{{ asset('admin/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
 <script src="{{ asset('admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
 <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('admin/assets/pages/jquery.hospital_dashboard.init.js') }}"></script>

 <!-- App js -->
 <script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>
</html>