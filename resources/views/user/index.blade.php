@extends('template')

@section('title', 'Usuarios')

@push('css')
<!-- Aquí puedes añadir CSS adicional si es necesario -->
@endpush

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Usuarios</h4>
            <h6>Lista de usuarios</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <div class="userimgname">

                                <a href="javascript:void(0);" class="userslist-img">
                                    @if ($user->imagen)
                                        <img src="{{ asset('storage/user/' . $user->imagen) }}" alt="user">
                                    @else
                                        <img src="{{ asset('assets/img/customer/customer5.jpg') }}" alt="user">
                                    @endif
                                </a>
                            </div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('js')
<!-- Aquí puedes añadir JavaScript adicional si es necesario -->
@endpush
