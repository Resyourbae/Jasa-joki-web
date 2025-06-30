<nav x-data="{ dark: localStorage.getItem('theme') === 'dark' }"
    x-init="if(dark){document.documentElement.classList.add('dark')}else{document.documentElement.classList.remove('dark')}"
    class="bg-white border-b border-gray-100 shadow dark:bg-gray-900 dark:border-gray-800">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-6">
                <!-- Custom Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                    <span class="text-2xl font-extrabold text-indigo-700 dark:text-indigo-300">AyserNii Joki</span>
                </a>
                <!-- Custom Navigation Links -->
                <a href="{{ route('dashboard') }}"
                    class="hidden sm:block text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium px-3 py-2 rounded transition {{ request()->routeIs('dashboard') ? 'bg-indigo-100 dark:bg-gray-800' : '' }}">
                    Dashboard
                </a>
            </div>
            <div class="flex items-center gap-4">
                <!-- Theme Toggle Button -->
                <button
                    @click="dark = !dark; localStorage.setItem('theme', dark ? 'dark' : 'light'); if(dark){document.documentElement.classList.add('dark')}else{document.documentElement.classList.remove('dark')}"
                    class="text-xl focus:outline-none">
                    <template x-if="dark">
                        <!-- Moon SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                        </svg>
                    </template>
                    <template x-if="!dark">
                        <!-- Sun SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="2" fill="none" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" />
                        </svg>
                    </template>
                </button>
                <!-- User Info & Dropdown pakai Alpine.js -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center gap-2 focus:outline-none">
                        <img class="object-cover border-2 border-indigo-400 rounded-full w-9 h-9"
                            src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                            alt="{{ Auth::user()->name }}" />
                        <span class="font-semibold text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" @keydown.escape.window="open = false"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 z-50 w-48 py-2 mt-2 bg-white rounded shadow-lg dark:bg-gray-900"
                        style="display: none;">
                        <a href="{{ route('profile.show') }}"
                            class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-indigo-50 dark:hover:bg-gray-800">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full px-4 py-2 text-left text-gray-700 dark:text-gray-200 hover:bg-indigo-50 dark:hover:bg-gray-800">Log
                                Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>