@extends('template')

@section('title', 'Productos')


@push('css')
@endpush

@section('content')

    <div class="content">
        <div class="page-header justify-content-between">
            <div class="page-title">
                <h4>MANTENIMIENTO DE PRODUCTOS</h4>
            </div>
            <ul class="table-top-head">


            </ul>
        </div>

        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Crear Nuevo Cliente</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cliente.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" name="nombre"
                                           class="form-control @error('nombre') is-invalid @enderror"
                                           value="{{ old('nombre') }}" >
                                    @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                             
                                <div class="form-group">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" name="apellido"
                                           class="form-control @error('apellido') is-invalid @enderror"
                                           value="{{ old('apellido') }}" >
                                    @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tipo_identificacion" class="form-label">Tipo de Identificación</label>
                                    <select name="tipo_identificacion" class="form-control @error('tipo_identificacion') is-invalid @enderror" >
                                        <option value="RUC" {{ old('tipo_identificacion') == 'RUC' ? 'selected' : '' }}>RUC</option>
                                        <option value="DNI" {{ old('tipo_identificacion') == 'DNI' ? 'selected' : '' }}>DNI</option>
                                    </select>
                                    @error('tipo_identificacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Documento</label>
                                    <input type="text" name="documento"
                                           class="form-control @error('documento') is-invalid @enderror"
                                           value="{{ old('documento') }}" >
                                    @error('documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Correo</label>
                                    <input type="email" name="correo"
                                           class="form-control @error('correo') is-invalid @enderror"
                                           value="{{ old('correo') }}" >
                                    @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Teléfono</label>
                                    <input type="text" name="telefono"
                                           class="form-control @error('telefono') is-invalid @enderror"
                                           value="{{ old('telefono') }}" >
                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Dirección</label>
                                    <input type="text" name="direccion"
                                           class="form-control @error('direccion') is-invalid @enderror"
                                           value="{{ old('direccion') }}" >
                                    @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-submit">Crear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Crear Nuevo Cliente</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cliente.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" id="nombre" name="nombre"
                                                class="form-control @error('nombre') is-invalid @enderror"
                                                value="{{ old('nombre') }}" required>
                                            @error('nombre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apellido" class="form-label">Apellido</label>
                                            <input type="text" id="apellido" name="apellido"
                                                class="form-control @error('apellido') is-invalid @enderror"
                                                value="{{ old('apellido') }}" required>
                                            @error('apellido')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="tipo_identificacion" class="form-label">Tipo de
                                                Identificación</label>
                                            <div class="status-updates">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="tipo_identificacion" id="tipo_identificacion_RUC"
                                                        value="RUC"
                                                        {{ old('tipo_identificacion') == 'RUC' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="tipo_identificacion_RUC">
                                                        RUC
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="tipo_identificacion" id="tipo_identificacion_DNI"
                                                        value="DNI"
                                                        {{ old('tipo_identificacion') == 'DNI' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="tipo_identificacion_DNI">
                                                        DNI
                                                    </label>
                                                </div>
                                            </div>
                                            @error('tipo_identificacion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="documento" class="form-label">Documento</label>
                                            <input type="text" id="documento" name="documento"
                                                class="form-control @error('documento') is-invalid @enderror"
                                                value="{{ old('documento') }}" required>
                                            @error('documento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="correo" class="form-label">Correo</label>
                                            <input type="email" id="correo" name="correo"
                                                class="form-control @error('correo') is-invalid @enderror"
                                                value="{{ old('correo') }}" required>
                                            @error('correo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefono" class="form-label">Teléfono</label>
                                            <input type="text" id="telefono" name="telefono"
                                                class="form-control @error('telefono') is-invalid @enderror"
                                                value="{{ old('telefono') }}">
                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="direccion" class="form-label">Dirección</label>
                                    <input type="text" id="direccion" name="direccion"
                                        class="form-control @error('direccion') is-invalid @enderror"
                                        value="{{ old('direccion') }}">
                                    @error('direccion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>


@endsection

@push('js')
@endpush
