@extends('layouts.app')
@section('title', 'Aires Acondicionados')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>❄️ Aires Acondicionados</h2>
    <a href="{{ route('aires.create') }}" class="btn btn-primary">➕ Nuevo Aire</a>
</div>

@if($aires->isEmpty())
    <div class="alert alert-info">No hay aires acondicionados registrados.</div>
@else
    <div class="row">
        @foreach($aires as $aire)
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Aire #{{ $aire->id }}
                </div>
                <div class="card-body">
                    <p><strong>Estado:</strong> 
                        @if($aire->estado === 'encendido')
                            <span class="badge bg-success">Encendido</span>
                        @else
                            <span class="badge bg-secondary">Apagado</span>
                        @endif
                    </p>
                    @if($aire->mantenimiento)
                        <p><small class="text-muted">Mantenimiento: {{ $aire->mantenimiento }}</small></p>
                    @endif
                    <a href="{{ route('aires.edit', $aire) }}" class="btn btn-sm btn-warning">✏️ Editar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif
@endsection