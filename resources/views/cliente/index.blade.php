@extends('template')

@section('title', 'clientes')

@push('css')
@endpush

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Lista de Clientes</h4>
            </div>
            <div class="page-btn">
                <a href="{{ route('cliente.create') }}" class="btn btn-added">
                    <i class="fas fa-plus-circle"></i>&nbsp;Agregar Clientes
                </a>
            </div>
        </div>
        {{-- TODO: es para mostrar elmensaje de confirmación --}}
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
                            <form action="{{ route('cliente.index') }}" method="GET" class="form-inline">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control form-control-sm" id="search" name="search"
                                               placeholder="Buscar por nombre" value="{{ $search }}" aria-controls="DataTables_Table_0">
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
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>N° Documento</th>
                                <th>Documento</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->apellido }}</td>
                                    <td>{{ $cliente->documento }}</td>
                                    <td>{{ $cliente->tipo_identificacion }}</td>
                                    <td>{{ $cliente->correo }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ $cliente->direccion }}</td>
                                    <td>
                                        <span class="badge badge-pill {{ $cliente->estado ? 'badge-success' : 'badge-danger' }}">
                                            {{ $cliente->estado ? 'Activo' : 'Inactivo' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
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
                        <!-- Enlace a la página anterior -->
                        @if ($clientes->onFirstPage())
                            <span><i class="fas fa-chevron-left ml-2"></i></span>
                        @else
                            <a href="{{ $clientes->previousPageUrl() }}" rel="prev"><i
                                    class="fas fa-chevron-left ml-2"></i></a>
                        @endif

                        <!-- Elementos de paginación -->
                        <ul class="d-flex align-items-center page-wrap ml-2">
                            @foreach ($clientes->getUrlRange(1, $clientes->lastPage()) as $page => $url)
                                @if ($page == $clientes->currentPage())
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

                        <!-- Enlace a la página siguiente -->
                        @if ($clientes->hasMorePages())
                            <a href="{{ $clientes->nextPageUrl() }}" rel="next"><i
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




@endsection

@push('js')
@endpush
