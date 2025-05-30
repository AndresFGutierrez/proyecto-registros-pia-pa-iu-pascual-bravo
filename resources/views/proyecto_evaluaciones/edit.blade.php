@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Editar Evaluación de Proyecto</h2>
        <form action="{{ route('proyecto_evaluaciones.update', $proyectoEvaluacion) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_proyecto" class="block text-gray-700 font-bold mb-2">Proyecto:</label>
                <select name="id_proyecto" id="id_proyecto"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_proyecto') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione un proyecto</option>
                    @foreach($proyectos as $proyecto)
                        <option value="{{ $proyecto->id_proyecto }}" {{ (old('id_proyecto', $proyectoEvaluacion->id_proyecto) == $proyecto->id_proyecto) ? 'selected' : '' }}>
                            {{ $proyecto->titulo }}
                        </option>
                    @endforeach
                </select>
                @error('id_proyecto')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_evaluacion" class="block text-gray-700 font-bold mb-2">Evaluación:</label>
                <select name="id_evaluacion" id="id_evaluacion"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_evaluacion') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione una evaluación</option>
                    @foreach($evaluaciones as $evaluacion)
                        <option value="{{ $evaluacion->id_evaluacion }}" {{ (old('id_evaluacion', $proyectoEvaluacion->id_evaluacion) == $evaluacion->id_evaluacion) ? 'selected' : '' }}>
                            {{ $evaluacion->fecha }}
                        </option>
                    @endforeach
                </select>
                @error('id_evaluacion')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_evaluador" class="block text-gray-700 font-bold mb-2">Evaluador:</label>
                <select name="id_evaluador" id="id_evaluador"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_evaluador') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione un evaluador</option>
                    @foreach($evaluadores as $evaluador)
                        <option value="{{ $evaluador->id_evaluador }}" {{ (old('id_evaluador', $proyectoEvaluacion->id_evaluador) == $evaluador->id_evaluador) ? 'selected' : '' }}>
                            {{ $evaluador->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_evaluador')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="resultado" class="block text-gray-700 font-bold mb-2">Resultado:</label>
                <textarea name="resultado" id="resultado" rows="3"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('resultado') border-red-500 @enderror"
                >{{ old('resultado', $proyectoEvaluacion->resultado) }}</textarea>
                @error('resultado')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('proyecto_evaluaciones.index') }}" class="text-blue-600 hover:underline">Volver</a>
                <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
