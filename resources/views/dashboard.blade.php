@extends('layouts.app')

@section('title', 'Panel Principal - Aula Inteligente')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-5 fw-bold">🏫 Bienvenido, Gabriel</h1>
    <p class="lead text-muted">Selecciona una opción para comenzar</p>
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
    <a href="#" class="text-decoration-none disabled">
        <div class="feature-card">
            <div class="card-icon bg-danger">
                <i class="fas fa-clock"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Disponibilidad</h4>
                <p class="text-muted">Consulta y gestiona horarios disponibles.</p>
                <small class="badge bg-secondary text-white">Próximamente</small>
            </div>
        </div>
    </a>

    <!-- Muebles/Recursos -->
    <a href="#" class="text-decoration-none disabled">
        <div class="feature-card">
            <div class="card-icon bg-dark">
                <i class="fas fa-couch"></i>
            </div>
            <div class="p-4">
                <h4 class="card-title">Recursos</h4>
                <p class="text-muted">Muebles, proyectores, aire acondicionado, etc.</p>
                <small class="badge bg-secondary text-white">Próximamente</small>
            </div>
        </div>
    </a>
</div>
@endsection