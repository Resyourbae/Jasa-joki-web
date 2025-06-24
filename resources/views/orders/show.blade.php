<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight bg-white dark:bg-gray-800 p-4 rounded-t-2xl shadow-md">
            {{ __('Detail Pesanan') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-white dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Informasi Pesanan</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-300">Nama Website</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100">{{ $order->website_name }}</p>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-300">Tipe Website</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100">
                                        {{ ucfirst(str_replace('_', ' ', $order->website_type)) }}
                                    </p>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-300">Status</h4>
                                    <p class="mt-1">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                            @if($order->status === 'completed') bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-300
                                            @elseif($order->status === 'in_progress') bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300
                                                @else bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-300
                                            @endif">
                                            {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Detail Proyek</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-300">Fitur yang
                                        Diinginkan</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100 whitespace-pre-line">
                                        {{ $order->desired_features }}
                                    </p>
                                </div>
                                @if($order->design_reference)
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-300">Referensi Desain
                                        </h4>
                                        <a href="{{ $order->design_reference }}" target="_blank"
                                            class="mt-1 text-blue-600 dark:text-blue-300 hover:text-blue-900 dark:hover:text-blue-400">{{ $order->design_reference }}</a>
                                    </div>
                                @endif
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-300">Budget</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100">Rp
                                        {{ number_format($order->budget, 0, ',', '.') }}
                                    </p>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-300">Deadline</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100">
                                        {{ $order->deadline->format('d/m/Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($order->additional_file)
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">File Tambahan</h3>
                            <a href="{{ Storage::url($order->additional_file) }}" target="_blank"
                                class="text-blue-600 dark:text-blue-300 hover:text-blue-900 dark:hover:text-blue-400">
                                Download File
                            </a>
                        </div>
                    @endif

                    <div class="mt-8">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Hubungi Admin</h3>
                        <a href="https://wa.me/+6282114028613" target="_blank"
                            class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-bold rounded-md">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824z" />
                            </svg>
                            Hubungi via WhatsApp
                        </a>
                    </div>

                    <div class="mt-8 flex justify-between">
                        <a href="{{ route('orders.index') }}"
                            class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">
                            ← Kembali ke Daftar Pesanan
                        </a>
                        @if($order->status === 'pending')
                            <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300"
                                    onclick="return confirm('Yakin ingin menghapus pesanan ini?')">
                                    Hapus Pesanan
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>