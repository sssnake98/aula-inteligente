@extends('layouts.app')

@section('title', 'Panel Principal - Aula Inteligente')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-5 fw-bold">🏫 Bienvenido, Gabriel</h1>
    <p class="lead text-muted">Gestiona tu Aula Inteligente desde aquí</p>
</div>

<div class="card-grid">
    <!-- Aulas -->
    <a href="{{ route('aulas.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon bg-primary">
                <i class="fas fa-building"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Aulas</h4>
                <p class="text-muted">Gestiona espacios físicos, capacidad y ubicación.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para entrar y gestionar tus aulas</small>
            </div>
        </div>
    </a>

    <!-- Materias -->
    <a href="{{ route('materias.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon bg-success">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Materias</h4>
                <p class="text-muted">Administra materias por carrera y tipo de cursado.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para entrar y gestionar tus materias</small>
            </div>
        </div>
    </a>

    <!-- Docentes -->
    <a href="{{ route('docentes.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon bg-info">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Docentes</h4>
                <p class="text-muted">Registra y gestiona docentes y sus especialidades.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para entrar y gestionar tus docentes</small>
            </div>
        </div>
    </a>

    <!-- Reservas -->
    <a href="{{ route('reservas.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon bg-warning">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Reservas</h4>
                <p class="text-muted">Programa y gestiona reservas de aulas.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para entrar y hacer tu reserva</small>
            </div>
        </div>
    </a>

    <!-- Disponibilidad -->
    <a href="{{ route('disponibilidades.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon bg-danger">
                <i class="fas fa-clock"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Disponibilidad</h4>
                <p class="text-muted">Consulta y gestiona horarios disponibles.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para ver disponibilidad</small>
            </div>
        </div>
    </a>

    <!-- Muebles -->
    <a href="{{ route('muebles.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon bg-dark">
                <i class="fas fa-couch"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Muebles</h4>
                <p class="text-muted">Mesas, sillas, proyectores y más.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para gestionar muebles</small>
            </div>
        </div>
    </a>

    <!-- Aires -->
    <a href="{{ route('aires.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon" style="background: #e3f2fd; color: #1976d2;">
                <i class="fas fa-wind"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Aire Acond.</h4>
                <p class="text-muted">Control de estado y mantenimiento.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para gestionar aires</small>
            </div>
        </div>
    </a>

    <!-- Focos -->
    <a href="{{ route('focos.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon" style="background: #fff8e1; color: #f57c00;">
                <i class="fas fa-lightbulb"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Focos</h4>
                <p class="text-muted">Intensidad y ubicación.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para gestionar focos</small>
            </div>
        </div>
    </a>

    <!-- Cortinas -->
    <a href="{{ route('cortinas.index') }}" class="text-decoration-none">
        <div class="feature-card">
            <div class="card-icon" style="background: #f3e5f5; color: #7b1fa2;">
                <i class="fas fa-window-closed"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Cortinas</h4>
                <p class="text-muted">Estado: abierta/cerrada.</p>
                <small class="badge bg-light text-dark">Haz clic aquí para gestionar cortinas</small>
            </div>
        </div>
    </a>
</div>
@endsection