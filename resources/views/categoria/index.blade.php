@extends('template')

@section('title', 'Categorias')
<meta name="csrf-token" content="{{ csrf_token() }}">

@push('css')
@endpush

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Categorias</h4>
            </div>
            <div class="page-btn">
                <a href="{{ route('categoria.create') }}" class="btn btn-added">
                    <i class="fas fa-plus-circle"></i>&nbsp;Agregar Categorías
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
                            <form action="{{ route('categoria.index') }}" method="GET" class="form-inline">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control form-control-sm" id="search"
                                            name="search" placeholder="Buscar por nombre" value="{{ $search }}"
                                            aria-controls="DataTables_Table_0">
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-searchset mb-2">Buscar
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg> --}}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table text-nowrap table-hover">
                        <thead class="thead-secondary">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>{{ $categoria->descripcion }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-warning"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST"
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
                        @if ($categorias->onFirstPage())
                            <span><i class="fas fa-chevron-left ml-2"></i></span>
                        @else
                            <a href="{{ $categorias->previousPageUrl() }}" rel="prev"><i
                                    class="fas fa-chevron-left ml-2"></i></a>
                        @endif

                        <!-- Elementos de paginación -->
                        <ul class="d-flex align-items-center page-wrap ml-2">
                            @foreach ($categorias->getUrlRange(1, $categorias->lastPage()) as $page => $url)
                                @if ($page == $categorias->currentPage())
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
                        @if ($categorias->hasMorePages())
                            <a href="{{ $categorias->nextPageUrl() }}" rel="next"><i
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
