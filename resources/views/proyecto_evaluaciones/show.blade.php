@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Detalle de Evaluación de Proyecto</h2>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Proyecto:</span>
            <span class="ml-2">{{ $proyectoEvaluacion->proyecto->titulo ?? $proyectoEvaluacion->id_proyecto }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Evaluación:</span>
            <span class="ml-2">{{ $proyectoEvaluacion->evaluacion->fecha ?? $proyectoEvaluacion->id_evaluacion }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Evaluador:</span>
            <span class="ml-2">{{ $proyectoEvaluacion->evaluador->nombre ?? $proyectoEvaluacion->id_evaluador }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold text-gray-700">Resultado:</span>
            <span class="ml-2">{{ $proyectoEvaluacion->resultado }}</span>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('proyecto_evaluaciones.index') }}" class="text-blue-600 hover:underline">Volver</a>
            <a href="{{ route('proyecto_evaluaciones.edit', $proyectoEvaluacion) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
        </div>
    </div>
</div>
@endsection
