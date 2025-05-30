@extends('layouts.app')

@section('content')
    <div class="py-4">
        <div class="card">
            <div class="card-body">
                <h3 class="h4 mb-4">¡Bienvenido, {{ Auth::user()->name }}!</h3>
                <p class="mb-4 text-muted">
                    Usa el menú para navegar por las diferentes secciones del sistema.
                </p>
                <div class="row g-3">
                    <div class="col-md-4">
                        <a href="{{ route('instituciones.index') }}" class="btn btn-primary w-100">Instituciones</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('facultades.index') }}" class="btn btn-success w-100">Facultades</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('departamentos.index') }}" class="btn btn-warning w-100">Departamentos</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('programas.index') }}" class="btn btn-info w-100">Programas</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('asignaturas.index') }}" class="btn btn-secondary w-100">Asignaturas</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('docentes.index') }}" class="btn btn-dark w-100">Docentes</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-primary w-100">Estudiantes</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('evaluadores.index') }}" class="btn btn-success w-100">Evaluadores</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('tipos_proyecto.index') }}" class="btn btn-warning w-100">Tipos de Proyecto</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('proyectos.index') }}" class="btn btn-info w-100">Proyectos</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('evaluaciones.index') }}" class="btn btn-secondary w-100">Evaluaciones</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('proyecto_asignaturas.index') }}" class="btn btn-dark w-100">Proyecto-Asignaturas</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('proyecto_evaluaciones.index') }}" class="btn btn-primary w-100">Proyecto-Evaluaciones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
