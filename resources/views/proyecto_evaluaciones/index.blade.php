@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Proyecto-Evaluaciones</h2>
            <a href="{{ route('proyecto_evaluaciones.create') }}" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Nueva Evaluación de Proyecto</a>
        </div>
        @if (session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Proyecto</th>
                    <th class="px-4 py-2">Evaluación</th>
                    <th class="px-4 py-2">Evaluador</th>
                    <th class="px-4 py-2">Resultado</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($proyectoEvaluaciones as $evaluacion)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $evaluacion->proyecto->titulo ?? $evaluacion->id_proyecto }}</td>
                        <td class="px-4 py-2">{{ $evaluacion->evaluacion->fecha ?? $evaluacion->id_evaluacion }}</td>
                        <td class="px-4 py-2">{{ $evaluacion->evaluador->nombre ?? $evaluacion->id_evaluador }}</td>
                        <td class="px-4 py-2">{{ Str::limit($evaluacion->resultado, 40) }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('proyecto_evaluaciones.show', $evaluacion) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('proyecto_evaluaciones.edit', $evaluacion) }}" class="text-yellow-600 hover:underline">Editar</a>
                            <form action="{{ route('proyecto_evaluaciones.destroy', $evaluacion) }}" method="POST" class="inline"
                                onsubmit="return confirm('¿Seguro que deseas eliminar esta evaluación de proyecto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">No hay evaluaciones de proyectos registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
