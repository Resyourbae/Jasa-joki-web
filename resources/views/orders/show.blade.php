<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-gray-800 dark:text-gray-100 leading-tight p-6 rounded-t-2xl shadow-md border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
            {{ __('Detail Pesanan') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-xl rounded-2xl animate-fade-in">
                <div class="p-8">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-8 gap-4">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 flex items-center gap-2">
                            Detail Pesanan
                            <span class="ml-2 text-base font-normal text-gray-400 dark:text-gray-500">#{{ $order->id }}</span>
                        </h2>
                        @if($order->status === 'pending')
                            <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center gap-1 px-4 py-2 border border-red-500 text-red-600 dark:text-red-400 hover:bg-red-100 dark:hover:bg-red-900 hover:text-red-900 dark:hover:text-red-300 font-semibold rounded-lg transition text-sm"
                                    onclick="return confirm('Yakin ingin menghapus pesanan ini?')">
                                    <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 18L18 6M6 6l12 12' />
                                    </svg>
                                    Hapus Pesanan
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">Informasi Pesanan</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Nama Website</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100 font-semibold">{{ $order->website_name }}</p>
                                </div>
                                <div>
                                    <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Tipe Website</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100">{{ ucfirst(str_replace('_', ' ', $order->website_type)) }}</p>
                                </div>
                                <div>
                                    <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</h4>
                                    <span class="mt-1 px-3 py-1 inline-flex text-xs font-bold rounded-full border shadow-sm
                                        @if($order->status === 'completed') bg-green-100 text-green-800 border-green-300
                                        @elseif($order->status === 'in_progress') bg-blue-100 text-blue-800 border-blue-300
                                        @else bg-yellow-100 text-yellow-800 border-yellow-300
                                        @endif">
                                        {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">Detail Proyek</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Fitur yang Diinginkan</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100 whitespace-pre-line">{{ $order->desired_features }}</p>
                                </div>
                                @if($order->design_reference)
                                    <div>
                                        <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Referensi Desain</h4>
                                        <a href="{{ $order->design_reference }}" target="_blank"
                                            class="mt-1 text-blue-600 dark:text-blue-300 hover:underline break-all">{{ $order->design_reference }}</a>
                                    </div>
                                @endif
                                <div>
                                    <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Budget</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100 font-semibold">Rp {{ number_format($order->budget, 0, ',', '.') }}</p>
                                </div>
                                <div>
                                    <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Deadline</h4>
                                    <p class="mt-1 text-gray-900 dark:text-gray-100">{{ $order->deadline->format('d/m/Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($order->additional_file)
                        <div class="mt-10">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">File Tambahan</h3>
                            <a href="{{ Storage::url($order->additional_file) }}" target="_blank"
                                class="inline-block px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-100 rounded-lg font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transition">Download File</a>
                        </div>
                    @endif

                    <div class="mt-10">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">Hubungi Admin</h3>
                        <a href="https://wa.me/+6282114028613" target="_blank"
                            class="inline-flex items-center px-5 py-2 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg shadow transition">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824z" />
                            </svg>
                            Hubungi via WhatsApp
                        </a>
                    </div>

                    <div class="mt-10 flex flex-col md:flex-row md:justify-between items-start md:items-center gap-4">
                        <a href="{{ route('orders.index') }}"
                            class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 font-semibold transition">← Kembali ke Daftar Pesanan</a>
                        @if($order->status === 'pending')
                            <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline md:hidden">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center gap-1 px-4 py-2 border border-red-500 text-red-600 dark:text-red-400 hover:bg-red-100 dark:hover:bg-red-900 hover:text-red-900 dark:hover:text-red-300 font-semibold rounded-lg transition"
                                    onclick="return confirm('Yakin ingin menghapus pesanan ini?')">
                                    <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 18L18 6M6 6l12 12' />
                                    </svg>
                                    Hapus Pesanan
                                </button>
                            </form>
                        @endif
                    </div>
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
    </style>
</x-app-layout>