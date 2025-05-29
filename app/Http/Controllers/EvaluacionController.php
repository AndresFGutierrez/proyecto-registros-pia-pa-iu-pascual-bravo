<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function index()
    {
        $evaluaciones = Evaluacion::all();
        return view('evaluaciones.index', compact('evaluaciones'));
    }

    public function create()
    {
        return view('evaluaciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'observaciones' => 'nullable|string'
        ]);
        Evaluacion::create($request->all());
        return redirect()->route('evaluaciones.index')->with('success', 'Evaluación creada correctamente.');
    }

    public function show(Evaluacion $evaluacion)
    {
        return view('evaluaciones.show', compact('evaluacion'));
    }

    public function edit(Evaluacion $evaluacion)
    {
        return view('evaluaciones.edit', compact('evaluacion'));
    }

    public function update(Request $request, Evaluacion $evaluacion)
    {
        $request->validate([
            'fecha' => 'required|date',
            'observaciones' => 'nullable|string'
        ]);
        $evaluacion->update($request->all());
        return redirect()->route('evaluaciones.index')->with('success', 'Evaluación actualizada correctamente.');
    }

    public function destroy(Evaluacion $evaluacion)
    {
        $evaluacion->delete();
        return redirect()->route('evaluaciones.index')->with('success', 'Evaluación eliminada correctamente.');
    }
}
