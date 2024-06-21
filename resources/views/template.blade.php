<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="" />
    <!-- BEGIN: Page Title-->
    <title>Sistema | Venta</title>

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/dataTable/datatables.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/dataTable/extensions/dataTables.jqueryui.min.css') }}">

    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- END: Custom CSS-->
    <!-- BEGIN: Favicon-->
    <link type="image/x-icon" rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
</head>




<body data-spy="scroll" data-target="#navSection">
    <!--================================-->
    <!-- Page Container Start -->
    <!--================================-->
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="../analytic/analytic-index.html">
                    <img class="desktop-logo" src="../../assets/images/logo.png" alt="">
                    <img class="small-logo" src="../../assets/images/small-logo.png" alt="">
                </a>
                <a id="sidebar-toggle-button-close"><i class="wd-20 ht-20" data-feather="x"></i> </a>
            </div>
            <!--================================-->
            <!-- Sidebar Menu Start -->
            <!--================================-->
            <div class="page-sidebar-inner">
                <x-navigation-header />
            </div>
            <!--/ Sidebar Menu End -->
        </div>
        <!--/ Page Sidebar End -->
        <!--================================-->
        <!-- Page Content Start -->
        <!--================================-->
        <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input class="form-control search-input typeahead" name="search"
                                placeholder="Type something..." type="text" />
                            <span class="input-group-btn"><span id="close-search"><i data-feather="x"
                                        class="wd-16"></i></span></span>
                        </div>
                    </form>
                </div>
                <x-navigation-menu />
                <div class="pd-y-10 pd-x-30 d-flex justify-content-between align-items-center header-bottom">
                    <div class="d-flex align-items-center">
                        {{-- <h2 class="d-flex align-items-center tx-16 mb-0 pd-r-10 mr-2 bd-r bd-gray-200">Pages</h2>
                        <h2 class="d-flex align-items-center tx-15 mb-0 tx-normal">Starter Page</h2> --}}
                    </div>
                    <div class="d-flex hidden-xs">
                        <a href="" target="_blank"
                            class="btn bg-soft-primary mr-3 d-none d-md-block pd-y-8-force waves-effect"><span
                                data-feather="life-buoy" class="wd-16 ht-16 mr-1"></span>Documentación</a>
                        <a href="" target="_blank"
                            class="btn bg-soft-info d-none d-md-block pd-y-8-force waves-effect"><span
                                data-feather="info" class="wd-16 ht-16 mr-1"></span>Ayuda</a>
                    </div>
                </div>
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Content Start -->
            <!--================================-->
            @yield('content')
            {{-- <div class="page-inner-content ht-100v">
            </div> --}}
            <!--/ Page Inner Content End -->
            <!--================================-->
            <!-- Page Footer Start -->
            <!--================================-->
            {{-- @section('components.footer') --}}
            <x-footer />
            <!--/ Page Footer End -->
        </div>
        <!--/ Page Content End -->
    </div>
    <!--/ Page Container End -->
    <!--================================-->
    <!-- Scroll To Top Start-->
    <!--================================-->
    <a href="" data-click="scroll-top" class="btn-scroll-top fade waves-effect"><i data-feather="arrow-up"
            class="wd-16 ht-16"></i></a>
    <!--/ Scroll To Top End -->
    <!-- BEGIN: Theme Customizer-->
    <div class="settingSidebar">
        <x-sidebar />
    </div>
    <!-- End: Theme Customizer-->
    <!--================================-->
    <!-- Footer Script -->
    <!--================================-->
    <!-- BEGIN: Global JS -->
    <script src="{{ asset('assets/js/plugin-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/adata-init.js') }}"></script>
    <!-- END: Global JS-->
    <script src="{{ asset('assets/plugins/dataTable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dataTable/responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('assets/plugins/dataTable/extensions/dataTables.jqueryui.min.js') }}"></script>
    <!-- BEGIN: Page Vendor JS-->
    {{-- <script src="{{ asset('assets/plugins/select2/js/select2..js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src=".{{ asset('assets/plugins/sweetalert2/sweetalert2-active.js') }}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>

</html>
