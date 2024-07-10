@extends('template')

@section('title', 'Crear un Rol')

@push('css')
<style>
    #cuadro{
        background: #FAFBFE;
        padding: 20px;
        border-radius: 20px;
        max-width: 400px;
        border: 2px solid #5B6670;
    }
    .module-permissions {
        margin-bottom: 20px;
    }
    .module-permissions h5 {
        margin-bottom: 10px;
    }
    .permission-checkbox {
        margin-right: 15px;
    }
</style>
@endpush

@section('content')

    <div class="content">
        <div class="page-header justify-content-between">
            <div class="page-title">
                <h4>CREAR ROL</h4>
            </div>           
        </div>

        <div class="card mb-0">
            <div class="card-body add-product pb-0">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="accordion-card-one accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-controls="collapseOne">
                                    <div class="addproduct-icon">
                                        <h5><i data-feather="info" class="add-info"></i><span>Ingrese sus datos</span>
                                        </h5>
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
                                                <label class="form-label">Nombre del Rol</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mb-4">
                                            @php
                                                $modules = [];
                                            @endphp
                                            @foreach ($permissions as $permiso)
                                                @php
                                                    $parts = explode('-', $permiso->name);
                                                    $action = $parts[0];
                                                    $module = $parts[1];
                                                    $modules[$module][$action] = $permiso->id;
                                                @endphp
                                            @endforeach

                                            @foreach ($modules as $module => $actions)
                                                <div class="module-permissions mb-4">
                                                    <h5>{{ ucfirst($module) }}</h5>
                                                    <div id="cuadro" class="d-flex flex-wrap">
                                                        @if (isset($actions['crear']))
                                                            <div class="permission-checkbox me-3">
                                                                <label>Crear</label>
                                                                <div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
                                                                    <input type="checkbox" id="create-{{ $module }}" name="permissions[]" value="{{ $actions['crear'] }}" class="check module-{{ $module }}">
                                                                    <label for="create-{{ $module }}" class="checktoggle"></label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (isset($actions['editar']))
                                                            <div class="permission-checkbox me-3">
                                                                <label>Editar</label>
                                                                <div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
                                                                    <input type="checkbox" id="edit-{{ $module }}" name="permissions[]" value="{{ $actions['editar'] }}" class="check module-{{ $module }}">
                                                                    <label for="edit-{{ $module }}" class="checktoggle"></label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (isset($actions['eliminar']))
                                                            <div class="permission-checkbox me-3">
                                                                <label>Eliminar</label>
                                                                <div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
                                                                    <input type="checkbox" id="delete-{{ $module }}" name="permissions[]" value="{{ $actions['eliminar'] }}" class="check module-{{ $module }}">
                                                                    <label for="delete-{{ $module }}" class="checktoggle"></label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (isset($actions['ver']))
                                                            <div class="permission-checkbox me-3">
                                                                <label>Ver</label>
                                                                <div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
                                                                    <input type="checkbox" id="view-{{ $module }}" name="permissions[]" value="{{ $actions['ver'] }}" class="check module-{{ $module }}">
                                                                    <label for="view-{{ $module }}" class="checktoggle"></label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="permission-checkbox me-3">
                                                            <label>Todos</label>
                                                            <div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
                                                                <input type="checkbox" id="allow-all-{{ $module }}" class="check allow-all" data-module="{{ $module }}">
                                                                <label for="allow-all-{{ $module }}" class="checktoggle"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @error('permissions')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-addproduct mb-4">
                        <a href="{{ route('roles.index') }}" class="btn btn-cancel">Regresar</a>
                        <button type="submit" class="btn btn-submit me-2">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var allowAllCheckboxes = document.querySelectorAll('.allow-all');
        for (var checkbox of allowAllCheckboxes) {
            checkbox.addEventListener('change', function() {
                var module = this.dataset.module;
                var moduleCheckboxes = document.querySelectorAll('.module-' + module);
                for (var moduleCheckbox of moduleCheckboxes) {
                    moduleCheckbox.checked = this.checked;
                }
            });
        });
    });
</script>
@endpush
