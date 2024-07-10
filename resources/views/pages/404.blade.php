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
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/template/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/style.css') }}">
</head>

<body class="error-page">
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}

    <div class="main-wrapper">
        <div class="error-box">
            <div class="error-img">
                <img src="{{ asset('css/img/authentication/error-404.png') }}" class="img-fluid" alt="">
            </div>
            <h1>404</h1>
            <h3 class="h2 mb-3"><i class="fas fa-exclamation-circle"></i> Oops! No Autorizado!</h3>
            <p class="h4 font-weight-normal">No tienes permiso para acceder a este recurso.</p>
            <br>
            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
        </div>
    </div>


    <script src="{{ asset('css/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('css/js/feather.min.js') }}"></script>

    <script src="{{ asset('css/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('css/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('css/js/script.js') }}"></script>
</body>

</html>
