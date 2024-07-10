@extends('template')

@section('title', 'Editar Rol')

@push('css')
<style>
    .cuadro{
        background: #771515;
        padding: 20px;
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
                <h4>EDITAR ROL</h4>
            </div>           
        </div>

        <div class="card mb-0">
            <div class="card-body add-product pb-0">
                <form action="{{ route('roles.update', $role->id) }}" method="POST">
                    @csrf
                    @method('PUT')
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
                                                    value="{{ old('name', $role->name) }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <div class="table-responsive">
                                                <table class="table datanew table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Modules</th>
                                                            <th>Create</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                            <th>View</th>
                                                            <th>Allow all</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
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
                                                            <tr class="cuadro">
                                                                <td>{{ ucfirst($module) }}</td>
                                                                <td>
                                                                    @if (isset($actions['crear']))
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox" name="permissions[]" value="{{ $actions['crear'] }}" class="module-{{ $module }}" {{ in_array($actions['crear'], $rolePermissions) ? 'checked' : '' }}>
                                                                            <span class="checkmarks"></span>
                                                                        </label>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if (isset($actions['editar']))
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox" name="permissions[]" value="{{ $actions['editar'] }}" class="module-{{ $module }}" {{ in_array($actions['editar'], $rolePermissions) ? 'checked' : '' }}>
                                                                            <span class="checkmarks"></span>
                                                                        </label>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if (isset($actions['eliminar']))
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox" name="permissions[]" value="{{ $actions['eliminar'] }}" class="module-{{ $module }}" {{ in_array($actions['eliminar'], $rolePermissions) ? 'checked' : '' }}>
                                                                            <span class="checkmarks"></span>
                                                                        </label>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if (isset($actions['ver']))
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox" name="permissions[]" value="{{ $actions['ver'] }}" class="module-{{ $module }}" {{ in_array($actions['ver'], $rolePermissions) ? 'checked' : '' }}>
                                                                            <span class="checkmarks"></span>
                                                                        </label>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" class="allow-all" data-module="{{ $module }}">
                                                                        <span class="checkmarks"></span>
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
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

        // Initialize allow-all checkboxes based on the state of individual checkboxes
        allowAllCheckboxes.forEach(function(checkbox) {
            var module = checkbox.dataset.module;
            var moduleCheckboxes = document.querySelectorAll('.module-' + module);
            checkbox.checked = Array.from(moduleCheckboxes).every(function(moduleCheckbox) {
                return moduleCheckbox.checked;
            });
        });
    });
</script>
@endpush
