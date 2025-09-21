<x-filament-panels::page.simple>
    {{-- <x-slot name="heading">
        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="mx-auto h-16 w-auto">
    </x-slot> --}}
    <x-slot name="subheading">
        {{-- <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-white">
            Sign Up
        </h2> --}}
        <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
            Please fill in the information below to create your account.
        </p>
    </x-slot>
    <x-filament-panels::form wire:submit="register">
        {{ $this->form }}

        <x-filament-panels::form.actions :actions="$this->getCachedFormActions()" :full-width="$this->hasFullWidthFormActions()" />
    </x-filament-panels::form>

    <div class="text-center mt-6">
        <p class="text-sm text-gray-600 dark:text-gray-400">
            Already have an account?
            <a href="{{ filament()->getLoginUrl() }}"
               class="font-medium text-primary-600 hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300 transition-colors">
                Sign in
            </a>
        </p>
    </div>
</x-filament-panels::page.simple>
