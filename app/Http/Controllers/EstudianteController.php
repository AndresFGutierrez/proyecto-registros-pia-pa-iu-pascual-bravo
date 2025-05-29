<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Programa;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        $programas = Programa::all();
        return view('estudiantes.create', compact('programas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:estudiantes,email',
            'id_programa' => 'required|exists:programas,id_programa'
        ]);
        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado correctamente.');
    }

    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
        $programas = Programa::all();
        return view('estudiantes.edit', compact('estudiante', 'programas'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:estudiantes,email,' . $estudiante->id_estudiante . ',id_estudiante',
            'id_programa' => 'required|exists:programas,id_programa'
        ]);
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado correctamente.');
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente.');
    }
}
