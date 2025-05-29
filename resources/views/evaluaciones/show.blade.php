@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Detalle de Evaluación</h2>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">ID:</span>
            <span class="ml-2">{{ $evaluacion->id_evaluacion }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Fecha:</span>
            <span class="ml-2">{{ $evaluacion->fecha }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Observaciones:</span>
            <span class="ml-2">{{ $evaluacion->observaciones }}</span>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('evaluaciones.index') }}" class="text-blue-600 hover:underline">Volver</a>
            <a href="{{ route('evaluaciones.edit', $evaluacion) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
        </div>
    </div>
</div>
@endsection
