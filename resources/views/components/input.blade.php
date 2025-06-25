@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block mt-1 w-full rounded-lg border border-blue-200 dark:border-gray-700 focus:ring-2 focus:ring-blue-400 focus:outline-none focus:border-blue-400 dark:bg-gray-800 dark:text-gray-100 transition-shadow shadow-sm']) !!}>