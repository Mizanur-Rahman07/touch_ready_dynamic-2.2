<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('adminAsset')}}/assets/js/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('adminAsset')}}/assets/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('admin.include.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            @include('admin.include.right_sideber')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('admin.include.left_sideber')
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('adminAsset')}}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('adminAsset')}}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{asset('adminAsset')}}/assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{asset('adminAsset')}}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('adminAsset')}}/assets/js/off-canvas.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/hoverable-collapse.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/template.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/settings.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('adminAsset')}}/assets/js/dashboard.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>