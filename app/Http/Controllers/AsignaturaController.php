<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Programa;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        $asignaturas = Asignatura::all();
        return view('asignaturas.index', compact('asignaturas'));
    }

    public function create()
    {
        $programas = Programa::all();
        return view('asignaturas.create', compact('programas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'id_programa' => 'required|exists:programas,id_programa'
        ]);
        Asignatura::create($request->all());
        return redirect()->route('asignaturas.index')->with('success', 'Asignatura creada correctamente.');
    }

    public function show(Asignatura $asignatura)
    {
        return view('asignaturas.show', compact('asignatura'));
    }

    public function edit(Asignatura $asignatura)
    {
        $programas = Programa::all();
        return view('asignaturas.edit', compact('asignatura', 'programas'));
    }

    public function update(Request $request, Asignatura $asignatura)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'id_programa' => 'required|exists:programas,id_programa'
        ]);
        $asignatura->update($request->all());
        return redirect()->route('asignaturas.index')->with('success', 'Asignatura actualizada correctamente.');
    }

    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();
        return redirect()->route('asignaturas.index')->with('success', 'Asignatura eliminada correctamente.');
    }
}
