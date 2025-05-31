<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-6 bg-blue-50 text-blue-700 border border-blue-200 rounded-lg p-4" :status="session('status')" />

    <div class="max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden p-8">
        <div class="flex justify-center mb-8">
            <img src="https://epdi.pascualbravo.edu.co/wp-content/uploads/2022/12/Logo_1.png" alt="Logo Pascual Bravo" class="h-16">
        </div>
        <h2 class="text-2xl font-bold text-center text-blue-800 mb-8">Inicio de Sesión</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-blue-700 mb-1">Correo electrónico</label>
                <input id="email" class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-blue-700 mb-1">Contraseña</label>
                <input id="password" class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" type="password" name="password" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-6">
                <input id="remember_me" type="checkbox" class="rounded border-blue-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                <label for="remember_me" class="ms-2 text-sm text-blue-700">{{ __('Recordar sesión') }}</label>
            </div>

            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:text-blue-800" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif

                <button type="submit" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    {{ __('Iniciar sesión') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
