<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro de Proyectos | Pascual Bravo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #003366 0%, #1976d2 100%);
            color: #fff;
            font-family: 'Segoe UI', 'Figtree', Arial, sans-serif;
        }
        .hero-logo {
            width: 110px;
            margin-bottom: 1.5rem;
        }
        .hero-card {
            background: rgba(255,255,255,0.15);
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
            border: 1px solid rgba(255,255,255,0.2);
            padding: 2.5rem 2rem;
        }
        .btn-ingresar {
            background: #1976d2;
            border: none;
        }
        .btn-ingresar:hover {
            background: #125ea2;
        }
        .btn-registrarse {
            background: #42a5f5; /* Azul más claro */
            border: none;
        }

        .btn-registrarse:hover {
            background: #1e88e5; /* Azul un poco más oscuro para el hover */
        }
        .footer {
            color: #e3f2fd;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="hero-card text-center mb-4">
            <img src="https://epdi.pascualbravo.edu.co/wp-content/uploads/2022/12/Logo_1.png" alt="Logo Pascual Bravo" class="hero-logo">
            <h1 class="mb-3 fw-bold" style="color:#000000;">Sistema de Registro de Proyectos</h1>
            <h2 class="mb-4 fw-semibold" style="color:#003366;">Institución Universitaria Pascual Bravo</h2>
            <p class="lead mb-5" style="color:#e3f2fd;">
                Bienvenido al sistema institucional para la gestión y registro de proyectos académicos.<br>
                Accede con tu cuenta para comenzar.
            </p>
            <a href="{{ route('login') }}" class="btn btn-ingresar btn-lg px-5 shadow">Ingresar</a>
            <a href="{{ route('register') }}" class="btn btn-registrarse btn-lg px-5 shadow">Registrarse</a>
        </div>
        <div class="footer mt-4 text-center">
            &copy; {{ date('Y') }} Institución Universitaria Pascual Bravo &mdash; Todos los derechos reservados.
        </div>
    </div>
</body>
</html>
