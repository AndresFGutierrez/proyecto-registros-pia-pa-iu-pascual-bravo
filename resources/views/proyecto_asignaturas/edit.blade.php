@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Editar Asignación Proyecto-Asignatura</h2>
        <form action="{{ route('proyecto_asignaturas.update', $proyectoAsignatura) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_proyecto" class="block text-gray-700 font-bold mb-2">Proyecto:</label>
                <select name="id_proyecto" id="id_proyecto"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_proyecto') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione un proyecto</option>
                    @foreach($proyectos as $proyecto)
                        <option value="{{ $proyecto->id_proyecto }}" {{ (old('id_proyecto', $proyectoAsignatura->id_proyecto) == $proyecto->id_proyecto) ? 'selected' : '' }}>
                            {{ $proyecto->titulo }}
                        </option>
                    @endforeach
                </select>
                @error('id_proyecto')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_asignatura" class="block text-gray-700 font-bold mb-2">Asignatura:</label>
                <select name="id_asignatura" id="id_asignatura"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_asignatura') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione una asignatura</option>
                    @foreach($asignaturas as $asignatura)
                        <option value="{{ $asignatura->id_asignatura }}" {{ (old('id_asignatura', $proyectoAsignatura->id_asignatura) == $asignatura->id_asignatura) ? 'selected' : '' }}>
                            {{ $asignatura->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_asignatura')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_docente" class="block text-gray-700 font-bold mb-2">Docente:</label>
                <select name="id_docente" id="id_docente"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_docente') border-red-500 @enderror"
                    required>
                    <option value="">Seleccione un docente</option>
                    @foreach($docentes as $docente)
                        <option value="{{ $docente->id_docente }}" {{ (old('id_docente', $proyectoAsignatura->id_docente) == $docente->id_docente) ? 'selected' : '' }}>
                            {{ $docente->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_docente')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="grupo" class="block text-gray-700 font-bold mb-2">Grupo:</label>
                <input type="text" name="grupo" id="grupo"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('grupo') border-red-500 @enderror"
                    value="{{ old('grupo', $proyectoAsignatura->grupo) }}">
                @error('grupo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('proyecto_asignaturas.index') }}" class="text-blue-600 hover:underline">Volver</a>
                <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
