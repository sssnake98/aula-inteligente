@extends('layouts.app')
@section('title', 'Editar Aire')
@section('content')
<h2>✏️ Editar Aire #{{ $aire->id }}</h2>

<form action="{{ route('aires.update', $aire) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-select" required>
            <option value="encendido" {{ $aire->estado === 'encendido' ? 'selected' : '' }}>Encendido</option>
            <option value="apagado" {{ $aire->estado === 'apagado' ? 'selected' : '' }}>Apagado</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Mantenimiento (opcional)</label>
        <textarea name="mantenimiento" class="form-control" rows="3">{{ $aire->mantenimiento }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">💾 Actualizar</button>
    <a href="{{ route('aires.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    
    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteModal">
        🗑️ Eliminar Aire
    </button>
</form>

<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>¿Eliminar aire?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                ¿Eliminar el aire #{{ $aire->id }}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <form action="{{ route('aires.destroy', $aire) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">✅ Sí</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection