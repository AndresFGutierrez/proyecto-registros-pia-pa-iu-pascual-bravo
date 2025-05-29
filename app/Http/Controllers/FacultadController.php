<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use App\Models\Institucion;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function index()
    {
        $facultades = Facultad::all();
        return view('facultades.index', compact('facultades'));
    }

    public function create()
    {
        $instituciones = Institucion::all();
        return view('facultades.create', compact('instituciones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'id_institucion' => 'required|exists:instituciones,id_institucion'
        ]);
        Facultad::create($request->all());
        return redirect()->route('facultades.index')->with('success', 'Facultad creada correctamente.');
    }

    public function show(Facultad $facultad)
    {
        return view('facultades.show', compact('facultad'));
    }

    public function edit(Facultad $facultad)
    {
        $instituciones = Institucion::all();
        return view('facultades.edit', compact('facultad', 'instituciones'));
    }

    public function update(Request $request, Facultad $facultad)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'id_institucion' => 'required|exists:instituciones,id_institucion'
        ]);
        $facultad->update($request->all());
        return redirect()->route('facultades.index')->with('success', 'Facultad actualizada correctamente.');
    }

    public function destroy(Facultad $facultad)
    {
        $facultad->delete();
        return redirect()->route('facultades.index')->with('success', 'Facultad eliminada correctamente.');
    }
}
