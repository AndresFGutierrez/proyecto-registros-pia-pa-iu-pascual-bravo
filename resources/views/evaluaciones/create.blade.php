@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Crear Nueva Evaluación</h2>
        <form action="{{ route('evaluaciones.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700 font-bold mb-2">Fecha:</label>
                <input type="date" name="fecha" id="fecha"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('fecha') border-red-500 @enderror"
                    value="{{ old('fecha') }}" required>
                @error('fecha')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="observaciones" class="block text-gray-700 font-bold mb-2">Observaciones:</label>
                <textarea name="observaciones" id="observaciones" rows="4"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('observaciones') border-red-500 @enderror"
                >{{ old('observaciones') }}</textarea>
                @error('observaciones')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('evaluaciones.index') }}" class="text-blue-600 hover:underline">Volver</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection
