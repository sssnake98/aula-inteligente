<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de Gestión de Aula Inteligente - Universidad">
    <title>@yield('title', 'Aula Inteligente')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .hero-section {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 5rem 0;
            text-align: center;
        }
        .hero-section h1 {
            font-weight: 700;
            font-size: 2.8rem;
        }
        .hero-section p {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 1.5rem auto;
        }
        .btn-landing {
            background: #ff6b35;
            border: none;
            padding: 0.8rem 2.5rem;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        .btn-landing:hover {
            background: #e55a2b;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(255, 107, 53, 0.3);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        .feature-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
        }
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.12);
        }
        .card-icon {
            font-size: 3rem;
            padding: 1.5rem 0;
        }
        .card-icon.bg-primary { background: #e3f2fd; color: #1976d2; }
        .card-icon.bg-success { background: #e8f5e9; color: #2e7d32; }
        .card-icon.bg-info { background: #e1f5fe; color: #0288d1; }
        .card-icon.bg-warning { background: #fff8e1; color: #f57c00; }
        .card-icon.bg-danger { background: #ffebee; color: #c62828; }

        .footer {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 2rem 0;
            margin-top: 4rem;
        }
        .alert {
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-graduation-cap me-2"></i>
                Aula Inteligente
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aulas.index') }}">Aulas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('materias.index') }}">Materias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('docentes.index') }}">Docentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container py-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
<footer class="footer">
    <div class="container text-center">
        <p class="mb-0">🎓 Sistema de Aula Inteligente | Escuela Secundaria de Innovación</p>
        <small>© {{ date('Y') }} - Todos los derechos reservados</small>
    </div>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>