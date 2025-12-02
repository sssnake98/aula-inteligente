@extends('layouts.app')
@section('title', 'Muebles')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>🪑 Muebles</h2>
    <a href="{{ route('muebles.create') }}" class="btn btn-primary">➕ Nuevo Mueble</a>
</div>

@if($muebles->isEmpty())
    <div class="alert alert-info">No hay muebles registrados.</div>
@else
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Inventario</th>
                <th>Proyector</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($muebles as $mueble)
            <tr>
                <td>{{ $mueble->id }}</td>
                <td>{{ $mueble->nombre }}</td>
                <td>{{ $mueble->nro_inventario }}</td>
                <td>{{ $mueble->es_proyector ? '✅ Sí' : '❌ No' }}</td>
                <td>
                    @if($mueble->estado === 'disponible')
                        <span class="badge bg-success">Disponible</span>
                    @else
                        <span class="badge bg-warning text-dark">En reparación</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('muebles.edit', $mueble) }}" class="btn btn-sm btn-warning">✏️</a>
                    <form action="{{ route('muebles.destroy', $mueble) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">🗑️</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection