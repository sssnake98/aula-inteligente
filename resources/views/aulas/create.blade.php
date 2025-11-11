@extends('layouts.app')

@section('title', 'Crear Materia')

@section('content')
    <h1>➕ Crear Nueva Materia</h1>

    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" name="carrera" id="carrera" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tipo_cursado" class="form-label">Tipo de Cursado</label>
            <input type="text" name="tipo_cursado" id="tipo_cursado" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">💾 Guardar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    </form>
@endsection