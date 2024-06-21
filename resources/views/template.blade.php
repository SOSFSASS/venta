<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Sistema POS - @yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/img/favicon.png') }}">


    <link rel="stylesheet" href="{{ asset('css/template/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/template/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/style.css') }}"> --}}
    @stack('css')
</head>

<body>
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}

    <div class="main-wrapper">

        {{-- LLamamos a nuestro componente navigation-header --}}
        <x-navigation-header />

        {{-- </x-navigation-header> --}}


        <div class="sidebar" id="sidebar">
            {{-- LLamamos a nuestro componente navigation-menu --}}
            <x-navigation-menu />
        </div>

        <div class="page-wrapper">
            @yield('content')
            {{-- <div class="content">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Blank Page</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        Contents here
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="customizer-links" id="setdata">
            <ul class="sticky-sidebar">
                <li class="sidebar-icons">
                    <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="Theme">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-settings feather-five">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-settings nav-toggle " id="layoutDiv">
            <div class="sidebar-content sticky-sidebar-one">
                <div class="sidebar-header">
                    <div class="sidebar-theme-title">
                        <h5>Theme Customizer</h5>
                        <p>Customize &amp; Preview in Real Time</p>
                    </div>
                    <div class="close-sidebar-icon d-flex"><a class="sidebar-refresh me-2" onclick="resetData()">⟳</a><a
                            class="sidebar-close" href="#">X</a></div>
                </div>
                <div class="sidebar-body p-0">
                    <form id="theme_color" method="post">
                        <div class="theme-mode mb-0">
                            <div class="theme-body-main">
                                <div class="theme-head">
                                    <h6>Theme Mode</h6>
                                    <p>Enjoy Dark &amp; Light modes.</p>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 ere">
                                        <div class="layout-wrap">
                                            <div class="d-flex align-items-center">
                                                <div class="status-toggle d-flex align-items-center me-2"><input
                                                        type="radio" name="theme-mode" id="light_mode"
                                                        class="check color-check stylemode lmode" value="light_mode"
                                                        checked=""><label for="light_mode"
                                                        class="checktoggles"><span class="theme-name">Light
                                                            Mode</span></label></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 ere">
                                        <div class="layout-wrap">
                                            <div class="d-flex align-items-center">
                                                <div class="status-toggle d-flex align-items-center me-2"><input
                                                        type="radio" name="theme-mode" id="dark_mode"
                                                        class="check color-check stylemode" value="dark_mode"><label
                                                        for="dark_mode" class="checktoggles"><span
                                                            class="theme-name">Dark Mode</span></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="template_direction" method="post">
                                    <div class="theme-mode border-0">
                                        <div class="theme-head">
                                            <h6>Direction</h6>
                                            <p>Select the direction for your app.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 ere">
                                                <div class="layout-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="status-toggle d-flex align-items-center me-2">
                                                            <input type="radio" name="direction" id="ltr"
                                                                class="check direction" value="ltr"
                                                                checked=""><label for="ltr"
                                                                class="checktoggles"><a href="../template/index.html"
                                                                    previewlistener="true"></a><span
                                                                    class="theme-name">LTR</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 ere">
                                                <div class="layout-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="status-toggle d-flex align-items-center me-2">
                                                            <input type="radio" name="direction" id="rtl"
                                                                class="check direction" value="rtl"><label
                                                                for="rtl" class="checktoggles"><a
                                                                    href="../template-rtl/index.html" target="_blank"
                                                                    previewlistener="true"></a><span
                                                                    class="theme-name">RTL</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="layout_mode" method="post">
                                            <div class="theme-mode border-0 mb-0">
                                                <div class="theme-head">
                                                    <h6>Layout Mode</h6>
                                                    <p>Select the primary layout style for your app.</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 ere">
                                                        <div class="layout-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="status-toggle d-flex align-items-center me-2">
                                                                    <input type="radio" name="layout"
                                                                        id="default_layout" class="check layout-mode"
                                                                        value="default"><label for="default_layout"
                                                                        class="checktoggles"><span
                                                                            class="theme-name">Default</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 ere">
                                                        <div class="layout-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="status-toggle d-flex align-items-center me-2">
                                                                    <input type="radio" name="layout"
                                                                        id="box_layout" class="check layout-mode"
                                                                        value="box"><label for="box_layout"
                                                                        class="checktoggles"><span
                                                                            class="theme-name">Box</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 ere">
                                                        <div class="layout-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="status-toggle d-flex align-items-center me-2">
                                                                    <input type="radio" name="layout"
                                                                        id="collapse_layout" class="check layout-mode"
                                                                        value="collapsed"><label for="collapse_layout"
                                                                        class="checktoggles"><span
                                                                            class="theme-name">Collapsed</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 ere">
                                                        <div class="layout-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="status-toggle d-flex align-items-center me-2">
                                                                    <input type="radio" name="layout"
                                                                        id="horizontal_layout"
                                                                        class="check layout-mode"
                                                                        value="horizontal"><label
                                                                        for="horizontal_layout"
                                                                        class="checktoggles"><span
                                                                            class="theme-name">Horizontal</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 ere">
                                                        <div class="layout-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="status-toggle d-flex align-items-center me-2">
                                                                    <input type="radio" name="layout"
                                                                        id="modern_layout" class="check layout-mode"
                                                                        value="modern"><label for="modern_layout"
                                                                        class="checktoggles"><span
                                                                            class="theme-name">Modern</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form id="nav_color" method="post">
                                            <div class="theme-mode">
                                                <div class="theme-head">
                                                    <h6>Navigation Colors</h6>
                                                    <p>Setup the color for the Navigation</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 ere">
                                                        <div class="layout-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="status-toggle d-flex align-items-center me-2">
                                                                    <input type="radio" name="nav_color"
                                                                        id="light_color" class="check nav-color"
                                                                        value="light"><label for="light_color"
                                                                        class="checktoggles"><span
                                                                            class="theme-name">Light</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 ere">
                                                        <div class="layout-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="status-toggle d-flex align-items-center me-2">
                                                                    <input type="radio" name="nav_color"
                                                                        id="grey_color" class="check nav-color"
                                                                        value="grey"><label for="grey_color"
                                                                        class="checktoggles"><span
                                                                            class="theme-name">Grey</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 ere">
                                                        <div class="layout-wrap">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="status-toggle d-flex align-items-center me-2">
                                                                    <input type="radio" name="nav_color"
                                                                        id="dark_color" class="check nav-color"
                                                                        value="dark"><label for="dark_color"
                                                                        class="checktoggles"><span
                                                                            class="theme-name">Dark</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-footer">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="footer-preview-btn"><button type="button"
                                                class="btn btn-secondary w-100"
                                                onclick="resetData()">Reiniciar</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('css/js/jquery-3.7.1.min.js') }}"></script>

    <script src="{{ asset('css/js/feather.min.js') }}"></script>


    <script src="{{ asset('css/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('css/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('css/js/dataTables.bootstrap5.min.js') }}"></script>

    <script src="{{ asset('css/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('css/js/jquery-ui.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('css/js/jquery.ui.touch-punch.min.js') }}"></script> --}}
    <script src="{{ asset('css/js/moment.min.js') }}"></script>
    <script src="{{ asset('css/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}" type="text/javascript"></script>

    <script src="{{ asset('css/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('css/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('css/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('css/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>


    <script src="{{ asset('css/plugins/sweetalert/sweetalerts.min.js') }}"></script>
    <script src="{{ asset('css/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('css/js/theme-script.js') }}"></script>
    <script src="{{ asset('css/js/script.js') }}"></script>

    {{-- <div class="sidebar-overlay"></div>
    <div class="sidebar-filter opened"></div>
    <div class="sidebar-filter"></div> --}}
    <script src="{{ asset('css/js/theme-settings.js') }}" type="text/javascript" async="true"></script>




    @stack('js')
</body>

</html>
