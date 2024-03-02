@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
