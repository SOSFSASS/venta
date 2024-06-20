@extends('template')

@section('title', 'Categorías')

@push('css')
    <!-- Aquí puedes incluir tus estilos CSS adicionales si es necesario -->
@endpush

@section('content')
    <!-- Page Inner Content Start -->
    <div class="page-inner-content">
        <div class="row no-gutters">
            <div class="col-lg-12 page-content-area">
                <div class="inner-content">
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

                    <div class="row justify-content-end icon-button">
                        <div class="col-sm-6 col-md-3">
                            <a href="{{ route('categoria.create') }}" class="btn btn-primary btn-with-icon btn-block">
                                <div class="ht-40 justify-content-between">
                                    <span class="pd-x-15">Agregar Categoría</span>
                                    <span class="icon wd-40"><i class="fa fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <hr class="mg-t-5">

                    <div class="custom-fieldset mg-b-30">
                        <div class="clearfix">
                            <form action="{{ route('categoria.index') }}" method="GET" class="form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                    <input type="text" class="form-control" id="search" name="search" placeholder="Buscar por nombre" value="{{ $search }}">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
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
                                                <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <nav>
                            <ul class="pagination justify-content-center">
                                <!-- Anterior Page Link -->
                                @if ($categorias->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link waves-effect" href=""><span class="fa fa-arrow-left"></span></span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link waves-effect" href="{{ $categorias->previousPageUrl() }}" rel="prev"><span class="fa fa-arrow-left"></span></a>
                                    </li>
                                @endif

                                <!-- Elementos de paginación -->
                                @foreach ($categorias->getUrlRange(1, $categorias->lastPage()) as $page => $url)
                                    @if ($page == $categorias->currentPage())
                                        <li class="page-item active"><span class="page-link waves-effect">{{ $page }}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link waves-effect" href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                <!-- Siguiente Page Link -->
                                @if ($categorias->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link waves-effect" href="{{ $categorias->nextPageUrl() }}" rel="next"><span class="fa fa-arrow-right"></span></a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link waves-effect" href=""><span class="fa fa-arrow-right"></span></span>
                                    </li>
                                @endif
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Inner Content End -->
@endsection

@push('js')
    <!-- Aquí puedes incluir tus scripts JavaScript adicionales si es necesario -->
@endpush
