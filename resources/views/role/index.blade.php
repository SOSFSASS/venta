@extends('template')

@section('title', 'Roles')
<meta name="csrf-token" content="{{ csrf_token() }}">

@push('css')
@endpush

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Roles</h4>
            </div>
            <div class="page-btn">
                <a href="{{ route('roles.create') }}" class="btn btn-added">
                    <i class="fas fa-plus-circle"></i>&nbsp;Agregar Roles
                </a>
            </div>
        </div>
        {{-- TODO: es para mostrar el mensaje de confirmación --}}
        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        background: '#0a2e50',
                        color: '#fff',
                        icon: 'success',
                        title: '{{ session('success') }}',
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    });
                });
            </script>
        @endif

        @if ($errors->any())
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let errors = @json($errors->all());
                    errors.forEach(error => {
                        Swal.fire({
                            background: '#0a2e50',
                            color: '#fff',
                            icon: 'error',
                            title: 'Error',
                            text: error
                        });
                    });
                });
            </script>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            <form action="{{ route('roles.index') }}" method="GET" class="form-inline">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control form-control-sm" id="search"
                                            name="search" placeholder="Buscar por nombre" value="{{ $search }}"
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
                                <th>Rol</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
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
                        @if ($roles->onFirstPage())
                            <span><i class="fas fa-chevron-left ml-2"></i></span>
                        @else
                            <a href="{{ $roles->previousPageUrl() }}" rel="prev"><i
                                    class="fas fa-chevron-left ml-2"></i></a>
                        @endif

                        <!-- Elementos de paginación -->
                        <ul class="d-flex align-items-center page-wrap ml-2">
                            @foreach ($roles->getUrlRange(1, $roles->lastPage()) as $page => $url)
                                @if ($page == $roles->currentPage())
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
                        @if ($roles->hasMorePages())
                            <a href="{{ $roles->nextPageUrl() }}" rel="next"><i
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
