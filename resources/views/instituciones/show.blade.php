@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Detalle de Institución</h2>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">ID:</span>
            <span class="ml-2">{{ $institucion->id_institucion }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Nombre:</span>
            <span class="ml-2">{{ $institucion->nombre }}</span>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('instituciones.index') }}" class="text-blue-600 hover:underline">Volver</a>
            <a href="{{ route('instituciones.edit', $institucion) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
        </div>
    </div>
</div>
@endsection
