@extends('template')

@section('title', 'Editar Categoria - ' . $categoria->nombre)


@push('css')
@endpush

@section('content')

    <div class="content">
        <div class="page-header justify-content-between">
            <div class="page-title">
                <h4>EDITAR CATEGORIA</h4>
            </div>

        </div>

        <div class="card mb-0">
            <div class="card-body add-product pb-0  ">
                <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="accordion-card-one accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-controls="collapseOne">
                                    <div class="addproduct-icon">
                                        <h5><i data-feather="info" class="add-info"></i><span>Actualizar informacion de
                                                categoria</span></h5>
                                        <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                class="chevron-down-add"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-6 col-12">
                                            <div class="mb-3 add-product">
                                                <label class="form-label">Nombre de la CATEGORIA</label>
                                                <input type="text" name="nombre"
                                                    class="form-control @error('nombre') is-invalid @enderror"
                                                    value="{{ old('nombre', $categoria->nombre) }}">
                                                @error('nombre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Descripción</label>
                                                <textarea name="descripcion" class="form-control @error('descripcion') is-invalid @enderror">{{ old('descripcion', $categoria->descripcion) }}</textarea>
                                                @error('descripcion')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-addproduct mb-4">
                        <a href="{{ route('categoria.index') }}" class="btn btn-cancel">Regresar</a>
                        <button type="submit" class="btn btn-submit me-2">Actualizar</button>
                    </div>
                </form>

            </div>
        </div>

    </div>


@endsection

@push('js')
@endpush
