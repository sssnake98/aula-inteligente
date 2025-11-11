@extends('layouts.app')

@section('content')
    <h1>📚 Lista de Materias</h1>
    <a href="{{ route('materias.create') }}" class="btn btn-primary mb-3">➕ Crear Nueva Materia</a>

    @if($materias->isEmpty())
        <div class="alert alert-info">No hay materias registradas.</div>
    @else
        <!-- tabla con $materias -->
    @endif
@endsection