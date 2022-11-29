<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Sikenawa</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- DataTables -->
    {{-- <link href="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" /> --}}

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.css') }}">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->


    @yield('main-content')

      
<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->


<!--====== jquery js ======-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!--====== Bootstrap js ======-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!--====== Magnific Popup js ======-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--====== Parallax js ======-->
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<!--====== Counter Up js ======-->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!--====== Appear js ======-->
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<!--====== Scrolling js ======-->
<script src="{{ asset('assets/js/scrolling-nav.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
{{-- 
<script src="{{ asset('admin/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script> --}}
<!--====== Main js ======-->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
