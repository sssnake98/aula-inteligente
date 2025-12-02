@extends('layouts.app')
@section('title', 'Nuevo Foco')
@section('content')
<h2>➕ Nuevo Foco</h2>

<form action="{{ route('focos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Código (único)</label>
        <input type="text" name="codigo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input type="text" name="tipo" class="form-control" placeholder="LED, Halógeno, etc." required>
    </div>
    <div class="mb-3">
        <label class="form-label">Intensidad (%)</label>
        <input type="range" name="intensidad" class="form-range" min="0" max="100" value="100" id="intensidadRange">
        <output for="intensidadRange" id="intensidadValue">100%</output>
    </div>
    <div class="mb-3">
        <label class="form-label">Ubicación</label>
        <input type="text" name="ubicacion" class="form-control" placeholder="Ej: Aula 3, Techo central" required>
    </div>
    <button type="submit" class="btn btn-success">💾 Guardar</button>
    <a href="{{ route('focos.index') }}" class="btn btn-secondary">❌ Cancelar</a>
</form>

<script>
document.getElementById('intensidadRange').addEventListener('input', function() {
    document.getElementById('intensidadValue').textContent = this.value + '%';
});
</script>
@endsection