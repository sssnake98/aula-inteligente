@extends('layouts.app')
@section('title', 'Reservas')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>📅 Reservas</h2>
    <a href="{{ route('reservas.create') }}" class="btn btn-success">➕ Nueva Reserva</a>
</div>

@if($reservas->isEmpty())
    <div class="alert alert-info">No hay reservas.</div>
@else
    <div class="row">
        @foreach($reservas as $reserva)
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    {{ $reserva->fecha->format('d/m/Y') }} | {{ $reserva->hora_inicio }} - {{ $reserva->hora_fin }}
                </div>
                <div class="card-body">
                    <p><strong>Aula:</strong> {{ $reserva->aula->nombre ?? '—' }}</p>
                    <p><strong>Materia:</strong> {{ $reserva->materia->nombre ?? '—' }}</p>
                    <p><strong>Docente:</strong> {{ $reserva->docente->nombre ?? '—' }}</p>
                    <p><small class="text-muted">{{ $reserva->tipo_origen }}</small></p>
                    <div>
                        <a href="{{ route('reservas.show', $reserva) }}" class="btn btn-sm btn-info">👁️ Ver</a>
                        <a href="{{ route('reservas.edit', $reserva) }}" class="btn btn-sm btn-warning">✏️ Editar</a>
                        <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">🗑️</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif
@endsection