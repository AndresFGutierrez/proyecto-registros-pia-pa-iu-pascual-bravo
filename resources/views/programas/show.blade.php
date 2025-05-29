@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Detalle de Programa</h2>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">ID:</span>
            <span class="ml-2">{{ $programa->id_programa }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Nombre:</span>
            <span class="ml-2">{{ $programa->nombre }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Departamento:</span>
            <span class="ml-2">{{ $programa->departamento->nombre ?? 'Sin departamento' }}</span>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('programas.index') }}" class="text-blue-600 hover:underline">Volver</a>
            <a href="{{ route('programas.edit', $programa) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
        </div>
    </div>
</div>
@endsection
