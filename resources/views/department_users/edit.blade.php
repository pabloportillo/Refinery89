@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Departamento asignado a usuario</h2>
        <form action="{{ route('department_users.update', ['department_user' => $department_user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">Usuario:</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    <option value="">Selecciona Usuario</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $department_user->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="department_id">Departamento:</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    <option value="">Selecciona Departamento</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" {{ $department->id == $department_user->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
