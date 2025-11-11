@extends('layouts.app')

@section('title', 'Detalles de Docente: ' . $docente->nombre)

@section('content')
    <h1>👁️ Detalles de Docente</h1>
    <p><strong>ID:</strong> {{ $docente->id }}</p>
    <p><strong>Nombre:</strong> {{ $docente->nombre }}</p>
    <p><strong>Especialidad:</strong> {{ $docente->especialidad }}</p>
    <p><strong>DNI:</strong> {{ $docente->dni }}</p>

    <a href="{{ route('docentes.edit', $docente) }}" class="btn btn-warning">✏️ Editar</a>
    <a href="{{ route('docentes.index') }}" class="btn btn-secondary">🔙 Volver</a>
@endsection