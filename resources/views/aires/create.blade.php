@extends('layouts.app')
@section('title', 'Nuevo Aire')
@section('content')
<h2>➕ Nuevo Aire Acondicionado</h2>

<form action="{{ route('aires.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-select" required>
            <option value="encendido">Encendido</option>
            <option value="apagado">Apagado</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Mantenimiento (opcional)</label>
        <textarea name="mantenimiento" class="form-control" rows="3" placeholder="Ej: Filtro limpio el 10/12/2025"></textarea>
    </div>
    <button type="submit" class="btn btn-success">💾 Guardar</button>
    <a href="{{ route('aires.index') }}" class="btn btn-secondary">❌ Cancelar</a>
</form>
@endsection