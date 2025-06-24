<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        // Aktifkan dark mode jika preferensi user dark
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        // Toggle show/hide password dengan icon modern
        function togglePassword(id, el) {
            const input = document.getElementById(id);
            const svg = el.querySelector('svg');
            if (input.type === 'password') {
                input.type = 'text';
                // Mata terbuka (show)
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />';
            } else {
                input.type = 'password';
                // Mata tertutup (hide)
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-5 0-9-4-9-7s4-7 9-7c1.657 0 3.22.41 4.563 1.125" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.07 4.93a9.953 9.953 0 012.93 5.07c0 3-4 7-9 7-.62 0-1.22-.06-1.8-.17" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />';
            }
        }
    </script>
</head>

<body
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-white via-gray-100 to-gray-300 dark:from-gray-800 dark:via-gray-700 dark:to-gray-600">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 dark:bg-gray-900 dark:shadow-black">
        <div class="flex flex-col items-center mb-6">
            <span class="text-3xl font-extrabold text-indigo-600 mb-2 tracking-wide dark:text-indigo-400">AyserNii
                Joki</span>
            <h2 class="text-2xl font-bold text-gray-800 mb-1 dark:text-gray-100">Create Account</h2>
            <p class="text-gray-500 text-sm dark:text-gray-300">Sign up to get started</p>
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-1 dark:text-gray-200">Name</label>
                <input id="name"
                    class="block w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100"
                    type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-1 dark:text-gray-200">Email</label>
                <input id="email"
                    class="block w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100"
                    type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
            </div>

            <div class="mb-4 relative">
                <label for="password" class="block text-gray-700 font-semibold mb-1 dark:text-gray-200">Password</label>
                <input id="password"
                    class="block w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100 pr-10"
                    type="password" name="password" required autocomplete="new-password" />
                <button type="button" onclick="togglePassword('password', this)" tabindex="-1" class="absolute right-3 top-9 text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" id="icon-password" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <div class="mb-4 relative">
                <label for="password_confirmation"
                    class="block text-gray-700 font-semibold mb-1 dark:text-gray-200">Confirm
                    Password</label>
                <input id="password_confirmation"
                    class="block w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100 pr-10"
                    type="password" name="password_confirmation" required autocomplete="new-password" />
                <button type="button" onclick="togglePassword('password_confirmation', this)" tabindex="-1" class="absolute right-3 top-9 text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" id="icon-password_confirmation" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mb-4">
                            <label for="terms" class="flex items-center">
                                <input name="terms" id="terms" type="checkbox" required
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-700">
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">' . __('Terms of Service') . '</a>',
                    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">' . __('Privacy Policy') . '</a>',
                ]) !!}
                                </span>
                            </label>
                        </div>
            @endif

            <button type="submit"
                class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-md transition duration-200 dark:bg-indigo-700 dark:hover:bg-indigo-800">
                Register
            </button>
        </form>
        <div class="mt-6 text-center">
            <span class="text-gray-600 text-sm dark:text-gray-300">Already registered?</span>
            <a href="{{ route('login') }}"
                class="text-indigo-600 hover:underline font-semibold text-sm dark:text-indigo-400">Login</a>
        </div>
    </div>
</body>

</html>