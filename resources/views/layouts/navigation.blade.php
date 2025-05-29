<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Gestión Académica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-wrap">
                <li class="nav-item"><a class="nav-link" href="{{ route('instituciones.index') }}">Instituciones</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('facultades.index') }}">Facultades</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('departamentos.index') }}">Departamentos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('programas.index') }}">Programas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('asignaturas.index') }}">Asignaturas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('docentes.index') }}">Docentes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('estudiantes.index') }}">Estudiantes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('evaluadores.index') }}">Evaluadores</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tipos_proyecto.index') }}">Tipos de Proyecto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('proyectos.index') }}">Proyectos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('evaluaciones.index') }}">Evaluaciones</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('proyecto_asignaturas.index') }}">Proyecto-Asignaturas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('proyecto_evaluaciones.index') }}">Proyecto-Evaluaciones</a></li>
            </ul>
        </div>
    </div>
</nav>
