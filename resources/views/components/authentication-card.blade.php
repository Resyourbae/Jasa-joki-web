<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-white via-gray-100 to-gray-300 dark:from-gray-800 dark:via-gray-700 dark:to-gray-600 py-8 px-4">
    <div>
        {{ $logo }}
    </div>
    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 dark:bg-gray-900 dark:shadow-black">
        {{ $slot }}
    </div>
</div>