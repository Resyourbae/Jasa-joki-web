<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-md transition duration-200 dark:bg-indigo-700 dark:hover:bg-indigo-800"']) }}>
    {{ $slot }}
</button>