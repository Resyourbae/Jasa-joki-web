<div class="p-6 rounded shadow border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 transition-colors">
    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-100 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 dark:text-primary-400" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
        </svg>
        Pesanan Terbaru
    </h2>
    <ul>
        @forelse($orders as $order)
            <li
                class="mb-3 p-3 rounded bg-gray-50 dark:bg-gray-800 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <span class="font-semibold text-gray-700 dark:text-gray-200">{{ $order->user->name ?? '-' }}</span>
                    <span class="mx-2 text-xs text-gray-400">•</span>
                    <span class="text-sm text-gray-600 dark:text-gray-300">{{ $order->website_name }}</span>
                </div>
                <div class="flex items-center gap-2 mt-2 md:mt-0">
                    <span class="px-2 py-1 rounded text-xs font-semibold {{
            $order->status === 'pending' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200' :
            ($order->status === 'in_progress' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' :
                'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200')
                        }}">
                        {{ __(ucwords(str_replace('_', ' ', $order->status))) }}
                    </span>
                    <span class="text-xs text-gray-400">{{ $order->created_at->format('d M Y H:i') }}</span>
                </div>
            </li>
        @empty
            <li class="text-gray-400 text-sm">Belum ada pesanan.</li>
        @endforelse
    </ul>
</div>