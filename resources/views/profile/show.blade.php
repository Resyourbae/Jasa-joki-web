<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4 p-6 bg-white dark:bg-gray-800 rounded-t-2xl shadow-md border-b border-gray-200 dark:border-gray-700">
            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="w-20 h-20 rounded-full shadow-lg ring-4 ring-blue-200 dark:ring-blue-700 object-cover">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100 leading-tight mb-1">{{ Auth::user()->name }}</h2>
                <p class="text-lg text-gray-500 dark:text-gray-300">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </x-slot>

    <div class="bg-gradient-to-br from-blue-50 via-purple-50 to-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen py-12">
        <div class="max-w-3xl mx-auto space-y-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div class="bg-white dark:bg-gray-800 border border-blue-100 dark:border-blue-800 rounded-2xl shadow-lg p-8 animate-fade-in">
                    @livewire('profile.update-profile-information-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="bg-white dark:bg-gray-800 border border-purple-100 dark:border-purple-800 rounded-2xl shadow-lg p-8 animate-fade-in">
                    @livewire('profile.update-password-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="bg-white dark:bg-gray-800 border border-green-100 dark:border-green-800 rounded-2xl shadow-lg p-8 animate-fade-in">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 border border-yellow-100 dark:border-yellow-800 rounded-2xl shadow-lg p-8 animate-fade-in">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <div class="bg-white dark:bg-gray-800 border border-red-100 dark:border-red-800 rounded-2xl shadow-lg p-8 animate-fade-in">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
    <style>
        @keyframes fade-in {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fade-in 0.8s cubic-bezier(.4,0,.2,1) both; }
    </style>
</x-app-layout>
