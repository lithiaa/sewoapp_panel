<x-filament-panels::page.simple>
    {{-- Heading --}}
    {{-- <x-slot name="heading">
        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="mx-auto h-16 w-auto">
    </x-slot> --}}
    <x-slot name="subheading">
        {{-- <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-white">
            Sign In
        </h2> --}}
        <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
            Please enter your credentials to access your account.
        </p>
    </x-slot>

    {{-- Login Form --}}
    <x-filament-panels::form id="form" wire:submit="authenticate">
        {{ $this->form }}

        <x-filament-panels::form.actions :actions="$this->getCachedFormActions()" :full-width="$this->hasFullWidthFormActions()" />
        </x-filament-panels::form>

        {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_AFTER, scopes: $this->getRenderHookScopes()) }}

    @if (filament()->hasRegistration())
        <div class="mt-4 text-center">
            {{ __('filament-panels::pages/auth/login.actions.register.before') }}

            {{ $this->registerAction }}
        </div>
    @endif

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_BEFORE, scopes: $this->getRenderHookScopes()) }}
</x-filament-panels::page.simple>
