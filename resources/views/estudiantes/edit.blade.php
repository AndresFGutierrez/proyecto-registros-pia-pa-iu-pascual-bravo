@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Editar Estudiante</h2>
        <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') border-red-500 @enderror"
                    value="{{ old('nombre', $estudiante->nombre) }}" required>
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                    value="{{ old('email', $estudiante->email) }}" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_programa" class="block text-gray-700 font-bold mb-2">Programa:</label>
                <select name="id_programa" id="id_programa"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_programa') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione un programa</option>
                    @foreach($programas as $programa)
                        <option value="{{ $programa->id_programa }}" {{ (old('id_programa', $estudiante->id_programa) == $programa->id_programa) ? 'selected' : '' }}>
                            {{ $programa->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_programa')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('estudiantes.index') }}" class="text-blue-600 hover:underline">Volver</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
