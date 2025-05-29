<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">
                    ¡Bienvenido, {{ Auth::user()->name }}!
                </h3>
                <p class="mb-8 text-gray-600 dark:text-gray-300">
                    Usa el menú para navegar por las diferentes secciones del sistema.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <a href="{{ route('instituciones.index') }}" class="block bg-blue-100 dark:bg-blue-900 p-6 rounded-lg shadow hover:bg-blue-200 dark:hover:bg-blue-800 transition">
                        <div class="text-xl font-semibold mb-2 text-blue-900 dark:text-blue-100">Instituciones</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona las instituciones educativas.</div>
                    </a>
                    <a href="{{ route('facultades.index') }}" class="block bg-green-100 dark:bg-green-900 p-6 rounded-lg shadow hover:bg-green-200 dark:hover:bg-green-800 transition">
                        <div class="text-xl font-semibold mb-2 text-green-900 dark:text-green-100">Facultades</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona las facultades.</div>
                    </a>
                    <a href="{{ route('departamentos.index') }}" class="block bg-yellow-100 dark:bg-yellow-900 p-6 rounded-lg shadow hover:bg-yellow-200 dark:hover:bg-yellow-800 transition">
                        <div class="text-xl font-semibold mb-2 text-yellow-900 dark:text-yellow-100">Departamentos</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona los departamentos.</div>
                    </a>
                    <a href="{{ route('programas.index') }}" class="block bg-purple-100 dark:bg-purple-900 p-6 rounded-lg shadow hover:bg-purple-200 dark:hover:bg-purple-800 transition">
                        <div class="text-xl font-semibold mb-2 text-purple-900 dark:text-purple-100">Programas</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona los programas académicos.</div>
                    </a>
                    <a href="{{ route('asignaturas.index') }}" class="block bg-pink-100 dark:bg-pink-900 p-6 rounded-lg shadow hover:bg-pink-200 dark:hover:bg-pink-800 transition">
                        <div class="text-xl font-semibold mb-2 text-pink-900 dark:text-pink-100">Asignaturas</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona las asignaturas.</div>
                    </a>
                    <a href="{{ route('docentes.index') }}" class="block bg-teal-100 dark:bg-teal-900 p-6 rounded-lg shadow hover:bg-teal-200 dark:hover:bg-teal-800 transition">
                        <div class="text-xl font-semibold mb-2 text-teal-900 dark:text-teal-100">Docentes</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona los docentes.</div>
                    </a>
                    <a href="{{ route('estudiantes.index') }}" class="block bg-indigo-100 dark:bg-indigo-900 p-6 rounded-lg shadow hover:bg-indigo-200 dark:hover:bg-indigo-800 transition">
                        <div class="text-xl font-semibold mb-2 text-indigo-900 dark:text-indigo-100">Estudiantes</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona los estudiantes.</div>
                    </a>
                    <a href="{{ route('evaluadores.index') }}" class="block bg-red-100 dark:bg-red-900 p-6 rounded-lg shadow hover:bg-red-200 dark:hover:bg-red-800 transition">
                        <div class="text-xl font-semibold mb-2 text-red-900 dark:text-red-100">Evaluadores</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona los evaluadores.</div>
                    </a>
                    <a href="{{ route('tipos_proyecto.index') }}" class="block bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                        <div class="text-xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Tipos de Proyecto</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona los tipos de proyecto.</div>
                    </a>
                    <a href="{{ route('proyectos.index') }}" class="block bg-orange-100 dark:bg-orange-900 p-6 rounded-lg shadow hover:bg-orange-200 dark:hover:bg-orange-800 transition">
                        <div class="text-xl font-semibold mb-2 text-orange-900 dark:text-orange-100">Proyectos</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona los proyectos.</div>
                    </a>
                    <a href="{{ route('evaluaciones.index') }}" class="block bg-lime-100 dark:bg-lime-900 p-6 rounded-lg shadow hover:bg-lime-200 dark:hover:bg-lime-800 transition">
                        <div class="text-xl font-semibold mb-2 text-lime-900 dark:text-lime-100">Evaluaciones</div>
                        <div class="text-gray-600 dark:text-gray-300">Gestiona las evaluaciones.</div>
                    </a>
                    <a href="{{ route('proyecto_asignaturas.index') }}" class="block bg-fuchsia-100 dark:bg-fuchsia-900 p-6 rounded-lg shadow hover:bg-fuchsia-200 dark:hover:bg-fuchsia-800 transition">
                        <div class="text-xl font-semibold mb-2 text-fuchsia-900 dark:text-fuchsia-100">Proyecto-Asignaturas</div>
                        <div class="text-gray-600 dark:text-gray-300">Relaciona proyectos y asignaturas.</div>
                    </a>
                    <a href="{{ route('proyecto_evaluaciones.index') }}" class="block bg-cyan-100 dark:bg-cyan-900 p-6 rounded-lg shadow hover:bg-cyan-200 dark:hover:bg-cyan-800 transition">
                        <div class="text-xl font-semibold mb-2 text-cyan-900 dark:text-cyan-100">Proyecto-Evaluaciones</div>
                        <div class="text-gray-600 dark:text-gray-300">Relaciona proyectos y evaluaciones.</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
