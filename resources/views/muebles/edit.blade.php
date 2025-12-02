@extends('layouts.app')
@section('title', 'Editar Mueble')
@section('content')
<h2>✏️ Editar Mueble: {{ $mueble->nombre }}</h2>

<form action="{{ route('muebles.update', $mueble) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ $mueble->nombre }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nro. Inventario</label>
        <input type="text" name="nro_inventario" class="form-control" value="{{ $mueble->nro_inventario }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">¿Es proyector?</label>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_proyector" value="1" {{ $mueble->es_proyector ? 'checked' : '' }}>
                <label class="form-check-label">Sí</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_proyector" value="0" {{ !$mueble->es_proyector ? 'checked' : '' }}>
                <label class="form-check-label">No</label>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-select" required>
            <option value="disponible" {{ $mueble->estado === 'disponible' ? 'selected' : '' }}>Disponible</option>
            <option value="en_reparacion" {{ $mueble->estado === 'en_reparacion' ? 'selected' : '' }}>En reparación</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">💾 Actualizar</button>
    <a href="{{ route('muebles.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    
    <!-- ✅ Botón para eliminar -->
    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteModal">
        🗑️ Eliminar Mueble
    </button>
</form>

<!-- Modal de confirmación -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Eliminar este mueble?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de eliminar <strong>{{ $mueble->nombre }}</strong>? Esta acción no se puede deshacer.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="{{ route('muebles.destroy', $mueble) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">✅ Sí, eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection