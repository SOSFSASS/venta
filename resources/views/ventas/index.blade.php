@extends('template')

@section('title', 'Ventas')
<meta name="csrf-token" content="{{ csrf_token() }}">

@push('css')
    <!-- Agrega estilos adicionales si es necesario -->
@endpush

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Ventas</h4>
            </div>
        </div>

        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    Toast.fire({
                        icon: 'success',
                        title: '{{ session('success') }}'
                    });
                });
            </script>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            <form action="{{ route('ventas.index') }}" method="GET" class="form-inline">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control form-control-sm" id="search"
                                            name="search" placeholder="Buscar por cliente" value="{{ $search }}"
                                            aria-controls="DataTables_Table_0">
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-searchset mb-2">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table text-nowrap table-hover">
                        <thead class="thead-secondary">
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Documento</th>
                                <th>Correo</th>
                                <th>Subtotal</th>
                                <th>IGV</th>
                                <th>Total</th>
                                <th>Método de Pago</th>
                                <th>Comentario</th>
                                <th>Fecha</th>
                                <th>Vendido por</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventas as $venta)
                                <tr>
                                    <td>{{ $venta->id }}</td>
                                    <td>{{ $venta->cliente }}</td>
                                    <td>{{ $venta->documento }}</td>
                                    <td>{{ $venta->correo }}</td>
                                    <td>S/. {{ number_format($venta->subtotal, 2) }}</td>
                                    <td>S/. {{ number_format($venta->igv, 2) }}</td>
                                    <td>S/. {{ number_format($venta->total, 2) }}</td>
                                    <td>
                                        @php
                                            $metodoPago = is_string($venta->metodo_pago)
                                                ? json_decode($venta->metodo_pago, true)
                                                : $venta->metodo_pago;
                                        @endphp
                                        @if (is_array($metodoPago))
                                            @foreach ($metodoPago as $key => $value)
                                                <strong>{{ ucfirst($key) }}:</strong> S/.
                                                {{ number_format($value, 2) }}<br>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{ $venta->comentario }}</td>
                                    <td>{{ $venta->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $venta->user->name }}</td>
                                    <td>
                                        {{-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detalleModal" data-venta-id="{{ $venta->id }}">Ver Detalles</button> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#detalleModal" data-venta-id="{{ $venta->id }}">
                                                <i class="fas fa-eye"></i> <!-- Icono de ojo para ver detalles -->
                                            </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row custom-pagination">
                <div class="col-md-12 ml-12">
                    <div class="paginations d-flex justify-content-end">
                        @if ($ventas->onFirstPage())
                            <span><i class="fas fa-chevron-left ml-2"></i></span>
                        @else
                            <a href="{{ $ventas->previousPageUrl() }}" rel="prev"><i
                                    class="fas fa-chevron-left ml-2"></i></a>
                        @endif

                        <ul class="d-flex align-items-center page-wrap ml-2">
                            @foreach ($ventas->getUrlRange(1, $ventas->lastPage()) as $page => $url)
                                @if ($page == $ventas->currentPage())
                                    <li>
                                        <a class="active">{{ $page }}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                        @if ($ventas->hasMorePages())
                            <a href="{{ $ventas->nextPageUrl() }}" rel="next"><i
                                    class="fas fa-chevron-right ml-2"></i></a>
                        @else
                            <span><i class="fas fa-chevron-right ml-2"></i></span>
                        @endif
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>


    <!-- Modal para mostrar los detalles de la venta -->
    <div class="modal fade" id="detalleModal" tabindex="-1" data-bs-toggle="modal" aria-labelledby="detalleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detalleModalLabel">Detalles de la Venta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="detalleModalBody">
                            <!-- Aquí se llenarán los detalles de la venta -->
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#detalleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Botón que activó el modal
            var ventaId = button.data('venta-id'); // Extraer información de los atributos data-*
            
            console.log('Modal abierto para la venta ID:', ventaId); // Añade esta línea para depuración

            // Realizar una solicitud AJAX para obtener los detalles de la venta
            $.ajax({
                url: '/ventas/' + ventaId, // Ruta a tu controlador que devuelve los detalles de la venta
                method: 'GET',
                success: function(response) {
                    var detallesHtml = '';
                    response.detalles.forEach(function(detalle) {
                        detallesHtml += `
                            <tr>
                                <td>${detalle.producto.nombre}</td>
                                <td>${detalle.cantidad}</td>
                                <td>S/. ${parseFloat(detalle.producto_venta).toFixed(2)}</td>
                                <td>S/. ${parseFloat(detalle.total).toFixed(2)}</td>
                            </tr>
                        `;
                    });
                    $('#detalleModalBody').html(detallesHtml);
                },
                error: function(xhr, status, error) {
                    console.error('Error al obtener los detalles de la venta:', error);
                    Swal.fire({
                        title: "Error",
                        text: 'Ocurrió un error al obtener los detalles de la venta. Por favor, inténtelo de nuevo.',
                        icon: "error",
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        });
    });
</script>
@endpush
