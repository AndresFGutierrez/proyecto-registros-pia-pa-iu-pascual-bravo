@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Instituciones</h2>
            <a href="{{ route('instituciones.create') }}" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Nueva Institución</a>
        </div>
        @if (session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($instituciones as $institucion)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $institucion->id_institucion }}</td>
                        <td class="px-4 py-2">{{ $institucion->nombre }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('instituciones.show', $institucion) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('instituciones.edit', $institucion) }}" class="text-yellow-600 hover:underline">Editar</a>
                            <form action="{{ route('instituciones.destroy', $institucion) }}" method="POST" class="inline"
                                onsubmit="return confirm('¿Seguro que deseas eliminar esta institución?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4">No hay instituciones registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
