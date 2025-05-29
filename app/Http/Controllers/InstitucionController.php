<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    public function index()
    {
        $instituciones = Institucion::all();
        return view('instituciones.index', compact('instituciones'));
    }

    public function create()
    {
        return view('instituciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100'
        ]);
        Institucion::create($request->all());
        return redirect()->route('instituciones.index')->with('success', 'Institución creada correctamente.');
    }

    public function show(Institucion $institucion)
    {
        return view('instituciones.show', compact('institucion'));
    }

    public function edit(Institucion $institucion)
    {
        return view('instituciones.edit', compact('institucion'));
    }

    public function update(Request $request, Institucion $institucion)
    {
        $request->validate([
            'nombre' => 'required|string|max:100'
        ]);
        $institucion->update($request->all());
        return redirect()->route('instituciones.index')->with('success', 'Institución actualizada correctamente.');
    }

    public function destroy(Institucion $institucion)
    {
        $institucion->delete();
        return redirect()->route('instituciones.index')->with('success', 'Institución eliminada correctamente.');
    }
}
