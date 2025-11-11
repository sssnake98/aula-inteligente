@extends('layouts.app')

@section('title', 'Editar Docente')

@section('content')
    <h1>✏️ Editar Docente: {{ $docente->nombre }}</h1>

    <form action="{{ route('docentes.update', $docente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $docente->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" name="especialidad" id="especialidad" class="form-control" value="{{ $docente->especialidad }}" required>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control" value="{{ $docente->dni }}" required>
        </div>
        <button type="submit" class="btn btn-success">💾 Actualizar</button>
        <a href="{{ route('docentes.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    </form>
@endsection