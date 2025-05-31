<x-guest-layout>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden p-8">
        <div class="flex justify-center mb-8">
            <img src="https://epdi.pascualbravo.edu.co/wp-content/uploads/2022/12/Logo_1.png" alt="Logo Pascual Bravo" class="h-16">
        </div>
        <h2 class="text-2xl font-bold text-center text-blue-800 mb-8">Registro de Usuario</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-blue-700 mb-1">{{ __('Nombre') }}</label>
                <input id="name" class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Address -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-blue-700 mb-1">{{ __('Correo electrónico') }}</label>
                <input id="email" class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" type="email" name="email" :value="old('email')" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-blue-700 mb-1">{{ __('Contraseña') }}</label>
                <input id="password" class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" type="password" name="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-blue-700 mb-1">{{ __('Confirmar contraseña') }}</label>
                <input id="password_confirmation" class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" type="password" name="password_confirmation" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:text-blue-800">
                    {{ __('¿Ya tienes una cuenta? Inicia sesión') }}
                </a>
                <button type="submit" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    {{ __('Registrarse') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
