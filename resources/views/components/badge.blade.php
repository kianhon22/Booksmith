@props(['color' => 'gray'])

@php
$classes = match($color) {
    'green' => 'bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-300',
    'red' => 'bg-red-100 text-red-800 dark:bg-red-900/50 dark:text-red-300',
    'yellow' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/50 dark:text-yellow-300',
    'blue' => 'bg-blue-100 text-blue-800 dark:bg-blue-900/50 dark:text-blue-300',
    'purple' => 'bg-purple-100 text-purple-800 dark:bg-purple-900/50 dark:text-purple-300',
    'indigo' => 'bg-indigo-100 text-indigo-800 dark:bg-indigo-900/50 dark:text-indigo-300',
    default => 'bg-gray-100 text-gray-800 dark:bg-gray-900/50 dark:text-gray-300',
};
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ' . $classes]) }}>
    {{ $slot }}
</span>

