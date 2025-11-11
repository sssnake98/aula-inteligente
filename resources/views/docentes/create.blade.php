@extends('layouts.app')

@section('title', 'Crear Docente')

@section('content')
    <h1>➕ Crear Nuevo Docente</h1>

    <form action="{{ route('docentes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" name="especialidad" id="especialidad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">💾 Guardar</button>
        <a href="{{ route('docentes.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    </form>
@endsection