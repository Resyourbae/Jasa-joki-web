<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight bg-white dark:bg-gray-800 p-4 rounded-t-2xl shadow-md">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Dashboard Custom --}}
    <div
        class="min-h-screen bg-gradient-to-br from-gray-100 to-purple-300 dark:from-gray-900 dark:to-gray-800 py-10 px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-lg p-8 mb-8 flex flex-col items-center">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4f46e5&color=fff"
                    alt="Avatar" class="w-20 h-20 rounded-full mb-4 shadow">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-2">Selamat Datang,
                    {{ Auth::user()->name }}!
                </h1>
                <p class="text-gray-500 dark:text-gray-300 text-lg">Selamat datang di AyserNii Joki. Kami menerima jasa
                    pembuatan website sesuai kebutuhan Anda. Anda dapat membuat requestan untuk joki tugas</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-900 rounded-xl shadow p-6 flex flex-col items-center">
                    <div class="bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full p-3 mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <h2 class="font-semibold text-lg mb-1 dark:text-gray-100">Buat Pesanan</h2>
                    <p class="text-gray-500 dark:text-gray-300 text-center mb-4">Buat pesanan website baru sesuai
                        kebutuhan Anda.</p>
                    <a href="{{ route('orders.create') }}"
                        class="text-blue-600 dark:text-blue-300 hover:text-blue-800 dark:hover:text-blue-400 font-medium">Buat
                        Sekarang →</a>
                </div>
                <div class="bg-white dark:bg-gray-900 rounded-xl shadow p-6 flex flex-col items-center">
                    <div
                        class="bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 rounded-full p-3 mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h2 class="font-semibold text-lg mb-1 dark:text-gray-100">Pesanan Saya</h2>
                    <p class="text-gray-500 dark:text-gray-300 text-center mb-4">Lihat dan kelola semua pesanan website
                        Anda.</p>
                    <a href="{{ route('orders.index') }}"
                        class="text-green-600 dark:text-green-300 hover:text-green-800 dark:hover:text-green-400 font-medium">Lihat
                        Pesanan →</a>
                </div>
                <div class="bg-white dark:bg-gray-900 rounded-xl shadow p-6 flex flex-col items-center">
                    <div
                        class="bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full p-3 mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <h2 class="font-semibold text-lg mb-1 dark:text-gray-100">Bantuan</h2>
                    <p class="text-gray-500 dark:text-gray-300 text-center mb-4">Butuh bantuan? Hubungi tim support
                        kami.</p>
                    <a href="https://wa.me/+6282114028613" target="_blank"
                        class="text-purple-600 dark:text-purple-300 hover:text-purple-800 dark:hover:text-purple-400 font-medium">Chat
                        Support →</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>