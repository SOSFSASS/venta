@extends('template')

@section('title', 'Perfil de Usuario')

@push('css')
@endpush

@section('content')

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Perfil</h4>
            <h6>Perfil de Usuario</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="profile-set">
                <div class="profile-head"></div>
                <div class="profile-top">
                    <div class="profile-content">
                        <div class="profile-contentimg">
                            <img src="{{ $user->imagen ? Storage::url('public/user/' . $user->imagen) : 'assets/img/customer/customer5.jpg' }}" alt="img" id="blah">
                           
                        </div>
                        <div class="profile-contentname">
                            <h2>{{ $user->name }}</h2>
                            <h4>Datos personales.</h4>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="input-blocks">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="input-blocks">
                            <label class="form-label">Apellido</label>
                            <input type="text" class="form-control" value="{{ $user->apellido }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="input-blocks">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="input-blocks">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control" value="{{ $user->telefono }}" readonly>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-submit me-2">Editar Perfil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
@endpush
