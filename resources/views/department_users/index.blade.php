@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Usuarios asignados a Departamentos</h2>
        <a href="{{ route('department_users.create') }}" class="btn btn-success mb-3">Asignar usuario a Departamento</a>

        @if ($departmentUsers->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departmentUsers as $departmentUser)
                        <tr>
                            <td>{{ $departmentUser->user->name }}</td>
                            <td>{{ $departmentUser->department->name }}</td>
                            <td>
                                {{-- <a href="{{ route('department_users.show', $departmentUser->id) }}" class="btn btn-info btn-sm">View</a> --}}
                                <a href="{{ route('department_users.edit', $departmentUser->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('department_users.destroy', $departmentUser->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this department user?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No department users found.</p>
        @endif
    </div>
@endsection
