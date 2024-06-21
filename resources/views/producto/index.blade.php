@extends('template')

@section('title', 'Productos')

@push('css')
    <!-- Aquí puedes incluir tus estilos CSS adicionales si es necesario -->
@endpush

@section('content')
    <!-- Page Inner Content Start -->
    {{-- <div class="page-inner-content">
        <div class="row no-gutters">
            <div class="col-lg-12 page-content-area">
                <div class="inner-content">
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
    </div> --}}
    <!-- Page Inner Content End -->

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Productos</h4>
            </div>
            <div class="page-btn">
                <a href="{{ route('producto.create') }}" class="btn btn-added">
                    <i class="fas fa-plus-circle"></i>&nbsp;Agregar productos
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
                            <form action="{{ route('producto.index') }}" method="GET" class="form-inline">
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
                                <th>Codigo</th>
                                <th>P. Compra</th>
                                <th>P. Venta</th>
                                <th>Stock</th>
                                <th>F. Vencimiento</th>
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
                                    <td>
                                        @if ($producto->fechaven)
                                            {{ \Carbon\Carbon::parse($producto->fechaven)->format('d-m-Y') }}
                                        @endif
                                    </td>
                                    
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
                        @if ($productos->onFirstPage())
                            <span><i class="fas fa-chevron-left ml-2"></i></span>
                        @else
                            <a href="{{ $productos->previousPageUrl() }}" rel="prev"><i
                                    class="fas fa-chevron-left ml-2"></i></a>
                        @endif

                        <!-- Elementos de paginación -->
                        <ul class="d-flex align-items-center page-wrap ml-2">
                            @foreach ($productos->getUrlRange(1, $productos->lastPage()) as $page => $url)
                                @if ($page == $productos->currentPage())
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
                        @if ($productos->hasMorePages())
                            <a href="{{ $productos->nextPageUrl() }}" rel="next"><i
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
    <!-- Aquí puedes incluir tus scripts JavaScript adicionales si es necesario -->
@endpush
