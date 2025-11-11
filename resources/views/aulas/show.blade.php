@extends('layouts.app')

@section('title', 'Detalles de Materia: ' . $materia->nombre)

@section('content')
    <h1>👁️ Detalles de Materia</h1>
    <p><strong>ID:</strong> {{ $materia->id }}</p>
    <p><strong>Nombre:</strong> {{ $materia->nombre }}</p>
    <p><strong>Carrera:</strong> {{ $materia->carrera }}</p>
    <p><strong>Tipo de Cursado:</strong> {{ $materia->tipo_cursado }}</p>

    <a href="{{ route('materias.edit', $materia) }}" class="btn btn-warning">✏️ Editar</a>
    <a href="{{ route('materias.index') }}" class="btn btn-secondary">🔙 Volver</a>
@endsection