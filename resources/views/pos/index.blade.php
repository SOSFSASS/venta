<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos Admin Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="shortcut icon" type="image/x-icon"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/img/favicon.png">

    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/bootstrap.min.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/animate.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/dataTables.bootstrap5.min.css">

    {{-- <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/fontawesome/css/fontawesome.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.theme.default.min.css">

    {{-- <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/template/style.css') }}">
    <style>
        .img-bg img {
            width: 70px;
        }
    </style>

<style>
     body {
        background-color: #F2F7FB;
    }
    
    .logo {
        font-size: 22px;
    }
    
    .text-blue {
        color: #00548d;
    }
    
    .card {
        background-color: #ffffff !important;
        border-radius: 15px;
        box-shadow: 0px 9px 20px rgba(46, 35, 94, 0.07);
        border: 1px solid transparent;
    }
    
    .card.card-warning {
        border-color: #fc8d00;
    }
    
    .card.card-danger {
        border-color: #EF4444;
    }
    
    .card-header {
        background-color: transparent;
        padding: 1rem !important;
    }
    
    .card-body {
        background-color: transparent;
    
    }
    
    .card-footer {
        background-color: transparent;
    
    }
    
    .cursor-pointer {
        cursor: pointer !important;
    }
    
    .card-header:first-child {
        border-radius: 1rem 1rem 0 0 !important;
    }
    
    .btn {
        color: #ffffff;
        position: relative;
        transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
    }
    
    .btn-outline-success {
        color: #3ac47d;
        border-color: #3ac47d
    }
    
    .btn-outline-success:hover {
        color: #fff;
        background-color: #3ac47d;
        border-color: #3ac47d
    }
    
    .btn-outline-success:hover {
        color: #fff;
        background-color: #3ac47d;
        border-color: #3ac47d
    }
    
    .btn-primary {
        color: #fff;
        background-color: #081A51;
        border-color: #3f6ad8
    }
    
    .btn {
        position: relative;
        transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
        outline: none !important
    }
    
    
    /** 7. Utilities **/
    
    
    .btn-primary,
    .btn-primary:hover {
        background-color: #081A51;
        border-color: #3B82F6;
    }
    
    .btn-primary:focus {
        background-color: #2563EB !important;
        border-color: #2563EB !important;
    }
    
    .btn-success,
    .btn-success:hover {
        background-color: #10B981;
        border-color: #10B981;
    }
    
    .btn-success:focus {
        background-color: #059669 !important;
        border-color: #059669 !important;
    }
    
    .btn-info,
    .btn-info:hover {
        background-color: #36B9CC;
        border-color: #36B9CC;
    }
    
    .btn-info:focus {
        background-color: #2EA5B6 !important;
        border-color: #2EA5B6 !important;
    }
    
    .btn-warning,
    .btn-warning:hover {
        background-color: #fc8d00 !important;
        border-color: #fc8d00 !important;
    }
    
    .btn-warning:focus {
        background-color: #F59E0B !important;
        border-color: #F59E0B !important;
    }
    
    .btn-danger,
    .btn-danger:hover {
        background-color: #EF4444;
        border-color: #EF4444;
    }
    
    .btn-danger:focus {
        background-color: #DC2626 !important;
        border-color: #DC2626 !important;
    }
    
    .btn-blue,
    .btn-blue:hover {
        background-color: #0093d9;
        border-color: #0093d9;
    }
    
    .btn-blue:focus {
        background-color: #0093d9 !important;
        border-color: #0093d9 !important;
    }
    
    .btn-secondary,
    .btn-secondary:hover {
        background-color: #4B5563;
        border-color: #4B5563;
    }
    
    .btn-secondary:focus {
        background-color: #374151 !important;
        border-color: #374151 !important;
    }
    
    
    .btn:hover,
    .btn:focus {
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2) !important;
        color: #fff !important;
    }
    
    .btn-outline-danger {
        color: #EF4444;
    }
    
    .btn-outline-blue {
        color: #0093d9;
        border-color: #0093d9;
    }
    
    .btn-outline-blue:hover {
        color: #fff;
        background-color: #0093d9;
        border-color: #0093d9;
    }
    
    .btn-outline-secondary.delete {
        color: #6c757d;
        border: 0;
        opacity: 0.65 !important;
    }
    
    .btn-outline-secondary.delete:hover,
    .btn-outline-secondary.delete:focus {
        border: 0 !important;
        background-color: #6c757d !important;
    }
    
    
    .btn-warning:disabled,
    .btn-warning.disabled {
        color: #FFFFFF !important;
    }
    
    .pedido-container .pedido-card {
        /* height: calc(100vh - 59px); */
        height: calc(100vh - 85px);
    }
    
    .cards-products {
        height: calc(100vh - 270px);
        overflow: scroll;
        overflow-y: visible;
        overflow-x: hidden;
    }
    
    .fw-700 {
        font-weight: 700;
    }
    
    .fw-600 {
        font-weight: 600 !important;
    }
    
    .fw-500 {
        font-weight: 500 !important;
    }
    
    .fs-7 {
        font-size: .90rem;
    }
    
    .fs-17 {
        font-size: 17spx !important;
    }
    
    .fs-16 {
        font-size: 16px !important;
    }
    
    .fs-14 {
        font-size: 14px !important;
    }
    
    .fs-12 {
        font-size: 12px !important;
    }
    
    .quantity {
        display: flex;
        /* border: 2px solid #3498db; */
        /* border-radius: 4px; */
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .quantity button {
        /* background-color: #3498db; */
        /* color: #fff; */
        border: none;
        cursor: pointer;
        /* font-size: 20px; */
        width: 28px;
        /* height: auto; */
        text-align: center;
        transition: background-color 0.2s;
    }
    
    .quantity button:hover {
        /* background-color: #2980b9; */
    }
    
    .input-box {
        width: 40px;
        text-align: center;
        border: none;
        padding: 2.5px 4px;
        font-size: 16px;
        outline: none;
    }
    
    /* Hide the number input spin buttons */
    .input-box::-webkit-inner-spin-button,
    .input-box::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    .input-box[type="number"] {
        -moz-appearance: textfield;
    }
    
    
    .slider-item {
        display: inline-block;
        background: #F2F7FB;
        padding: 10px;
        width: auto;
        border: 1px solid #F2F7FB;
        position: relative;
        white-space: nowrap;
    }
    
    .slider-item .cantidad {
        display: none;
    }
    
    .slider-item.select {
        border-color: #00548d;
    }
    
    .slider-item.select .category {
        color: #00548d;
    }
    
    .slider-item.select .cantidad {
        position: absolute;
        display: block;
        bottom: -10px;
        left: 40%;
        color: #FFFFFF;
        padding: 1px 10px;
        border-radius: 50rem !important;
        background: #00548d;
        font-size: 12px;
        font-weight: 700;
    }
    
    .slider-item:hover {
        border-color: #00548d;
        cursor: pointer;
    }
    
    .slider-item:hover .category {
        color: #00548d;
    }
    
    .slider-item:hover .cantidad {
        position: absolute;
        display: block;
        bottom: -10px;
        left: 40%;
        color: #FFFFFF;
        padding: 1px 10px;
        border-radius: 50rem !important;
        background: #00548d;
        font-size: 12px;
        font-weight: 700;
    }
    
    .swiper {
        height: 62px;
    }
    
    
    .swiper-button-next::after,
    .swiper-button-prev::after {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px !important;
        font-weight: 800;
        padding: 1rem;
        width: 2rem;
        height: 2rem;
        opacity: 0.75;
        border-radius: 50%;
        color: #FFFFFF;
        background: #00548d;
    }
    
    
    /* Estilos para el estado activo de los botones (hover) */
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
    
        opacity: 1;
        /* Cambia la opacidad en hover */
    }
    
    /* Estilos para los botones "prev" específicamente */
    .swiper-button-prev {
        left: 3px !important;
        /* Alinea el botón "prev" a la izquierda */
        top: 27px !important;
    }
    
    /* Estilos para los botones "next" específicamente */
    .swiper-button-next {
        right: 3px !important;
        /* Alinea el botón "next" a la derecha */
        top: 27px !important;
    }
    
    .swiper-slide {
        width: auto !important;
    }
    
    .radius-bottom {
        border-radius: 0 0 1rem 1rem !important;
    }
    
    .me-3-5 {
        margin-right: 2rem !important;
    }
    
    .ms-3-5 {
        margin-left: 2rem !important;
    }
    
    .scroll-y {
        overflow: scroll;
        overflow-y: visible;
    }
    
    
    input[type=number].not-spin::-webkit-inner-spin-button,
    input[type=number].not-spin::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    
    /*-------------------------------------*/
    /*             LOADER PRODUCT          */
    
    
    :root {
        --hue: 223;
        --bg: #F2F7FB;
        /* font-size: calc(16px + (24 - 16) * (100vw - 320px) / (1280 - 320)); */
    }
    
    #loader_product {
        /* background-color: var(--bg); */
        position: absolute;
        z-index: 99;
        width: 100%;
        height: 100%;
        background: rgb(242, 247, 251, .5);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .lp {
        width: 4em;
        height: 8em;
        /* width: 4em;
        height: 10em; */
    }
    
    .lp__drops,
    .lp__fall-line,
    .lp__worm {
        animation-duration: 4s;
        animation-iteration-count: infinite;
        transform-origin: 64px 64px;
    }
    
    .lp__drops {
        animation-name: drops;
        animation-timing-function: ease-in-out;
        stroke-dasharray: 22 307.85 22;
        visibility: hidden;
        transform: rotate(90deg);
    }
    
    .lp__fall-line {
        animation-name: fallLine1;
        animation-timing-function: ease-in;
        stroke-dasharray: 1 112;
        stroke-dashoffset: 114;
    }
    
    .lp__fall-line--delay1 {
        animation-name: fallLine2;
    }
    
    .lp__fall-line--delay2 {
        animation-name: fallLine3;
    }
    
    .lp__fall-line--delay3 {
        animation-name: fallLine4;
    }
    
    .lp__fall-line--delay4 {
        animation-name: fallLine5;
    }
    
    .lp__ring {
        /* stroke:hsla(0, 0%, 100%, 0.1); */
        /* stroke:hsla(0, 0%, 100%, 0.515); */
        stroke: rgb(242, 247, 251);
        transition: stroke 0.3s;
    }
    
    .lp__worm {
        animation-name: worm;
        stroke-dasharray: 43.98 307.87;
        stroke-dashoffset: -131.94;
        transform: rotate(-90deg);
    }
    
    @media (prefers-color-scheme: dark) {
        :root {
            --bg: hsl(var(--hue), 90%, 5%);
            --fg: hsl(var(--hue), 90%, 95%);
        }
    
        .lp__ring {
            stroke: hsla(var(--hue), 90%, 95%, 0.1);
        }
    }
    
    @keyframes drops {
        from {
            animation-timing-function: steps(1, end);
            stroke-dasharray: 0 351.85 0;
            visibility: hidden;
        }
    
        25% {
            animation-timing-function: ease-in-out;
            stroke-dasharray: 0 351.85 0;
            visibility: visible;
        }
    
        26% {
            stroke-dasharray: 4 343.85 4;
        }
    
        27% {
            stroke-dasharray: 8 335.85 8
        }
    
        28% {
            stroke-dasharray: 12 327.85 12;
        }
    
        29% {
            animation-timing-function: ease-in;
            stroke-dasharray: 17 317.85 17;
        }
    
        32% {
            animation-timing-function: ease-out;
            stroke-dasharray: 25 301.85 25;
        }
    
        35%,
        47.5% {
            animation-timing-function: linear;
            stroke-dasharray: 22 307.85 22;
            visibility: visible;
        }
    
        50% {
            animation-timing-function: steps(1, end);
            stroke-dasharray: 0 307.85 43.98;
            visibility: hidden;
        }
    
        75% {
            animation-timing-function: ease-in-out;
            stroke-dasharray: 0 351.85 0;
            visibility: visible;
        }
    
        76% {
            stroke-dasharray: 4 343.85 4;
        }
    
        77% {
            stroke-dasharray: 8 335.85 8
        }
    
        78% {
            stroke-dasharray: 12 327.85 12;
        }
    
        79% {
            animation-timing-function: ease-in;
            stroke-dasharray: 17 317.85 17;
        }
    
        82% {
            animation-timing-function: ease-out;
            stroke-dasharray: 25 301.85 25;
        }
    
        85%,
        97.5% {
            animation-timing-function: linear;
            stroke-dasharray: 22 307.85 22;
            visibility: visible;
        }
    
        to {
            stroke-dasharray: 43.98 307.85 0;
            visibility: hidden;
        }
    }
    
    @keyframes fallLine1 {
    
        from,
        15% {
            stroke-dashoffset: 114;
        }
    
        25%,
        65% {
            stroke-dashoffset: 1;
        }
    
        75%,
        to {
            stroke-dashoffset: -112;
        }
    }
    
    @keyframes fallLine2 {
    
        from,
        16% {
            stroke-dashoffset: 114;
        }
    
        26%,
        66% {
            stroke-dashoffset: 1;
        }
    
        76%,
        to {
            stroke-dashoffset: -112;
        }
    }
    
    @keyframes fallLine3 {
    
        from,
        17% {
            stroke-dashoffset: 114;
        }
    
        27%,
        67% {
            stroke-dashoffset: 1;
        }
    
        77%,
        to {
            stroke-dashoffset: -112;
        }
    }
    
    @keyframes fallLine4 {
    
        from,
        18% {
            stroke-dashoffset: 114;
        }
    
        28%,
        68% {
            stroke-dashoffset: 1;
        }
    
        78%,
        to {
            stroke-dashoffset: -112;
        }
    }
    
    @keyframes fallLine5 {
    
        from,
        19% {
            stroke-dashoffset: 114;
        }
    
        29%,
        69% {
            stroke-dashoffset: 1;
        }
    
        79%,
        to {
            stroke-dashoffset: -112;
        }
    }
    
    @keyframes worm {
        from {
            animation-timing-function: ease-out;
            stroke-dasharray: 87.96 307.87;
            stroke-dashoffset: -131.94;
        }
    
        25% {
            animation-timing-function: steps(1);
            stroke-dasharray: 87.96 307.87;
            stroke-dashoffset: -307.86;
        }
    
        25.01% {
            animation-timing-function: ease-in;
            stroke-dasharray: 43.98 307.87;
            stroke-dashoffset: -307.86;
        }
    
        50% {
            animation-timing-function: steps(1);
            stroke-dasharray: 43.98 307.87;
            stroke-dashoffset: -175.92;
        }
    
        50.01% {
            animation-timing-function: ease-out;
            stroke-dasharray: 87.96 307.87;
            stroke-dashoffset: -131.94;
        }
    
        75% {
            animation-timing-function: steps(1);
            stroke-dasharray: 87.96 307.87;
            stroke-dashoffset: 43.98;
        }
    
        75.01% {
            animation-timing-function: ease-in;
            stroke-dasharray: 43.98 307.87;
            stroke-dashoffset: 0;
        }
    
        to {
            stroke-dasharray: 43.98 307.87;
            stroke-dashoffset: -131.94;
        }
    }
    
    /* RADIO BUTTON */
    /* html,body{
        min-height: 100vh;
        min-width: 100vw;
    } */
    /* .parent{
        height: 100vh;
    }*/
    .parent>.row {
        display: flex;
        align-items: center;
        height: 100%;
    }
    
    .col img {
        height: 80px;
        width: 100%;
        cursor: pointer;
        transition: transform 1s;
        object-fit: cover;
    }
    
    .col label {
        overflow: hidden;
        position: relative;
    }
    
    .imgbgchk:checked+label>.tick_container {
        opacity: 1;
    }
    
    /* aNIMATION  */
    .imgbgchk:checked+label>img {
        /* transform: scale(1.25); */
        opacity: 0.3;
    }
    
    .tick_container {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        cursor: pointer;
        text-align: center;
    }
    
    .tick {
        background-color: #0093d9;
        color: white;
        font-size: 16px;
        padding: 6px 6px;
        height: 30px;
        width: 30px;
        line-height: 30px;
        border-radius: 100%;
    }
    
    /*--------------SCROLL-------------*/
    
    .contenedor::-webkit-scrollbar {
        -webkit-appearance: none;
    }
    
    .contenedor::-webkit-scrollbar:vertical {
        width: 9px;
    }
    
    .contenedor::-webkit-scrollbar-button:increment,
    .contenedor::-webkit-scrollbar-button {
        display: none;
    }
    
    .contenedor::-webkit-scrollbar:horizontal {
        height: 10px;
    }
    
    .contenedor::-webkit-scrollbar-thumb {
        background-color: #0093d9;
        border-radius: 20px;
        border: 2px solid #f1f2f3;
    }
    
    .contenedor::-webkit-scrollbar-track {
        border-radius: 10px;
    }
    
    .input-group-no-width {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
    }
    
    .input-group-no-width:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
    .input-group-no-width:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    
    .input-group-no-width>.form-control,
    .input-group-no-width>.form-select {
        position: relative;
        flex: 1 1 auto;
        width: 1%;
        min-width: 0;
    }
    
    .input-group-no-width>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
        margin-left: -1px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    
    .input-group-no-width .btn {
        position: relative;
        z-index: 2;
    }
    
    .form-control-plaintext {
        outline: none;
    }
    
    
    /*-----------CALCULATOR----------*/
    
    .teclado {
        /* background: #f2f2f2; */
    }
    
    .teclado .row {
        padding-left: 8px;
    }
    
    .design {
        box-shadow: 0px -6px 10px rgba(255, 255, 255, 1), 0px 4px 15px rgba(0, 0, 0, 0.15);
        transition: .5s ease;
        height: 2.6em;
        font-size: 1.1em;
        width: 3.2em;
        margin: 0.3em;
        background: #f2f2f2;
        border-radius: 0.5rem;
        line-height: 2.4em;
        letter-spacing: 1px;
        text-align: center;
        border: 1px solid #e8e8e8;
        transition: all 0.3s;
        /* box-shadow: 6px 6px 12px #afafaf, -6px -6px 12px #e0e0e0; */
    
    }
    
    .design.not {
        background: #0093d9;
        color: #fff;
    }
    
    .design.two {
        width: 11.9em;
        letter-spacing: 0;
        font-size: 1em;
    }
    
    .design:hover {
        box-shadow: 0 2px 0 rgba(0, 0, 0, 0.15);
        cursor: pointer;
        top: 3px;
    }
    
    .design:active {
        box-shadow: 4px 4px 12px #c5c5c5, -4px -4px 12px #fff;
    }
    
    
    .w-auto {
        width: auto !important;
    }
    
    .searchToggle {
        height: 40px;
        width: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #0093d9;
        border-radius: .25rem;
    }
    
    .searchToggle i {
        position: absolute;
        color: #ffffff;
        font-size: 22px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .searchToggle i.cancel {
        opacity: 0;
        pointer-events: none;
    }
    
    .searchToggle.active i.cancel {
        opacity: 1;
        pointer-events: auto;
    }
    
    .searchToggle.active i.search {
        opacity: 0;
        pointer-events: none;
    }
    
    .searchBox {
        position: relative;
    }
    
    .searchBox .search-field {
        position: absolute;
        bottom: -85px;
        right: 5px;
        height: 50px;
        width: 300px;
        display: flex;
        align-items: center;
        background-color: #fff;
        padding: 3px;
        border-radius: 6px;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease;
    }
    
    .searchToggle.active~.search-field {
        bottom: -62px;
        opacity: 1;
        pointer-events: auto;
    
        right: -135px;
    }
    
    .search-field::before {
        content: '';
        position: absolute;
        /* right: 14px; */
        right: 50%;
        top: -4px;
        height: 12px;
        width: 12px;
        background-color: rgba(0, 0, 0, 0.1);
        transform: rotate(-45deg);
        z-index: -1;
    }
    
    .search-field input {
        height: 100%;
        width: 100%;
        padding: 0 45px 0 15px;
        outline: none;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 400;
        color: #fff;
        background-color: #3ac47d;
    }
    
    
    .search-field i {
        position: absolute;
        color: #00548d;
        right: 15px;
        font-size: 22px;
        cursor: pointer;
    }
    
    .label-data {
        font-size: 14px;
        line-height: 1.5;
        font-weight: 600;
        margin-bottom: 2px;
    }
</style>
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="{{ route('panel') }}" class="logo logo-normal">
                    <img src="{{ asset('css/img/logo.png') }}" alt>
                </a>
                <a href="{{ route('panel') }}" class="logo logo-white">
                    <img src="{{ asset('css/img/logo3.png') }}" alt>
                </a>
                <a href="{{ route('panel') }}" class="logo-small">
                    <img src="{{ asset('css/img/logo-small.png') }}" alt>
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                    <i data-feather="chevrons-left" class="feather-16"></i>
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn d-none" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item nav-searchinputs">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#" class="dropdown">
                            <div class="searchinputs dropdown-toggle" id="dropdownMenuClickable"
                                data-bs-toggle="dropdown" data-bs-auto-close="false">
                                <input type="text" placeholder="Search">
                                <div class="search-addon">
                                    <span><i data-feather="x-circle" class="feather-14"></i></span>
                                </div>
                            </div>
                            <div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
                                <div class="search-info">
                                    <h6><span><i data-feather="search" class="feather-16"></i></span>Recent Searches
                                    </h6>
                                    <ul class="search-tags">
                                        <li><a href="javascript:void(0);">Products</a></li>
                                        <li><a href="javascript:void(0);">Sales</a></li>
                                        <li><a href="javascript:void(0);">Applications</a></li>
                                    </ul>
                                </div>
                                <div class="search-info">
                                    <h6><span><i data-feather="help-circle" class="feather-16"></i></span>Help</h6>
                                    <p>How to Change Product Volume from 0 to 200 on Inventory management</p>
                                    <p>Change Product Name</p>
                                </div>
                                <div class="search-info">
                                    <h6><span><i data-feather="user" class="feather-16"></i></span>Customers</h6>
                                    <ul class="customers">
                                        <li><a href="javascript:void(0);">Aron Varu<img
                                                    src="https://elisay-code.netlify.app/assets/img/profile.jpg"
                                                    alt class="img-fluid"></a></li>
                                        <li><a href="javascript:void(0);">Jonita<img
                                                    src="https://elisay-code.netlify.app/assets/img/profile.jpg"
                                                    alt class="img-fluid"></a></li>
                                        <li><a href="javascript:void(0);">Aaron<img
                                                    src="https://elisay-code.netlify.app/assets/img/profile.jpg"
                                                    alt class="img-fluid"></a></li>
                                    </ul>
                                </div>
                            </div>

                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow main-drop select-store-dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link select-store"
                        data-bs-toggle="dropdown">
                        <span class="user-info">
                            <span class="user-letter">
                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-01.png"
                                    alt="Store Logo" class="img-fluid">
                            </span>
                            <span class="user-detail">
                                <span class="user-name">Select Store</span>
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-01.png"
                                alt="Store Logo" class="img-fluid"> Grocery Alpha
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-02.png"
                                alt="Store Logo" class="img-fluid"> Grocery Apex
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-03.png"
                                alt="Store Logo" class="img-fluid"> Grocery Bevy
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-04.png"
                                alt="Store Logo" class="img-fluid"> Grocery Eden
                        </a>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow flag-nav nav-item-box">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                        role="button">
                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/us.png"
                            alt="Language" class="img-fluid">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item active">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/us.png"
                                alt height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/fr.png"
                                alt height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/es.png"
                                alt height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/de.png"
                                alt height="16"> German
                        </a>
                    </div>
                </li>

                <li class="nav-item nav-item-box">
                    <a href="javascript:void(0);" id="btnFullscreen">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
                <li class="nav-item nav-item-box">
                    <a href="https://dreamspos.dreamstechnologies.com/html/template/email.html">
                        <i data-feather="mail"></i>
                        <span class="badge rounded-pill">1</span>
                    </a>
                </li>

                <li class="nav-item dropdown nav-item-box">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i data-feather="bell"></i><span class="badge rounded-pill">2</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="https://dreamspos.dreamstechnologies.com/html/template/activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                    new task <span class="noti-title">Patient appointment
                                                        booking</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="https://dreamspos.dreamstechnologies.com/html/template/activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-03.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Tarah
                                                        Shropshire</span> changed the task name <span
                                                        class="noti-title">Appointment booking with payment
                                                        gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="https://dreamspos.dreamstechnologies.com/html/template/activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-06.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                    added <span class="noti-title">Domenic Houston</span> and <span
                                                        class="noti-title">Claire Mapes</span> to project <span
                                                        class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="https://dreamspos.dreamstechnologies.com/html/template/activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title">Patient and Doctor video
                                                        conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="https://dreamspos.dreamstechnologies.com/html/template/activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Bernardo
                                                        Galaviz</span> added new task <span class="noti-title">Private
                                                        chat module</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="https://dreamspos.dreamstechnologies.com/html/template/activities.html">View all
                                Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item nav-item-box">
                    <a href="https://dreamspos.dreamstechnologies.com/html/template/general-settings.html"><i
                            data-feather="settings"></i></a>
                </li>
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-info">
                            <span class="user-letter">
                                <img src="https://elisay-code.netlify.app/assets/img/profile.jpg"
                                    alt class="img-fluid">
                            </span>
                            <span class="user-detail">
                                <span class="user-name">Eli Sayes</span>
                                <span class="user-role"> Admin</span>
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img
                                        src="https://elisay-code.netlify.app/assets/img/profile.jpg"
                                        alt>
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>Eli Sayes</h6>
                                    <h5> Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item"
                                href="https://dreamspos.dreamstechnologies.com/html/template/profile.html"> <i
                                    class="me-2" data-feather="user"></i> My Profile</a>
                            <a class="dropdown-item"
                                href="https://dreamspos.dreamstechnologies.com/html/template/general-settings.html"><i
                                    class="me-2" data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0"
                                href="https://dreamspos.dreamstechnologies.com/html/template/signin.html"><img
                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/log-out.svg"
                                    class="me-2" alt="img">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"
                        href="https://dreamspos.dreamstechnologies.com/html/template/profile.html">My Profile</a>
                    <a class="dropdown-item"
                        href="https://dreamspos.dreamstechnologies.com/html/template/general-settings.html">Settings</a>
                    <a class="dropdown-item"
                        href="https://dreamspos.dreamstechnologies.com/html/template/signin.html">Logout</a>
                </div>
            </div>

        </div>

        <div class="page-wrapper pos-pg-wrapper ms-0">
            <div class="content pos-design p-0">
                {{-- <div class="btn-row d-sm-flex align-items-center">
                    <a href="javascript:void(0);" class="btn btn-secondary mb-xs-3" data-bs-toggle="modal"
                        data-bs-target="#orders"><span class="me-1 d-flex align-items-center"><i
                                data-feather="shopping-cart" class="feather-16"></i></span>Todas Las Ventas</a>
                    <a href="javascript:void(0);" class="btn btn-info"><span
                            class="me-1 d-flex align-items-center"><i data-feather="rotate-cw"
                                class="feather-16"></i></span>Recargar</a>
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#recents"><span class="me-1 d-flex align-items-center"><i
                                data-feather="refresh-ccw" class="feather-16"></i></span>Transacciones</a>
                </div> --}}
                <!-- HTML para el campo de búsqueda -->
                <div class="row align-items-start pos-wrapper mt-2">
                    <div class="col-md-12 col-lg-8">
                        <div class="row mb-4 align-items-center" style="margin: 10px">
                            <div class="col-md-6">
                                <!-- Campo de búsqueda estándar con botón -->
                                <div class="input-group">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Buscar por código o nombre">
                                    <button id="buscarBtn" class="btn btn-primary" type="button">Buscar</button>
                                </div>
                            </div>
                            <div class="col-auto">
                                <!-- Switch para habilitar/deshabilitar el escáner de códigos de barras -->
                                <div class="form-check form-switch d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="barcodeSwitch">
                                    <label class="form-check-label ms-2 mb-0" for="barcodeSwitch">Buscar por código de barras</label>
                                </div>
                            </div>
                            <!-- Contenedor para el escáner de códigos de barras (reemplazado por un input) -->
                            <div class="col-auto" id="barcodeScanner" style="display: none;">
                                <input type="text" id="scannerInput" class="form-control" placeholder="Código Escaneado">
                            </div>
                        </div>
                        <div class="pos-categories tabs_wrapper mb-12" style="margin-top: -5px">
                            <h5>Categorias</h5>
                            {{-- <p>Selecciona tus productos</p> --}}
                            <ul class="tabs owl-carousel pos-category">
                                <li id="all">
                                    {{-- <a href="javascript:void(0);">
                                        <img src="https://png.pngtree.com/png-clipart/20230916/original/pngtree-some-icons-in-a-square-format-with-colors-of-different-kinds-png-image_12268981.png"
                                            alt="Categories">
                                    </a> --}}
                                    <h6><a href="javascript:void(0);">Todas las Categorías</a></h6>
                                    <span id="totalProductos">0 Productos</span>
                                </li>
                                @foreach ($categorias as $categoria)
                                    <li id="categoria-{{ $categoria->id }}" class="categoria-item"
                                        data-id="{{ $categoria->id }}">
                                        {{-- <a href="javascript:void(0);">
                                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/categories/category-01.png"
                                                alt="Categories">
                                        </a> --}}
                                        <h6><a href="javascript:void(0);">{{ $categoria->nombre }}</a></h6>
                                        <span>{{ $categoria->productos_count }} Productos</span>
                                    </li>
                                @endforeach
                            </ul>


                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-3">Lista de Productos</h5>
                            </div>

                            <div class="pos-products">
                                <div class="tab_content" data-tab="headphones">
                                    <div class="row">
                                        <div id="resultadoProductos">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-4 ps-0">
                        <aside class="product-order-list">
                            <div class="head d-flex align-items-center justify-content-between w-100">
                                <div class="d-flex align-items-center">
                                    {{-- <h5 class="me-4">Crear Nueva Venta</h5> --}}
                                    <span class="badge bg-info d-inline-block mb-0" style="color: #fff">Venta N°:
                                        #000001</span>
                                </div>
                                <div class>
                                    <a class="confirm-text" href="javascript:void(0);"><i data-feather="trash-2"
                                            class="feather-16 text-danger"></i></a>
                                    <a href="javascript:void(0);" class="text-default"><i
                                            data-feather="more-vertical" class="feather-16"></i></a>
                                </div>
                            </div>
                            <div class="customer-info block-section">
                                <h6>Agregar Cliente</h6>
                                <div class="input-block d-flex align-items-center">
                                    <form  class="mb-4" id="searchForm">
                                        <div class="flex-grow-1">
                                            <div class="input-group">
                                                <input type="text" id="searchInputcliente" class="form-control" name="search" placeholder="Buscar cliente...">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">Buscar</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                                <div class="input-block">
                                <div id="resultsContainer" class="customer-info block-section">
                                    
                                </div>
                                </div>
                            </div>
                            <div class="product-added block-section">
                                <div class="head-text d-flex align-items-center justify-content-between">
                                    <h6 class="d-flex align-items-center mb-0">Productos Agregados <span class="count">0</span></h6>

                                    <a href="javascript:void(0);" class="d-flex align-items-center text-danger"><span
                                            class="me-1"><i data-feather="x"
                                                class="feather-16"></i></span>Limpiar</a>
                                </div>
                                <div class="product-wrap">
                                    {{-- <div class="product-list d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                            data-bs-target="#products">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-16.png"
                                                    alt="Products">
                                            </a>
                                            <div class="info">
                                                <span>PT0005</span>
                                                <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                                <p>$2000</p>
                                            </div>
                                        </div>
                                        <div class="qty-item text-center">
                                            <a href="javascript:void(0);"
                                                class="dec d-flex justify-content-center align-items-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="minus"><i
                                                    data-feather="minus-circle" class="feather-14"></i></a>
                                            <input type="text" class="form-control text-center" name="qty"
                                                value="4">
                                            <a href="javascript:void(0);"
                                                class="inc d-flex justify-content-center align-items-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="plus"><i
                                                    data-feather="plus-circle" class="feather-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center action">
                                            <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-product">
                                                <i data-feather="edit" class="feather-14"></i>
                                            </a>
                                            <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-14"></i>
                                            </a>
                                        </div>
                                    </div> --}}
                                    <div class="carrito-container">
                                        <!-- Aquí se añadirán dinámicamente los productos del carrito -->
                                    </div>
                                    
                                    {{-- <div class="product-list d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                            data-bs-target="#products">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-17.png"
                                                    alt="Products">
                                            </a>
                                            <div class="info">
                                                <span>PT0235</span>
                                                <h6><a href="javascript:void(0);">Iphone 14</a></h6>
                                                <p>$3000</p>
                                            </div>
                                        </div>
                                        <div class="qty-item text-center">
                                            <a href="javascript:void(0);"
                                                class="dec d-flex justify-content-center align-items-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="minus"><i
                                                    data-feather="minus-circle" class="feather-14"></i></a>
                                            <input type="text" class="form-control text-center" name="qty"
                                                value="3">
                                            <a href="javascript:void(0);"
                                                class="inc d-flex justify-content-center align-items-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="plus"><i
                                                    data-feather="plus-circle" class="feather-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center action">
                                            <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-product">
                                                <i data-feather="edit" class="feather-14"></i>
                                            </a>
                                            <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-list d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                            data-bs-target="#products">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-16.png"
                                                    alt="Products">
                                            </a>
                                            <div class="info">
                                                <span>PT0005</span>
                                                <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                                <p>$2000</p>
                                            </div>
                                        </div>
                                        <div class="qty-item text-center">
                                            <a href="javascript:void(0);"
                                                class="dec d-flex justify-content-center align-items-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="minus"><i
                                                    data-feather="minus-circle" class="feather-14"></i></a>
                                            <input type="text" class="form-control text-center" name="qty"
                                                value="1">
                                            <a href="javascript:void(0);"
                                                class="inc d-flex justify-content-center align-items-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="plus"><i
                                                    data-feather="plus-circle" class="feather-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center action">
                                            <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-product">
                                                <i data-feather="edit" class="feather-14"></i>
                                            </a>
                                            <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-list d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                            data-bs-target="#products">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-17.png"
                                                    alt="Products">
                                            </a>
                                            <div class="info">
                                                <span>PT0005</span>
                                                <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                                <p>$2000</p>
                                            </div>
                                        </div>
                                        <div class="qty-item text-center">
                                            <a href="javascript:void(0);"
                                                class="dec d-flex justify-content-center align-items-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="minus"><i
                                                    data-feather="minus-circle" class="feather-14"></i></a>
                                            <input type="text" class="form-control text-center" name="qty"
                                                value="1">
                                            <a href="javascript:void(0);"
                                                class="inc d-flex justify-content-center align-items-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="plus"><i
                                                    data-feather="plus-circle" class="feather-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center action">
                                            <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-product">
                                                <i data-feather="edit" class="feather-14"></i>
                                            </a>
                                            <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-14"></i>
                                            </a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="block-section">
                                <div class="container mt-5">
                                    <div class="selling-info">
                                        <div class="row justify-content-end align-items-center">
                                            <div class="col-auto">
                                                <label class="text-light bg-secondary fw-semibold">Agregar Descuento</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="qty-item d-flex align-items-center">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm mr-2" id="descuento-minus"  aria-label="minus">-</button>
                                                    <input type="text" class="form-control form-control-sm text-center mx-2" id="descuento-input" name="qty" value="0" style="width: 60px;">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm ml-2" id="descuento-plus" aria-label="plus">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-total">
                                    <table class="table table-responsive table-borderless">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-end" id="subTotal">S/. 00.00</td>
                                        </tr>
                                        <tr>
                                            <td class="danger">Descuento</td>
                                            <td class="danger text-end" id="descuento">S/. 00.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td class="text-end" id="total">S/. 00,00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="block-section payment-method">
                                <h6>Payment Method</h6>
                                <div class="row d-flex align-items-center justify-content-center methods">
                                    <div class="col-md-6 col-lg-4 item">
                                        <div class="default-cover">
                                            <a href="javascript:void(0);">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/cash-pay.svg"
                                                    alt="Payment Method">
                                                <span>Cash</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 item">
                                        <div class="default-cover">
                                            <a href="javascript:void(0);">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/credit-card.svg"
                                                    alt="Payment Method">
                                                <span>Debit Card</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 item">
                                        <div class="default-cover">
                                            <a href="javascript:void(0);">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/qr-scan.svg"
                                                    alt="Payment Method">
                                                <span>Scan</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="d-grid btn-block">
                                <a class="btn btn-secondary" id="total-button">
                                    Seguir con la compra de : S/. 00.00
                                </a>
                            </div>
                            {{-- <div class="btn-row d-sm-flex align-items-center justify-content-between">
                                <a href="javascript:void(0);" class="btn btn-info btn-icon flex-fill"
                                    data-bs-toggle="modal" data-bs-target="#hold-order"><span
                                        class="me-1 d-flex align-items-center"><i data-feather="pause"
                                            class="feather-16"></i></span>Hold</a>
                                <a href="javascript:void(0);" class="btn btn-danger btn-icon flex-fill"><span
                                        class="me-1 d-flex align-items-center"><i data-feather="trash-2"
                                            class="feather-16"></i></span>Void</a>
                                <a href="javascript:void(0);" class="btn btn-success btn-icon flex-fill"
                                    data-bs-toggle="modal" data-bs-target="#payment-completed"><span
                                        class="me-1 d-flex align-items-center"><i data-feather="credit-card"
                                            class="feather-16"></i></span>Payment</a>
                            </div> --}}
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="modalCompra" tabindex="-1" aria-labelledby="modalCompraLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCompraLabel">Detalles de la compra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Detalles de la compra</h4>
                    <p>Producto: <span id="producto">[Nombre del producto]</span></p>
                    <p>Precio: <span id="precio">$ [Precio del producto]</span></p>
                    <p>Total: <span id="total">$ [Total de la compra]</span></p>
    
                    <h4>Métodos de pago</h4>
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pago" id="efectivo" value="efectivo">
                            <label class="form-check-label" for="efectivo">Efectivo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pago" id="tarjeta" value="tarjeta">
                            <label class="form-check-label" for="tarjeta">Tarjeta de crédito</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pago" id="paypal" value="paypal">
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pago" id="transferencia" value="transferencia">
                            <label class="form-check-label" for="transferencia">Transferencia bancaria</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pago" id="bitcoin" value="bitcoin">
                            <label class="form-check-label" for="bitcoin">Bitcoin</label>
                        </div>
                    </form>
    
                    <h4>Introducir monto</h4>
                    <input type="number" id="monto" placeholder="Introducir monto" min="0" step="0.01">
    
                    <p id="resultado">Resultado: <span id="vuelto">$ 0.00</span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="pagar">Pagar</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Modal -->
    <div class="modal fade" id="modalCompra" tabindex="-1" aria-labelledby="modalCompraLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Método de Pago</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">

              <div class="row">
                <div class="col-lg-7">
                  <div class="mb-3 row fw-600 fs-6">
                    <label for="p_pedido" class="col-sm-4 col-form-label d-flex justify-content-between">Total Pedido
                      <span>S/.</span></label>
                    <div class="col-sm-4">
                      <input type="text" readonly class="form-control-plaintext not-spin text-end fw-600 fs-6" id="p_pedido" value="0.00">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="efectivo" class="col-sm-4 col-form-label">Efectivo</label>
                    <div class="input-group-no-width col-sm-5">
                      <!-- <input type="number" class="form-control" id="p_contado"> -->
                      <input type="text" class="form-control calculator-input" name="efectivo" id="efectivo" value="0">
                      <button type="button" class="btn btn-blue calculator-button"><i class="fa-solid fa-calculator"></i></button>
                    </div>
                  </div>
                  <div hidden class="mb-3 row">
                    <label for="p_credito" class="col-sm-4 col-form-label">Crédito</label>
                    <div class="input-group-no-width col-sm-5">
                      <input disabled type="text" class="form-control calculator-input" id="p_credito" value="0">
                      <button disabled type="button" class="btn btn-blue calculator-button"><i class="fa-solid fa-calculator"></i></button>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="visa" class="col-sm-4 col-form-label">Visa</label>
                    <div class="input-group-no-width col-sm-5">
                      <input type="text" class="form-control calculator-input" name="visa" id="visa" value="0">
                      <button type="button" class="btn btn-blue calculator-button"><i class="fa-solid fa-calculator"></i></button>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="yape" class="col-sm-4 col-form-label">Yape</label>
                    <div class="input-group-no-width col-sm-5">
                      <input type="text" class="form-control calculator-input" name="yape" id="yape" value="0">
                      <button type="button" class="btn btn-blue calculator-button"><i class="fa-solid fa-calculator"></i></button>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="plin" class="col-sm-4 col-form-label">Plin</label>
                    <div class="input-group-no-width col-sm-5">
                      <input type="text" class="form-control calculator-input" name="plin" id="plin" value="0">
                      <button type="button" class="btn btn-blue calculator-button"><i class="fa-solid fa-calculator"></i></button>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="mastercard" class="col-sm-4 col-form-label">MasterCard</label>
                    <div class="input-group-no-width col-sm-5">
                      <input type="text" class="form-control calculator-input" name="mastercard" id="mastercard" value="0">
                      <button type="button" class="btn btn-blue calculator-button"><i class="fa-solid fa-calculator"></i></button>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="deposito" class="col-sm-4 col-form-label">Depósito</label>
                    <div class="input-group-no-width col-sm-5">
                      <input type="text" class="form-control calculator-input" name="deposito" id="deposito" value="0">
                      <button type="button" class="btn btn-blue calculator-button"><i class="fa-solid fa-calculator"></i></button>
                    </div>
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="teclado">

                    <h6>TECLADO</h6>

                    <div class="row">
                      <button type="button" class="design">1</button>
                      <button type="button" class="design">2</button>
                      <button type="button" class="design">3</button>
                      <button type="button" class="design not" id="backspace"><i class="fa-solid fa-delete-left"></i></button>
                    </div>
                    <div class="row">
                      <button type="button" class="design">4</button>
                      <button type="button" class="design">5</button>
                      <button type="button" class="design">6</button>
                    </div>
                    <div class="row">
                      <button type="button" class="design">7</button>
                      <button type="button" class="design">8</button>
                      <button type="button" class="design">9</button>
                    </div>
                    <div class="row">
                      <button type="button" class="design">0</button>
                      <button type="button" class="design">00</button>
                      <button type="button" class="design">.</button>
                    </div>
                    <div class="row">
                      <button type="button" class="design not two" id="allClear">BORRAR TODO</button>
                    </div>

                  </div>
                </div>

                <div class="col-lg-7">
                  <div class="mb-0 row fw-600 fs-6">
                    <label for="p_tpagado" class="col-sm-4 col-form-label d-flex justify-content-between">Total Pagado
                      <span>S/.</span></label>
                    <div class="col-sm-4">
                      <input type="text" readonly class="form-control-plaintext not-spin text-end fw-600 fs-6" name="ipagado" id="p_tpagado" value="0.00">
                    </div>
                  </div>
                  <div class="row fw-600 fs-17">
                    <label for="p_vuelto" id="text_vuelto" class="col-sm-4 col-form-label d-flex justify-content-between">Vuelto
                      <span>S/.</span></label>
                    <div class=" col-sm-4">
                      <input type="text" readonly class="form-control-plaintext not-spin text-end fw-600 fs-17" id="p_vuelto" value="0.00">
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer justify-content-end">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-blue" id="btn_realizarpago">Realizar Pago</button>
            </div>
          </div>
        </div>
      </div>

{{-- 
    <div class="modal fade modal-default" id="payment-completed" aria-labelledby="payment-completed">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="https://dreamspos.dreamstechnologies.com/html/template/pos.html">
                        <div class="icon-head">
                            <a href="javascript:void(0);">
                                <i data-feather="check-circle" class="feather-40"></i>
                            </a>
                        </div>
                        <h4>Payment Completed</h4>
                        <p class="mb-0">Do you want to Print Receipt for the Completed Order</p>
                        <div class="modal-footer d-sm-flex justify-content-between">
                            <button type="button" class="btn btn-primary flex-fill" data-bs-toggle="modal"
                                data-bs-target="#print-receipt">Print Receipt<i
                                    class="feather-arrow-right-circle icon-me-5"></i></button>
                            <button type="submit" class="btn btn-secondary flex-fill">Next Order<i
                                    class="feather-arrow-right-circle icon-me-5"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade modal-default" id="print-receipt" aria-labelledby="print-receipt">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="d-flex justify-content-end">
                    <button type="button" class="close p-0" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="icon-head text-center">
                        <a href="javascript:void(0);">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/logo.png"
                                width="100" height="30" alt="Receipt Logo">
                        </a>
                    </div>
                    <div class="text-center info text-center">
                        <h6>Dreamguys Technologies Pvt Ltd.,</h6>
                        <p class="mb-0">Phone Number: +1 5656665656</p>
                        <p class="mb-0">Email: <a
                                href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection#a2c7dac3cfd2cec7e2c5cfc3cbce8cc1cdcf"><span
                                    class="__cf_email__"
                                    data-cfemail="dabfa2bbb7aab6bf9abdb7bbb3b6f4b9b5b7">[email&#160;protected]</span></a>
                        </p>
                    </div>
                    <div class="tax-invoice">
                        <h6 class="text-center">Tax Invoice</h6>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="invoice-user-name"><span>Name: </span><span>John Doe</span></div>
                                <div class="invoice-user-name"><span>Invoice No: </span><span>CS132453</span></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="invoice-user-name"><span>Customer Id: </span><span>#LL93784</span></div>
                                <div class="invoice-user-name"><span>Date: </span><span>01.07.2022</span></div>
                            </div>
                        </div>
                    </div>
                    <table class="table-borderless w-100 table-fit">
                        <thead>
                            <tr>
                                <th># Item</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1. Red Nike Laser</td>
                                <td>$50</td>
                                <td>3</td>
                                <td class="text-end">$150</td>
                            </tr>
                            <tr>
                                <td>2. Iphone 14</td>
                                <td>$50</td>
                                <td>2</td>
                                <td class="text-end">$100</td>
                            </tr>
                            <tr>
                                <td>3. Apple Series 8</td>
                                <td>$50</td>
                                <td>3</td>
                                <td class="text-end">$150</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <table class="table-borderless w-100 table-fit">
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="text-end">$700.00</td>
                                        </tr>
                                        <tr>
                                            <td>Discount :</td>
                                            <td class="text-end">-$50.00</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping :</td>
                                            <td class="text-end">0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Tax (5%) :</td>
                                            <td class="text-end">$5.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total Bill :</td>
                                            <td class="text-end">$655.00</td>
                                        </tr>
                                        <tr>
                                            <td>Due :</td>
                                            <td class="text-end">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total Payable :</td>
                                            <td class="text-end">$655.00</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center invoice-bar">
                        <p>**VAT against this challan is payable through central registration. Thank you for your
                            business!</p>
                        <a href="javascript:void(0);">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/barcode/barcode-03.jpg"
                                alt="Barcode">
                        </a>
                        <p>Sale 31</p>
                        <p>Thank You For Shopping With Us. Please Come Again</p>
                        <a href="javascript:void(0);" class="btn btn-primary">Print Receipt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade modal-default pos-modal" id="products" aria-labelledby="products">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-4 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <h5 class="me-4">Products</h5>
                        <span class="badge bg-info d-inline-block mb-0">Order ID : #666614</span>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form action="https://dreamspos.dreamstechnologies.com/html/template/pos.html">
                        <div class="product-wrap">
                            <div class="product-list d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-fill">
                                    <a href="javascript:void(0);" class="img-bg me-2">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-16.png"
                                            alt="Products">
                                    </a>
                                    <div class="info d-flex align-items-center justify-content-between flex-fill">
                                        <div>
                                            <span>PT0005</span>
                                            <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                        </div>
                                        <p>$2000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-fill">
                                    <a href="javascript:void(0);" class="img-bg me-2">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-17.png"
                                            alt="Products">
                                    </a>
                                    <div class="info d-flex align-items-center justify-content-between flex-fill">
                                        <div>
                                            <span>PT0235</span>
                                            <h6><a href="javascript:void(0);">Iphone 14</a></h6>
                                        </div>
                                        <p>$3000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-fill">
                                    <a href="javascript:void(0);" class="img-bg me-2">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-16.png"
                                            alt="Products">
                                    </a>
                                    <div class="info d-flex align-items-center justify-content-between flex-fill">
                                        <div>
                                            <span>PT0005</span>
                                            <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                        </div>
                                        <p>$2000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-fill">
                                    <a href="javascript:void(0);" class="img-bg me-2">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-17.png"
                                            alt="Products">
                                    </a>
                                    <div class="info d-flex align-items-center justify-content-between flex-fill">
                                        <div>
                                            <span>PT0005</span>
                                            <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                        </div>
                                        <p>$2000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-sm-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="https://dreamspos.dreamstechnologies.com/html/template/pos.html">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Customer Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Phone</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Country</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>City</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Address</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-sm-flex justify-content-end">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-default pos-modal" id="hold-order" aria-labelledby="hold-order">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5>Hold order</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form action="https://dreamspos.dreamstechnologies.com/html/template/pos.html">
                        <h2 class="text-center p-4">4500.00</h2>
                        <div class="input-block">
                            <label>Order Reference</label>
                            <input class="form-control" type="text" value placeholder>
                        </div>
                        <p>The current order will be set on hold. You can retreive this order from the pending order
                            button. Providing a reference to it might help you to identify the order more quickly.</p>
                        <div class="modal-footer d-sm-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade modal-default pos-modal" id="edit-product" aria-labelledby="edit-product">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5>Red Nike Laser</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form action="https://dreamspos.dreamstechnologies.com/html/template/pos.html">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks add-product">
                                    <label>Product Name <span>*</span></label>
                                    <input type="text" placeholder="45">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks add-product">
                                    <label>Tax Type <span>*</span></label>
                                    <select class="select">
                                        <option>Exclusive</option>
                                        <option>Inclusive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks add-product">
                                    <label>Tax <span>*</span></label>
                                    <input type="text" placeholder="% 15">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks add-product">
                                    <label>Discount Type <span>*</span></label>
                                    <select class="select">
                                        <option>Percentage</option>
                                        <option>Early payment discounts</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks add-product">
                                    <label>Discount <span>*</span></label>
                                    <input type="text" placeholder="15">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="input-blocks add-product">
                                    <label>Sale Unit <span>*</span></label>
                                    <select class="select">
                                        <option>Kilogram</option>
                                        <option>Grams</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-sm-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade pos-modal" id="recents" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5 class="modal-title">Recent Transactions</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="tabs-sets">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="purchase-tab" data-bs-toggle="tab"
                                    data-bs-target="#purchase" type="button" aria-controls="purchase"
                                    aria-selected="true" role="tab">Purchase</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="payment-tab" data-bs-toggle="tab"
                                    data-bs-target="#payment" type="button" aria-controls="payment"
                                    aria-selected="false" role="tab">Payment</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="return-tab" data-bs-toggle="tab"
                                    data-bs-target="#return" type="button" aria-controls="return"
                                    aria-selected="false" role="tab">Return</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="purchase" role="tabpanel"
                                aria-labelledby="purchase-tab">
                                <div class="table-top">
                                    <div class="search-set">
                                        <div class="search-input">
                                            <a class="btn btn-searchset d-flex align-items-center h-100"><img
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/search-white.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                    <div class="wordset">
                                        <ul>
                                            <li>
                                                <a class="d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Pdf"><img
                                                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/pdf.svg"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Excel"><img
                                                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/excel.svg"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Print"><i data-feather="printer"
                                                        class="feather-rotate-ccw"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table datanew">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Reference</th>
                                                <th>Customer</th>
                                                <th>Amount </th>
                                                <th class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0101</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0102</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0103</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0104</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0105</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0106</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0107</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment" role="tabpanel">
                                <div class="table-top">
                                    <div class="search-set">
                                        <div class="search-input">
                                            <a class="btn btn-searchset d-flex align-items-center h-100"><img
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/search-white.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                    <div class="wordset">
                                        <ul>
                                            <li>
                                                <a class="d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Pdf"><img
                                                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/pdf.svg"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Excel"><img
                                                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/excel.svg"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Print"><i data-feather="printer"
                                                        class="feather-rotate-ccw"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table datanew">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Reference</th>
                                                <th>Customer</th>
                                                <th>Amount </th>
                                                <th class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0101</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0102</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0103</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0104</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0105</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0106</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0107</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="return" role="tabpanel">
                                <div class="table-top">
                                    <div class="search-set">
                                        <div class="search-input">
                                            <a class="btn btn-searchset d-flex align-items-center h-100"><img
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/search-white.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                    <div class="wordset">
                                        <ul>
                                            <li>
                                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"
                                                    class="d-flex align-items-center justify-content-center"><img
                                                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/pdf.svg"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"
                                                    class="d-flex align-items-center justify-content-center"><img
                                                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/excel.svg"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"
                                                    class="d-flex align-items-center justify-content-center"><i
                                                        data-feather="printer" class="feather-rotate-ccw"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table datanew">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Reference</th>
                                                <th>Customer</th>
                                                <th>Amount </th>
                                                <th class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0101</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0102</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0103</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0104</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0105</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0106</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19 Jan 2023</td>
                                                <td>INV/SL0107</td>
                                                <td>Walk-in Customer</td>
                                                <td>$1500.00</td>
                                                <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="eye" class="feather-eye"></i></a>
                                                        <a class="me-2 p-2" href="javascript:void(0);"><i
                                                                data-feather="edit" class="feather-edit"></i></a>
                                                        <a class="p-2 confirm-text" href="javascript:void(0);"><i
                                                                data-feather="trash-2"
                                                                class="feather-trash-2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade pos-modal" id="orders" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5 class="modal-title">Orders</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="tabs-sets">
                        <ul class="nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="onhold-tab" data-bs-toggle="tab"
                                    data-bs-target="#onhold" type="button" aria-controls="onhold"
                                    aria-selected="true" role="tab">Onhold</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="unpaid-tab" data-bs-toggle="tab"
                                    data-bs-target="#unpaid" type="button" aria-controls="unpaid"
                                    aria-selected="false" role="tab">Unpaid</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="paid-tab" data-bs-toggle="tab"
                                    data-bs-target="#paid" type="button" aria-controls="paid"
                                    aria-selected="false" role="tab">Paid</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="onhold" role="tabpanel"
                                aria-labelledby="onhold-tab">
                                <div class="table-top">
                                    <div class="search-set w-100 search-order">
                                        <div class="search-input w-100">
                                            <a class="btn btn-searchset d-flex align-items-center h-100"><img
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/search-white.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-body">
                                    <div class="default-cover p-4 mb-4">
                                        <span class="badge bg-secondary d-inline-block mb-4">Order ID : #666659</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">Botsford</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">29-08-2023 13:39:11</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-sm-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                    <div class="default-cover p-4 mb-4">
                                        <span class="badge bg-secondary d-inline-block mb-4">Order ID : #666660</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">Smith</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$15000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">30-08-2023 15:59:11</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                    <div class="default-cover p-4">
                                        <span class="badge bg-secondary d-inline-block mb-4">Order ID : #666661</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">John David</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">01-09-2023 13:15:00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4 mb-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="unpaid" role="tabpanel">
                                <div class="table-top">
                                    <div class="search-set w-100 search-order">
                                        <div class="search-input">
                                            <a class="btn btn-searchset d-flex align-items-center h-100"><img
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/search-white.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-body">
                                    <div class="default-cover p-4 mb-4">
                                        <span class="badge bg-info d-inline-block mb-4">Order ID : #666662</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">Anastasia</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$2500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">10-09-2023 17:15:11</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                    <div class="default-cover p-4 mb-4">
                                        <span class="badge bg-info d-inline-block mb-4">Order ID : #666663</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">Lucia</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$1500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">11-09-2023 14:50:11</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                    <div class="default-cover p-4 mb-4">
                                        <span class="badge bg-info d-inline-block mb-4">Order ID : #666664</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">Diego</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$30000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">12-09-2023 17:22:11</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4 mb-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="paid" role="tabpanel">
                                <div class="table-top">
                                    <div class="search-set w-100 search-order">
                                        <div class="search-input">
                                            <a class="btn btn-searchset d-flex align-items-center h-100"><img
                                                    src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/search-white.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-body">
                                    <div class="default-cover p-4 mb-4">
                                        <span class="badge bg-primary d-inline-block mb-4">Order ID : #666665</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">Hugo</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$5000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">13-09-2023 19:39:11</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                    <div class="default-cover p-4 mb-4">
                                        <span class="badge bg-primary d-inline-block mb-4">Order ID : #666666</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">Antonio</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$7000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">15-09-2023 18:39:11</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                    <div class="default-cover p-4 mb-4">
                                        <span class="badge bg-primary d-inline-block mb-4">Order ID : #666667</span>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr class="mb-3">
                                                        <td>Cashier</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Customer</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">MacQuoid</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-6 record mb-3">
                                                <table>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">$7050</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date</td>
                                                        <td class="colon">:</td>
                                                        <td class="text">17-09-2023 19:39:11</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="p-4 mb-4">Customer need to recheck the product once</p>
                                        <div class="btn-row d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btn-icon flex-fill">Open</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger btn-icon flex-fill">Products</a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-success btn-icon flex-fill">Print</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="customizer-links" id="setdata">
        <ul class="sticky-sidebar">
            <li class="sidebar-icons">
                <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="Theme">
                    <i data-feather="settings" class="feather-five"></i>
                </a>
            </li>
        </ul>
    </div> --}}

    <script data-cfasync="false"
        src="https://dreamspos.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/jquery-3.7.1.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/feather.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/jquery.slimscroll.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/jquery.dataTables.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/dataTables.bootstrap5.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/bootstrap.bundle.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/apexchart/apexcharts.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/apexchart/chart-data.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/moment.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.carousel.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/select2/js/select2.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/sweetalert/sweetalert2.all.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/sweetalert/sweetalerts.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/theme-script.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/script.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="f9c26173027f4618d2102fe7-|49" defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quagga/dist/quagga.min.js"></script>

   <script>
    $(document).ready(function() {
        // Variable global para mantener los productos cargados
        var productos = [];

        // Variable para mantener los productos en el carrito
        var carrito = [];

        // Inicializar el descuento desde el input
        //var descuentoPorcentaje = parseFloat($('#descuento-input').val());

        // var descuentoPorcentaje = parseFloat($('#descuento-input').val()) || 0;
        // var descuento = (subTotal * descuentoPorcentaje) / 100;
        // var total = subTotal - descuento;


        // Cargar todos los productos al inicio
        loadAllProducts();

        // Agregar un controlador de eventos de clic a los elementos <li> con la clase .categoria-item
        $('.categoria-item').on('click', function() {
            var categoriaId = $(this).data('id');
            loadProducts(categoriaId);
        });

        // Controlador de evento para el elemento "Todas las Categorías"
        $('#all').on('click', function() {
            loadAllProducts();
        });

        // Evento para el botón de búsqueda
        $('#buscarBtn').on('click', function() {
            realizarBusqueda();
        });
        // Evento para el decuento 
        $('#descuento-input').on('input', function() {
        calcularTotalCarrito();
        });

        // Evento para el switch de códigos de barras
        $('#barcodeSwitch').on('change', function() {
            if ($(this).is(':checked')) {
                // Mostrar el contenedor del escáner de códigos de barras
                $('#barcodeScanner').show();
            } else {
                // Ocultar el contenedor del escáner de códigos de barras
                $('#barcodeScanner').hide();
            }
        });

         // Función para realizar la búsqueda de productos
        function realizarBusqueda() {
            var query = $('#searchInput').val();
            var barcodeSearch = $('#barcodeSwitch').is(':checked') ? 1 : 0;

            $.ajax({
                type: 'POST',
                url: '{{ route("buscarProductos") }}', // Ruta a la que envías la solicitud POST
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    query: query,
                    barcodeSearch: barcodeSearch
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                        displayProducts(response);
                    
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    Swal.fire({
                        icon: 'info',
                        title: 'Producto no encontrado',
                        text: 'Registrar producto',
                        html: '<div style="text-align: center;">' +
                                    '<p>Por favor agrega uno.</p>' +
                                    '<a style="text-align: center; width: 130px; height: 40px; "  href="{{ route("producto.create") }}" class="btn btn-primary">' +
                                        'Registrar' +
                                    '</a>' +
                                '</div>',
                        showCloseButton: true,
                        showConfirmButton: false
                    });
                }
            });
        }

    

        // Controlador de evento para el formulario de búsqueda de clientes
        $('#searchForm').on('submit', function(event) {
            event.preventDefault();
            var search = $('#searchInputcliente').val();
            
            // Validar que se haya ingresado algo en el campo de búsqueda
            if (search.trim() !== '') {
                searchClientes(search);
            } else {
                // Mostrar mensaje de error o manejar según sea necesario
                $('#resultsContainer').empty(); // Vaciar resultados anteriores
                Swal.fire({
                    icon: 'warning',
                    title: 'Ingresa datos Válidos',
                    text: 'Por favor ingresa un término de búsqueda válido.'
                });
            }
        });

        // Función para buscar clientes
        function searchClientes(search) {
            $.ajax({
                url: '{{ route("buscarCliente") }}', // Ruta Laravel para buscar clientes
                method: 'GET',
                data: { search: search },
                success: function(response) {
                    $('#resultsContainer').empty();
                    if (response && response.length > 0) {
                        // Tomar solo el primer cliente (el más relevante)
                        var cliente = response[0]; 
                        if (cliente && cliente.nombre && cliente.apellido && cliente.documento && cliente.correo) {
                            // Concatenamos nombre y apellido
                            var nombreCompleto = cliente.nombre + ' ' + cliente.apellido;
                            $('#resultsContainer').append(
                            '<div class="form-group">' +
                                '<label for="client-nombre-completo">Nombre Completo:</label>' +
                                '<input type="text" id="client-nombre-completo" class="form-control" value="' + nombreCompleto + '" readonly>' +
                                '</div>' +
                                '<div class="form-group">' +
                                    '<label for="client-tipo_identificacion">Tipo de Documento:</label>' +
                                    '<input type="text" id="client-tipo_identificacion" class="form-control" value="' + cliente.tipo_identificacion + '" readonly>' +
                                '</div>' +
                                '<div class="form-group">' +
                                    '<label for="client-documento">Documento:</label>' +
                                    '<input type="text" id="client-documento" class="form-control" value="' + cliente.documento + '" readonly>' +
                                '</div>' +
                                '<div class="form-group">' +
                                    '<label for="client-correo">Correo:</label>' +
                                    '<input type="email" id="client-correo" class="form-control" value="' + cliente.correo + '" readonly>' +
                                '</div>'
                            );
                        } else {
                            // Mostrar mensaje de error si el cliente encontrado no tiene todas las propiedades requeridas
                            // $('#resultsContainer').append('<p>Cliente encontrado no tiene datos válidos.</p>');
                            Swal.fire({
                            icon: 'info',
                            title: 'No se encontraron clientes',
                            html: '<div style="text-align: center;">' +
                                    '<p>Por favor agrega uno.</p>' +
                                    '<a style="text-align: center; width: 130px; height: 40px; "  href="{{ route("cliente.create") }}" class="btn btn-primary">' +
                                        ' Crear Cliente' +
                                    '</a>' +
                                '</div>',
                            showCloseButton: true,
                            showConfirmButton: false
                        });
                        }
                    } else {
                        // Mostrar SweetAlert2 con mensaje y botón para crear un cliente
                        Swal.fire({
                            icon: 'info',
                            title: 'No se encontraron clientes',
                            html: '<div style="text-align: center;">' +
                                    '<p>Por favor agrega uno.</p>' +
                                    '<a style="text-align: center; width: 130px; height: 40px; "  href="{{ route("cliente.create") }}" class="btn btn-primary">' +
                                        ' Crear Cliente' +
                                    '</a>' +
                                '</div>',
                            showCloseButton: true,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $('#resultsContainer').empty();
                    $('#resultsContainer').append('<p>Ocurrió un error al realizar la búsqueda.</p>');
                }
            });
        }


        // Función para cargar todos los productos
        function loadAllProducts() {
            $.ajax({
                type: 'GET',
                url: '/productos/todos', // Ruta a tu endpoint para obtener todos los productos
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    productos = data; // Asigna los productos al array global
                    displayProducts(productos);
                    updateTotalProductos(productos.length); // Actualizar el número total de productos

                },
                error: function(error) {
                    console.error("Error al obtener todos los productos:", error);
                }
            });
        }

        // Función para cargar productos por categoría
        function loadProducts(categoriaId) {
            $.ajax({
                type: 'GET',
                url: '/productos/categoria/' + categoriaId,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    productos = data; // Asigna los productos al array global
                    displayProducts(productos);
                    updateTotalProductos(productos.length); // Actualizar el número total de productos
                },
                error: function(error) {
                    console.error("Error al obtener productos por categoría:", error);
                }
            });
        }
        


        // Función para mostrar productos en la interfaz
        function displayProducts(products) {
            var productsHtml = '';

            products.forEach(function(product) {
                productsHtml += `
                <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                    <div class="product-info default-cover card">
                        <a class="img-bg">
                            <img src="{{ asset('storage/product/') }}/${product.imagen}" alt="${product.nombre}">
                            <span><i data-feather="check" class="feather-16"></i></span>
                        </a>
                        <h6 class="cat-name"><a>${product.categoria.nombre}</a></h6>
                        <h6 class="product-name"><a>${product.nombre}</a></h6>
                        <div class="d-flex align-items-center justify-content-between price">
                            <span>${product.stock} UND</span>
                            <p>S/.${product.costo_venta}</p>
                        </div>
                        <button style="margin-top: 10px;" class="btn btn-primary btn-sm agregar-al-carrito" data-producto-id="${product.id}">
                        Agregar al carrito
                    </button>
                    </div>
                </div>
            `;
            });

            $('.pos-products .row').html(productsHtml);

             // Agregar evento para el botón "Agregar al carrito"
             $('.agregar-al-carrito').on('click', function() {
                    var productId = $(this).data('producto-id');
                    // Reproducir sonido
                    var audio = new Audio('{{ asset('sound/add.mp3') }}');
                    audio.play();
                    /**************************************************/
                    agregarAlCarrito(productId);
                });

                 // Actualizar íconos de Feather
                 //feather.replace();

                // Re-inicializar tooltips de Bootstrap
                //$('[data-bs-toggle="tooltip"]').tooltip();

                 // Actualizar íconos de Feather
                feather.replace();

                // Re-inicializar tooltips de Bootstrap
                $('[data-bs-toggle="tooltip"]').tooltip();
                // Destruir tooltips existentes
                $('[data-bs-toggle="tooltip"]').tooltip('dispose');

        }

        
        function agregarAlCarrito(productId) {
            // Buscar el producto en el array global de productos
            var productToAdd = productos.find(function(product) {
                return product.id === productId;
            });

            if (productToAdd) {
                // Verificar si el producto ya está en el carrito
                var existingProduct = carrito.find(function(item) {
                    return item.id === productId;
                });

                if (existingProduct) {
                    // Si el producto ya está en el carrito, incrementar la cantidad
                    existingProduct.cantidad++;
                } else {
                    // Si el producto no está en el carrito, agregarlo con cantidad inicial 1
                    productToAdd.cantidad = 1; // Agregar la propiedad cantidad al producto
                    carrito.push(productToAdd);
                }

                console.log('Producto añadido al carrito:', productToAdd);

                // Actualizar la interfaz del carrito
                actualizarInterfazCarrito();
            }
        }

    // Función para actualizar la interfaz del carrito
    function actualizarInterfazCarrito() {
        // Vaciar el contenido anterior del contenedor del carrito
        $('.carrito-container').empty();

         // Contador de productos en el carrito
        var totalProductos = 0;

        // Recorrer el array de productos en el carrito
        carrito.forEach(function(product) {
            // Generar el HTML para cada producto del carrito
            var productHtml = `
            <div class="product-list d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center product-info" data-bs-toggle="modal" data-bs-target="#products">
                    <a href="javascript:void(0);" class="img-bg">
                        <img src="{{ asset('storage/product/') }}/${product.imagen}" alt="${product.nombre}">
                    </a>
                    <div class="info">
                        <span>${product.codigo}</span>
                        <h6><a href="javascript:void(0);">${product.nombre}</a></h6>
                        <p>S/.${product.costo_venta}</p>
                    </div>
                </div>
                <div class="qty-item text-center">
                    <a href="javascript:void(0);" class="dec d-flex justify-content-center align-items-center"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Disminuir" data-product-id="${product.id}">
                        <i data-feather="minus-circle" class="feather-14"></i>
                    </a>
                    <input type="text" class="form-control text-center qty-input" name="qty" value="${product.cantidad}">
                    <a href="javascript:void(0);" class="inc d-flex justify-content-center align-items-center"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Aumentar" data-product-id="${product.id}">
                        <i data-feather="plus-circle" class="feather-14"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center action">
                    <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-product">
                        <i data-feather="edit" class="feather-14"></i>
                    </a>
                    <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);" data-product-id="${product.id}">
                        <i data-feather="trash-2" class="feather-14"></i>
                    </a>
                </div>
            </div>
            `;

            // Agregar el producto al contenedor del carrito
            $('.carrito-container').append(productHtml);

             // Incrementar el contador de productos visibles
            totalProductos++;
        });

         // Actualizar íconos de Feather
         feather.replace();         
         // Re-inicializar tooltips de Bootstrap
         $('[data-bs-toggle="tooltip"]').tooltip();
         
         // Destruir tooltips existentes
        $('[data-bs-toggle="tooltip"]').tooltip('dispose');
        // Actualizar el contador de productos en la interfaz
        $('.count').text(totalProductos);

        // Agregar eventos para modificar la cantidad desde el carrito
        $('.qty-item .inc').on('click', function() {
            var productId = $(this).data('product-id');
            incrementarCantidad(productId);
        });

        $('.qty-item .dec').on('click', function() {
            var productId = $(this).data('product-id');
            decrementarCantidad(productId);
        });

        // Evento para eliminar un producto del carrito
        $('.delete-icon').on('click', function() {
            var productId = $(this).data('product-id');
            eliminarProductoDelCarrito(productId);
        });

        // Calcular y actualizar el total del carrito
        calcularTotalCarrito();
    }

    // Función para incrementar la cantidad de un producto en el carrito
    function incrementarCantidad(productId) {
        var product = carrito.find(function(item) {
            return item.id === productId;
        });

        if (product) {
            product.cantidad++;
            actualizarInterfazCarrito();
        }
    }

    // Función para decrementar la cantidad de un producto en el carrito
    function decrementarCantidad(productId) {
        var product = carrito.find(function(item) {
            return item.id === productId;
        });

        if (product && product.cantidad > 1) {
            product.cantidad--;
            actualizarInterfazCarrito();
        }
    }

    // Función para eliminar un producto del carrito
    function eliminarProductoDelCarrito(productId) {
        carrito = carrito.filter(function(product) {
            return product.id !== productId;
        });

        actualizarInterfazCarrito();
    }

    
    // Función para actualizar el número total de productos mostrado
    function updateTotalProductos(total) {
        $('#totalProductos').text(total + ' Productos');
    }     
    

    // Función para mostrar el modal con los detalles de la compra
    function mostrarModalCompra() {

        // Obtener el valor del total desde el botón
        var totalText = $('#total-button').text();
        var total = totalText.match(/S\/\. (\d+(\.\d+)?)/)[1];

        // Actualizar el valor del input en el modal
        $('#p_pedido').val(total);

        $('#modalCompra').modal('show'); // Abre el modal usando Bootstrap modal
    }

    // Evento click en el botón total-button para mostrar el modal
    $('#total-button').on('click', function() {
        mostrarModalCompra();
    });
    
    // Función para calcular el total del carrito
    function calcularTotalCarrito() {
        var subTotal = 0;
        carrito.forEach(function(product) {
            subTotal += product.costo_venta * product.cantidad;
        });

        // Obtener el descuento desde el input, asegurando que sea un número y manejando NaN
        var descuentoPorcentaje = parseFloat($('#descuento-input').val()) || 0;
        var descuento = (subTotal * descuentoPorcentaje) / 100;
        var total = subTotal - descuento;

        $('#subTotal').text('S/. ' + subTotal.toFixed(2));
        $('#descuento').text('S/. ' + descuento.toFixed(2));
        $('#total').text('S/. ' + total.toFixed(2));

        // Actualizar el texto del botón con el total
        $('#total-button').text('Seguir con la compra de : S/. ' + total.toFixed(2));
        $('#totalpagar').val(total.toFixed(2)); 
    }

    $('#descuento-plus').on('click', function() {
        var descuentoInput = $('#descuento-input');
        var descuento = parseFloat(descuentoInput.val()) || 0;
        descuentoInput.val(descuento + 1);
        calcularTotalCarrito();
    });

    $('#descuento-minus').on('click', function() {
        var descuentoInput = $('#descuento-input');
        var descuento = parseFloat(descuentoInput.val()) || 0;
        if (descuento > 0) {
            descuentoInput.val(descuento - 1);
        }
        calcularTotalCarrito();
    });

    });
/* ---------------------------------------------------------------- */
//                    FUNCION FORMATO NUMEROS

function formatNumber(number) {
  var parts = number.toFixed(2).split(".");
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  return parts.join(".");
}

/* ---------------------------------------------------------------- */
//                   FUNCIONES INPUT METODO PAGO

let currentInput = null;

// Al hacer clic en un boton de la calculadora, se enfoca en el input correspondiente.
$(".calculator-button").click(function () {
  // Encuentra el input relacionado al botón clickeado.
  const inputId = $(this).siblings(".calculator-input").attr("id");
  currentInput = $("#" + inputId);

  // Coloca el foco en el input.
  currentInput.focus();
});

$(".calculator-input").click(function () {
  currentInput = $(this);
});

/* ---------------------------------------------------------------- */
//                       FUNCIONES TECLADO

$(".design").click(function () {
  // console.log('this', $(this).text());

  // console.log('cuurr', currentInput.val());
  if (currentInput) {
    const buttonText = $(this).text();
    const inputValue = currentInput.val();

    if (inputValue == 0) {
      currentInput.val(buttonText);

    } else if (buttonText === "." && inputValue.includes(".")) {
      // Evitar agregar más de un punto decimal.
      currentInput.val(inputValue);

    } else {
      // currentInput.val(inputValue + buttonText);
      // Controlar la cantidad de decimales permitidos.
      const decimalIndex = inputValue.indexOf(".");
      if (decimalIndex !== -1 && inputValue.length - decimalIndex > 2) {
        // Si ya hay dos decimales, no permitir más.
        currentInput.val(inputValue);
      } else {
        currentInput.val(inputValue + buttonText);
      }
    }

    calcularPago();
  }

});

//Backspace
$('#backspace').click(function () {

  if (currentInput) {
    var value = currentInput.val();
    if (!(parseInt(parseFloat(value)) == 0 && value.length == 1)) {
      currentInput.val(value.slice(0, value.length - 1));
    }
    if (value.length == 1 || value.length == 0) {
      currentInput.val("0");
    }
    calcularPago();
  }

});

// All Clear
$("#allClear").click(function () {
  // $("#expression").val("0");
  // $("#result").val("0");
  if (currentInput) {
    currentInput.val("0");

    calcularPago();
  }
});

/* ---------------------------------------------------------------- */
//                    MOSTRAR MODAL METODO DE PAGO

$('#btn_metodopago').click(function () {

  if ($('.items-order .card').length === 0) {
    swal.fire({
      title: "Error",
      text: 'Debe agregar al menos un producto al pedido antes de continuar.',
      icon: "error",
      timer: 2000,
      showConfirmButton: false
    });
    return;
  }

  var totalpedido = $('#totalpagar').val().replace(',', '');
  //Llena el tipo de pago
  $('#p_pedido').val(totalpedido);
  $('#efectivo').val(parseFloat(totalpedido).toFixed(2));
    // var totalpedido = $('#totalpagar').val().replace(',', '');
    // $('#p_pedido').val(parseFloat(totalpedido).toFixed(2));
    // $('#efectivo').val(parseFloat(totalpedido).toFixed(2));

  // Verificar que completaron datos

  //HERE

  var d_tipocomprobante = $('#d_tipocomprobante').val();

  if ($('#d_tipocomprobante').val() == null) {
    swal.fire({
      title: "Error",
      text: 'Complete los datos antes de continuar.',
      icon: "error",
      timer: 2000,
      showConfirmButton: false
    });

    $('#btn_datos').focus();

    return;

  } else if (d_tipocomprobante == 0 || d_tipocomprobante == 2) {

    if ($('#tipo_doc_ide').val() == '') {

      swal.fire({
        title: "Error",
        text: 'Complete el Tipo de Documento.',
        icon: "error",
        timer: 2000,
        showConfirmButton: false
      });

      $('#btn_datos').focus();
      return;

    } else if ($('#numero_documento').val() == '' || $('#numero_documento').val() == '-') {

      swal.fire({
        title: "Error",
        text: 'Complete el Número de Documento.',
        icon: "error",
        timer: 2000,
        showConfirmButton: false
      });

      $('#btn_datos').focus();
      return;

    } else if ($('#razon_social').val() == '' || $('#razon_social').val() == '-') {

      swal.fire({
        title: "Error",
        text: 'Complete los Nombres y Apellidos.',
        icon: "error",
        timer: 2000,
        showConfirmButton: false
      });

      $('#btn_datos').focus();
      return;

    }

  } else if (d_tipocomprobante == 1) {

    if ($('#tipo_doc_ide').val() == '') {

      swal.fire({
        title: "Error",
        text: 'Complete el Tipo de Documento.',
        icon: "error",
        timer: 2000,
        showConfirmButton: false
      });

      $('#btn_datos').focus();
      return;

    } else if ($('#numero_documento2').val() == '' || $('#numero_documento2').val() == '-') {

      swal.fire({
        title: "Error",
        text: 'Complete el Número de Documento.',
        icon: "error",
        timer: 2000,
        showConfirmButton: false
      });

      $('#btn_datos').focus();
      return;

    } else if ($('#razon_social2').val() == '' || $('#razon_social2').val() == '-') {

      swal.fire({
        title: "Error",
        text: 'Complete los Nombres y Apellidos.',
        icon: "error",
        timer: 2000,
        showConfirmButton: false
      });

      $('#btn_datos').focus();
      return;

    }

  }


  //$('#modal_metodopago').modal('show');

  setTimeout(function () {
    $('#efectivo').focus();
  }, 500);

  currentInput = $('#efectivo');
  calcularPago();



})


/* ---------------------------------------------------------------- */
//                     CERRAR MODAL METODO DE PAGO

$('#modalCompra').on('hidden.bs.modal', function () {

  limpiarMetodoPago();
});

/* ---------------------------------------------------------------- */
//                      FUNCION CALCULAR PAGO

function calcularPago() {

  var p_pedido = parseFloat($('#p_pedido').val());

  var efectivo = parseFloat($('#efectivo').val());
  // var p_credito = parseFloat( $('#p_credito').val() || 0 );
  var visa = parseFloat($('#visa').val() || 0);
  var yape = parseFloat($('#yape').val() || 0);
  var plin = parseFloat($('#plin').val() || 0);
  var mastercard = parseFloat($('#mastercard').val() || 0);
  var deposito = parseFloat($('#deposito').val() || 0);

  var totalpagado = efectivo + visa + yape + plin + mastercard + deposito;

  $('#p_tpagado').val(formatNumber(totalpagado));

  var totalvuelto = 0;

  totalvuelto = totalpagado - p_pedido

  if (totalpagado > p_pedido) {

    $('#text_vuelto').html('Vuelto <span>S/.</span>');
    $('#text_vuelto').css('color', 'green');
    $('#p_vuelto').css('color', 'green');

  } else if (totalpagado == p_pedido) {

    $('#text_vuelto').html('Completo <span>S/.</span>');
    $('#text_vuelto').css('color', 'blue');
    $('#p_vuelto').css('color', 'blue');

  } else {

    totalvuelto = p_pedido - totalpagado

    $('#text_vuelto').html('Falta <span>S/.</span>');
    $('#text_vuelto').css('color', 'red');
    $('#p_vuelto').css('color', 'red');
  }

  // console.log('vuelto1', totalvuelto);
  $('#p_vuelto').val(formatNumber(totalvuelto));


}

/* ---------------------------------------------------------------- */
//                   EVENTO INPUT CALCULAR PAGO

$('.calculator-input').on('input', calcularPago);

/* ---------------------------------------------------------------- */
//                  LIMPIAR MODAL METODO DE PAGO

function limpiarMetodoPago() {

  $('#p_pedido').val(0);

  $('#efectivo').val(0);
  $('#visa').val(0);
  $('#yape').val(0);
  $('#plin').val(0);
  $('#mastercard').val(0);
  $('#deposito').val(0);

  $('#p_tpagado').val(0);

  $('#text_vuelto').html('Vuelto <span>S/.</span>');
  $('#p_vuelto').val(0);

}
    
   </script>

    

</body>



</html>
