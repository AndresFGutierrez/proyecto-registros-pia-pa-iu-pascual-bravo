<?php

namespace App\Http\Controllers;

use App\Models\Evaluador;
use Illuminate\Http\Request;

class EvaluadorController extends Controller
{
    public function index()
    {
        $evaluadores = Evaluador::all();
        return view('evaluadores.index', compact('evaluadores'));
    }

    public function create()
    {
        return view('evaluadores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:evaluadores,email'
        ]);
        Evaluador::create($request->all());
        return redirect()->route('evaluadores.index')->with('success', 'Evaluador creado correctamente.');
    }

    public function show(Evaluador $evaluador)
    {
        return view('evaluadores.show', compact('evaluador'));
    }

    public function edit(Evaluador $evaluador)
    {
        return view('evaluadores.edit', compact('evaluador'));
    }

    public function update(Request $request, Evaluador $evaluador)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:evaluadores,email,' . $evaluador->id_evaluador . ',id_evaluador'
        ]);
        $evaluador->update($request->all());
        return redirect()->route('evaluadores.index')->with('success', 'Evaluador actualizado correctamente.');
    }

    public function destroy(Evaluador $evaluador)
    {
        $evaluador->delete();
        return redirect()->route('evaluadores.index')->with('success', 'Evaluador eliminado correctamente.');
    }
}
