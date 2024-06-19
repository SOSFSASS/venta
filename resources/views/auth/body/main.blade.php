

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>Acceso al sistema</title>
    <meta name="description" content="#" />
    <meta name="keywords" content="#">
    <meta name="author" content="DEVSTEC">


    <meta property="og:title" content="#" />
    <meta property="og:description" content="#" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="#">
    <meta name="twitter:description" content="#">
    <meta name="twitter:image" content="https://wfacx.com/seo/Wfacx_Portada.png">

    <meta name="twitter:description" content="#">

    <link rel="icon" type="image/png" href="{{ asset('estilos/logo.png')}}">
    {{-- <link rel="stylesheet" href="estilos/css/login.css" /> --}}
    <link rel="stylesheet" href="{{ asset('estilos/css/login.css')}}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Bienvenido</h2>
           
            <form action="" autocomplete="off" method="post" role="form">
                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="correo" value="" autocomplete="off" class="form-control" required />
                    <label>Usuario</label>
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" required="true" name="contra" value="" class="form-control" required />
                    <label>Contraseña</label>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <button id="btnIngresar" name='login' type="submit" class="btn animation" style="--i:3; --j:24;">Entrar</button>
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>
                        Olvidaste tu clave? <a href="#" class="register-link">Clic aqui</a>
                    </p>
                </div>
            </form>
        </div>

        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:19;">SOFSASS</h2>
            <p class="animation" style="--i:1; --j:20;">Potencia tus Ventas y<br>Gestiona Mejor tu Negocio</p>
        </div>

        <div class="form-box register">
            <h2 class="animation" style="--i:17; --j:0;">Recuperar Contraseña</h2>
            <form action="https://formspree.io/f/mqkvoyda" method="post">
                <div class="input-box animation" style="--i:18; --j:1;">
                    <input type="text" required />
                    <label>Correo Electrónico</label>
                    <i class="bx bxs-user"></i>
                </div>
                <button type="submit" class="btn animation" style="--i:20; --j:3;">Enviar</button>
                <div class="logreg-link animation" style="--i:21; --j:4;">
                    <p>
                        Ya tienes cuenta? <a href="#" class="login-link">Clic aqui</a>
                    </p>
                </div>
            </form>
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">SOFSASS</h2>
            <p class="animation" style="--i:18; --j:1;">Potencia tus Ventas y<br>Gestiona Mejor tu Negocio</p>
        </div>
    </div>

    {{-- <script src="estilos/js/evento.js"></script> --}}
    <script src="{{ asset('estilos/js/evento.js')}}"></script>
    {{-- <script type="text/javascript" src="estilos/js/login.js"></script> --}}
    <script src="{{ asset('estilos/js/login.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</body>

</html>