<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EvaluadorController;
use App\Http\Controllers\TipoProyectoController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\ProyectoAsignaturaController;
use App\Http\Controllers\ProyectoEvaluacionController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD de todas las entidades con parámetros personalizados
    Route::resource('instituciones', InstitucionController::class)
        ->parameters(['instituciones' => 'institucion']);
    Route::resource('facultades', FacultadController::class)
        ->parameters(['facultades' => 'facultad']);
    Route::resource('departamentos', DepartamentoController::class)
        ->parameters(['departamentos' => 'departamento']);
    Route::resource('programas', ProgramaController::class)
        ->parameters(['programas' => 'programa']);
    Route::resource('asignaturas', AsignaturaController::class)
        ->parameters(['asignaturas' => 'asignatura']);
    Route::resource('docentes', DocenteController::class)
        ->parameters(['docentes' => 'docente']);
    Route::resource('estudiantes', EstudianteController::class)
        ->parameters(['estudiantes' => 'estudiante']);
    Route::resource('evaluadores', EvaluadorController::class)
        ->parameters(['evaluadores' => 'evaluador']);
    Route::resource('tipos_proyecto', TipoProyectoController::class)
        ->parameters(['tipos_proyecto' => 'tipos_proyecto']);
    Route::resource('proyectos', ProyectoController::class)
        ->parameters(['proyectos' => 'proyecto']);
    Route::resource('evaluaciones', EvaluacionController::class)
        ->parameters(['evaluaciones' => 'evaluacion']);
    Route::resource('proyecto_asignaturas', ProyectoAsignaturaController::class)
        ->parameters(['proyecto_asignaturas' => 'proyectoAsignatura']);
    Route::resource('proyecto_evaluaciones', ProyectoEvaluacionController::class)
        ->parameters(['proyecto_evaluaciones' => 'proyectoEvaluacion']);
});

require __DIR__.'/auth.php';
