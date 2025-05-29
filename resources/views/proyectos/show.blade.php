@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Detalle de Proyecto</h2>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">ID:</span>
            <span class="ml-2">{{ $proyecto->id_proyecto }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Título:</span>
            <span class="ml-2">{{ $proyecto->titulo }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Descripción:</span>
            <span class="ml-2">{{ $proyecto->descripcion }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Tipo de Proyecto:</span>
            <span class="ml-2">{{ $proyecto->tipoProyecto->nombre ?? 'Sin tipo' }}</span>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('proyectos.index') }}" class="text-blue-600 hover:underline">Volver</a>
            <a href="{{ route('proyectos.edit', $proyecto) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
        </div>
    </div>
</div>
@endsection
