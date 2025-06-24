<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight bg-white dark:bg-gray-800 p-4 rounded-t-2xl shadow-md">
            {{ __('Pesanan Saya') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-white dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('orders.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Buat Pesanan Baru
                </a>
            </div>

            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    @if($orders->isEmpty())
                        <p class="text-gray-500 dark:text-gray-300 text-center">Anda belum memiliki pesanan.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Website</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Tipe</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Status</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Deadline</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach($orders as $order)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                                                {{ $order->website_name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                                                {{ $order->website_type }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                        @if($order->status === 'completed') bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-300
                                                        @elseif($order->status === 'in_progress') bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300
                                                        @else bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-300
                                                      @endif">
                                                    {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                                                {{ $order->deadline->format('d/m/Y') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"
                                                x-data="{ showModal: false }">
                                                <a href="{{ route('orders.show', $order) }}"
                                                    class="text-blue-600 dark:text-blue-300 hover:text-blue-900 dark:hover:text-blue-400 mr-3 inline-flex items-center">
                                                    <!-- Detail Icon -->
                                                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    Detail
                                                </a>
                                                @if($order->status === 'pending')
                                                    <!-- Modal Trigger -->
                                                    <button type="button" @click="showModal = true"
                                                        class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300 inline-flex items-center">
                                                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M10 3h4a1 1 0 011 1v2H9V4a1 1 0 011-1z" />
                                                        </svg>
                                                        Hapus
                                                    </button>
                                                    <!-- Modal -->
                                                    <div x-show="showModal" style="display: none;"
                                                        class="fixed inset-0 flex items-center justify-center z-50">
                                                        <div class="fixed inset-0 bg-black opacity-50"></div>
                                                        <div
                                                            class="bg-white dark:bg-gray-900 rounded-lg shadow-lg p-6 z-10 w-full max-w-md">
                                                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">
                                                                Konfirmasi Hapus</h3>
                                                            <p class="text-gray-700 dark:text-gray-300 mb-6">Apakah anda yakin ingin
                                                                menghapus pesanan?</p>
                                                            <div class="flex justify-end gap-2">
                                                                <button @click="showModal = false" type="button"
                                                                    class="px-4 py-2 rounded bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-100 hover:bg-gray-300 dark:hover:bg-gray-600">Batal</button>
                                                                <form action="{{ route('orders.destroy', $order) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="px-4 py-2 rounded bg-red-600 text-white hover:bg-red-700">Hapus</button>
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
</x-app-layout>