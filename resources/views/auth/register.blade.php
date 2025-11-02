<x-guest-layout>
    <form method="POST" action="{{ route('register') }}""> @csrf

        <div class="mb-4 p-4 bg-indigo-50 dark:bg-indigo-900/50 border border-indigo-200 dark:border-indigo-800 rounded-lg">
            <p class="text-sm text-indigo-800 dark:text-indigo-200">
                Complete the form below to register as a seller. Your account will need admin approval before you can start selling books.
            </p>
        </div>

        <input type="hidden" name="role" value="seller">

        <div>
            <x-input-label for="name" :value="__('*Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('*Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('*Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('*Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone" :value="__('*Phone Number')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="business_name" :value="__('*Business Name')" />
            <x-text-input id="business_name" class="block mt-1 w-full" type="text" name="business_name" :value="old('business_name')" required />
            <x-input-error :messages="$errors->get('business_name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="business_registration_number" :value="__('*Business Registration Number')" />
            <x-text-input id="business_registration_number" class="block mt-1 w-full" type="text" name="business_registration_number" :value="old('business_registration_number')" required />
            <x-input-error :messages="$errors->get('business_registration_number')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="business_description" :value="__('*Business Description')" />
            <textarea id="business_description" name="business_description" rows="2" required
                placeholder="Tell us about your business and the types of books you'll be selling."
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">{{ old('business_description') }}</textarea>
            <x-input-error :messages="$errors->get('business_description')" class="mt-2" />
        </div>

        <div class="flex justify-center mt-4">
            <x-button type="submit" :variant="'primary'" class="ms-4">
                {{ __('Register as Seller') }}
            </x-button>
        </div>

        <div class="flex justify-center mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
