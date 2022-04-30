<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" class="card card-md" action="{{ route('password.email') }}">
            @csrf
            <div class="card-body">
                <p class="text-center mb-4">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
                <div class="mb-3">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="form-footer">
                    <x-button>
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
