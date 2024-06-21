@extends('template')

@section('title', 'Detalle de productos')
{{-- aca se añade las demas rutas de css --}}
@push('css')
<style>
    .imgbarra {}

    .codigo-barras {
        margin: 0 !important;
        letter-spacing: 16px;
        margin-left: 14px;
        text-align: center;

        /* Puedes ajustar este valor según lo necesites */
    }


    .barcode-box {
        width: 45%;
        border: 3px solid #000;
        padding: 10px;
        margin: 5px;
        display: inline-block;
        text-align: center;
    }

    @media print {
        .barcode-box {
            width: 24.6%;
            margin: 3 auto;
            spacing: 2rem;

        }
    }

    .barcode img {
        width: 100%;
        height: 50px;
    }


    .product-name {
        /* font-weight: bold; */
        margin-bottom: 5px;
    }

    .product-code {
        margin-top: 5px;
    }

    .product-price {
        margin-top: 3px;
        color: red;
    }

    .product-price span {
        font-weight: bold;
    }
</style>
@endpush
@section('content')
    <!-- Page Inner Content Start -->
    <!--================================-->
    <div class="page-inner-content">
        <div class="row no-gutters">
            <!--================================-->
            <!-- Page Content Area Start -->
            <!--================================-->
            <div class="col-lg-12 page-content-area">
                <div class="inner-content">
                    {{-- <hr class="mg-t-5"> --}}
                    <!--/ Page Sidebar Area End -->
                    {{-- <div class="container mt-5"> --}}
                    <h1>MANTENIMIENTO DE PRODUCTOS</h1>

                    <div class="custom-fieldset-style mg-b-30">
                        <div class="text-right">
                            <div class="custom-control custom-switch mg-l-10">
                                <input class="custom-control-input" type="checkbox" role="switch" id="codigoAutomatico"
                                    name="codigoAutomatico">
                                <label class="custom-control-label" for="codigoAutomatico">Generar códigos
                                    automáticamente</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="bar-code-view">
                                                    <div class="imgbarra">
                                                        <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($producto->codigo, 'C128', 2, 50) }}"
                                                            alt="${producto.nombre}">
                                                        <p class="codigo-barras">{{ $producto->codigo }}</p>
                                                    </div>
                                                    <div class="text-center" style="margin-left: 20px; margin-bottom: 10px;">
                                                        <button type="button" onclick="etiquetaProducto({{ $producto->id }})"
                                                            class="btn btn-secondary" data-bs-toggle="tooltip"
                                                            data-bs-custom-class="tooltip-secondary" data-bs-placement="top"
                                                            data-bs-original-title="Imprimir Etiquetas">
                                                            <i class="fas fa-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="productdetails">
                                                    <ul class="product-bar">
                                                        <li>
                                                            <h4>Categoría</h4>
                                                            <h6>
                                                                @isset($producto->categoria)
                                                                    {{ $producto->categoria->nombre }}
                                                                @else
                                                                    No disponible
                                                                @endisset
                                                            </h6>
                                                        </li>
                                                        <li>
                                                            <h4>Descripción</h4>
                                                            <h6>{{ $producto->descripcion }}</h6>
                                                        </li>
                                                        <li>
                                                            <h4>Precio de Compra</h4>
                                                            <h6>{{ $producto->precio_compra }}</h6>
                                                        </li>
                                                        <li>
                                                            <h4>Costo de Venta</h4>
                                                            <h6>{{ $producto->costo_venta }}</h6>
                                                        </li>
                                                        <li>
                                                            <h4>Stock</h4>
                                                            <h6>{{ $producto->stock }}</h6>
                                                        </li>
                                                        <li>
                                                            <h4>Fecha de Vencimiento</h4>
                                                            <h6>
                                                                @isset($producto->fechaven)
                                                                    {{ $producto->fechaven }}
                                                                @else
                                                                    No disponible
                                                                @endisset
                                                            </h6>
                                                        </li>
                                                        <li>
                                                            <h4>Moneda</h4>
                                                            <h6>
                                                                @isset($producto->moneda)
                                                                    {{ $producto->moneda->nombre }}
                                                                @else
                                                                    No disponible
                                                                @endisset
                                                            </h6>
                                                        </li>
                                                        <li>
                                                            <h4>Medida</h4>
                                                            <h6>
                                                                @isset($producto->medida)
                                                                    {{ $producto->medida->nombre }}
                                                                @else
                                                                    No disponible
                                                                @endisset
                                                            </h6>
                                                        </li>
                                                        <li>
                                                            <h4>Estado</h4>
                                                            <h6 class="{{ $producto->estado ? 'badge bg-success' : 'badge bg-danger' }}">
                                                                {{ $producto->estado ? 'Activo' : 'Inactivo' }}
                                                            </h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ asset('storage/product/' . $producto->imagen) }}" alt="img">
                                                <p class="text-center">Imagen del producto: <span>{{ $producto->nombre }}</span></h6>
                                            </div>
                        
                                        </div>
                                        <div class="col-lg-12">
                                            <a href="{{ route('producto.index') }}" class="btn btn-cancel">Volver atras</a>
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

    <div class="modal fade" id="modalEtiquetaProducto" tabindex="-1" aria-labelledby="myModalLabelProducto"
        aria-hidden="true">
        <div class="modal-dialog modal-ticket modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h2 class="modal-title titulo-modal" id="myModalLabelProducto">Etiqueta de Producto</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" id="modal-body-content-etiquetaProducto">
                </div>
                <div class="btn-group " style="padding: 0.75rem;" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-danger" onclick="printEtiquetaProducto()"><i
                            class="fas fa-print"></i> Imprimir Etiqueta</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function etiquetaProducto(idProducto) {
            Swal.fire({
                title: 'Ingrese la cantidad de etiquetas que necesita:',
                input: 'number',
                inputAttributes: {
                    min: 1,
                    value: 2
                },
                showCancelButton: true,
                confirmButtonColor: '#00852E', // Cambia el color del botón Confirmar
                cancelButtonColor: '#EF1313', // Cambia el color del botón Cancelar
                confirmButtonText: '<i class="fas fa-check"></i> Aceptar',
                cancelButtonText: '<i class="fas fa-times"></i> Cancelar',
                showLoaderOnConfirm: true,
                allowOutsideClick: false,
                customClass: {
                    confirmButton: 'custom-confirm-button', // Clase personalizada para el botón Confirmar
                    cancelButton: 'custom-confirm-button', // Clase personalizada para el botón Confirmar
                },
                preConfirm: (num_etiquetas) => {
                    return num_etiquetas;
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    var num_etiquetas = result.value;
                    if (num_etiquetas === '' || num_etiquetas < 1) {
                        /**************************************************/
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Por favor, ingrese una cantidad válida y mayor a cero.'
                        });

                        var audio = new Audio('{{ asset('sound/error.mp3') }}');
                        audio.play();
                        /**************************************************/
                    } else {

                        //lógica para manejar una cantidad válida de etiquetas
                        $.ajax({
                            url: "{{ route('generar-etiqueta-producto') }}",
                            type: "GET",
                            data: {
                                idProducto: idProducto,
                                num_etiquetas: num_etiquetas
                            },
                            success: function(response) {
                                //console.log(response);
                                var producto = response.producto;
                                var numEtiquetas = response.num_etiquetas;

                                var modalContent = '';
                                for (var i = 0; i < numEtiquetas; i++) {
                                    modalContent += `
                            <div class="barcode-box">
                                <div class="producto-name">${producto.nombre}</div> 
                               <div class="barcode"> <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($producto->codigo, 'C128', 2, 50) }}" alt=" ${producto.nombre}"></div>
                                <div class="product-price"><span>Precio: S/. &nbsp;${producto.costo_venta}</span></div>
                            </div>
                        `;
                                }

                                $('#modal-body-content-etiquetaProducto').html(modalContent);

                                // Lógica para mostrar los códigos de barras en los canvas

                                var modalEtiquetaProducto = new bootstrap.Modal(document.getElementById(
                                    'modalEtiquetaProducto'));
                                modalEtiquetaProducto.show();

                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Error al cargar el contenido: ' + errorThrown
                                });
                                $('#modal-body-content-etiquetaProducto').html(
                                    'Error al cargar el contenido: ' + errorThrown);
                                var audio = new Audio('{{ asset('sound/error.mp3') }}');
                                audio.play();
                            }
                        });
                    }
                }

            });

            // function printEtiquetaProducto() {
            //     var contenido = document.getElementById('modal-body-content-etiquetaProducto').innerHTML;
            //     var contenidoOriginal = document.body.innerHTML;
            //     document.body.innerHTML = contenido;
            //     window.print();
            //     document.body.innerHTML = contenidoOriginal;
            //     $('#modalEtiquetaProducto').modal('hide');
            // }

        }

        function printEtiquetaProducto() {
            // Cierra el modal
            $('#modalEtiquetaProducto').modal('hide');

            // Espera un breve período de tiempo antes de imprimir para asegurarse de que el modal se haya cerrado
            setTimeout(function() {
                // Obtén el contenido del modal con el código de barras
                var contenido = document.getElementById('modal-body-content-etiquetaProducto').innerHTML;

                // Copia el contenido al cuerpo del documento
                var contenidoOriginal = document.body.innerHTML;
                document.body.innerHTML = contenido;

                // Imprime el documento
                window.print();

                // Restaura el contenido original del cuerpo del documento
                document.body.innerHTML = contenidoOriginal;
            }, 500); // Espera 500 milisegundos (medio segundo) antes de imprimir
        }


        // function printEtiquetaProducto() {
        //     // Obtén el contenido del modal con el código de barras
        //     var contenido = document.getElementById('modal-body-content-etiquetaProducto').innerHTML;
        //     // console.log(contenido);

        //     // Copia el contenido al cuerpo del documento
        //     var contenidoOriginal = document.body.innerHTML;
        //     document.body.innerHTML = contenido;

        //     // Imprime el documento
        //     window.print();

        //     // Restaura el contenido original del cuerpo del documento
        //     document.body.innerHTML = contenidoOriginal;

        //     // Cierra el modal
        //     $('#modalEtiquetaProducto').modal('hide');
        // }
    </script>


    <!--/ Page Inner Content End -->

@endsection

@push('js')
   
@endpush
