@extends('template')

@section('title', 'Editar Cliente')

@push('css')
    <style>
        /* Aquí puedes añadir estilos adicionales si es necesario */
    </style>
@endpush

@section('content')

    <div class="content">
        <div class="page-header justify-content-between">
            <div class="page-title">
                <h4>EDITAR CLIENTE</h4>
            </div>
            <ul class="table-top-head">
                <!-- Aquí puedes añadir elementos adicionales si es necesario -->
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Actualizar Cliente</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" id="nombre" name="nombre"
                                                class="form-control @error('nombre') is-invalid @enderror"
                                                value="{{ old('nombre', $cliente->nombre) }}">
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
                                                value="{{ old('apellido', $cliente->apellido) }}">
                                            @error('apellido')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" id="grupocss">
                                            <label for="tipo_identificacion" class="form-label">Tipo de Identificación</label>
                                            <div class="status-updates">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="tipo_identificacion" id="tipo_identificacion_RUC"
                                                        value="RUC"
                                                        {{ old('tipo_identificacion', $cliente->tipo_identificacion) == 'RUC' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="tipo_identificacion_RUC">
                                                        RUC
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="tipo_identificacion" id="tipo_identificacion_DNI"
                                                        value="DNI"
                                                        {{ old('tipo_identificacion', $cliente->tipo_identificacion) == 'DNI' ? 'checked' : '' }}>
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

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="documento" class="form-label">Documento</label>
                                            <input type="text" id="documento" name="documento"
                                                class="form-control @error('documento') is-invalid @enderror"
                                                value="{{ old('documento', $cliente->documento) }}">
                                            @error('documento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="telefono" class="form-label">Teléfono</label>
                                            <input type="text" id="telefono" name="telefono"
                                                class="form-control @error('telefono') is-invalid @enderror"
                                                value="{{ old('telefono', $cliente->telefono) }}">
                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="correo" class="form-label">Correo</label>
                                            <input type="email" id="correo" name="correo"
                                                class="form-control @error('correo') is-invalid @enderror"
                                                value="{{ old('correo', $cliente->correo) }}">
                                            @error('correo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="direccion" class="form-label">Dirección</label>
                                            <input type="text" id="direccion" name="direccion"
                                                class="form-control @error('direccion') is-invalid @enderror"
                                                value="{{ old('direccion', $cliente->direccion) }}">
                                            @error('direccion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-addproduct mt-4">
                                    <a href="{{ route('cliente.index') }}" class="btn btn-cancel">Regresar</a>
                                    <button type="submit" class="btn btn-submit me-2">Actualizar</button>
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
    <!-- Aquí puedes añadir scripts adicionales si es necesario -->
@endpush
