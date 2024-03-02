@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Departamentos</h1>
        <a href="{{ route('departments.create') }}" class="btn btn-success mb-3">Crear Departamento</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Subdepartamento de</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->name }}</td>
                        <td>
                            @if ($department->parent_id)
                                {{ $department->parent->name }}
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('departments.edit', ['department' => $department->id]) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('departments.destroy', ['department' => $department->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este departamento?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
