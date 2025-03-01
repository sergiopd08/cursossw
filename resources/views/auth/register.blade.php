<x-guest-layout>
    <x-jet-authentication-card>

        <x-slot name="logo">
            <img class="w-25 h-20" viewbox="0 0 48 48" fill="none" src="{{ asset('images/artistas.png') }}" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('user.store') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre de usuario') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div>
                <x-jet-label for="edad" value="{{ __('Edad') }}" />
                <x-jet-input id="edad" class="block mt-1 w-full" type="number" name="edad" :value="old('edad')" required autofocus autocomplete="edad" />
            </div>

            <div>
                <x-jet-label for="ocupacion" value="{{ __('Ocupación') }}" />
                <x-jet-input id="ocupacion" class="block mt-1 w-full" type="text" name="ocupacion" :value="old('ocupacion')" required autofocus autocomplete="nombre" />
            </div>

            <div>
                <x-jet-input style="text-align: center; background-color: gray; color: white" id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="AFILIACIÓN DE INSTITUCIÓN" required autofocus autocomplete="nombre" readonly/>
            </div>

            <div>
                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
            </div>

            <div>
                <x-jet-label for="direccion" value="{{ __('Dirección') }}" />
                <x-jet-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus autocomplete="direccion" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya tienes una cuenta?, ¡Inicia sesión!') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrate') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
