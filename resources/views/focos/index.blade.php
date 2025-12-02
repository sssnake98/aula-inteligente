@extends('layouts.app')
@section('title', 'Focos')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>💡 Focos</h2>
    <a href="{{ route('focos.create') }}" class="btn btn-primary">➕ Nuevo Foco</a>
</div>

@if($focos->isEmpty())
    <div class="alert alert-info">No hay focos registrados.</div>
@else
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th>Código</th>
                <th>Tipo</th>
                <th>Intensidad</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($focos as $foco)
            <tr>
                <td><code>{{ $foco->codigo }}</code></td>
                <td>{{ $foco->tipo }}</td>
                <td>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-warning" style="width: {{ $foco->intensidad }}%;"></div>
                    </div>
                    <small>{{ $foco->intensidad }}%</small>
                </td>
                <td>{{ $foco->ubicacion }}</td>
                <td>
                    <a href="{{ route('focos.edit', $foco) }}" class="btn btn-sm btn-warning">✏️</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection