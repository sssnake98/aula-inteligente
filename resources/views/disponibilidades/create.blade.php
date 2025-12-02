@extends('layouts.app')
@section('title', 'Nueva Disponibilidad')
@section('content')
<h2>➕ Registrar Disponibilidad</h2>

<form action="{{ route('disponibilidades.store') }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Hora</label>
            <input type="time" name="hora" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Aula</label>
            <select name="aula_id" class="form-select" required>
                <option value="">Seleccionar...</option>
                @foreach($aulas as $aula)
                    <option value="{{ $aula->id }}">{{ $aula->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <label class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                <option value="libre">Libre</option>
                <option value="ocupado">Ocupado</option>
            </select>
        </div>
    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-primary">💾 Guardar</button>
        <a href="{{ route('disponibilidades.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    </div>
</form>
@endsection