@extends('template')

@section('title', 'Productos - ' . $producto->nombre)

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('content')

    <div class="content">
        <div class="page-header justify-content-between">
            <div class="page-title">
                <h4>EDITAR PRODUCTO</h4>
            </div>
        </div>

        <div class="card mb-0">
            <div class="card-body add-product pb-0">
                <form action="{{ route('producto.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                                    <input type="text"
                                                        class="form-control list @error('codigo') is-invalid @enderror"
                                                        name="codigo" id="codigo" placeholder="Ingresa tu Codigo"
                                                        value="{{ old('codigo', $producto->codigo) }}">
                                                    @error('codigo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-sm-6 col-12">
                                            <div class="mb-3 add-product">
                                                <label class="form-label">Nombre del Producto</label>
                                                <input type="text"
                                                    class="form-control @error('nombre') is-invalid @enderror"
                                                    id="nombre" name="nombre"
                                                    value="{{ old('nombre', $producto->nombre) }}">
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
                                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#add-units-category">
                                                        <i data-feather="plus-circle"
                                                            class="plus-down-add"></i><span>Agregar Categoria</span>
                                                    </a>
                                                </div>
                                                <select id="id_categoria" name="id_categoria"
                                                    class="form-control select @error('id_categoria') is-invalid @enderror"
                                                    required>
                                                    <option value="">Elige Categoría</option>
                                                    @foreach ($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}"
                                                            {{ $producto->id_categoria == $categoria->id ? 'selected' : '' }}>
                                                            {{ $categoria->nombre }}
                                                        </option>
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
                                                    class="form-control @error('stock') is-invalid @enderror" required
                                                    value="{{ old('stock', $producto->stock) }}">
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
                                                <input type="number" name="costo_venta"
                                                    class="form-control @error('costo_venta') is-invalid @enderror" required
                                                    value="{{ old('costo_venta', $producto->costo_venta) }}">
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
                                                <input type="number" name="precio_compra"
                                                    class="form-control @error('precio_compra') is-invalid @enderror"
                                                    required value="{{ old('precio_compra', $producto->precio_compra) }}">
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
                                                        placeholder="Fecha de Vencimiento" id="fechaven"
                                                        value="{{ $producto->fechaven ? \Carbon\Carbon::parse($producto->fechaven)->format('d-m-Y') : '' }}">
                                                    @error('fechaven')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Estado</label>
                                                <select name="estado"
                                                    class="form-control select @error('estado') is-invalid @enderror"
                                                    required>
                                                    <option value="1" {{ $producto->estado == 1 ? 'selected' : '' }}>
                                                        Activo</option>
                                                    <option value="0" {{ $producto->estado == 0 ? 'selected' : '' }}>
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
                                                <textarea name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" required>{{ old('descripcion', $producto->descripcion) }}</textarea>
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
                                                            id="imagenInput" onchange="previewImage(event)"
                                                            class="@error('imagen') is-invalid @enderror">
                                                        <div class="image-uploads">
                                                            <i data-feather="plus-circle" class="plus-down-add me-0"></i>
                                                            <h4>Agregar Imagen</h4>
                                                        </div>
                                                        @error('imagen')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="phone-img">
                                                    <img id="imagenPrevisualizada"
                                                        src="{{ asset('storage/product/' . $producto->imagen) }}"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-addproduct mb-4">
                        <a href="{{ route('producto.index') }}" class="btn btn-cancel">Regresar</a>
                        <button type="submit" class="btn btn-submit me-2">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(document).ready(function() {
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


        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagenPrevisualizada');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
