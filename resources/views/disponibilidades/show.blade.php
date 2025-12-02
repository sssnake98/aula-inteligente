@extends('layouts.app')
@section('title', 'Detalles de Disponibilidad')
@section('content')
<h2>👁️ Detalles de Disponibilidad</h2>

<div class="card">
    <div class="card-body">
        <p><strong>Fecha:</strong> {{ $disponibilidad->fecha }}</p>
        <p><strong>Hora:</strong> {{ $disponibilidad->hora }}</p>
        <p><strong>Aula:</strong> {{ $disponibilidad->aula->nombre ?? '—' }}</p>
        <p><strong>Estado:</strong>
            @if($disponibilidad->estado === 'libre')
                <span class="badge bg-success">Libre</span>
            @else
                <span class="badge bg-danger">Ocupado</span>
            @endif
        </p>
    </div>
</div>

<div class="mt-3">
    <a href="{{ route('disponibilidades.edit', $disponibilidad) }}" class="btn btn-warning">✏️ Editar</a>
    <a href="{{ route('disponibilidades.index') }}" class="btn btn-secondary">← Volver</a>
</div>
@endsection