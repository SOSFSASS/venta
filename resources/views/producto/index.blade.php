@extends('template')

@section('title', 'Productos')

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
                            <a href="{{ route('producto.create') }}" class="btn btn-primary btn-with-icon btn-block">
                                <div class="ht-40 justify-content-between">
                                    <span class="pd-x-15">Agregar Productos</span>
                                    <span class="icon wd-40"><i class="fa fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <hr class="mg-t-5">

                    <div class="custom-fieldset mg-b-30">
                        <div class="clearfix">
                            <form action="{{ route('producto.index') }}" method="GET" class="form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                    <input type="text" class="form-control" id="search" name="search"
                                        placeholder="Buscar productos" value="{{ $search }}">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        
                                        <th>Nombre</th>
                                        <th>Codigo</th>
                                        <th>Descripción</th>
                                        <th>Precio de Compra</th>
                                        <th>Costo de Venta</th>
                                        <th>Stock</th>
                                        <th>Fecha de Vencimiento</th>
                                        <th>Categoría</th>
                                        <th>Estado</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td class="productimgname">
                                                <a href="javascript:void(0);" class="product-img">
                                                    @if ($producto->imagen)
                                                        <img src="{{ asset('storage/product/' . $producto->imagen) }}"
                                                            alt="product">
                                                    @else
                                                        <img src="{{ asset('public/storage/product/product1.jpg') }}"
                                                            alt="product">
                                                    @endif
                                                </a>
                                                <a href="{{ route('producto.show', $producto->id) }}"
                                                    id="producto-link">{{ strlen($producto->nombre) > 20 ? substr($producto->nombre, 0, 20) . '...' : $producto->nombre }}</a>
        
                                            </td>
                                            <td>{{ $producto->codigo }}</td>                                            
                                            <td>{{ $producto->descripcion }}</td>
                                            <td><span>S/.</span>&nbsp;{{ $producto->precio_compra }}</td>
                                            <td><span>S/.</span>&nbsp;{{ $producto->costo_venta }}</td>
                                            <td>
                                                @if ($producto->stock < 10)
                                                    <span class="badge bg-danger">
                                                        {{ $producto->stock }} UND
                                                    </span>
                                                @else
                                                    {{ $producto->stock }}
                                                @endif
                                            </td>
                                            <td>{{ $producto->fechaven }}</td>
                                            <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                                            <td>
                                                <span class="badge badge-pill {{ $producto->estado ? 'badge-success' : 'badge-danger' }}">
                                                    {{ $producto->estado ? 'Activo' : 'Inactivo' }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('producto.show', $producto->id) }}"
                                                    class="btn btn-info"><i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('producto.edit', $producto->id) }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('producto.destroy', $producto->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash-o"></i></button>
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
                                @if ($productos->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link waves-effect" href=""><span
                                                class="fa fa-arrow-left"></span></span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link waves-effect" href="{{ $productos->previousPageUrl() }}"
                                            rel="prev"><span class="fa fa-arrow-left"></span></a>
                                    </li>
                                @endif

                                <!-- Elementos de paginación -->
                                @foreach ($productos->getUrlRange(1, $productos->lastPage()) as $page => $url)
                                    @if ($page == $productos->currentPage())
                                        <li class="page-item active"><span
                                                class="page-link waves-effect">{{ $page }}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link waves-effect"
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                <!-- Siguiente Page Link -->
                                @if ($productos->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link waves-effect" href="{{ $productos->nextPageUrl() }}"
                                            rel="next"><span class="fa fa-arrow-right"></span></a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link waves-effect" href=""><span
                                                class="fa fa-arrow-right"></span></span>
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
