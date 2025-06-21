<x-guest-layout>
    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2">
        <!-- Sisi kiri (gambar background) -->
        <div class="hidden md:block bg-cover bg-center" style="background-image: url('/images/login-bg.jpg');">
        </div>

        <!-- Sisi kanan (form login) -->
        <div class="flex items-center justify-center bg-gray-100">
            <div class="bg-white/90 backdrop-blur-lg rounded-xl shadow-lg p-8 w-full max-w-md mx-4">
                <h2 class="text-2xl font-bold text-center text-indigo-700 mb-6">Selamat Datang Kembali</h2>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full rounded-md" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full rounded-md" type="password" name="password" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mb-4">
                        <label class="flex items-center text-sm">
                            <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                            <span class="ml-2 text-gray-600">Ingat saya</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                                Lupa password?
                            </a>
                        @endif
                    </div>

                    <!-- Button -->
                    <x-primary-button class="w-full justify-center py-2 text-lg">
                        {{ __('Login') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
