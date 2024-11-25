<x-guest-layout>
    <div class=" flex items-center justify-center">
        <div class="w-full max-w-md">
            <div class="text-center text-3xl font-extrabold text-red-500 pb-4">S&A GYM</div>
            <form method="POST" action="{{ route('register') }}" class="bg-white p-6 rounded-lg shadow-md border-2 border-red-500">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-red-500 font-bold" />
                    <x-text-input id="name" class="block mt-1 w-full border-red-500 focus:border-red-700 focus:ring-red-700" 
                                  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-red-500 font-bold" />
                    <x-text-input id="email" class="block mt-1 w-full border-red-500 focus:border-red-700 focus:ring-red-700" 
                                  type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>
<input value="client" name="role" type="hidden">
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-red-500 font-bold" />
                    <x-text-input id="password" class="block mt-1 w-full border-red-500 focus:border-red-700 focus:ring-red-700"
                                  type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-red-500 font-bold" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full border-red-500 focus:border-red-700 focus:ring-red-700"
                                  type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                </div>

                <!-- Already registered -->
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-red-500 hover:text-red-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
