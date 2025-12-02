@extends('layouts.app')
@section('title', 'Crear Aula')
@section('content')
<h1>➕ Crear Nueva Aula</h1>

<form action="{{ route('aulas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Aula</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="curso_anio" class="form-label">Curso/Año</label>
        <input type="text" name="curso_anio" id="curso_anio" class="form-control" required placeholder="Ej: 5to A, Maker, Invernadero">
    </div>
    <div class="mb-3">
        <label for="capacidad" class="form-label">Capacidad (personas)</label>
        <input type="number" name="capacidad" id="capacidad" class="form-control" min="1" required>
    </div>
    <button type="submit" class="btn btn-success">💾 Guardar</button>
    <a href="{{ route('aulas.index') }}" class="btn btn-secondary">❌ Cancelar</a>
</form>
@endsection