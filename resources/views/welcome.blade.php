@extends('layouts.app')

@section('title', 'Bienvenido a Aula Inteligente')

@section('content')
<div class="hero-section">
    <div class="container">
        <h1>🏫 Aula Inteligente</h1>
        <p>Un sistema moderno para gestionar aulas, reservas, docentes y recursos tecnológicos en tu institución educativa.</p>
        <a href="{{ route('dashboard') }}" class="btn btn-landing">
            <i class="fas fa-arrow-right me-2"></i> ¡Comenzar ahora!
        </a>
    </div>
</div>

<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="p-4">
                <div class="display-4 text-primary mb-3">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Gestión Inteligente</h3>
                <p>Controla aulas, equipos y horarios desde un solo lugar.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4">
                <div class="display-4 text-success mb-3">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>Reservas en Tiempo Real</h3>
                <p>Evita conflictos y optimiza el uso de espacios.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4">
                <div class="display-4 text-info mb-3">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Monitoreo de Recursos</h3>
                <p>Seguimiento de aire acondicionado, focos, cortinas y más.</p>
            </div>
        </div>
    </div>
</div>
@endsection