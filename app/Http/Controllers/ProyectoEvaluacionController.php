<?php

namespace App\Http\Controllers;

use App\Models\ProyectoEvaluacion;
use App\Models\Proyecto;
use App\Models\Evaluacion;
use App\Models\Evaluador;
use Illuminate\Http\Request;

class ProyectoEvaluacionController extends Controller
{
    public function index()
    {
        $proyectoEvaluaciones = ProyectoEvaluacion::all();
        return view('proyecto_evaluaciones.index', compact('proyectoEvaluaciones'));
    }

    public function create()
    {
        $proyectos = Proyecto::all();
        $evaluaciones = Evaluacion::all();
        $evaluadores = Evaluador::all();
        return view('proyecto_evaluaciones.create', compact('proyectos', 'evaluaciones', 'evaluadores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_proyecto' => 'required|exists:proyectos,id_proyecto',
            'id_evaluacion' => 'required|exists:evaluaciones,id_evaluacion',
            'id_evaluador' => 'required|exists:evaluadores,id_evaluador',
            'resultado' => 'nullable|string'
        ]);
        ProyectoEvaluacion::create($request->all());
        return redirect()->route('proyecto_evaluaciones.index')->with('success', 'Evaluación de proyecto creada correctamente.');
    }

    public function show(ProyectoEvaluacion $proyectoEvaluacion)
    {
        return view('proyecto_evaluaciones.show', compact('proyectoEvaluacion'));
    }

    public function edit(ProyectoEvaluacion $proyectoEvaluacion)
    {
        $proyectos = Proyecto::all();
        $evaluaciones = Evaluacion::all();
        $evaluadores = Evaluador::all();
        return view('proyecto_evaluaciones.edit', compact('proyectoEvaluacion', 'proyectos', 'evaluaciones', 'evaluadores'));
    }

    public function update(Request $request, ProyectoEvaluacion $proyectoEvaluacion)
    {
        $request->validate([
            'id_proyecto' => 'required|exists:proyectos,id_proyecto',
            'id_evaluacion' => 'required|exists:evaluaciones,id_evaluacion',
            'id_evaluador' => 'required|exists:evaluadores,id_evaluador',
            'resultado' => 'nullable|string'
        ]);
        $proyectoEvaluacion->update($request->all());
        return redirect()->route('proyecto_evaluaciones.index')->with('success', 'Evaluación de proyecto actualizada correctamente.');
    }

    public function destroy(ProyectoEvaluacion $proyectoEvaluacion)
    {
        $proyectoEvaluacion->delete();
        return redirect()->route('proyecto_evaluaciones.index')->with('success', 'Evaluación de proyecto eliminada correctamente.');
    }
}
