@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Editar Facultad</h2>
        <form action="{{ route('facultades.update', $facultad) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') border-red-500 @enderror"
                    value="{{ old('nombre', $facultad->nombre) }}" required>
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_institucion" class="block text-gray-700 font-bold mb-2">Institución:</label>
                <select name="id_institucion" id="id_institucion"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_institucion') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione una institución</option>
                    @foreach($instituciones as $institucion)
                        <option value="{{ $institucion->id_institucion }}" {{ (old('id_institucion', $facultad->id_institucion) == $institucion->id_institucion) ? 'selected' : '' }}>
                            {{ $institucion->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_institucion')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('facultades.index') }}" class="text-blue-600 hover:underline">Volver</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
