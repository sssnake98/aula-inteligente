@extends('layouts.app')
@section('title', 'Editar Disponibilidad')
@section('content')
<h2>✏️ Editar Disponibilidad</h2>

<form action="{{ route('disponibilidades.update', $disponibilidad) }}" method="POST">
    @csrf @method('PUT')
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $disponibilidad->fecha }}" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Hora</label>
            <input type="time" name="hora" class="form-control" value="{{ $disponibilidad->hora }}" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Aula</label>
            <select name="aula_id" class="form-select" required>
                <option value="">Seleccionar...</option>
                @foreach($aulas as $aula)
                    <option value="{{ $aula->id }}" {{ $aula->id == $disponibilidad->aula_id ? 'selected' : '' }}>
                        {{ $aula->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <label class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                <option value="libre" {{ $disponibilidad->estado == 'libre' ? 'selected' : '' }}>Libre</option>
                <option value="ocupado" {{ $disponibilidad->estado == 'ocupado' ? 'selected' : '' }}>Ocupado</option>
            </select>
        </div>
    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-primary">💾 Actualizar</button>
        <a href="{{ route('disponibilidades.index') }}" class="btn btn-secondary">❌ Cancelar</a>
    </div>
</form>
@endsection