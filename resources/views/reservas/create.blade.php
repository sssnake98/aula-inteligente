@extends('layouts.app')
@section('title', 'Nueva Reserva')
@section('content')
<h2>➕ Nueva Reserva</h2>

<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Hora Inicio</label>
            <input type="time" name="hora_inicio" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Hora Fin</label>
            <input type="time" name="hora_fin" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Aula</label>
            <select name="aula_id" class="form-select" required>
                <option value="">Seleccionar...</option>
                @foreach($aulas as $aula)
                    <option value="{{ $aula->id }}">{{ $aula->nombre }} ({{ $aula->capacidad }} pers.)</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Materia (opcional)</label>
            <select name="materia_id" class="form-select">
                <option value="">— Ninguna —</option>
                @foreach($materias as $materia)
                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Docente (opcional)</label>
            <select name="docente_id" class="form-select">
                <option value="">— Ninguno —</option>
                @foreach($docentes as $docente)
                    <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                @endforeach
            </select>
        </div>
</form>
@endsection