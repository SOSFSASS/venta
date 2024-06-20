@extends('template')

@section('title', 'Crear producto')
{{-- aca se añade las demas rutas de css --}}
@push('css')
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
                                                    <span class="tx-danger" >
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
                                                    <span class="tx-danger" >
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-4 -->
                                            <div class="col-md-4 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1">
                                                    <label class="form-label">Categoría</label>
                                                    <select name="id_categoria"
                                                            class="form-control select @error('id_categoria') is-invalid @enderror">
                                                        <option value="">Elige Categoría</option>
                                                        @foreach ($categorias as $categoria)
                                                            <option value="{{ $categoria->id }}"
                                                                {{ old('id_categoria') == $categoria->id ? 'selected' : '' }}>
                                                                {{ $categoria->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('id_categoria')
                                                    <span class="tx-danger" >
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
                                                    <span class="tx-danger" >
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
                                                    <span class="tx-danger" >
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
                                                    <span class="tx-danger" >
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
                                                               value="{{ old('fechaven') }}" placeholder="Fecha de Vencimiento"
                                                               id="fechaven">
                                                        @error('fechaven')
                                                        <span class="tx-danger" >
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
                                                        <option value="1" {{ old('estado') == '1' ? 'selected' : '' }}>
                                                            Activo
                                                        </option>
                                                        <option value="0" {{ old('estado') == '0' ? 'selected' : '' }}>
                                                            Inactivo
                                                        </option>
                                                    </select>
                                                    @error('estado')
                                                    <span class="tx-danger" >
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
                                                    <span class="tx-danger" >
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- col-12 -->
                                            <div class="col-md-12 mg-t--1 mg-md-t-0">
                                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                                    <div class="addproduct-icon list">
                                                        <h5><i data-feather="image" class="add-info"></i><span>Cargar Imagen</span></h5>
                                                    </div>
                                                    <div class="add-choosen">
                                                        <div class="input-blocks">
                                                            <div class="image-upload">
                                                                <input type="file" name="imagen" id="imagen" id="imagenInput"
                                                                       onchange="previewImage(event)">
                                                                <div class="image-uploads">
                                                                    <i data-feather="plus-circle" class="plus-down-add me-0"></i>
                                                                    <h4>Agregar Imagen</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="phone-img">
                                                            <img id="imagenPrevisualizada" src="{{ asset('css/img/product/noimage.png') }}" alt="image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col-12 -->
                                        </div>
                                        <!-- row -->
                                        <div class="form-layout-footer mg-t-15">
                                            <a href="{{ route('producto.index') }}" class="btn btn-secondary waves-effect">Cancelar</a>
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
    </div>

    <!--/ Page Inner Content End -->

@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(document).ready(function() {
            // Verificar si hay una preferencia almacenada en el localStorage
            var autoGenerarCodigo = localStorage.getItem('autoGenerarCodigo');

            // Si hay una preferencia almacenada, actualizar el checkbox
            if (autoGenerarCodigo === 'true') {
                $('#codigoAutomatico').prop('checked', true);
                $('#generarCodigoBtn').prop('disabled', true);
                // Si la preferencia está activada, generar el código automáticamente
                generarCodigoAutomatico();
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

            // Evento para detectar el cambio en el checkbox
            $('#codigoAutomatico').change(function() {
                if (this.checked) {
                    // Si el checkbox está marcado, generamos el código automáticamente
                    generarCodigoAutomatico();
                    // Deshabilitamos el botón de generar código manual
                    $('#generarCodigoBtn').prop('disabled', true);
                    // Guardar la preferencia en el localStorage
                    localStorage.setItem('autoGenerarCodigo', true);
                } else {
                    // Si el checkbox no está marcado, limpiamos el campo de código
                    $('#codigo').val('');
                    // Si el checkbox no está marcado, habilitamos el botón de generar código manual
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
            flatpickr("#fechaven", {
                dateFormat: "d-m-Y",
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
                minDate: "today",
                maxDate: new Date().fp_incr(365), // 365 días a partir de hoy
                disable: [
                    function(date) {
                        // Deshabilitar todos los sábados y domingos
                        //return (date.getDay() === 6 || date.getDay() === 0);
                    }
                ],
                monthSelectorType: "static", // Muestra todos los meses en un dropdown
                onChange: function(selectedDates, dateStr, instance) {
                    console.log("Selected date: " + dateStr);
                }
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
