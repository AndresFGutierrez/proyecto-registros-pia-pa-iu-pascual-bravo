<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Facultad;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    public function create()
    {
        $facultades = Facultad::all();
        return view('departamentos.create', compact('facultades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'id_facultad' => 'required|exists:facultades,id_facultad'
        ]);
        Departamento::create($request->all());
        return redirect()->route('departamentos.index')->with('success', 'Departamento creado correctamente.');
    }

    public function show(Departamento $departamento)
    {
        return view('departamentos.show', compact('departamento'));
    }

    public function edit(Departamento $departamento)
    {
        $facultades = Facultad::all();
        return view('departamentos.edit', compact('departamento', 'facultades'));
    }

    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'id_facultad' => 'required|exists:facultades,id_facultad'
        ]);
        $departamento->update($request->all());
        return redirect()->route('departamentos.index')->with('success', 'Departamento actualizado correctamente.');
    }

    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamentos.index')->with('success', 'Departamento eliminado correctamente.');
    }
}
