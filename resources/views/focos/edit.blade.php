@extends('layouts.app')
@section('title', 'Editar Foco')
@section('content')
<h2>✏️ Editar Foco: {{ $foco->codigo }}</h2>

<form action="{{ route('focos.update', $foco) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Código (único)</label>
        <input type="text" name="codigo" class="form-control" value="{{ $foco->codigo }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input type="text" name="tipo" class="form-control" value="{{ $foco->tipo }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Intensidad (%)</label>
        <input type="range" name="intensidad" class="form-range" min="0" max="100" value="{{ $foco->intensidad }}" id="intensidadRange">
        <output for="intensidadRange" id="intensidadValue">{{ $foco->intensidad }}%</output>
    </div>
    <div class="mb-3">
        <label class="form-label">Ubicación</label>
        <input type="text" name="ubicacion" class="form-control" value="{{ $foco->ubicacion }}" required> <!-- ✅ Sin placeholder -->
    </div>
    <button type="submit" class="btn btn-success">💾 Actualizar</button>
    <a href="{{ route('focos.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    
    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#deleteModal">
        🗑️ Eliminar Foco
    </button>
</form>

<!-- Modal de eliminación (igual que arriba) -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>¿Eliminar foco?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                ¿Eliminar el foco <code>{{ $foco->codigo }}</code>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <form action="{{ route('focos.destroy', $foco) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">✅ Sí</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('intensidadRange').addEventListener('input', function() {
    document.getElementById('intensidadValue').textContent = this.value + '%';
});
</script>
@endsection