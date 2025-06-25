<x-guest-layout>
    <x-authentication-card>
        <!-- <x-slot name="logo">
            </x-slot> -->
        <div class="text-2xl font-bold text-blue-700 tracking-wide select-none dark:text-blue-200 text-center mb-6">
            AyserNii Joki
        </div>

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline dark:text-indigo-400">
                Kembali ke halaman login
            </a>
        </div>
    </x-authentication-card>
</x-guest-layout>