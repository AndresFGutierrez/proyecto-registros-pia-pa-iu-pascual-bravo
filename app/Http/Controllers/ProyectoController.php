<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\TipoProyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        $tipos = TipoProyecto::all();
        return view('proyectos.create', compact('tipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:200',
            'descripcion' => 'nullable|string',
            'id_tipo' => 'required|exists:tipos_proyecto,id_tipo'
        ]);
        Proyecto::create($request->all());
        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente.');
    }

    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    public function edit(Proyecto $proyecto)
    {
        $tipos = TipoProyecto::all();
        return view('proyectos.edit', compact('proyecto', 'tipos'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'titulo' => 'required|string|max:200',
            'descripcion' => 'nullable|string',
            'id_tipo' => 'required|exists:tipos_proyecto,id_tipo'
        ]);
        $proyecto->update($request->all());
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }
}
