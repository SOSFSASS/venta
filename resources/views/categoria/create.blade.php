@extends('template')

@section('title', 'Crear Categoria')
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
                    <h1>Crear Categoría</h1>
                    <div class="custom-fieldset-style mg-b-30">
                        <div class="row">
                            <div class="container mt-5 mx-8">
                                <form action="{{ route('categoria.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label active" for="nombre">Nombre:
                                            <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('nombre') ? 'parsley-error' : '' }}"
                                            id="nombre" name="nombre" value="{{ old('nombre') }}">
                                        @if ($errors->has('nombre'))
                                            <ul class="parsley-errors-list filled">
                                                <li class="parsley-required">{{ $errors->first('nombre') }}
                                                </li>
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripción: <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('descripcion') ? 'parsley-error' : '' }}"
                                            id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                                        @if ($errors->has('descripcion'))
                                            <ul class="parsley-errors-list filled">
                                                <li class="parsley-required">
                                                    {{ $errors->first('descripcion') }}
                                                </li>
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="form-layout-footer mg-t-10">
                                        <button type="submit" class="btn btn-primary waves-effect">Crear</button>
                                        <a href="{{ route('categoria.index') }}"
                                            class="btn btn-secondary waves-effect">Volver</a>
                                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.29.2/dist/feather.min.js"></script>
@endpush
