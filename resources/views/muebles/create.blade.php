@extends('layouts.app')
@section('title', 'Nuevo Mueble')
@section('content')
<h2>➕ Nuevo Mueble</h2>

<form action="{{ route('muebles.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nro. Inventario</label>
        <input type="text" name="nro_inventario" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">¿Es proyector?</label>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_proyector" id="proyector_si" value="1" checked>
                <label class="form-check-label" for="proyector_si">Sí</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="es_proyector" id="proyector_no" value="0">
                <label class="form-check-label" for="proyector_no">No</label>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-select" required>
            <option value="disponible">Disponible</option>
            <option value="en_reparacion">En reparación</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">💾 Guardar</button>
    <a href="{{ route('muebles.index') }}" class="btn btn-secondary">❌ Cancelar</a>
</form>
@endsection