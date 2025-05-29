@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Docentes</h2>
            <a href="{{ route('docentes.create') }}" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Nuevo Docente</a>
        </div>
        @if (session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($docentes as $docente)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $docente->id_docente }}</td>
                        <td class="px-4 py-2">{{ $docente->nombre }}</td>
                        <td class="px-4 py-2">{{ $docente->email }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('docentes.show', $docente) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('docentes.edit', $docente) }}" class="text-yellow-600 hover:underline">Editar</a>
                            <form action="{{ route('docentes.destroy', $docente) }}" method="POST" class="inline"
                                onsubmit="return confirm('¿Seguro que deseas eliminar este docente?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">No hay docentes registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
