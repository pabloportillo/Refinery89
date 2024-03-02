@extends('layouts.app')

@section('content')
    <h1>Crear Usuario</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
