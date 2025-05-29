<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Gestión')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8fafc; }
        .navbar { margin-bottom: 2rem; }
        .container { max-width: 900px; }
        .card { margin-bottom: 1.5rem; }
    </style>
</head>
<body>
    @include('layouts.navigation')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
