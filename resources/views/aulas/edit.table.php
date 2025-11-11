@extends('layouts.app')

@section('title', 'Editar Materia')

@section('content')
    <h1>✏️ Editar Materia: {{ $materia->nombre }}</h1>

    <form action="{{ route('materias.update', $materia) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $materia->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" name="carrera" id="carrera" class="form-control" value="{{ $materia->carrera }}" required>
        </div>
        <div class="mb-3">
            <label for="tipo_cursado" class="form-label">Tipo de Cursado</label>
            <input type="text" name="tipo_cursado" id="tipo_cursado" class="form-control" value="{{ $materia->tipo_cursado }}" required>
        </div>
        <button type="submit" class="btn btn-success">💾 Actualizar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    </form>
@endsection