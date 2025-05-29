@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Editar Proyecto</h2>
        <form action="{{ route('proyectos.update', $proyecto) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="titulo" class="block text-gray-700 font-bold mb-2">Título:</label>
                <input type="text" name="titulo" id="titulo"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('titulo') border-red-500 @enderror"
                    value="{{ old('titulo', $proyecto->titulo) }}" required>
                @error('titulo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 font-bold mb-2">Descripción:</label>
                <textarea name="descripcion" id="descripcion" rows="4"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('descripcion') border-red-500 @enderror"
                >{{ old('descripcion', $proyecto->descripcion) }}</textarea>
                @error('descripcion')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_tipo" class="block text-gray-700 font-bold mb-2">Tipo de Proyecto:</label>
                <select name="id_tipo" id="id_tipo"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_tipo') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione un tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id_tipo }}" {{ (old('id_tipo', $proyecto->id_tipo) == $tipo->id_tipo) ? 'selected' : '' }}>
                            {{ $tipo->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_tipo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('proyectos.index') }}" class="text-blue-600 hover:underline">Volver</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
