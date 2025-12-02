@extends('layouts.app')
@section('title', 'Disponibilidad')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>⏰ Disponibilidad</h2>
    <a href="{{ route('disponibilidades.create') }}" class="btn btn-primary">➕ Nueva</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($disponibilidades->isEmpty())
    <div class="alert alert-info">No hay registros de disponibilidad.</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Aula</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($disponibilidades as $d)
                <tr>
                    <td>{{ $d->fecha }}</td>
                    <td>{{ $d->hora }}</td>
                    <td>{{ $d->aula->nombre ?? '—' }}</td>
                    <td>
                        @if($d->estado === 'libre')
                            <span class="badge bg-success">Libre</span>
                        @else
                            <span class="badge bg-danger">Ocupado</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('disponibilidades.show', $d) }}" class="btn btn-sm btn-info">👁️</a>
                        <a href="{{ route('disponibilidades.edit', $d) }}" class="btn btn-sm btn-warning">✏️</a>
                        <form action="{{ route('disponibilidades.destroy', $d) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">🗑️</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection