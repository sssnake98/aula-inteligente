@extends('layouts.app')

@section('title', 'Lista de Aulas')

@section('content')
    <h1>📚 Lista de Aulas</h1>
    <a href="{{ route('aulas.create') }}" class="btn btn-primary mb-3">➕ Crear Nueva Aula</a>

    @if($aulas->isEmpty())
        <div class="alert alert-info">No hay aulas registradas.</div>
    @else
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Capacidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aulas as $aula)
                    <tr>
                        <td>{{ $aula->id }}</td>
                        <td>{{ $aula->nombre }}</td>
                        <td>{{ $aula->ubicacion }}</td>
                        <td>{{ $aula->capacidad }} personas</td>
                        <td>
                            <a href="{{ route('aulas.show', $aula) }}" class="btn btn-sm btn-info">👁️ Ver</a>
                            <a href="{{ route('aulas.edit', $aula) }}" class="btn btn-sm btn-warning">✏️ Editar</a>
                            <form action="{{ route('aulas.destroy', $aula) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar esta aula?')">🗑️ Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection