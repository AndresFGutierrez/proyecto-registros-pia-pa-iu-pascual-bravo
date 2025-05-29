<?php

namespace App\Http\Controllers;

use App\Models\ProyectoAsignatura;
use App\Models\Proyecto;
use App\Models\Asignatura;
use App\Models\Docente;
use Illuminate\Http\Request;

class ProyectoAsignaturaController extends Controller
{
    public function index()
    {
        $proyectoAsignaturas = ProyectoAsignatura::all();
        return view('proyecto_asignaturas.index', compact('proyectoAsignaturas'));
    }

    public function create()
    {
        $proyectos = Proyecto::all();
        $asignaturas = Asignatura::all();
        $docentes = Docente::all();
        return view('proyecto_asignaturas.create', compact('proyectos', 'asignaturas', 'docentes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_proyecto' => 'required|exists:proyectos,id_proyecto',
            'id_asignatura' => 'required|exists:asignaturas,id_asignatura',
            'id_docente' => 'required|exists:docentes,id_docente',
            'grupo' => 'nullable|string|max:50'
        ]);
        ProyectoAsignatura::create($request->all());
        return redirect()->route('proyecto_asignaturas.index')->with('success', 'Asignación creada correctamente.');
    }

    public function show(ProyectoAsignatura $proyectoAsignatura)
    {
        return view('proyecto_asignaturas.show', compact('proyectoAsignatura'));
    }

    public function edit(ProyectoAsignatura $proyectoAsignatura)
    {
        $proyectos = Proyecto::all();
        $asignaturas = Asignatura::all();
        $docentes = Docente::all();
        return view('proyecto_asignaturas.edit', compact('proyectoAsignatura', 'proyectos', 'asignaturas', 'docentes'));
    }

    public function update(Request $request, ProyectoAsignatura $proyectoAsignatura)
    {
        $request->validate([
            'id_proyecto' => 'required|exists:proyectos,id_proyecto',
            'id_asignatura' => 'required|exists:asignaturas,id_asignatura',
            'id_docente' => 'required|exists:docentes,id_docente',
            'grupo' => 'nullable|string|max:50'
        ]);
        $proyectoAsignatura->update($request->all());
        return redirect()->route('proyecto_asignaturas.index')->with('success', 'Asignación actualizada correctamente.');
    }

    public function destroy(ProyectoAsignatura $proyectoAsignatura)
    {
        $proyectoAsignatura->delete();
        return redirect()->route('proyecto_asignaturas.index')->with('success', 'Asignación eliminada correctamente.');
    }
}
