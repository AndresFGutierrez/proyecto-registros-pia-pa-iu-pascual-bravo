<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:docentes,email'
        ]);
        Docente::create($request->all());
        return redirect()->route('docentes.index')->with('success', 'Docente creado correctamente.');
    }

    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:docentes,email,' . $docente->id_docente . ',id_docente'
        ]);
        $docente->update($request->all());
        return redirect()->route('docentes.index')->with('success', 'Docente actualizado correctamente.');
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index')->with('success', 'Docente eliminado correctamente.');
    }
}
