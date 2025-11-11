@extends('layouts.app')
@section('title', 'Reservas')
@section('content')
    <h1>📅 Reservas</h1>
    <p>Próximamente: formulario para reservar aulas.</p>
    <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">← Volver al panel</a>
@endsection