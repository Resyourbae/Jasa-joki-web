<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-blue-500 to-purple-500 dark:from-green-300 dark:via-blue-300 dark:to-purple-300 leading-tight p-6 rounded-t-2xl shadow-md animate-gradient">
            {{ __('Pesanan Saya') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-green-50 via-blue-50 to-purple-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 flex justify-end">
                <a href="{{ route('orders.create') }}"
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-indigo-500 hover:to-blue-500 text-white font-bold py-3 px-6 rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Buat Pesanan Baru
                </a>
            </div>

            <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border border-purple-200 dark:border-gray-800 shadow-2xl sm:rounded-2xl animate-fade-in">
                <div class="p-8">
                    @if($orders->isEmpty())
                        <p class="text-gray-500 dark:text-gray-300 text-center text-lg">Anda belum memiliki pesanan.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 rounded-xl overflow-hidden">
                                <thead class="bg-gradient-to-r from-blue-100 via-green-100 to-purple-100 dark:from-blue-900 dark:via-green-900 dark:to-purple-900">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-200 uppercase tracking-wider">Website</th>
                                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-200 uppercase tracking-wider">Tipe</th>
                                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-200 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-200 uppercase tracking-wider">Deadline</th>
                                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-700 dark:text-gray-200 uppercase tracking-wider">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white/70 dark:bg-gray-900/70 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach($orders as $order)
                                        <tr class="hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 dark:hover:from-blue-900 dark:hover:to-purple-900 transition-all duration-200">
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100 font-semibold">{{ $order->website_name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $order->website_type }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full shadow transition-all
                                                    @if($order->status === 'completed') bg-gradient-to-r from-green-400 to-emerald-500 text-white
                                                    @elseif($order->status === 'in_progress') bg-gradient-to-r from-blue-400 to-indigo-500 text-white
                                                    @else bg-gradient-to-r from-yellow-400 to-orange-400 text-white
                                                    @endif">
                                                    {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $order->deadline->format('d/m/Y') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" x-data="{ showModal: false }">
                                                <a href="{{ route('orders.show', $order) }}"
                                                    class="inline-flex items-center gap-1 text-indigo-600 dark:text-indigo-300 hover:text-indigo-900 dark:hover:text-indigo-400 font-semibold transition-colors">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    Detail
                                                </a>
                                                @if($order->status === 'pending')
                                                    <button type="button" @click="showModal = true"
                                                        class="ml-3 inline-flex items-center gap-1 text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300 font-semibold transition-colors">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M10 3h4a1 1 0 011 1v2H9V4a1 1 0 011-1z" />
                                                        </svg>
                                                        Hapus
                                                    </button>
                                                    <div x-show="showModal" style="display: none;" class="fixed inset-0 flex items-center justify-center z-50">
                                                        <div class="fixed inset-0 bg-black opacity-50"></div>
                                                        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl p-8 z-10 w-full max-w-md animate-fade-in">
                                                            <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">Konfirmasi Hapus</h3>
                                                            <p class="text-gray-700 dark:text-gray-300 mb-6">Apakah anda yakin ingin menghapus pesanan?</p>
                                                            <div class="flex justify-end gap-2">
                                                                <button @click="showModal = false" type="button"
                                                                    class="px-4 py-2 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-100 hover:bg-gray-300 dark:hover:bg-gray-600 font-semibold">Batal</button>
                                                                <form action="{{ route('orders.destroy', $order) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700 font-semibold">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
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