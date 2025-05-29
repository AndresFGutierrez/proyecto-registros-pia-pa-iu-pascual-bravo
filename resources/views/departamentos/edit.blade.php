@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Editar Departamento</h2>
        <form action="{{ route('departamentos.update', $departamento) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') border-red-500 @enderror"
                    value="{{ old('nombre', $departamento->nombre) }}" required>
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_facultad" class="block text-gray-700 font-bold mb-2">Facultad:</label>
                <select name="id_facultad" id="id_facultad"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_facultad') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione una facultad</option>
                    @foreach($facultades as $facultad)
                        <option value="{{ $facultad->id_facultad }}" {{ (old('id_facultad', $departamento->id_facultad) == $facultad->id_facultad) ? 'selected' : '' }}>
                            {{ $facultad->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_facultad')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('departamentos.index') }}" class="text-blue-600 hover:underline">Volver</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
