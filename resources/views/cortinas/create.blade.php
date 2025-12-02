@extends('layouts.app')
@section('title', 'Nueva Cortina')
@section('content')
<h2>➕ Nueva Cortina</h2>

<form action="{{ route('cortinas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Ubicación</label>
        <input type="text" name="ubicacion" class="form-control" placeholder="Ej: Aula 1, Ventana norte" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-select" required>
            <option value="abierta">Abierta</option>
            <option value="cerrada">Cerrada</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">💾 Guardar</button>
    <a href="{{ route('cortinas.index') }}" class="btn btn-secondary">❌ Cancelar</a>
</form>
@endsection