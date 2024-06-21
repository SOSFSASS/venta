@extends('template')

@section('title', 'Crear producto')
{{-- aca se añade las demas rutas de css --}}
@push('css')
    <!-- Incluir el CSS de Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Incluir el archivo de idioma de Flatpickr en español -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>
@endpush
@section('content')
    <!-- Page Inner Content Start -->
    <!--================================-->
    {{-- <div class="page-inner-content">
        <div class="row no-gutters">
            <!--================================-->
            <!-- Page Content Area Start -->
            <!--================================-->
            <div class="col-lg-12 page-content-area">
                <div class="inner-content">
                    <!--/ Page Sidebar Area End -->
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
                                <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-layout form-layout-1">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Código</label>
                                                    <input type="text" name="codigo" id="codigo"
                                                        class="form-control @error('codigo') is-invalid @enderror"
                                                        value="{{ old('codigo') }}" placeholder="Código Barras">
                                                    @error('codigo')
                                                        <span class="tx-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-4 -->
                                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1">
                                                    <label class="form-label">Nombre del Producto</label>
                                                    <input type="text" name="nombre"
                                                        class="form-control  @error('nombre') is-invalid @enderror"
                                                        value="{{ old('nombre') }}">
                                                    @error('nombre')
                                                        <span class="tx-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-4 -->
                                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1">
                                                    <label class="form-label">Categoría</label>
                                                    <select id="selecCategoria" name="id_categoria"
                                                        class="form-control select @error('id_categoria') is-invalid @enderror">
                                                        <option value="">Elige Categoría</option>
                                                        @foreach ($categorias as $categoria)
                                                            <option value="{{ $categoria->id }}"
                                                                {{ old('id_categoria') == $categoria->id ? 'selected' : '' }}>
                                                                {{ $categoria->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('id_categoria')
                                                        <span class="tx-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-4 -->

                                            <!-- col-4 -->

                                            <!-- col-4 -->
                                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                                    <label class="form-label">Stock</label>
                                                    <input type="number" name="stock"
                                                        class="form-control @error('stock') is-invalid @enderror"
                                                        value="{{ old('stock') }}">
                                                    @error('stock')
                                                        <span class="tx-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-4 -->
                                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                                    <label class="form-label">Precio de Venta</label>
                                                    <input type="number" name="costo_venta"
                                                        class="form-control  @error('costo_venta') is-invalid @enderror"
                                                        value="{{ old('costo_venta') }}">
                                                    @error('costo_venta')
                                                        <span class="tx-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-4 -->
                                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                                    <label class="form-label">Precio de Compra</label>
                                                    <input type="number" name="precio_compra"
                                                        class="form-control @error('precio_compra') is-invalid @enderror"
                                                        value="{{ old('precio_compra') }}">
                                                    @error('precio_compra')
                                                        <span class="tx-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-4 -->
                                            <div class="col-md-8 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                                    <label class="form-label">Fecha de Vencimiento</label>
                                                    <div class="input-groupicon calender-input">
                                                        <i data-feather="calendar" class="info-img"></i>
                                                        <input type="text" name="fechaven"
                                                            class="datetimepicker @error('fechaven') is-invalid @enderror"
                                                            value="{{ old('fechaven') }}"
                                                            placeholder="Fecha de Vencimiento" id="fechaven">
                                                        @error('fechaven')
                                                            <span class="tx-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col-8 -->
                                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                                    <label class="form-label">Estado</label>
                                                    <select name="estado"
                                                        class="form-control select  @error('estado') is-invalid @enderror">
                                                        <option value="1"
                                                            {{ old('estado') == '1' ? 'selected' : '' }}>
                                                            Activo
                                                        </option>
                                                        <option value="0"
                                                            {{ old('estado') == '0' ? 'selected' : '' }}>
                                                            Inactivo
                                                        </option>
                                                    </select>
                                                    @error('estado')
                                                        <span class="tx-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-4 -->
                                            <div class="col-md-12 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                                    <label class="form-label">Descripción</label>
                                                    <textarea name="descripcion" class="form-control  @error('descripcion') is-invalid @enderror"
                                                        value="{{ old('descripcion') }}"></textarea>
                                                    @error('descripcion')
                                                        <span class="tx-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-12 -->
                                            <div class="col-md-12 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                                    <div class="addproduct-icon list">
                                                        <h5><i data-feather="image" class="add-info"></i><span>Cargar
                                                                Imagen</span></h5>
                                                    </div>
                                                    <div class="add-choosen">
                                                        <div class="input-blocks">
                                                            <div class="image-upload">
                                                                <input type="file" name="imagen" id="imagen"
                                                                    id="imagenInput" onchange="previewImage(event)">
                                                                <div class="image-uploads">
                                                                    <i data-feather="plus-circle"
                                                                        class="plus-down-add me-0"></i>
                                                                    <h4>Agregar Imagen</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="phone-img">
                                                            <img id="imagenPrevisualizada"
                                                                src="{{ asset('css/img/product/noimage.png') }}"
                                                                alt="image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col-12 -->
                                        </div>
                                        <!-- row -->
                                        <div class="form-layout-footer mg-t-15">
                                            <a href="{{ route('producto.index') }}"
                                                class="btn btn-secondary waves-effect">Cancelar</a>
                                            <button type="submit" class="btn btn-primary waves-effect">Guardar</button>
                                        </div>
                                        <!-- form-layout-footer -->
                                    </div>
                                    <!-- form-layout -->
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--/ Page Inner Content End -->
    <div class="content">
        <div class="page-header justify-content-between">
            <div class="page-title">
                <h4>MANTENIMIENTO DE PRODUCTOS</h4>
            </div>
            <ul class="table-top-head">
                <li>
                    <div class="page-btn">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="codigoAutomatico"
                                name="codigoAutomatico">
                            <label class="form-check-label" for="codigoAutomatico">
                                Generar códigos automáticamente
                            </label>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <div class="card mb-0">
            <div class="card-body add-product pb-0  ">
                <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="accordion-card-one accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-controls="collapseOne">
                                    <div class="addproduct-icon">
                                        <h5><i data-feather="info" class="add-info"></i><span>Informacion de Producto</span>
                                        </h5>
                                        <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                class="chevron-down-add"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <label class="form-label">Codigo</label>
                                            <div class="form-group add-product list">
                                                <div class="input-group">
                                                    <input type="text" name="codigo" id="codigo"
                                                        class="form-control @error('codigo') is-invalid @enderror"
                                                        value="{{ old('codigo') }}" placeholder="Código Barras">
                                                    <div class="input-group-append">
                                                        {{-- <button type="button" class="btn btn-primary"
                                                            onclick="generarCodigo()">Generar código</button> --}}
                                                        @error('codigo')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-sm-6 col-12">
                                            <div class="mb-3 add-product">
                                                <label class="form-label">Nombre del Producto</label>
                                                <input type="text" name="nombre"
                                                    class="form-control  @error('nombre') is-invalid @enderror"
                                                    value="{{ old('nombre') }}">
                                                @error('nombre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="mb-3 add-product">
                                                <div class="add-newplus">
                                                    <label class="form-label">Categoria</label>
                                                    <a href="{{ route('categoria.create') }}"><i data-feather="plus-circle"
                                                            class="plus-down-add"></i><span>Agregar Categoria</span></a>
                                                </div>
                                                <select id="id_categoria" name="id_categoria"
                                                    class="form-control select @error('id_categoria') is-invalid @enderror">
                                                    <option value="">Elige Categoría</option>
                                                    @foreach ($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}"
                                                            {{ old('id_categoria') == $categoria->id ? 'selected' : '' }}>
                                                            {{ $categoria->nombre }}</option>
                                                    @endforeach
                                                </select>
                                                @error('id_categoria')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Stock</label>
                                                <input type="number" name="stock"
                                                    class="form-control @error('stock') is-invalid @enderror"
                                                    value="{{ old('stock') }}">
                                                @error('stock')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Precio de Venta</label>
                                                <input type="text" name="costo_venta"
                                                    class="form-control  @error('costo_venta') is-invalid @enderror"
                                                    value="{{ old('costo_venta') }}">
                                                @error('costo_venta')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Precio de Compra</label>
                                                <input type="text" name="precio_compra"
                                                    class="form-control @error('precio_compra') is-invalid @enderror"
                                                    value="{{ old('precio_compra') }}">
                                                @error('precio_compra')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <label class="form-label">Fecha de Vencimiento</label>
                                                <div class="input-groupicon calender-input">
                                                    <i data-feather="calendar" class="info-img"></i>
                                                    <input type="text" name="fechaven"
                                                        class="datetimepicker @error('fechaven') is-invalid @enderror"
                                                        value="{{ old('fechaven') }}" placeholder="Fecha de Vencimiento"
                                                        id="fechaven">
                                                    @error('fechaven')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Estado</label>
                                                <select name="estado"
                                                    class="form-control select  @error('estado') is-invalid @enderror">
                                                    <option value="1" {{ old('estado') == '1' ? 'selected' : '' }}>
                                                        Activo</option>
                                                    <option value="0" {{ old('estado') == '0' ? 'selected' : '' }}>
                                                        Inactivo</option>
                                                </select>
                                                @error('estado')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Descripción</label>
                                                <textarea name="descripcion" class="form-control  @error('descripcion') is-invalid @enderror"
                                                    value="{{ old('descripcion') }}"></textarea>
                                                @error('descripcion')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="accordion-card-one accordion" id="accordionExample3">

                                        <div class="addproduct-icon list">
                                            <h5><i data-feather="image" class="add-info"></i><span>Cargar Imagen</span>
                                            </h5>

                                        </div>

                                        <div class="col-lg-12">
                                            <div class="add-choosen">
                                                <div class="input-blocks">
                                                    <div class="image-upload">
                                                        <input type="file" name="imagen" id="imagen"
                                                            id="imagenInput" onchange="previewImage(event)">
                                                        <div class="image-uploads">
                                                            <i data-feather="plus-circle" class="plus-down-add me-0"></i>
                                                            <h4>Agregar Imagen</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="phone-img">
                                                    <img id="imagenPrevisualizada"
                                                        src="{{ asset('css/img/product/noimage.png') }}" alt="image">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    <div class="btn-addproduct mb-4">
                        <a href="{{ route('producto.index') }}" class="btn btn-cancel">Regresar</a>
                        <button type="submit" class="btn btn-submit me-2">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection

@push('js')
    <!-- Incluir Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        $(document).ready(function() {
            //$('#id_categoria').select2();

            $('#id_categoria').select2({
                // Configuración de select2
                placeholder: 'Selecciona una categoría',
                language: {
                    noResults: function() {
                        return 'No se encontraron resultados'; // Mensaje cuando no se encuentran resultados
                    },
                    searching: function() {
                        return 'Buscando...'; // Mensaje durante la búsqueda
                    }
                },
                escapeMarkup: function(markup) {
                    return markup;
                }
            });


            // Verificar si hay una preferencia almacenada en el localStorage
            var autoGenerarCodigo = localStorage.getItem('autoGenerarCodigo');

            // Si hay una preferencia almacenada, actualizar el checkbox
            if (autoGenerarCodigo === 'true') {
                $('#codigoAutomatico').prop('checked', true);
                $('#codigo').prop('readonly', true);
                // $('#generarCodigoBtn').prop('disabled', true);
                // Si la preferencia está activada, generar el código automáticamente
                generarCodigoAutomatico();
                $('#generarCodigoBtn').prop('disabled', true);
            } else {
                // Si no está marcado, asegurarse de que el campo de código esté editable y el botón de generar código manual habilitado
                $('#codigoAutomatico').prop('checked', false);
                $('#codigo').prop('readonly', false);
                // $('#generarCodigoBtn').prop('disabled', false);
            }

            // Función para generar el código automáticamente
            function generarCodigoAutomatico() {
                $.ajax({
                    url: '{{ route('generarCodigoUnico') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#codigo').val(response.codigo);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // // Evento para detectar el cambio en el checkbox
            // $('#codigoAutomatico').change(function() {
            //     if (this.checked) {
            //         // Si el checkbox está marcado, generamos el código automáticamente
            //         generarCodigoAutomatico();
            //         // Deshabilitamos el botón de generar código manual
            //         $('#generarCodigoBtn').prop('disabled', true);
            //         // Guardar la preferencia en el localStorage
            //         localStorage.setItem('autoGenerarCodigo', true);
            //     } else {
            //         // Si el checkbox no está marcado, limpiamos el campo de código
            //         $('#codigo').val('');
            //         // Si el checkbox no está marcado, habilitamos el botón de generar código manual
            //         $('#generarCodigoBtn').prop('disabled', false);
            //         // Eliminar la preferencia del localStorage
            //         localStorage.removeItem('autoGenerarCodigo');
            //     }
            // });

            // Evento para detectar el cambio en el checkbox
            $('#codigoAutomatico').change(function() {
                if (this.checked) {
                    // Si el checkbox está marcado, hacer el campo de código readonly
                    $('#codigo').prop('readonly', true);
                    // Si el checkbox está marcado, generamos el código automáticamente
                    generarCodigoAutomatico();
                    // Deshabilitamos el botón de generar código manual
                    $('#generarCodigoBtn').prop('disabled', true);
                    // Guardar la preferencia en el localStorage
                    localStorage.setItem('autoGenerarCodigo', true);
                } else {
                    // Si el checkbox no está marcado, limpiar el campo de código
                    $('#codigo').val('');
                    // Si el checkbox no está marcado, hacer el campo de código editable
                    $('#codigo').prop('readonly', false);
                    // Si el checkbox no está marcado, habilitar el botón de generar código manual
                    $('#generarCodigoBtn').prop('disabled', false);
                    // Eliminar la preferencia del localStorage
                    localStorage.removeItem('autoGenerarCodigo');
                }
            });

            // Evento para el botón de generar código manual
            $('#generarCodigoBtn').click(function() {
                // Tu lógica para generar el código manualmente
            });


        });


        document.addEventListener('DOMContentLoaded', function() {
            flatpickr('#fechaven', {
                defaultDate: "today", // Mostrar la fecha de hoy por defecto
                "minDate": new Date().fp_incr(1),
                locale: {
                    firstDayOfWeek: 1, // Iniciar la semana en lunes
                    weekdays: {
                        shorthand: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
                        longhand: [
                            "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"
                        ]
                    },
                    months: {
                        shorthand: [
                            "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov",
                            "Dic"
                        ],
                        longhand: [
                            "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                            "Septiembre", "Octubre", "Noviembre", "Diciembre"
                        ]
                    }
                },
                dateFormat: "d-m-Y" // Formato de fecha día-mes-año
            });

        });

        //TODO:Funcion para generar codigo aleatorio
        // function generarCodigo() {
        //     $.ajax({
        //         url: '{{ route('generarCodigoUnico') }}',
        //         type: 'POST',
        //         dataType: 'json',
        //         data: {
        //             _token: '{{ csrf_token() }}'
        //         },
        //         success: function(response) {
        //             $('#codigo').val(response.codigo);
        //         },
        //         error: function(xhr, status, error) {
        //             console.error(error);
        //         }
        //     });
        // }

        //TODO:Funcion para visualisar la imagen
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagenPrevisualizada');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
