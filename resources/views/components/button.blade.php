@props(['variant' => 'primary', 'type' => 'button'])

@php
$baseClasses = 'inline-flex items-center px-4 py-2 border rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2';

$variantClasses = match($variant) {
    'primary' => 'bg-indigo-600 text-white border-transparent hover:bg-indigo-700 active:bg-indigo-800 focus:ring-indigo-500',
    'secondary' => 'bg-white text-gray-700 border-gray-300 shadow-sm hover:bg-gray-50 active:bg-gray-100 focus:ring-indigo-500',
    'danger' => 'bg-red-600 text-white border-transparent hover:bg-red-700 active:bg-red-800 focus:ring-red-500',
    'success' => 'bg-green-600 text-white border-transparent hover:bg-green-700 active:bg-green-800 focus:ring-green-500',
    'warning' => 'bg-yellow-600 text-white border-transparent hover:bg-yellow-700 active:bg-yellow-800 focus:ring-yellow-500',
    'dark' => 'bg-gray-800 text-white border-transparent hover:bg-gray-700 active:bg-gray-900 focus:ring-gray-500',
    'light' => 'bg-gray-300 text-gray-700 border-transparent hover:bg-gray-400 active:bg-gray-500 focus:ring-gray-400',
    default => 'bg-indigo-600 text-white border-transparent hover:bg-indigo-700 active:bg-indigo-800 focus:ring-indigo-500',
};

$classes = $baseClasses . ' ' . $variantClasses;
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
    {{ $slot }}
</button>

