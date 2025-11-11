@extends('layouts.app')

@section('title', 'Lista de Docentes')

@section('content')
    <h1>👨‍🏫 Lista de Docentes</h1>
    <a href="{{ route('docentes.create') }}" class="btn btn-primary mb-3">➕ Crear Nuevo Docente</a>

    @if($docentes->isEmpty())
        <div class="alert alert-info">No hay docentes registrados.</div>
    @else
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>DNI</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($docentes as $docente)
                    <tr>
                        <td>{{ $docente->id }}</td>
                        <td>{{ $docente->nombre }}</td>
                        <td>{{ $docente->especialidad }}</td>
                        <td>{{ $docente->dni }}</td>
                        <td>
                            <a href="{{ route('docentes.show', $docente) }}" class="btn btn-sm btn-info">👁️ Ver</a>
                            <a href="{{ route('docentes.edit', $docente) }}" class="btn btn-sm btn-warning">✏️ Editar</a>
                            <form action="{{ route('docentes.destroy', $docente) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este docente?')">🗑️ Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection