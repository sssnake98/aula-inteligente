@extends('layouts.app')
@section('title', 'Cortinas')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>🪟 Cortinas</h2>
    <a href="{{ route('cortinas.create') }}" class="btn btn-primary">➕ Nueva Cortina</a>
</div>

@if($cortinas->isEmpty())
    <div class="alert alert-info">No hay cortinas registradas.</div>
@else
    <div class="row">
        @foreach($cortinas as $cortina)
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5>{{ $cortina->ubicacion }}</h5>
                    @if($cortina->estado === 'abierta')
                        <i class="fas fa-window-open text-success fa-3x mb-2"></i>
                        <p class="text-success"><strong>Abierta</strong></p>
                    @else
                        <i class="fas fa-window-closed text-secondary fa-3x mb-2"></i>
                        <p class="text-secondary"><strong>Cerrada</strong></p>
                    @endif
                    <a href="{{ route('cortinas.edit', $cortina) }}" class="btn btn-sm btn-warning">✏️ Editar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif
@endsection