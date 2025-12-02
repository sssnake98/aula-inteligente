@extends('layouts.app')
@section('title', 'Editar Cortina')
@section('content')
<h2>✏️ Editar Cortina</h2>

<form action="{{ route('cortinas.update', $cortina) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Aula</label> <!-- ✅ Cambiado de "Ubicacion" a "Aula" -->
        <input type="text" name="ubicacion" class="form-control" value="{{ $cortina->ubicacion }}" required placeholder="Maker, Invernadero"> <!-- ✅ Nuevo placeholder -->
    </div>
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-select" required>
            <option value="abierta" {{ $cortina->estado === 'abierta' ? 'selected' : '' }}>Abierta</option>
            <option value="cerrada" {{ $cortina->estado === 'cerrada' ? 'selected' : '' }}>Cerrada</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">💾 Actualizar</button>
    <a href="{{ route('cortinas.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    
    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteModal">
        🗑️ Eliminar Cortina
    </button>
</form>

<!-- Modal de eliminación -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>¿Eliminar cortina?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                ¿Eliminar la cortina de <strong>{{ $cortina->ubicacion }}</strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <form action="{{ route('cortinas.destroy', $cortina) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">✅ Sí</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection