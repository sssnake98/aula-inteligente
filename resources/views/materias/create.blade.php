@extends('layouts.app')
@section('title', 'Crear Materia')
@section('content')
<h1>➕ Crear Nueva Materia</h1>

<form action="{{ route('materias.store') }}" method="POST">
    @csrf
    <div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" required>
</div>
<div class="mb-3">
    <label>Año/Curso</label>
    <input type="text" name="anio_curso" class="form-control" placeholder="Ej: 5to A, 2025, Maker" required>
</div>
    
    <div class="mb-3">
        <label class="form-label">Carrera</label>
        <input type="text" name="carrera" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tipo de Cursado</label>
        <input type="text" name="tipo_cursado" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">💾 Guardar</button>
    <a href="{{ route('materias.index') }}" class="btn btn-secondary">❌ Cancelar</a>
</form>
@endsection