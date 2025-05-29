<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Departamento;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    public function index()
    {
        $programas = Programa::all();
        return view('programas.index', compact('programas'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        return view('programas.create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'id_departamento' => 'required|exists:departamentos,id_departamento'
        ]);
        Programa::create($request->all());
        return redirect()->route('programas.index')->with('success', 'Programa creado correctamente.');
    }

    public function show(Programa $programa)
    {
        return view('programas.show', compact('programa'));
    }

    public function edit(Programa $programa)
    {
        $departamentos = Departamento::all();
        return view('programas.edit', compact('programa', 'departamentos'));
    }

    public function update(Request $request, Programa $programa)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'id_departamento' => 'required|exists:departamentos,id_departamento'
        ]);
        $programa->update($request->all());
        return redirect()->route('programas.index')->with('success', 'Programa actualizado correctamente.');
    }

    public function destroy(Programa $programa)
    {
        $programa->delete();
        return redirect()->route('programas.index')->with('success', 'Programa eliminado correctamente.');
    }
}
