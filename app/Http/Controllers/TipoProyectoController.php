<?php

namespace App\Http\Controllers;

use App\Models\TipoProyecto;
use Illuminate\Http\Request;

class TipoProyectoController extends Controller
{
    public function index()
    {
        $tipos = TipoProyecto::all();
        return view('tipos_proyecto.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipos_proyecto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100'
        ]);
        TipoProyecto::create($request->all());
        return redirect()->route('tipos_proyecto.index')->with('success', 'Tipo de proyecto creado correctamente.');
    }

    public function show(TipoProyecto $tipos_proyecto)
    {
        return view('tipos_proyecto.show', compact('tipos_proyecto'));
    }

    public function edit(TipoProyecto $tipos_proyecto)
    {
        return view('tipos_proyecto.edit', compact('tipos_proyecto'));
    }

    public function update(Request $request, TipoProyecto $tipos_proyecto)
    {
        $request->validate([
            'nombre' => 'required|string|max:100'
        ]);
        $tipos_proyecto->update($request->all());
        return redirect()->route('tipos_proyecto.index')->with('success', 'Tipo de proyecto actualizado correctamente.');
    }

    public function destroy(TipoProyecto $tipos_proyecto)
    {
        $tipos_proyecto->delete();
        return redirect()->route('tipos_proyecto.index')->with('success', 'Tipo de proyecto eliminado correctamente.');
    }
}
