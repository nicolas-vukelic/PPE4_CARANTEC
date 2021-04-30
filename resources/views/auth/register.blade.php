<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nom -->
            <div>
                <x-label for="NOM" :value="__('Nom')" />

                <x-input id="NOM" class="block mt-1 w-full" type="text" name="NOM" :value="old('NOM')" required autofocus />
            </div>
            <!-- PRENOM -->
            <div>
                <x-label for="PRENOM" :value="__('Prenom')" />

                <x-input id="PRENOM" class="block mt-1 w-full" type="text" name="PRENOM" :value="old('PRENOM')" required autofocus />
            </div>
            <!-- Telephone -->
            <div class="mt-4">
                <x-label for="TELEPHONE" :value="__('Telephone')" />

                <x-input id="TELEPHONE" class="block mt-1 w-full" type="text" name="TELEPHONE" :value="old('TELEPHONE')" required />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="EMAIL" :value="__('EMAIL')" />

                <x-input id="EMAIL" class="block mt-1 w-full" type="EMAIL" name="EMAIL" :value="old('EMAIL')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
