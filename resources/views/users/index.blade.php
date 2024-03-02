@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Usuarios</h1>
        <div class="mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-success">Crear Usuario</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Departamentos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->departments->count() > 0)
                                <ul>
                                    @foreach ($user->departments as $department)
                                        <li>{{ $department->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                Sin Departamentos asignados
                            @endif
                        </td>                        
                        <td>
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
