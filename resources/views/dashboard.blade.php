<x-app-layout>
    <x-slot name="header">
        <h2
            class="p-4 text-xl font-semibold leading-tight text-gray-800 bg-white shadow-md dark:text-gray-100 dark:bg-gray-800 rounded-t-2xl">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Dashboard Custom --}}
    <div class="min-h-screen px-4 py-10 bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col items-center p-8 mb-10 bg-white/80 shadow-2xl dark:bg-gray-900/80 rounded-3xl backdrop-blur-md border border-purple-200 dark:border-gray-800 animate-fade-in">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=8b5cf6&color=fff" alt="Avatar" class="w-24 h-24 mb-4 rounded-full shadow-lg ring-4 ring-purple-300 dark:ring-purple-700">
                <h1 class="mb-2 text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 dark:from-purple-300 dark:via-pink-400 dark:to-indigo-400 animate-gradient">Selamat Datang, {{ Auth::user()->name }}!</h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 text-center max-w-2xl">Selamat datang di <span class="font-bold text-purple-600 dark:text-purple-300">AyserNii Joki</span>. Kami menerima jasa pembuatan website sesuai kebutuhan Anda. Anda dapat membuat requestan untuk joki tugas.</p>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="group flex flex-col items-center p-8 bg-white/90 shadow-xl dark:bg-gray-900/90 rounded-2xl border border-blue-200 dark:border-blue-900 transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-blue-100 hover:to-blue-200 dark:hover:from-blue-900 dark:hover:to-blue-800 cursor-pointer">
                    <div class="p-4 mb-4 text-white bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <h2 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-100 group-hover:text-blue-700 dark:group-hover:text-blue-300 transition-colors">Buat Pesanan</h2>
                    <p class="mb-5 text-center text-gray-500 dark:text-gray-300">Buat pesanan website baru sesuai kebutuhan Anda.</p>
                    <a href="{{ route('orders.create') }}" class="inline-block px-4 py-2 font-semibold text-white bg-gradient-to-r from-blue-500 to-indigo-500 rounded-lg shadow hover:from-indigo-500 hover:to-blue-500 transition-colors">Buat Sekarang →</a>
                </div>
                <div class="group flex flex-col items-center p-8 bg-white/90 shadow-xl dark:bg-gray-900/90 rounded-2xl border border-green-200 dark:border-green-900 transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-green-100 hover:to-green-200 dark:hover:from-green-900 dark:hover:to-green-800 cursor-pointer">
                    <div class="p-4 mb-4 text-white bg-gradient-to-br from-green-500 to-emerald-500 rounded-full shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h2 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-100 group-hover:text-green-700 dark:group-hover:text-green-300 transition-colors">Pesanan Saya</h2>
                    <p class="mb-5 text-center text-gray-500 dark:text-gray-300">Lihat dan kelola semua pesanan website Anda.</p>
                    <a href="{{ route('orders.index') }}" class="inline-block px-4 py-2 font-semibold text-white bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg shadow hover:from-emerald-500 hover:to-green-500 transition-colors">Lihat Pesanan →</a>
                </div>
                <div class="group flex flex-col items-center p-8 bg-white/90 shadow-xl dark:bg-gray-900/90 rounded-2xl border border-purple-200 dark:border-purple-900 transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-purple-100 hover:to-pink-100 dark:hover:from-purple-900 dark:hover:to-pink-900 cursor-pointer">
                    <div class="p-4 mb-4 text-white bg-gradient-to-br from-purple-500 to-pink-500 rounded-full shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <h2 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-100 group-hover:text-purple-700 dark:group-hover:text-pink-300 transition-colors">Bantuan</h2>
                    <p class="mb-5 text-center text-gray-500 dark:text-gray-300">Butuh bantuan? Hubungi tim support kami.</p>
                    <a href="https://wa.me/+6282114028613" target="_blank" class="inline-block px-4 py-2 font-semibold text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg shadow hover:from-pink-500 hover:to-purple-500 transition-colors">Chat Support →</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        @keyframes fade-in {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fade-in 0.8s cubic-bezier(.4,0,.2,1) both; }
        @keyframes gradient {
            0%,100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease-in-out infinite;
        }
    </style>
</x-app-layout>
