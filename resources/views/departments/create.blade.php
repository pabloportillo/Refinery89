@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Departamento</h1>
        <form action="{{ route('departments.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="parent_id" class="form-label">Departamento Padre:</label>
                <select class="form-select" id="parent_id" name="parent_id">
                    <option value="">Sin Departamento Padre</option>
                    @foreach ($departments as $dept)
                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@endsection
