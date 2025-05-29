@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Proyecto-Asignaturas</h2>
            <a href="{{ route('proyecto_asignaturas.create') }}" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Nueva Asignación</a>
        </div>
        @if (session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Proyecto</th>
                    <th class="px-4 py-2">Asignatura</th>
                    <th class="px-4 py-2">Docente</th>
                    <th class="px-4 py-2">Grupo</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($proyectoAsignaturas as $asignacion)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $asignacion->proyecto->titulo ?? $asignacion->id_proyecto }}</td>
                        <td class="px-4 py-2">{{ $asignacion->asignatura->nombre ?? $asignacion->id_asignatura }}</td>
                        <td class="px-4 py-2">{{ $asignacion->docente->nombre ?? $asignacion->id_docente }}</td>
                        <td class="px-4 py-2">{{ $asignacion->grupo ?? '-' }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('proyecto_asignaturas.show', $asignacion) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('proyecto_asignaturas.edit', $asignacion) }}" class="text-yellow-600 hover:underline">Editar</a>
                            <form action="{{ route('proyecto_asignaturas.destroy', $asignacion) }}" method="POST" class="inline"
                                onsubmit="return confirm('¿Seguro que deseas eliminar esta asignación?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">No hay asignaciones registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
